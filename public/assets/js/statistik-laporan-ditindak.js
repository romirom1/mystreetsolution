var mystreetdata = document.getElementById("statistik-laporan-ditindak");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 11;

var densityData = {
  label: 'Laporan Ditindak',
  data: [90, 70, 40, 25]
};

var barChart = new Chart(mystreetdata, {
  type: 'bar',
  data: {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [densityData]
  }
});
