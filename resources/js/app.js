import './bootstrap';

const ulHead = document.getElementById('ul_head');
const barsHead = document.getElementById('bars_hide_head');
const menuHideHead = document.getElementById('menu_hide_head');

//console.log(ulHead, barsHead, menuHideHead);

window.addEventListener('resize', function (e) {

    console.log(window.innerWidth);
    if (this.window.innerWidth <= 900) {
        ulHead.classList.add('d-none');
        barsHead.classList.remove('d-none');
    }
    else {
        if (ulHead.classList.contains('d-none')) {
            ulHead.classList.remove('d-none');
        }

        // if (!barsHead.classList.contains('d-none')) {
        //     barsHead.classList.add('d-none');
        // }
    }

});


// barsHead.addEventListener('click', function (e) {

//     console.log(e);
//     menuHideHead.classList.remove('d-none');

// });