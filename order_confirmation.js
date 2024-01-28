// order_confirmation.js
document.addEventListener("DOMContentLoaded", function () {
    // Retrieve selected coffee's information from sessionStorage
    const selectedCoffee = JSON.parse(sessionStorage.getItem("selectedCoffee"));
  
    if (selectedCoffee) {
      // Display the selected coffee's information
      const orderDetails = document.getElementById("order-details");
      orderDetails.innerHTML = `
        <h2>Coffee Details:</h2>
        <p>Coffee Name: ${selectedCoffee.coffeeName}</p>
        <p>Condition: ${selectedCoffee.condition}</p>
        <p>Size: ${selectedCoffee.size}</p>
        <p>Sugar Level: ${selectedCoffee.sugar}</p>
      `;
  
      // Show the confirmation message
      const confirmationMessage = document.getElementById("confirmation-message");
      confirmationMessage.innerHTML = "Thank you for your order!";
      confirmationMessage.style.display = "block";
    } else {
      // No selected coffee found
      alert("No coffee selected.");
    }
  });
  