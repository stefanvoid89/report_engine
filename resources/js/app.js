window._ = require("lodash");
window.$ = window.jQuery = require("jquery");
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Report from "./report";

window.addEventListener("load", function() {
    console.log("_______________POCETAK______________________");

    let report = new Report(data);
    window.report = report;
    //   report.get_page_height();
    //report.mount_page();
    report.render_report();
});
