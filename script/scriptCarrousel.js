const envoi = document.getElementById('btn');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const carrousel = document.querySelector('.carrousel');
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function showSlide(index) {
    carrousel.style.transform = `translateX(-${index * 100}%)`;
    currentIndex = index;
}

prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
    showSlide(currentIndex);
});

nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
    showSlide(currentIndex);
});

showSlide(currentIndex);