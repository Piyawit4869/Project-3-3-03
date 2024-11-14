function updateCartItemCount() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let cartItemCount = cart.length;
  document.getElementById("cartItemCount").textContent = cartItemCount;
}

document.addEventListener("DOMContentLoaded", function () {
  updateCartItemCount();
});

var toggleOpen = document.getElementById("toggleOpen");
var toggleClose = document.getElementById("toggleClose");
var collapseMenu = document.getElementById("collapseMenu");

function handleClick() {
  if (collapseMenu.style.display === "block") {
    collapseMenu.style.display = "none";
  } else {
    collapseMenu.style.display = "block";
  }
}

toggleOpen.addEventListener("click", handleClick);
toggleClose.addEventListener("click", handleClick);

// Get current URL path
const currentPath = window.location.pathname;

// Get all links
const links = document.querySelectorAll(".nav-link");

// Loop through each link and add 'active' class if URL matches
links.forEach((link) => {
  if (link.getAttribute("href") === currentPath) {
    link.classList.add("text-[#007bff]"); // Active link
    link.classList.remove("text-[#333]"); // Remove default color
  }
});
