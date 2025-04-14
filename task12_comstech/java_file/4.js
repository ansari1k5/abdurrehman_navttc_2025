let number1 = Number(prompt("Number 1"));
let number2 = Number(prompt("Number 2"));
if (number1 < number2){
    document.body.innerHTML = "The Number 2 Graeter than to Number 1";

}else if(number1 > number2){
    document.body.innerHTML = "Number 1 is Greater than to Number 2";
    
}else if(number1 == number2){
    document.body.innerHTML = "Number 1 and Number 2 both aare Equal";
    
}else{
    document.body.innerHTML = "Please type only number";

}
