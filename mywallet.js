// Assume this function is called when the user logs in successfully
function updateUserWallet() {
    // Make an AJAX request to fetch the user's wallet balance from the server
    $.ajax({
        url: 'get-wallet-balance.php', // Replace with the actual URL to fetch wallet balance
        type: 'GET',
        success: function(response) {
            // Update the wallet balance in the UI
            $('#wallet-balance').text(response.balance); // Assuming response is in JSON format with a 'balance' property
        },
        error: function(xhr, status, error) {
            console.error('Error fetching wallet balance:', error);
        }
    });
}
