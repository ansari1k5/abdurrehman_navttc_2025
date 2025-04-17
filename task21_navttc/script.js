  // Function to display all months
  function showMonths() {
    const months = [
      "January", "February", "March", "April",
      "May", "June", "July", "August",
      "September", "October", "November", "December"
    ];

    let list = document.body;

    // Loop through the array and add each month to the list
    for (let i = 0; i < months.length; i++) {
      let li = document.createElement("li");
      li.textContent = months[i];
      list.appendChild(li);
    }
  }

  // Call the function to run it
  showMonths();