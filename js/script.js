const menuIcon = document.getElementById("menuIcon");
const navLinks = document.getElementById("navLinks");

menuIcon.addEventListener("click", function () {
    navLinks.classList.toggle("active");
});

const links = document.querySelectorAll(".nav-links a");

links.forEach(function(link) {

    link.addEventListener("click", function() {

        links.forEach(function(item){
            item.classList.remove("activeLink");
        });

        this.classList.add("activeLink");

        if(window.innerWidth <= 768){
            navLinks.classList.remove("active");
        }

    });

});