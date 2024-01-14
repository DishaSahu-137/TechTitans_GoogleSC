function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // In a real-world scenario, you would send the login data to the server for authentication.
    // For simplicity, we'll just display a message here.
    alert("Login successful! (Not really)");
}

function search() {
    var searchTerm = document.getElementById("searchInput").value;

    // In a real-world scenario, you would send the search term to the server for processing.
    // For simplicity, we'll just display a message here.
    alert("Searching for: " + searchTerm);
}