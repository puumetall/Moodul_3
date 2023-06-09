

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}



window.addEventListener("scroll", reveal);

// Wait for the page to load
document.addEventListener('DOMContentLoaded', function() {
  // Get all the counter elements
  const counters = document.querySelectorAll('.js-count');

  // Function to animate the counters
  function animateCounters() {
    let currentIndex = 0;

    function incrementCounter() {
      const counter = counters[currentIndex];
      const target = parseFloat(counter.getAttribute('data-target'));
      const increment = target / 100;

      let currentCount = 0;

      const interval = setInterval(() => {
        currentCount += increment;

        if (currentCount >= target || currentCount.toFixed(1) >= target) {
          clearInterval(interval);
          counter.classList.remove('hidden');
          currentIndex++;
          if (currentIndex < counters.length) {
            incrementCounter();
          }
        }

        if (currentCount % 1 === 0) {
          counter.textContent = Math.floor(currentCount);
        } else {
          counter.textContent = currentCount.toFixed(1).replace('.0', '');
        }
      }, 9);
    }

    // Trigger the counter animation for the first counter
    incrementCounter();
  }

  // Function to reveal the h5 element with a fade effect
  function revealH5Elements() {
    const h5Elements = document.querySelectorAll('.js-count + h5');
    h5Elements.forEach((h5Element, index) => {
      setTimeout(() => {
        h5Element.classList.remove('hidden');
      }, (index + 1) * 900);
    });
  }

  // Trigger the overall counter animation
  animateCounters();

  // Trigger the h5 reveal animation
  revealH5Elements();
});

window.addEventListener('DOMContentLoaded', function() {
  const section2 = document.querySelector('.about');
  const section4 = document.querySelector('.missionlog');
  const verticalLine = document.querySelector('.vertical-line');

  function updateVerticalLinePosition() {
    const section2Top = section2.offsetTop;
    const section4Top = section4.offsetTop;
    const section4Height = section4.offsetHeight;

    const verticalLineHeight = section4Top + section4Height - section2Top;

    if (window.innerWidth <= 600) {
      verticalLine.style.display = 'none'; // Hide the vertical line on smaller screens
    } else {
      verticalLine.style.display = 'block'; // Show the vertical line on larger screens
      verticalLine.style.height = verticalLineHeight + 'px';
      verticalLine.style.top = section2Top + 'px';
    }
  }

  window.addEventListener('resize', updateVerticalLinePosition);
  updateVerticalLinePosition();
});


const text = baffle('.data');
text.set({
  characters : '0cebn010101898010cebhcbe000010icbwebicwih1░▒░ ░██░> ████▓ >█> ░/█>█ ██░░ █<▒ ▓██░ ░/░▒',
  speed: 120,
});
text.start();
text.reveal(4000);

