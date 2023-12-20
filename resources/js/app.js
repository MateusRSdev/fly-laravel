
import './bootstrap';
import AOS from "aos";
import $ from 'jquery';

AOS.init();
 
let id = 2
$("#btnOrigin").on("click",function(){
    if(id<=3){
        let div =  $("#originCase")
        let input = $("#inputOrigin").clone()
        input.attr("name","origin-"+id) 
        id++
        console.log(div,input)
        div.append(input)
    }else{
        alert("o numero de dominios nao pode passar de 3")
    }
})

let origemField = 1
$("#addForm").on("click",function(){

    let templates = $("#template").clone()
    let append = $("#fields")
    templates.find("input").each((objeto,val)=>{
        console.log(objeto,val)
    });
    append.append(templates);
 
})