window._ = require("lodash");
window.$ = window.jQuery = require("jquery");
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Report from "./report";

window.addEventListener("load", function() {
    var renaultLifeFont = new FontFace(
        "RenaultLife",
        "url(/fonts/RenaultLife.ttf)",
        {
            style: "normal",
            weight: "400"
        }
    );

    var renaultLifeBoldFont = new FontFace(
        "RenaultLife-Bold",
        "url(/fonts/RenaultLife-Bold.ttf)",
        {
            style: "normal",
            weight: "400"
        }
    );

    document.fonts.add(renaultLifeFont);
    document.fonts.add(renaultLifeBoldFont);
    renaultLifeFont.load();
    renaultLifeBoldFont.load();

    document.fonts.ready.then(function() {
        console.log("_______________POCETAK______________________");

        let report = new Report(data);
        window.report = report;
        //   report.get_page_height();
        //report.mount_page();
        report.render_report();
    });
});
