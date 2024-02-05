

let blur = document.getElementById('blur');
let popup = document.getElementById("popup");

function openPopup() {
  popup.classList.add("open-popup");
  blur.classList.add('active');
}
function closePopup() {
  popup.classList.remove("open-popup");
  
}
