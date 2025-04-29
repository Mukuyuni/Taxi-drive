function handleBooking(event) {
    event.preventDefault(); // Prevent default form submission behavior

    const form = event.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: form.method,
        body: formData
    })
    .then(response => response.text())
    .then(message => {
        const confirmationMessage = document.getElementById('confirmationMessage');
        confirmationMessage.style.display = 'block'; // Show confirmation message
        confirmationMessage.textContent = message;
    })
    .catch(error => {
        console.error('Error:', error);
    });

    return false; // Keep the form from reloading the page
}
