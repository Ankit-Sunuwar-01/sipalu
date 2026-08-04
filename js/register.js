const role = document.getElementById("role");
const technicianFields = document.getElementById("technicianFields");

role.addEventListener("change", function(){

    if(role.value === "technician"){
        technicianFields.style.display = "block";
    }else{
        technicianFields.style.display = "none";
    }

});