  // Toggle mobile menu
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
  });

// slider
  const sliders = document.querySelectorAll('.slider');

sliders.forEach((slider) => {
  const sliderContent = slider.querySelector('.slider-content');
  let scrollPosition = 0;

  slider.addEventListener('wheel', (event) => {
    event.preventDefault();
    scrollPosition += event.deltaY;
    sliderContent.style.transform = `translateY(${scrollPosition}px)`;
  });
  
});
//  faq
function toggleAccordion(id) {
  const content = document.getElementById(id);
  const icon = document.getElementById(id + '-icon');
  content.classList.toggle('hidden');
  icon.classList.toggle('rotate-180');
}

// scroll
function scrollToNextSection() {
  document.getElementById('next-section').scrollIntoView({
      behavior: 'smooth'
  });
}