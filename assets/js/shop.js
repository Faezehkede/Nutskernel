// Single product - Tabs

const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    // Remove active class from all tabs and contents
    tabs.forEach(t => t.classList.remove("tab-active"));
    contents.forEach(c => c.classList.remove("active-tab"));

    // Add active class to the clicked tab and its corresponding content
    tab.classList.add("tab-active");
    const selected = tab.getAttribute("data-tab");
    document.querySelector(`.${selected}`).classList.add("active-tab");
  });
});


// Offer Countdown
$(document).ready(function () {
  // Set your countdown target date and time here (Year, Month - 1, Day, Hour, Minute, Second)
  var targetDate = new Date("2025-12-31T23:59:59").getTime();

  var countdown = setInterval(function () {
    var now = new Date().getTime();
    var distance = targetDate - now;

    if (distance < 0) {
      clearInterval(countdown);
      $("#countdown").html("Countdown finished!");
      return;
    }

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    $("#days").text(days);
    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(seconds);
  }, 1000);
});

