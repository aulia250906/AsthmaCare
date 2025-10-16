@extends('layout.app')



@section('content')

<body class="bg-gray-50 font-sans">

<x-navbar />


  <!-- Main Section -->
  <main class="max-w-5xl mx-auto py-10 px-6">
    <div class="bg-white rounded-3xl shadow-lg border-2 border-sky-200 p-6">

      <!-- Search & Controls -->
      <div class="flex justify-between items-center mb-6 flex-wrap gap-3">
        <div class="flex items-center bg-gray-100 rounded-full px-3 py-2 w-60">
          <input type="text" placeholder="Cari" class="bg-transparent focus:outline-none w-full text-sm">
        </div>
        <div class="flex items-center gap-3">
          <select class="bg-gray-100 rounded-full px-3 py-2 text-sm text-gray-600 focus:outline-none">
            <option>Tanggal</option>
          </select>
          <button class="bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-600 transition text-sm font-medium">
            📄 Ekspor ke PDF
          </button>
        </div>
      </div>

      <!-- Chart -->
      <div class="mb-6">
        <canvas id="tesChart" height="100"></canvas>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left border-collapse">
          <thead class="bg-sky-600 text-white">
            <tr>
              <th class="py-3 px-4 rounded-l-lg">Tanggal Tes</th>
              <th class="py-3 px-4">Skor Tes</th>
              <th class="py-3 px-4">Keterangan Risiko</th>
              <th class="py-3 px-4 rounded-r-lg">Tindakan</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">01 Feb 2022</td>
              <td class="py-3 px-4">28</td>
              <td class="py-3 px-4"><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Tinggi</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">08 Mar 2023</td>
              <td class="py-3 px-4">18</td>
              <td class="py-3 px-4"><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Tinggi</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">03 Jan 2024</td>
              <td class="py-3 px-4">14</td>
              <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Sedang</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">06 Okt 2025</td>
              <td class="py-3 px-4">9</td>
              <td class="py-3 px-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Rendah</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">08 Mar 2023</td>
              <td class="py-3 px-4">25</td>
              <td class="py-3 px-4"><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Tinggi</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">03 Jan 2024</td>
              <td class="py-3 px-4">12</td>
              <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Sedang</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
            <tr>
              <td class="py-3 px-4">06 Okt 2025</td>
              <td class="py-3 px-4">10</td>
              <td class="py-3 px-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Rendah</span></td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">Lihat Detail</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

<x-footer />

  <!-- Chart Script -->
  <script>
    const ctx = document.getElementById('tesChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Feb 2022', 'Mar 2023', 'Jan 2024', 'Okt 2025', 'Mar 2023', 'Jan 2024', 'Okt 2025'],
        datasets: [{
          label: 'Skor Tes',
          data: [28, 18, 14, 9, 25, 12, 10],
          borderColor: '#0ea5e9',
          backgroundColor: '#38bdf8',
          tension: 0.4,
          fill: false,
          pointRadius: 6,
          pointBackgroundColor: '#0ea5e9'
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: {
          y: { beginAtZero: true, ticks: { stepSize: 5 } },
          x: { grid: { display: false } }
        }
      }
    });
  </script>

</body>
</html>
