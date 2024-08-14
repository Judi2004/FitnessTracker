let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
});

/*Library*/

function showExercises(category) {
    // Hide all exercise containers
    var exerciseContainers = document.querySelectorAll('.exercise-container');
    exerciseContainers.forEach(function(container) {
        container.classList.remove('active');
    });

    // Show the selected category's container
    document.getElementById(category).classList.add('active');
}