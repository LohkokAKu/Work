let startX = 0, startY = 0
const card = document.getElementById("card");
card.addEventListener("mousedown", mousedown);
function mousedown(e) {
startX = e.clientX;
startY = e.clientY;
document.addEventListener("mousemove", mousemove);
document.addEventListener("mouseup", mouseup);
}
function mousemove(e) {
const dx = e.clientX - startX;
const dy = e.clientY - startY;
startX = e.clientX;
startY = e.clientY;
card.style.top  = (card.offsetTop + dy) + "px";
card.style.left = (card.offsetLeft + dx) + "px";
}
function mouseup() {
  document.removeEventListener("mousemove", mousemove);
}
