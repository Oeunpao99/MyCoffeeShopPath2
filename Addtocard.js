const addToCartButtons = document.querySelectorAll(".add-to-cart");

addToCartButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const menuItem = button.closest(".menu-item");
    const coffeeName = menuItem.querySelector("h3").textContent;
    const condition = menuItem.querySelector("#condition").value;
    const size = menuItem.querySelector("#size").value;
    const sugar = menuItem.querySelector("#sugar").value;

    const selectedCoffee = {
      coffeeName,
      condition,
      size,
      sugar,
    };

    // Store selected coffee's information in sessionStorage
    sessionStorage.setItem("selectedCoffee", JSON.stringify(selectedCoffee));

    // Redirect to the order confirmation page
    window.location.href = "order_confirmation.html";
  });
});
