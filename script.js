// const dropdownToggle = document.getElementById('serviceToggle');
// const dropdownList = document.getElementById('service');

// dropdownToggle.onclick = function(){
//     dropdownList.classList.toggle('openMenu')
// }

// // document.onclick = function(){
// //     dropdownList.classList.remove('openMenu')
// // }



document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggle = document.getElementById('serviceToggle');
    const dropdownList = document.getElementById('service');

    dropdownToggle.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevents the document click event from triggering
        dropdownList.classList.toggle('openMenu');
    });

    document.addEventListener('click', function() {
        dropdownList.classList.remove('openMenu');
    });
});