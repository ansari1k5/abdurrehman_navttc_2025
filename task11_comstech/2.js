let corrcetpassword = "rehman123"
let userpassword = prompt("Enter your password");

if (corrcetpassword === userpassword){
    document.body.innerHTML = "Access granted. Password is correct.";
    
}
else{
    document.body.innerHTML = "Access Denied";

}