const ctx = document.getElementById("chart").getContext('2d');
const myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["sunday", "monday", "tuesday",
    "wednesday", "thursday", "friday", "saturday"],
    datasets: [{
      label: 'Last week',
      backgroundColor: 'rgba(161, 198, 247, 1)',
      borderColor: 'rgb(47, 128, 237)',
      data: [300, 400, 200, 500, 200],
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }]
    }
  },
});