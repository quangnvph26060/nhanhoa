
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("delivery-selling").click();
});

// Function to show the corresponding content when a footer item is clicked
function showFooterContent(id) {
    // Hide all footer content
    var footerContent = document.querySelectorAll("#row > .col-lg-4");
    for (var i = 0; i < footerContent.length; i++) {
        footerContent[i].style.display = "none";
    }

    // Show the selected footer content
    var selectedContent = document.getElementById(id + "-content");
    if (selectedContent) {
        selectedContent.style.display = "block";
    }

    var selectedContent = document.getElementById(id + "-content1");
    if (selectedContent) {
        selectedContent.style.display = "block";
    }
}

// Event listeners for footer items
document.getElementById("fast-selling").addEventListener("click", function() {
    showFooterContent("fast-selling");
});

document.getElementById("regular-selling").addEventListener("click", function() {
    showFooterContent("regular-selling");
    document.getElementById('regular-selling-content1').style.display = 'block';
    document.getElementById('delivery-selling-content1').style.display = 'none';
});

document.getElementById("delivery-selling").addEventListener("click", function() {
    showFooterContent("delivery-selling");
    document.getElementById('delivery-selling-content1').style.display = 'block';
});

function increaseQuantity(button) {
    var input = button.parentNode.parentNode.querySelector(".quantity");
    var currentValue = parseInt(input.value);
    input.value = currentValue + 1;
}

function decreaseQuantity(button) {
    var input = button.parentNode.parentNode.querySelector(".quantity");
    var currentValue = parseInt(input.value);
    if (currentValue > 1) {
        input.value = currentValue - 1;
    }
}
