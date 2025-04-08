const total = document.getElementById("total");
const formExpense = document.getElementById("formExpense");

const price = document.getElementById("price");
const quantity = document.getElementById("quantity");
const description = document.getElementById("description");
const category = document.getElementById("category");

const inputsExpense = [price, quantity, description, category];

price.addEventListener("input", updateTotal);
quantity.addEventListener("input", updateTotal);

inputsExpense.forEach((input) =>
  input.addEventListener("input", (event) => {
    const { id, value } = event.target;

    if (value === "") showError(id, event.target);
  })
);

formExpense.addEventListener("submit", (event) => {
  event.preventDefault();
});

function updateTotal() {
  const totalPrice = parseInt(price.value) * parseInt(quantity.value);
  total.textContent = totalPrice;
}

function showError(id, parent) {
  const existingError = parent.parentElement.querySelector(".bg-danger");

  if (!existingError) {
    const error = document.createElement("P");
    error.textContent = `The ${id} field is empty`;
    error.classList.add(
      "text-light",
      "bg-danger",
      "p-2",
      "m-2",
      "rounded",
      "text-center",
      "fw-bold"
    );
    parent.parentElement.appendChild(error);

    setTimeout(() => {
      error.remove();
    }, 2000);
  }
}
