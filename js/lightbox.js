// Open the Modal
function openModal(id) {
    document.getElementById(id).style.display = "block";
}

// Close the Modal
function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

// Display drop
function drop(num) {
    var state = document.getElementById(`drop${num}`).style.display;
    if (state === "block") {
        document.getElementById(`drop${num}`).style.display = "none";
    } else {
        document.getElementById(`drop${num}`).style.display = "block";
    }
}
