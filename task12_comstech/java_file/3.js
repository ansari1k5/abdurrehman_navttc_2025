let number = Number(prompt("Enter your Age"));
let age = 18
if (number == age){
    document.body.innerHTML = "You are eligible for vote";

}else if(number > age ){
    document.body.innerHTML = "You are eligible for vote";

}else if(number < age){
    document.body.innerHTML = "You are not eligible for vote";
    
}
else{
    document.body.innerHTML = "bhai fankaryina na kaero Age type karo ";
    
}