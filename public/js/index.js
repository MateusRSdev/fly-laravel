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
        form.insertAdjacentHTML("afterbegin","O numero de dominios que podem enviar requisicoes nao pode passar de 3<br>");

    }else{
        form.appendChild(formBase);
    }


}