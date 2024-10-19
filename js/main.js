(() => {
  console.log("IIFE Fired!");

  //This is for the video player
  const player = new Plyr("player");

  // This is to show my sidebar
  const navMenu = document.querySelector("#sidebar"),
    navToggle = document.querySelector("#nav-toggle"),
    navClose = document.querySelector("#nav-close");

  if (navToggle) {
    navToggle.addEventListener("click", () => {
      navMenu.classList.add("show-sidebar");
    });
  }
  if (navClose) {
    navClose.addEventListener("click", () => {
      navMenu.classList.remove("show-sidebar");
    });
  }

  // This is for my Filter button Active link
  const linkWork = document.querySelectorAll(".work__item");

  function activeWork() {
    linkWork.forEach((l) => l.classList.remove("active-work"));
    this.classList.add("active-work");
  }

  linkWork.forEach((l) => l.addEventListener("click", activeWork));

  // This is for my active link sections
  const sections = document.querySelectorAll("section[id]");

  window.addEventListener("scroll", navHighlighter);

  function navHighlighter() {
    let scrollY = window.scrollY;

    sections.forEach((current) => {
      const sectionHeight = current.offsetHeight;
      const sectionTop = current.offsetTop - 50,
        sectionId = current.getAttribute("id");

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        document
          .querySelector(".nav__menu a[href*=" + sectionId + "]")
          .classList.add("active-link");
      } else {
        document
          .querySelector(".nav__menu a[href*=" + sectionId + "]")
          .classList.remove("active-link");
      }
    });
  }

  // This is to populate the popup windero for my project content
  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("work__button")) {
      togglePortfolioPopup();
      portfolioItemDetails(e.target.parentElement);
    }
  });

  function togglePortfolioPopup() {
    document.querySelector(".portfolio__popup").classList.toggle("open");
  }

  document
    .querySelector(".portfolio__popup-close")
    .addEventListener("click", togglePortfolioPopup);

  function portfolioItemDetails(portfolioItem) {
    document.querySelector(".pp__thumbnail img").src =
      portfolioItem.querySelector(".work__img").src;
    document.querySelector(".portfolio__popup-subtitle span").innerHTML =
      portfolioItem.querySelector(".work__title").innerHTML;
    document.querySelector(".portfolio__popup-body").innerHTML =
      portfolioItem.querySelector(".portfolio__item-details").innerHTML;
  }

  // This is to show the scroll up button
  function scrollUp() {
    const scrollUp = document.querySelector("#scroll-up");

    if (this.scrollY >= 350) scrollUp.classList.add("show-scroll");
    else scrollUp.classList.remove("show-scroll");
  }
  window.addEventListener("scroll", scrollUp);
})();
