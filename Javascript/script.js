document.addEventListener("DOMContentLoaded", function () {
  const namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  const namaBulan = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
  ];

  const today = new Date();
  const hari = namaHari[today.getDay()];
  const tanggal = today.getDate();
  const bulan = namaBulan[today.getMonth()];
  const tahun = today.getFullYear();
  const formatTanggal = `${hari}, ${tanggal} ${bulan} ${tahun}`;

  document.getElementById("hari").textContent = formatTanggal;

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
    .catch(error => {
      console.error("Gagal mengambil data:", error);
    });
});


    document.addEventListener('DOMContentLoaded', function () {
      const dropdown = document.querySelector('.dropdown');
      const toggle = document.querySelector('.dropdown-toggle');

      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        dropdown.classList.toggle('open');
      });

      document.addEventListener('click', function (e) {
        if (!dropdown.contains(e.target)) {
          dropdown.classList.remove('open');
        }
      });
    });