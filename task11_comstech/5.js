let age = prompt("Enter your Age");
if (age == 18){
    document.body.innerHTML = "You are eligible for vote";

}else if(age > 18 ){
    document.body.innerHTML = "You are eligible for vote";

}else if(age < 18){
    document.body.innerHTML = "You are not eligible for vote";
    
}
else{
    document.body.innerHTML = "bhai fankaryina na kaero Age type karo ";
    
}
