// Open the Modal
function openModal(id) {
    document.getElementById(id).style.display = "block";
    document.getElementById("to-top").style.display = "none";
    document.getElementsByTagName("body")[0].style.overflow = "hidden";
}

// Close the Modal
function closeModal(id) {
    document.getElementById(id).style.display = "none";
    document.getElementById("to-top").style.display = "block";
    document.getElementsByTagName("body")[0].style.overflow = "auto";
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
    if (drop == 1 && nextID < 1101) {
        move = true;
    } else if (drop == 2 && nextID < 2101) {
        move = true;
    } else if (drop == 3 && nextID < 3101) {
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
    } else if (drop == 3 && prevID > 2100) {
        move = true;
    }
    if (move === true) {
        closeModal(id)
        openModal(prevID)
    }
}
