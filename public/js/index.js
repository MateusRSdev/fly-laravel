let origemId = 1

function addForm() {
    console.log("aaa");
    let form = document.getElementById("addInput");
    let formBase = document.createElement("input");
    formBase.classList.add("form-control");
    formBase.classList.add("my-2");
    
    origemId = origemId + 1;
    formBase.setAttribute("name", "origem-"+origemId);
    if(origemId > 3){
        alert("O numero de dominios cadastrados nao pode passar de 3")
    }else{
        form.appendChild(formBase);
    }


}
function addInput(){
    
    let templates = document.getElementById("templates")
    let append = document.getElementById("fields")


    templates = templates.childNodes[1];
    let input = templates.cloneNode(true);
    console.log(input);
    
    input.childNodes[1].setAttribute("name","campo1");
    input.childNodes[3].setAttribute("name","campo1");
    append.appendChild(input)
    
}