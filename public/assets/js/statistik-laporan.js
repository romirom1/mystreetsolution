var mystreetdata = document.getElementById("Statistik");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 11;

var densityData = {
  label: 'Laporan Masuk',
  data: [100, 80, 50, 30]
};

var barChart = new Chart(mystreetdata, {
  type: 'bar',
  data: {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [densityData]
  }
});
