document.addEventListener("DOMContentLoaded", function () {
  fetch("https://api.aladhan.com/v1/timings?latitude=0.5333&longitude=101.4500&method=11")
    .then(res => res.json())
    .then(data => {
      const waktu = data.data.timings;
      document.getElementById("subuh").textContent = waktu.Fajr;
      document.getElementById("dzuhur").textContent = waktu.Dhuhr;
      document.getElementById("ashar").textContent = waktu.Asr;
      document.getElementById("maghrib").textContent = waktu.Maghrib;
      document.getElementById("isya").textContent = waktu.Isha;
    })
    .catch(error => console.error("Gagal ambil data:", error));
});
