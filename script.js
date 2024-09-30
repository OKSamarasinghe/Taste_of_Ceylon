document.getElementById("subscribe-form").addEventListener("submit", function(event) {
    event.preventDefault();
    const email = event.target.querySelector("input").value;
    if (email) {
        alert("Thank you for subscribing with " + email);
    } else {
        alert("Please enter a valid email.");
    }
});
