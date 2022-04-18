function showDropdown() {
    const dropdown = document.querySelector(".dropdown");
    if (dropdown.style.display == "flex") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "flex";
    }
}

function showDropdownDark() {
    const dropdownDark = document.querySelector("#dark .dropdown");
    if (dropdownDark.style.display == "flex") {
        dropdownDark.style.display = "none";
    } else {
        dropdownDark.style.display = "flex";
    }
}
