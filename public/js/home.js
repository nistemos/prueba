const btnOpen = document.getElementById('btn-open');
const contentBtnOpen = document.getElementById('content-btn-open');
const contentOpen = document.getElementById('content-open');

btnOpen.addEventListener('click', function isOpen() {
    contentBtnOpen.classList.replace('d-grid', 'd-none');
    contentOpen.classList.replace('d-none', 'd-block');
})
