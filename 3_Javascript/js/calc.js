var n1=document.getElementById('n1')
var n2=document.getElementById('n2')
var operator=document.getElementById('operator')
var equalSign=document.getElementById('equalSign')

var add=document.getElementById('add')
var subtract=document.getElementById('subtract')
var multiply=document.getElementById('multiply')
var divide=document.getElementById('divide')
var result=document.getElementById('result')


addEventListeners();

function addEventListeners(){

    add.addEventListener('click',addNums)
    subtract.addEventListener('click',subNums)
    multiply.addEventListener('click',mulNums)
    divide.addEventListener('click',divNums)

}

function inputValidation(){
    if(n1.value==='' || n2.value===''){
        alert('Input field empty')
        return false
    }else{
        return true
    }
}

function addNums(cancelReload){
    if(inputValidation()){
        result.value=parseInt(n1.value)+parseInt(n2.value)
        operator.innerHTML='+'
        equalSign.innerHTML='='
    }
    cancelReload.preventDefault()
}

function subNums(cancelReload){
    if(inputValidation()){
        result.value=parseInt(n1.value)-parseInt(n2.value)
        operator.innerHTML='-'
        equalSign.innerHTML='='
    }
    cancelReload.preventDefault()
}

function mulNums(cancelReload){
    if(inputValidation()){
        result.value=parseInt(n1.value)*parseInt(n2.value)
        operator.innerHTML='*'
        equalSign.innerHTML='='
    }
    cancelReload.preventDefault()
}

function divNums(cancelReload){
    if(inputValidation()){
        result.value=parseInt(n1.value)/parseInt(n2.value)
        operator.innerHTML='/'
        equalSign.innerHTML='='
    }
    cancelReload.preventDefault()
}