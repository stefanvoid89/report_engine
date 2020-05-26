require("./bootstrap");
import Report from "./print";

window.addEventListener("load", function () {
    console.log("All assets are loaded");

    let report = new Report(data);
    window.report = report;
    report.showmessage();
    // report.mount_page();
    report.render_report();
});
