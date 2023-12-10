<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="font-poppins">
  <div class="my-10 text-2xl flex  font-serif items-center justify-center">
    <p>Hasil Voting Ketua Himpunan Informatika tahun 2024/2025</p>
  </div>
  <div class="w-[800px] mr-10 flex items-center justify-center">
    <canvas class="flex items-center justify-center" id="myChart"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['cakahim  1', 'cakahim 2'],
        datasets: [{
          label: '',
          data: [12, 19],
          backgroundColor: [
            'rgba(255, 0, 0, 0.2)',
            'rgba(75, 192, 192, 0.2)'
        ], // Warna latar belakang
          borderColor: ['rgb(255, 0, 0)',
          'rgba(75, 192, 192)'
        ], // Warna border
          borderWidth: 1
        }]
      },
      options: {
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
   
</body>
</html>