var navFocus = document.getElementsByClassName('nav-focus')[0].innerText;

const  generateRandomString = (num) => {
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let result1= '';
    const charactersLength = characters.length;
    for ( let i = 0; i < num; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result1;
}

function tds(clase) {
    let td_s = document.getElementsByClassName(clase);
    for (let index = 0; index < td_s.length; index++) {
        result = '';
        idclav = generateRandomString(6)
        if (td_s[index].innerText != idclav){
            result = idclav
            return result;
        }; 
    } 
}





function CompaniesModal() {
    let clave = tds('id-s');
    console.log(clave);
    
    var checkbox = document.getElementById('checkbox');
    var idInput = document.getElementById('div-input-id');
    var nameInput = document.getElementById('div-input-name');
    let inputID = document.getElementById('input-id');
    inputID.setAttribute('value',clave);



    
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            idInput.style.display = 'block';
            nameInput.style.width = '65.7%';
            inputID.setAttribute('value','');
        }
        else {
            idInput.style.display = 'none';
            nameInput.style.width = '100%';
            inputID.setAttribute('value',clave);
        }
    })  
}

function ManagersModal() {
    var rows = document.getElementsByClassName('row')[0];
    var checkbox = document.getElementById('checkbox');
    
    rows.children[1].className = "col-6";
    var thirdColumn = document.createElement("div");
    thirdColumn.className = "col-6";
    
    thirdColumn.appendChild(document.getElementById('manager-lastname'));
    rows.appendChild(thirdColumn);
    var container = document.getElementsByClassName("text-center");
    var firstColumn = document.createElement("div");
    firstColumn.id = "firstRow";
    document.getElementById('div-input-id').remove();
    firstColumn.className = "row";
    firstColumn.appendChild(document.createElement("div"));
    firstColumn.children[0].className = "col-4";

    firstColumn.children[0].style.margin = "auto";
    firstColumn.children[0].innerHTML = "<div class=\"mb-1\" id=\"div-input-id-managers\" style=\"display:none;\"><label for=\"exampleInputEmail1\" class=\"form-label\">ID</label><input type=\"text\" class=\"form-control input\" id=\"input-manager-id\" aria-describedby=\"emailHelp\" onkeyup=\"mayus(this);\" maxlength=\"6\" name=\"id_managers\"></div>";
    container[0].insertAdjacentElement("afterbegin", firstColumn);
    document.getElementById('manager-lastname').style.display ="block";
    

    let array = document.getElementsByClassName("input");
    for (let index = 0; index < array.length; index++) {
        const element = array[index].getAttribute("name");
        const result = element.replace("companie","managers")
        document.getElementsByClassName("input")[index].setAttribute("name",result)
        console.log(element);
    }
    document.getElementById('input-manager-id').setAttribute('value',clave);
    var clave = tds('id-s-managers');
    document.getElementById('input-manager-id').setAttribute('value',clave);
    checkbox.addEventListener('change', function() {
        
        if (this.checked) {
            
            document.getElementById('div-input-id-managers').style.display = "block";
            document.getElementById('input-manager-id').setAttribute('value','');
        }
        else {
            document.getElementById('div-input-id-managers').style.display = "none";
            document.getElementById('input-manager-id').setAttribute('value',clave);
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




