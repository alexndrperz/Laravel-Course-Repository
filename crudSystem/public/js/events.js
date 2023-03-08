var navFocus = document.getElementsByClassName('nav-focus')[0].innerText;

const  generateRandomString = (num) => {
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let result1= ' ';
    const charactersLength = characters.length;
    for ( let i = 0; i < num; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    let td_s = document.getElementsByClassName('id-s');
    td_s.forEach(row => {
        console.log(row.innerText)
    }); 

    return result1;
}

const displayRandomString = () =>{
   let randomStringContainer = document.getElementById('random_string'); 
    randomStringContainer.innerHTML =  generateRandomString(8);    
}

function CompaniesModal() {
    
    var checkbox = document.getElementById('checkbox');
    var idInput = document.getElementById('div-input-id');
    var nameInput = document.getElementById('div-input-name').style;
    
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            idInput.display = 'block';
            nameInput.width = '65.7%';
    
        }
        else {
            idInput.display = 'none';
            nameInput.styles.width = '100%';
        }
    })  
}

function ManagersModal() {
    var rows = document.getElementsByClassName('row')[0];
    var checkbox = document.getElementById('checkbox');
    var idInput = document.getElementById('div-input-id').style;
    var nameInput = document.getElementById('div-input-name');  
    var firstRow = document.getElementsByClassName('row')[0];
    
    rows.children[1].className = "col-6";
    var thirdColumn = document.createElement("div");
    thirdColumn.className = "col-6";
    thirdColumn.innerHTML = "<div class=\"mb-3\"><label for=\"\" class=\"form-label\">Apellido</label><input type=\"text\" class=\"form-control input\" id=\"input-name\" aria-describedby=\"emailHelp\"></div>";
    rows.appendChild(thirdColumn);
    var container = document.getElementsByClassName("text-center");
    var firstColumn = document.createElement("div");
    firstColumn.id = "firstRow";

    checkbox.addEventListener('change', function() {
        
        if (this.checked) {
            
            firstColumn.className = "row";
            firstColumn.appendChild(document.createElement("div"));
            firstColumn.children[0].className = "col-4";

            firstColumn.children[0].style.margin = "auto";
            firstColumn.children[0].innerHTML = "<div class=\"mb-1\"><label for=\"exampleInputEmail1\" class=\"form-label\">ID</label><input type=\"text\" class=\"form-control input\" id=\"input-manager-name\" aria-describedby=\"emailHelp\" onkeyup=\"mayus(this);\" maxlength=\"6\"></div>";
            container[0].insertAdjacentElement("afterbegin", firstColumn)
        }
        else {
            var row = document.getElementById("firstRow")
            container[0].removeChild(row);
        }
    })  
    
}

function mayus(e) {
    e.value = e.value.toUpperCase();
}

if (navFocus == "Negocios") {
    CompaniesModal()
} else {
    ManagersModal()
}




