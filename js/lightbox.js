// Open the Modal
function openModal(id) {
    document.getElementById(id).style.display = "block";
}

// Close the Modal
function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

// Load showcase GIF after page has loaded
await new Promise(r => setTimeout(r, 2000));
document.getElementById("showcase-gif").style.backgroundImage="url(/images/home_showcase.gif)";
