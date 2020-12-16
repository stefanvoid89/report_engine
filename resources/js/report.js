function Report(data) {
    let dom_parser = new DOMParser();
    this.page = dom_parser.parseFromString(
        data.page,
        "text/html"
    ).body.firstChild;


    this.nodes = []
    data.nodes.forEach(
        node => { this.nodes.push(...dom_parser.parseFromString(node, "text/html").body.children) }
    );

    this.config = data.config;

    this.elements = [];

    this.page_height = this.get_page_height();
}

Report.prototype.get_page_height = function () {
    var base_element = this.page;
    var element = base_element.cloneNode(true);
    var dom_element = document.body.appendChild(element);
    var style = window.getComputedStyle(dom_element, null);
    var height = Math.floor(parseFloat(style.getPropertyValue("height"))); // dom_element.clientHeight;

    console.log(
        "___________________DIMENZIJE STRANE_____________________________"
    );

    console.log("visina strane " + height);

    var padding =
        Math.ceil(parseFloat(style.getPropertyValue("padding-top"))) +
        Math.ceil(parseFloat(style.getPropertyValue("padding-bottom")));

    console.log("padding strane " + padding);

    height -= padding;

    var header = document.querySelector("#header");

    var header_height = document
        .querySelector("#header")
        .getBoundingClientRect().height;

    console.log("header height pre margina " + header_height);

    let header_margina_top = parseInt(
        window.getComputedStyle(header).getPropertyValue("margin-top")
    );

    console.log("header margina top " + header_margina_top);
    header_height += header_margina_top;

    let header_margina_bottom = parseInt(
        window.getComputedStyle(header).getPropertyValue("margin-bottom")
    );

    console.log("header margina bottom " + header_margina_bottom);

    header_height += header_margina_bottom;

    var footer = dom_element.querySelector("#footer");
    var footer_height = document
        .querySelector("#footer")
        .getBoundingClientRect().height;

    console.log("footer " + footer_height);

    let footer_margin_top = parseInt(
        window.getComputedStyle(footer).getPropertyValue("margin-top")
    );

    console.log("footer margin top " + footer_margin_top);

    footer_height += footer_margin_top;

    let footer_margin_bottom = parseInt(
        window.getComputedStyle(footer).getPropertyValue("margin-bottom")
    );

    console.log("footer margin bottom " + footer_margin_bottom);

    footer_height += footer_margin_bottom;

    height = height - header_height - footer_height;

    console.log("final height is ", height);

    console.log(
        "______________________________________________________________"
    );
    // console.log(document.querySelector("#header").getBoundingClientRect());
    // console.log(document.querySelector("#footer").getBoundingClientRect());

    document.body.removeChild(dom_element);

    return height;
};

Report.prototype.showmessage = function () {
    console.log(this);
};

Report.prototype.get_element_height = function (id) {
    var base_element = this.nodes[id];
    var element = base_element.cloneNode(true);

    var page_for_measure = this.page.cloneNode(true);
    document.body.appendChild(page_for_measure);
    var content_node_for_measure = page_for_measure.querySelector("#content");

    var dom_element = content_node_for_measure.appendChild(element);

    var height = dom_element.offsetHeight;

    height += parseInt(
        window.getComputedStyle(dom_element).getPropertyValue("margin-top")
    );
    height += parseInt(
        window.getComputedStyle(dom_element).getPropertyValue("margin-bottom")
    );
    //   document.body.removeChild(dom_element);
    document.body.removeChild(page_for_measure);
    return height;
};

Report.prototype.test = function (id) {
    var base_element = this.nodes[id];
    var element = base_element.cloneNode(true);

    var page_for_measure = this.page_content.cloneNode(true);
    document.body.appendChild(page_for_measure);
    var content_node_for_measure = page_for_measure.querySelector("#content");

    var dom_element = content_node_for_measure.appendChild(element);

    var top = window
        .getComputedStyle(dom_element)
        .getPropertyValue("margin-top");
    var bottom = window
        .getComputedStyle(dom_element)
        .getPropertyValue("margin-bottom");
    //   console.log("margine height", top);
    //   console.log("margine height", bottom);

    // var dom_element = document.body.appendChild(element);
    var height = dom_element.offsetHeight;

    height += parseInt(
        window.getComputedStyle(dom_element).getPropertyValue("margin-top")
    );
    height += parseInt(
        window.getComputedStyle(dom_element).getPropertyValue("margin-bottom")
    );

    var height_from_loop = Array.from(element.rows)
        .map((row, map_index) => {
            return row.offsetHeight;
        })
        .reduce((a, b) => a + b, 0);
    return height;
};

