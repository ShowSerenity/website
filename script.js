function toggleDescription(descriptionId) {
    var description = document.getElementById(descriptionId);
    if (description.style.display === "none" || description.style.display === "") {
        description.style.display = "block";
    } else {
        description.style.display = "none";
    }
}

window.addEventListener('scroll', function () {
    var button = document.querySelector('.back-to-top-button');
    
    if (window.scrollY > 300) {
        button.style.display = 'block';
    } else {
        button.style.display = 'none';
    }
});

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

var nextStep = document.querySelector('#nextStep');

  nextStep.addEventListener('click', function (e) {
    e.preventDefault();
    // Hide first view
    document.getElementById('my_form').style.display = 'none';

    // Show thank you message element
    document.getElementById('thank_you').style.display = 'block';
  });


// Get all elements with the class "project-block"
const projectBlocks = document.querySelectorAll(".project-block");

// Add a click event listener to each project block
projectBlocks.forEach((block) => {
    block.addEventListener("click", function () {
        // Get the URL from the "data-url" attribute of the clicked block
        const url = block.getAttribute("data-url");

        // Open the URL in the current window
        window.location.href = url;
    });
});