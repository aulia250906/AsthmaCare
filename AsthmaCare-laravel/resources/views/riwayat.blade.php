@extends('layout.app')

@section('content')
<body class="bg-gray-50 font-sans">

  <x-navbar />

  <!-- Main Section -->
  <main class="max-w-5xl mx-auto py-10 px-6">
    <div class="bg-white rounded-3xl shadow-lg border-2 border-sky-200 p-6">

      <!-- Search & Controls -->
      <div class="flex justify-between items-center mb-6 flex-wrap gap-3">

        <!-- Search -->
        <div class="relative w-60">
          <input 
            type="text" 
            placeholder="Cari"
            class="bg-gray-100 rounded-full px-4 py-2 pr-10 text-sm text-gray-600 w-full
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400 
                   transition-all duration-300"
          />
          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500"><button>🔍</button></span>
        </div>

        <!-- Dropdown + Button -->
        <div class="flex items-center gap-3">
          
          <!-- Dropdown -->
          <div class="relative w-40" id="dropdown">
            
            <!-- Trigger -->
            <button id="dropdownBtn"
              class="bg-gray-100 rounded-full px-3 py-2 text-sm text-gray-600 w-full flex items-center justify-between border border-transparent transition-all duration-300">
              <span id="dropdownLabel">Tanggal</span>
              <span id="dropdownArrow" class="transition-transform duration-300">▼</span>
            </button>

            <!-- Menu -->
            <div id="dropdownMenu"
              class="absolute left-0 mt-2 w-full bg-white rounded-xl shadow-lg border border-cyan-300 
                     opacity-0 invisible translate-y-2 transition-all duration-300">
              <div class="py-2">
                <button data-value="Tanggal" class="dropdown-item w-full text-left px-3 py-1 hover:bg-cyan-50">Tanggal</button>
                <button data-value="Bulan" class="dropdown-item w-full text-left px-3 py-1 hover:bg-cyan-50">Bulan</button>
                <button data-value="Tahun" class="dropdown-item w-full text-left px-3 py-1 hover:bg-cyan-50">Tahun</button>
              </div>
            </div>

          </div>

          <!-- Export Button -->
          <button class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white px-4 py-2 rounded-full hover:from-[#0097a7] hover:to-[#55c6ff] transition text-sm font-medium">
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
          <thead class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white">
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
              <td class="py-3 px-4">
                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Tinggi</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">08 Mar 2023</td>
              <td class="py-3 px-4">18</td>
              <td class="py-3 px-4">
                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Tinggi</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">03 Jan 2024</td>
              <td class="py-3 px-4">14</td>
              <td class="py-3 px-4">
                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Sedang</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">06 Okt 2025</td>
              <td class="py-3 px-4">9</td>
              <td class="py-3 px-4">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Rendah</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">08 Mar 2023</td>
              <td class="py-3 px-4">25</td>
              <td class="py-3 px-4">
                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Tinggi</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

            <tr class="border-b hover:bg-sky-50">
              <td class="py-3 px-4">03 Jan 2024</td>
              <td class="py-3 px-4">12</td>
              <td class="py-3 px-4">
                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Sedang</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

            <tr>
              <td class="py-3 px-4">06 Okt 2025</td>
              <td class="py-3 px-4">10</td>
              <td class="py-3 px-4">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Risiko Rendah</span>
              </td>
              <td class="py-3 px-4 text-sky-600 hover:underline cursor-pointer">🔍 Lihat Detail</td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </main>

  <x-footer />

  <!-- Dropdown Script -->
  <script>
    const dropdown = document.getElementById("dropdown");
    const btn = document.getElementById("dropdownBtn");
    const menu = document.getElementById("dropdownMenu");
    const label = document.getElementById("dropdownLabel");
    const arrow = document.getElementById("dropdownArrow");

    btn.addEventListener("click", () => {
      menu.classList.toggle("opacity-0");
      menu.classList.toggle("invisible");
      menu.classList.toggle("translate-y-2");
      btn.classList.toggle("border-cyan-400");
      arrow.classList.toggle("rotate-180");
    });

    dropdown.querySelectorAll(".dropdown-item").forEach(item => {
      item.addEventListener("click", () => {
        label.textContent = item.dataset.value;
        menu.classList.add("opacity-0", "invisible", "translate-y-2");
        arrow.classList.remove("rotate-180");
        btn.classList.remove("border-cyan-400");
      });
    });

    document.addEventListener("click", (e) => {
      if (!dropdown.contains(e.target)) {
        menu.classList.add("opacity-0", "invisible", "translate-y-2");
        arrow.classList.remove("rotate-180");
        btn.classList.remove("border-cyan-400");
      }
    });
  </script>

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
@endsection
