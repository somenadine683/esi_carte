
import jspdf from "jspdf";


var carte = document.getElementById("carte-main");
var button = document.getElementById("btn-pdf")
function clear() {
        var doc = new jspdf("l", "px", "a4");
        doc.html(carte, {
            callback: function (doc) {
                doc.save("carte.pdf");
            },
        })
        
}
button.addEventListener("click",clear)