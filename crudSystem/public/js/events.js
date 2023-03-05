var navFocus = document.getElementsByClassName('nav-focus');
console.log(navFocus);

function CompaniesModal() {
    
    var checkbox = document.getElementById('checkbox');
    var idInput = document.getElementById('div-id-input').style;
    var nameInput = document.getElementById('div-name-input').style;
    var locationInput = document.getElementById('div-location-input').style;
    
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            idInput.display = 'block';
            locationInput.width = '100%';
            nameInput.width = '75%';
            console.log("{{managers}}");
    
        }
        else {
            idInput.display = 'none';
            locationInput.width = '50%';
            nameInput.width = '50%'
        }
    })  
}

CompaniesModal()



