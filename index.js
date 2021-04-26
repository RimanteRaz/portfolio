const navToggle = () => {
  const burger = document.querySelector(".burger");
  const navBar = document.querySelector(".mobile-nav");
  const navLinks = document.querySelectorAll(".mobile-nav-link");

  burger.addEventListener("click", () => {
    burger.classList.toggle("open");
    navBar.classList.toggle("open");
  });

  navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      burger.classList.remove("open");
      navBar.classList.remove("open");
    });
  });
};

navToggle();

const constraints = {
  name: {
    presence: { allowEmpty: false },
  },
  email: {
    presence: { allowEmpty: false },
    email: true,
  },
  message: {
    presence: { allowEmpty: false },
  },
};
