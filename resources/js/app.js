import './bootstrap';

const ulHead = document.getElementById('ul_head');

window.addEventListener('resize', function (e) {

    //console.log(window.innerWidth);
    if (this.window.innerWidth <= 900) {
        ulHead.classList.add('d-none');
    }
    else {
        if (ulHead.classList.contains('d-none')) {
            ulHead.classList.remove('d-none');
        }
    }

});