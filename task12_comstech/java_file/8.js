let grade = prompt(" Enter a letter grade (A, B, C, D, F).");


switch (grade) {
    case "A":
        document.body.innerHTML = "Excellent";
        break;
    case "B":
        document.body.innerHTML = "Very Good";
        break;
    case "C":
        document.body.innerHTML = "Good";
        break;
    case "D":
        document.body.innerHTML = "Needs Improvement";
        break;
    case "F":
        document.body.innerHTML = "Fail";
        break;
    default:
        document.body.innerHTML = "Type Only Grade";
}