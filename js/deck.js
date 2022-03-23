import { changeValue } from "./functions/functions.js";

var value_tracker_1 = document.getElementById("value_tracker_1").value;
var value_tracker_2 = document.getElementById("value_tracker_2").value;
const tracker_1 = document.getElementById("tracker_1");
const tracker_2 = document.getElementById("tracker_2");

console.log("Pruebas");
console.log("Valor inicial de la carta:", value_tracker_1);
console.log("Valor inicial del diagnostico:", value_tracker_2);
console.log(tracker_1);
console.log(tracker_2);

//tracker_1.onclick = changeValue(value_tracker_1, "tracker_1");

tracker_1.addEventListener("click", function() {changeValue(value_tracker_1, "tracker_1")});

tracker_2.addEventListener("click", function(){ changeValue(value_tracker_2, "tracker_2")});