const btnPopups = document.querySelectorAll('.btnPopup');
btnPopups.forEach(function (elem) {


    elem.addEventListener('click', function (event) {
        const overlay = event.target.getAttribute('data-overlay');
        console.log(overlay);
        document.getElementById(overlay).style.display = 'block';


    })
})

const btnCloses = document.querySelectorAll('.btnClose');
btnCloses.forEach(function (elem) {
    elem.addEventListener('click', function (event) {
        const overlay = event.target.closest('.overlay');
        overlay.style.display = 'none';

    })
})


// const overlays = document.querySelectorAll('.overlay');
// overlays.forEach(function (elem) {
//     elem.addEventListener('click', function (event) {
//         event.target.style.display = 'none';

//     })
// })