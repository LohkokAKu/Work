function updateDayDateTime() {
  const now = new Date();
  const days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  const dayName = days[now.getDay()];
  const date = now.toLocaleDateString("id-ID");
  const time = now.toLocaleTimeString("id-ID");
  document.getElementById("day-date-time").innerHTML =
    dayName + ", " + date + " | " + time;
}
setInterval(updateDayDateTime, 1000);
updateDayDateTime();