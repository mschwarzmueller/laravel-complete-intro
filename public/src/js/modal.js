function modalOpen(event) {
    event.preventDefault();
    var background = document.createElement('div');
    background.className = 'modal-background';
    var width = window.innerWidth;
    var height = window.innerHeight;
    background.style.width = width;
    background.style.height = height;
    document.body.appendChild(background);

    var modal = document.getElementsByClassName('modal')[0];
    modal.style.display = "block";
    setTimeout(function() {
        modal.style.top = height / 2 - modal.offsetHeight / 2 + "px";
    }, 10);
}

function modalClose(event) {
    event.preventDefault();
    var modal = document.getElementsByClassName('modal')[0];
    while (modal.firstElementChild.tagName !== 'BUTTON') {
        modal.firstElementChild.remove();
    }
    modal.style.top = "10%";
    modal.style.display = "none";
    var background = document.getElementsByClassName('modal-background')[0];
    background.remove();
}