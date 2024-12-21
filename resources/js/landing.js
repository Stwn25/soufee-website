// LANDING PAGE

const plus1 = document.querySelector('#plus1');
const plus2 = document.querySelector('#plus2');
const plus3 = document.querySelector('#plus3');

const desc1 = document.querySelector('#desc1');
const desc2 = document.querySelector('#desc2');
const desc3 = document.querySelector('#desc3');

plus1.addEventListener('click', () => {
    if(desc1.style.display == 'none') {
        desc1.style.display = 'block';
        plus1.style.transform = 'rotate(45deg)';
        plus1.style.transition = '0.3s ease';
    }
    else {
        desc1.style.display = 'none';
        plus1.style.transform = 'rotate(0deg)';
        plus1.style.transition = '0.3s ease';
    }
});

plus2.addEventListener('click', () => {
    if(desc2.style.display == 'none') {
        desc2.style.display = 'block';
        plus2.style.transform = 'rotate(45deg)';
        plus2.style.transition = '0.3s ease';
    }
    else {
        desc2.style.display = 'none';
        plus2.style.transform = 'rotate(0deg)';
        plus2.style.transition = '0.3s ease';
    }
});

plus3.addEventListener('click', () => {
    if(desc3.style.display == 'none') {
        desc3.style.display = 'block';
        plus3.style.transform = 'rotate(45deg)';
        plus3.style.transition = '0.3s ease';
    }
    else {
        desc3.style.display = 'none';
        plus3.style.transform = 'rotate(0deg)';
        plus3.style.transition = '0.3s ease';
    }
});

