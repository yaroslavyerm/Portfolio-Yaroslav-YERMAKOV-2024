document.addEventListener('alpine:init', () => {
    Alpine.store('menu', { menuIsOpen: false });
});


document.addEventListener("DOMContentLoaded", function() {
  
   if (window.location.href !== "https://yermakov.fr/projects/") {
        return; // Exit if the URL is not as specified
    }
  
    // Check if ajaxurl is defined (in case script is loaded before the localization)
    if (typeof ajaxurl === 'undefined') {
        console.error('ajaxurl is not defined.');
        return;
    }

    const toolsSelect = document.getElementById("tools");
    const fieldsSelect = document.getElementById("fields");
    const resetButton = document.getElementById("reset-filters");
    const projectsContainer = document.querySelector(".projects-container");

    function fetchProjects() {
    const tool = toolsSelect.value;
    const field = fieldsSelect.value;

    // Add loading class for fade-out effect
    projectsContainer.classList.add("loading");

    fetch(ajaxurl, {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
            action: "filter_projects",
            tool: tool,
            field: field,
        }),
    })
    .then(response => response.text())
    .then(data => {
        // Update projects
        projectsContainer.innerHTML = data;

        // Remove loading class to trigger fade-in effect
        projectsContainer.classList.remove("loading");
    })
    .catch(error => console.error("Error:", error));
}


    toolsSelect.addEventListener("change", fetchProjects);
    fieldsSelect.addEventListener("change", fetchProjects);

    resetButton.addEventListener("click", () => {
        toolsSelect.value = "";
        fieldsSelect.value = "";
        fetchProjects();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Select menu items
    const menuItem83 = document.querySelector('#menu-item-83 a');
    const menuItem84 = document.querySelector('#menu-item-84 a');

    // Define a function to close the menu
    const closeMenu = () => {
        if (Alpine && Alpine.store('menu')) {
            Alpine.store('menu').menuIsOpen = false;
        }
    };

    // Attach event listeners to the specified menu items
    if (menuItem83) menuItem83.addEventListener('click', closeMenu);
    if (menuItem84) menuItem84.addEventListener('click', closeMenu);
});

