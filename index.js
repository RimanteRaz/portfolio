const navToggle = () => {
  const burger = document.querySelector(".burger");
  const navBar = document.querySelector(".mobile-nav");

  burger.addEventListener("click", () => {
    burger.classList.toggle("open");
    navBar.classList.toggle("open");
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
