let Light = prompt("Enter a traffic light color (red, yellow, green).");


switch (Light) {
    case "red":
        document.body.innerHTML = "Stop";
        break;
    case "yellow":
        document.body.innerHTML = "Ready";
        break;
    case "green":
        document.body.innerHTML = "Go";
        break;
    default:
        document.body.innerHTML = "This is not avaiable!";
}