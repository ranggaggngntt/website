document.addEventListener('DOMContentLoaded', function () {
    const preloadContainer = document.querySelector('.preload-container');
  
    preloadContainer.addEventListener('animationend', function () {
      preloadContainer.style.display = 'none';
    });
  
    gsap.to('.preload div', {
      width: 0,
      stagger: 0.2,
      delay: 0.5,
      duration: 1,
      ease: 'Expo.easeInOut',
      onComplete: function () {
        preloadContainer.remove();
      },
    });
  });
  