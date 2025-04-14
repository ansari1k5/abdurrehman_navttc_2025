let number = Number(prompt("Enter their marks out of 100."));
if (number >= 90){
    document.body.innerHTML = "Grade A";

}else if(number >= 80){
    document.body.innerHTML = "Grade B";
    
}else if(number >= 70){
    document.body.innerHTML = "Grade C";
    
}else if(number >= 60){
    document.body.innerHTML = "Grade D";
    
}else if(number < 60){
    document.body.innerHTML = "Fail";
    
}else if(number > 100){
    document.body.innerHTML = "Enter their marks out of 100.";
    
}else{
    document.body.innerHTML = "Please type only marks";

}
