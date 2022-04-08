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

// Display to next showcase page
function next(drop, id) {
    var nextID = id + 1;
    var move = false;
    if (drop == 1 && nextID < 201) {
        move = true;
    } else if (drop == 2 && nextID < 1201) {
        move = true;
    }
    if (move === true) {
        closeModal(id)
        openModal(nextID)
    }
}

// Display to previous showcase page
function prev(drop, id) {
    var prevID = id - 1;
    var move = false;
    if (drop == 1 && prevID > 100) {
        move = true;
    } else if (drop == 2 && prevID > 1100) {
        move = true;
    }
    if (move === true) {
        closeModal(id)
        openModal(prevID)
    }
}
