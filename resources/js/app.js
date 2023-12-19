
import './bootstrap';
import AOS from "aos";
import $ from 'jquery';
AOS.init();
// let origemId = 1;
// let origemField = 1;
$("#addForm")

// function addForm() {
//     console.log("aaa");
//     let form = document.getElementById("addInput");
//     let formBase = document.createElement("input");
//     formBase.classList.add("form-control");
//     formBase.classList.add("my-2");
    
//     origemId = origemId + 1;
//     formBase.setAttribute("name", "origem_"+origemId);
//     if(origemId > 3){
//         alert("O numero de dominios cadastrados nao pode passar de 3");
//     }else{
//         form.appendChild(formBase);
//     }


// }
// function addInput(){
    
//     let templates = document.getElementById("templates");
//     let append = document.getElementById("fields");

//     templates = templates.childNodes[1];
//     let input = templates.cloneNode(true);
//     console.log(input);
    
//     input.childNodes[1].setAttribute("name","fieldName_"+origemField);
//     input.childNodes[3].setAttribute("name","fieldType_"+origemField);
//     origemField = origemField + 1;
//     append.appendChild(input);
    
// }