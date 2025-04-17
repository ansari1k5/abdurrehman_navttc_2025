let currentHour = new Date().getHours();
let message = "";

if (currentHour < 12) {
  message = "Good Morning";
} else {
  message = "Good Afternoon";
}

document.body.innerText = message;