Report.prototype.parse_nodes = function () {
    let remained_page_height = this.page_height;
    let page_counter = 1;
    let elements = [];

    // prvi deo punjenje arraya elements koji se posle renderuje na page-ove

    console.log(
        "___________________DIMENZIJE NODOVA_____________________________"
    );

    for (let index = 0; index < this.nodes.length; index++) {
        let node_height = this.get_element_height(index);

        console.log(
            `Node no. ${index + 1} od ${this.nodes.length
            } nodova je visina ${node_height}`
        );

        // svaki element je tabela sa klasom parent koja moze da bude renderovana iscela ili podeljena na vise strana u okvirima headera i footera
        let element = this.nodes[index].cloneNode(true);


        if (element.classList.contains("footer")) {
            if (remained_page_height > node_height) {
                let div = document.createElement("div");
                div.style.height = remained_page_height - node_height + "px";
                div.style.width = "100%";

                // element.style.marginTop =remained_page_height - node_height + "px";

                elements.push({
                    node: div,
                    page: page_counter
                });

                elements.push({
                    node: element,
                    page: page_counter
                });
                page_counter++;
                remained_page_height = this.page_height;
            } else {
                let div = document.createElement("div");
                div.style.height = this.page_height - node_height + "px";
                div.style.width = "100%";
                // element.style.marginTop = this.page_height - node_height + "px";
                page_counter++;
                elements.push({
                    node: div,
                    page: page_counter
                });
                elements.push({
                    node: element,
                    page: page_counter
                });
                page_counter++;
                remained_page_height = this.page_height;
            }
        } else if (element.classList.contains("whole_page")) {
            let tr = document.createElement("tr");
            let td = document.createElement("td");
            let td2 = document.createElement("td");
            td.style.height = remained_page_height - node_height + "px";
            tr.appendChild(td);
            tr.appendChild(td2);
            element.tBodies[0].appendChild(tr);

            // let height = this.page_height - 10;
            // element.style.height = height + "px";
            elements.push({
                node: element,
                page: page_counter
            });
            page_counter++;
        } else {
            if (remained_page_height > node_height) {
                elements.push({
                    node: element,
                    page: page_counter
                });
                remained_page_height -= node_height;
            } else {

                window._node = element;
                console.log(
                    `   Node ima vecu visinu od strane - deljenje`
                );

                var _element = element.cloneNode(true);
                let elementForPush = element.cloneNode(true);
    
                elementForPush.removeChild(elementForPush.tBodies[0]);
                let tBody = document.createElement("tBody");
                elementForPush.appendChild(tBody);



                // page_for_measure sluzi za pakovanje contenta kako bi se videlo koliko mesta je ostalo na strani


                var pageElementForPush = this.page.cloneNode(true);
                document.body.appendChild(pageElementForPush);

 

                    var elementForPushDOM = pageElementForPush
                    .querySelector("#content")
                    .appendChild(elementForPush.cloneNode(true));

    

                for (var i = 0; i <=_element.tBodies[0].rows.length - 1; i++) {
                                
                    var row = _element.tBodies[0].rows[i].cloneNode(true);
                    let child = elementForPushDOM.tBodies[0].appendChild(row) 
                    var elementForPushHeight = elementForPushDOM.offsetHeight;


                    if (elementForPushHeight > remained_page_height){
                        if((elementForPushHeight > remained_page_height) && (i == 0)){
                                page_counter++;
                                elements.push({
                                    node: elementForPushDOM.cloneNode(true),
                                    page: page_counter
                                });
                                remained_page_height = this.page_height;
                                elementForPushDOM.removeChild(elementForPushDOM.tBodies[0]);
                                let tBody = document.createElement("tBody");
                                elementForPushDOM.appendChild(tBody);
                                continue;
                            }

                            elementForPushDOM.tBodies[0].removeChild(child);
                            elements.push({
                                node: elementForPushDOM.cloneNode(true),
                                page: page_counter
                            });
                            i--;
                            page_counter++;
                            remained_page_height = this.page_height;

                            
                        elementForPushDOM.removeChild(elementForPushDOM.tBodies[0]);
                        let tBody = document.createElement("tBody");
                        elementForPushDOM.appendChild(tBody);
                            continue;
                    }


                    if (i == (_element.tBodies[0].rows.length - 1) ) {
        
                        elements.push({
                            node: elementForPushDOM.cloneNode(true),
                            page: page_counter
                        });

                        remained_page_height = this.page_height - elementForPushDOM.offsetHeight
      
                        }

          

                
                }
                document.body.removeChild(pageElementForPush);
                

            }
        }
    }
    console.log(
        "______________________________________________________________"
    );
    this.elements = elements;
};

Report.prototype.mount_nodes = function () {
    //drugi deo renderovanje nodova

    //var uveden zbog footer reda
    var page_count = this.elements
        .map(el => el.page)
        .reduce((a, b) => Math.max(a, b));

    for (var i = 1; i <= page_count; i++) {
        var _elements = this.elements.filter(element => element.page == i);
        let page = this.page.cloneNode(true);
        page.innerHTML = page.innerHTML.replace("#strana#", i);
        page.innerHTML = page.innerHTML.replace("#uk_strana#", page_count);
        var content_node = page.querySelector("#content");
        _elements.map(element => {
            // broj strane
            element.node.innerHTML = element.node.innerHTML.replace(
                "#strana#",
                i
            );
            content_node.style.height = this.page_height;
            content_node.appendChild(element.node);
        });
        document.body.appendChild(page);
    }
};

Report.prototype.render_report = function () {
    this.parse_nodes();
    this.mount_nodes();
};

Report.prototype.mount_page = function () {
    var page = this.page.cloneNode(true);
    document.body.appendChild(page);
};

export default Report;
