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

const form = document.getElementById("contact-form");

form.addEventListener(
  "submit",
  function (event) {
    const formValues = {
      name: form.elements.name.value,
      email: form.elements.email.value,
      message: form.elements.message.value,
    };

    const errors = validate(formValues, constraints);

    if (errors) {
      event.preventDefault();
      const errorMessage = Object.values(errors)
        .map(function (fieldValues) {
          return fieldValues.join(", ");
        })
        .join("\n");

      alert(errorMessage);
    }
  },
  false
);
