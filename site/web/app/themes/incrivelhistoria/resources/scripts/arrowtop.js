const scrollToTopButton = document.getElementById('scroll-to-top');

window.addEventListener('scroll', () => {
   if (window.pageYOffset > 0) {
      scrollToTopButton.style.opacity = 0.5;
   } else {
      scrollToTopButton.style.opacity = 0;
   }
});

scrollToTopButton.addEventListener('click', () => {
   window.scrollTo({ top: 0, behavior: 'smooth' });
});