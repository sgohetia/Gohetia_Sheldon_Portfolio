(() => {
  console.log("IIFE Fired!");

  // --- This is for my feature to Get the current page URL button
  const shareButton = document.querySelector("[data-copy-url]");

  if (shareButton) {
    shareButton.addEventListener("click", copyToClipboard);
  }
  function copyToClipboard() {
    const pageUrl = window.location.href;
    navigator.clipboard
      .writeText(pageUrl)
      .then(() => {
        alert("URL copied to clipboard!");
      })
      .catch((err) => {
        console.error("Failed to copy:", err);
      });
  }

  // --- This is for my page loader,
  window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    if (loader && !localStorage.getItem("pageLoaded")) {
      console.log("page loaded!");

      setTimeout(() => {
        loader.classList.add("loader--hidden");

        loader.addEventListener("transitionend", () => {
          if (document.body.contains(loader)) {
            document.body.removeChild(loader);
          }
        });
      }, 4500);

      localStorage.setItem("pageLoaded", "true");
    } else if (loader) {
      loader.style.display = "none";
    }
  });

  // --- This is for the scrolling to specific sections
  gsap.registerPlugin(ScrollToPlugin);

  const navlinks = document.querySelectorAll("#main-header ul li a");
  // console.log(navlinks);
  function scrollLink(e) {
    // console.log("scroll link called");
    e.preventDefault();
    // console.log(e.currentTarget.hash);
    let selectedLink = e.currentTarget.hash;
    gsap.to(window, {
      duration: 1,
      scrollTo: { y: `${selectedLink}` },
    });
  }

  navlinks.forEach((link) => {
    link.addEventListener("click", scrollLink);
  });

  // --- Adding gsap animation for sections
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".home__social", {
    scrollTrigger: {
      trigger: ".home__social",
      toggleActions: "restart none restart none",
    },
    opacity: 0,
    duration: 5,
    ease: "power2.out",
  });
  gsap.from(".home__data", {
    scrollTrigger: {
      trigger: ".home__data",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  gsap.from(".my__info", {
    scrollTrigger: {
      trigger: ".my__info",
      toggleActions: "restart none restart none",
    },
    scale: 0.5,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".demo-reel", {
    scrollTrigger: {
      trigger: ".demo-reel",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  gsap.from(".about__heading", {
    scrollTrigger: {
      trigger: ".about__heading",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".about__description", {
    scrollTrigger: {
      trigger: ".about__description",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  gsap.from(".about__info", {
    scrollTrigger: {
      trigger: ".about__info",
      toggleActions: "restart none restart none",
    },
    scale: 0.5,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".skills__container", {
    scrollTrigger: {
      trigger: ".skills__container",
      toggleActions: "restart none restart none",
    },
    scale: 0.5,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".p-web", {
    scrollTrigger: {
      trigger: ".p-web",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".p-motion", {
    scrollTrigger: {
      trigger: ".p-motion",
      toggleActions: "restart none restart none",
    },
    scale: 0.5,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  gsap.from(".p-design", {
    scrollTrigger: {
      trigger: ".p-design",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".p-motion2", {
    scrollTrigger: {
      trigger: ".p-motion2",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
  });
  gsap.from(".p-backend", {
    scrollTrigger: {
      trigger: ".p-backend",
      toggleActions: "restart none restart none",
    },
    scale: 0.5,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".p-backend2", {
    scrollTrigger: {
      trigger: ".p-backend2",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  // gsap.from(".services__container", {
  //   scrollTrigger: {
  //     trigger: ".services__container",
  //     toggleActions: "restart none restart none",
  //   },
  //   scale: 0.5,
  //   opacity: 0,
  //   duration: 1,
  //   ease: "power2.out",
  // });
  gsap.from(".experience", {
    scrollTrigger: {
      trigger: ".experience",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".education", {
    scrollTrigger: {
      trigger: ".education",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".t-card1", {
    scrollTrigger: {
      trigger: ".t-card1",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".t-card2", {
    scrollTrigger: {
      trigger: ".t-card2",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".c-email", {
    scrollTrigger: {
      trigger: ".c-email",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  gsap.from(".c-whatsapp", {
    scrollTrigger: {
      trigger: ".c-whatsapp",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".c-msgr", {
    scrollTrigger: {
      trigger: ".c-msgr",
      toggleActions: "restart none restart none",
    },
    x: -100,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
  });
  gsap.from(".i-user", {
    scrollTrigger: {
      trigger: ".i-user",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  });
  gsap.from(".i-email", {
    scrollTrigger: {
      trigger: ".i-email",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
  });
  gsap.from(".i-phone", {
    scrollTrigger: {
      trigger: ".i-phone",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
  });
  gsap.from(".textarea", {
    scrollTrigger: {
      trigger: ".textarea",
      toggleActions: "restart none restart none",
    },
    x: 100,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
  });
  gsap.from(".i-btn", {
    scrollTrigger: {
      trigger: ".i-btn",
      toggleActions: "restart none restart none",
    },
    scale: 0.5,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
  });

  // --- This is for the video player
  const player = new Plyr("#player");

  // --- This is to show my sidebar
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

  // --- This is for my Filter button Active link
  const linkWork = document.querySelectorAll(".work__item");

  function activeWork() {
    linkWork.forEach((link) => link.classList.remove("active-work"));
    this.classList.add("active-work");
  }

  linkWork.forEach((link) => link.addEventListener("click", activeWork));

  // --- This is for my active link sections
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

  // --- This is for the project filter button
  const filterButtons = document.querySelectorAll(".work__item");
  const cards = document.querySelectorAll(".work__card");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const filterValue = button.getAttribute("data-filter");

      cards.forEach((card) => {
        const category = card.getAttribute("data-category");

        if (filterValue === "all" || category === filterValue) {
          gsap.fromTo(
            card,
            {
              opacity: 0,
              scale: 0.8,
              display: "block",
            },
            {
              opacity: 1,
              scale: 1,
              duration: 0.5,
              ease: "power2.out",
            }
          );
        } else {
          gsap.to(card, {
            opacity: 0,
            scale: 0.8,
            duration: 0.3,
            ease: "power2.in",
            onComplete: () => {
              card.style.display = "none";
            },
          });
        }
      });
    });
  });

  // --- This is to populate the popup window for my project content
  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("work__button")) {
      togglePortfolioPopup();
      portfolioItemDetails(e.target.parentElement);
    }
  });

  function togglePortfolioPopup() {
    document.querySelector(".portfolio__popup").classList.toggle("open");
  }
  // I need to check if the close button exists before adding the event listener because in my first try,
  // I encountered null error in the browser console even though it executed correctly and the reason was
  // the element class popup-close is not yet in the DOM at that moment because it will only trigger when
  // the popup opens. So by adding this checking, it will ensure that the element exist in the DOM. This prevent
  // error from console browser if the element is not yet present.
  const closeButton = document.querySelector(".portfolio__popup-close");
  if (closeButton) {
    closeButton.addEventListener("click", togglePortfolioPopup);
  }

  function portfolioItemDetails(portfolioItem) {
    document.querySelector(".pp__thumbnail img").src =
      portfolioItem.querySelector(".work__img").src;
    document.querySelector(".portfolio__popup-subtitle span").innerHTML =
      portfolioItem.querySelector(".work__title").innerHTML;
    document.querySelector(".portfolio__popup-body").innerHTML =
      portfolioItem.querySelector(".portfolio__item-details").innerHTML;
  }

  // --- This is for my service popup modal content
  const modalViews = document.querySelectorAll(".services__modal"),
    modalBtns = document.querySelectorAll(".services__button"),
    modalCloses = document.querySelectorAll(".services__modal-close");

  function openModal(modalIndex) {
    const modal = modalViews[modalIndex];
    modal.classList.add("active-modal");
  }

  modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener("click", () => {
      openModal(i);
    });
  });

  modalCloses.forEach((modalClose) => {
    modalClose.addEventListener("click", () => {
      modalViews.forEach((modalView) => {
        modalView.classList.remove("active-modal");
      });
    });
  });

  // --- This is for my skills tab or toggle tools icon
  const tabs = document.querySelectorAll("[data-target]"),
    tabContent = document.querySelectorAll("[data-content]");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const target = document.querySelector(tab.dataset.target);

      tabContent.forEach((tabContents) => {
        tabContents.classList.remove("skills__active");
      });
      target.classList.add("skills__active");
      tabs.forEach((tab) => {
        tab.classList.remove("skills__active");
      });
      tab.classList.add("skills__active");
    });
  });

  // --- This is for my testimonials slider, using the gsap logic to achieve the desired effect
  const wrapper = document.querySelector(".testimonials__wrapper");
  const tCards = document.querySelectorAll(".testimonial__card");
  const nextBtn = document.querySelector(".next");
  const prevBtn = document.querySelector(".prev");

  let currentIndex = 0;
  let slidesToShow = getSlidesToShow();
  let totalCards = tCards.length;
  let slideWidth = getSlideWidth();

  // I need to clone first few cards to create an infinite loop effect when sliding
  const cloneCount = slidesToShow;
  for (let i = 0; i < cloneCount; i++) {
    const clone = tCards[i].cloneNode(true);
    wrapper.appendChild(clone);
  }
  // Then I need to create a function to determine the number of slides to show based on screen width/sizes
  function getSlidesToShow() {
    if (window.innerWidth >= 1024) return 2;
    if (window.innerWidth >= 768) return 2;
    return 1;
  }
  // This Function is to calculate my slide slide width to ensure the cards fit perfectly within the container
  function getSlideWidth() {
    const containerWidth = document.querySelector(
      ".testimonials__container"
    ).offsetWidth;
    return (containerWidth - 24 * (slidesToShow - 1)) / slidesToShow;
  }
  // Then creat my function to animate to a specific slide with gsap logic
  function goToSlide(index) {
    const slideDistance = index * slideWidth;
    gsap.to(wrapper, {
      x: -slideDistance,
      duration: 1.2,
      ease: "power3.out",
      onComplete: () => {
        if (index >= totalCards) {
          currentIndex = 0;
          gsap.set(wrapper, { x: 0 });
        } else if (index < 0) {
          currentIndex = totalCards - slidesToShow;
          gsap.set(wrapper, { x: -currentIndex * slideWidth });
        }
      },
    });
  }
  // For this function, I need to Update slidesToShow and slideWidth on window resize
  function updateResponsiveSettings() {
    slidesToShow = getSlidesToShow();
    slideWidth = getSlideWidth();
    goToSlide(currentIndex);
  }

  nextBtn.addEventListener("click", () => {
    currentIndex++;
    if (currentIndex >= totalCards) currentIndex = 0;
    goToSlide(currentIndex);
  });
  prevBtn.addEventListener("click", () => {
    currentIndex--;
    if (currentIndex < 0) currentIndex = totalCards - slidesToShow;
    goToSlide(currentIndex);
  });

  window.addEventListener("resize", updateResponsiveSettings);
  updateResponsiveSettings();

  // --- This for my contact input form label animation
  const inputs = document.querySelectorAll(".input");

  function focusInput() {
    let parent = this.parentNode;
    parent.classList.add("focus");
  }

  function blurInput() {
    let parent = this.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }

  inputs.forEach((input) => {
    input.addEventListener("focus", focusInput);
    input.addEventListener("blur", blurInput);
  });

  // --- This is to show the scroll up button
  function scrollUp() {
    const scrollUp = document.querySelector("#scroll-up");

    if (this.scrollY >= 350) scrollUp.classList.add("show-scroll");
    else scrollUp.classList.remove("show-scroll");
  }
  window.addEventListener("scroll", scrollUp);
})();
