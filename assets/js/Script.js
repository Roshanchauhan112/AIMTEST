const bar = document.getElementById("bar");
const nav = document.getElementById("navbar");
const close = document.getElementById("close");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

let flag = 0;

function controller(x) {
  flag += x;
  slideshow(flag);
}

function slideshow(num) {
  let slides = document.getElementsByClassName("slide");

  if (num >= slides.length) {
    flag = 0;
  }

  if (num < 0) {
    flag = slides.length - 1;
  }

  for (let y of slides) {
    y.style.display = "none";
  }

  slides[flag].style.display = "block";
}

// Call slideshow initially
slideshow(flag);

// Auto-slide every 3 seconds
setInterval(() => {
  flag++;
  slideshow(flag);
}, 3000);

let isExpanded = false;
const cards = document.querySelectorAll(".category-card");
const button = document.getElementById("toggleBtn");

button.addEventListener("click", function () {
  if (isExpanded) {
    cards.forEach((card, index) => {
      if (index >= 3) card.style.display = "none"; // Hide extra cards
    });
    button.textContent = "Show More";
  } else {
    cards.forEach((card) => (card.style.display = "block")); // Show all cards
    button.textContent = "Show Less";
  }
  isExpanded = !isExpanded;
});

// JavaScript to handle "Show More" and "Show Less" buttons
const showMoreButton = document.querySelector(".show-more-button");
const showLessButton = document.querySelector(".show-less-button");
const hiddenCards = document.querySelectorAll(".card.hidden");

showMoreButton.addEventListener("click", () => {
  hiddenCards.forEach((card) => {
    card.classList.remove("hidden");
  });
  showMoreButton.style.display = "none"; // Hide "Show More" button
  showLessButton.style.display = "block"; // Show "Show Less" button
});

showLessButton.addEventListener("click", () => {
  hiddenCards.forEach((card) => {
    card.classList.add("hidden");
  });
  showMoreButton.style.display = "block"; // Show "Show More" button
  showLessButton.style.display = "none"; // Hide "Show Less" button
});
