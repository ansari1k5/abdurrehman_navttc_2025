let fruit = prompt("Enter the name of a fruit (apple, banana, mango, Graps, watermelon.).");


switch (fruit) {
    case "apple":
        document.body.innerHTML = "450 Rs per Kg.";
        break;
    case "banana":
        document.body.innerHTML = "200 Rs per Dozen.";
        break;
    case "mango":
        document.body.innerHTML = "150 Rs per Kg.";
        break;
    case "Graps":
        document.body.innerHTML = "120 Rs per Kg.";
        break;
    case "watermelon":
        document.body.innerHTML = "50 Rs per Kg. ";
        break;
    default:
        document.body.innerHTML = "This is not avaiable!";
}