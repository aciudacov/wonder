var currentModal;
function openModal(modal_id){
    currentModal = document.getElementById(modal_id+'_m');
    if (currentModal != null)
    {
        window.removeEventListener(mousewheelEvent, throttled, false);
        currentModal.style.display = "block";
    }
}
function closeModal(object){
    currentModal.style.display = "none";
    window.addEventListener(mousewheelEvent, throttled, false);
}
window.onclick = function(event) {
    if (event.target == currentModal) {
        currentModal.style.display = "none";
        window.addEventListener(mousewheelEvent, throttled, false);
    }
}
function openCatalog(modal_id, catalog_link){
    window.removeEventListener(mousewheelEvent, throttled, false);
    currentModal = document.getElementById(modal_id+'_m');
    top.document.getElementById('catalog_frame').setAttribute("src", "./catalog.html?category="+catalog_link);
    currentModal.style.display = "block";
}