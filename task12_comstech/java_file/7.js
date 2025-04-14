let num1 = Number(prompt("Enter the first number:"));
let num2 = Number(prompt("Enter the second number:"));
let operator = prompt("Enter an operator  +, -, *, /");
let result;

switch (operator) {
  case "+":
    document.body.innerHTML = num1 + num2;
    break;
  case "-":
    document.body.innerHTML = num1 - num2;
    break;
  case "*":
    document.body.innerHTML = num1 * num2;
    break;
  case "/":
    if (num2 !== 0) {
        document.body.innerHTML = num1 / num2;
    } else {
        document.body.innerHTML = "Cannot divide by zero!";
    }
    break;
  default:
    document.body.innerHTML = "Invalid operator!";
}