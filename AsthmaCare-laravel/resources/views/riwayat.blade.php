@extends('layout.app')

@section('title', 'Riwayat')

@section('content')
<body class="bg-gray-50 font-sans">

  <x-navbar />

  <!-- ================= MAIN ================= -->
  <main class="max-w-5xl mx-auto py-10 px-6">
    <div class="bg-white rounded-3xl shadow-lg border-2 border-sky-200 p-6">

      <!-- ===== Search & Controls ===== -->
      <div class="flex justify-between items-center mb-6 flex-wrap gap-3">

        <!-- Search -->
        <div class="relative w-60">
          <input
            type="text"
            placeholder="Cari"
            class="bg-gray-100 rounded-full px-4 py-2 pr-10 text-sm text-gray-600 w-full
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 transition-all"
          />
          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">🔍</span>
        </div>

        <!-- Dropdown & Export -->
        <div class="flex items-center gap-3">

          <!-- Dropdown -->
          <div class="relative w-40" id="dropdown">
            <button id="dropdownBtn"
              class="bg-gray-100 rounded-full px-3 py-2 text-sm text-gray-600 w-full flex justify-between items-center">
              <span id="dropdownLabel">Tanggal</span>
              <span id="dropdownArrow" class="transition-transform">▼</span>
            </button>

            <div id="dropdownMenu"
              class="absolute left-0 mt-2 w-full bg-white rounded-xl shadow-lg border border-cyan-300
                     opacity-0 invisible translate-y-2 transition-all duration-300">
              <div class="py-2">
                <button data-value="Tanggal" class="dropdown-item w-full px-3 py-1 text-left hover:bg-cyan-50">Tanggal</button>
                <button data-value="Bulan" class="dropdown-item w-full px-3 py-1 text-left hover:bg-cyan-50">Bulan</button>
                <button data-value="Tahun" class="dropdown-item w-full px-3 py-1 text-left hover:bg-cyan-50">Tahun</button>
              </div>
            </div>
          </div>

          <!-- Export -->
          <a href="{{ route('riwayat.pdf') }}"
            class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white px-4 py-2 rounded-full text-sm hover:opacity-90">
            📄 Ekspor PDF
          </a>

        </div>
      </div>

      <!-- ===== Chart ===== -->
      <div class="mb-6">
        <canvas id="tesChart" height="100"></canvas>
      </div>

      <!-- ===== Table ===== -->
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left border-collapse">
          <thead class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white">
            <tr>
              <th class="py-3 px-4 rounded-l-lg">Tanggal Tes</th>
              <th class="py-3 px-4">Skor</th>
              <th class="py-3 px-4">Risiko</th>
              <th class="py-3 px-4 rounded-r-lg">Tindakan</th>
            </tr>
          </thead>

          <tbody class="text-gray-700">
            @forelse ($riwayat as $item)
              @php
                $badgeColor = $item->resiko === 'High'
                  ? 'bg-red-100 text-red-700'
                  : 'bg-green-100 text-green-700';
              @endphp

              <tr class="border-b hover:bg-sky-50">
                <td class="py-3 px-4">
                  {{ optional($item->tanggal_tes)->format('d M Y H:i') }}
                </td>

                <td class="py-3 px-4">{{ $item->score ?? '-' }}</td>

                <td class="py-3 px-4">
                  <span class="px-3 py-1 rounded-full text-xs font-medium {{ $badgeColor }}">
                    {{ $item->resiko ?? 'Tidak Diketahui' }}
                  </span>
                </td>

                <td class="py-3 px-4">
                  <!-- Desktop -->
                  <div class="hidden md:block text-xs whitespace-pre-line">
                    {!! $item->narasi !!}
                  </div>

                  <!-- Mobile -->
                  <button
                    class="md:hidden text-sky-500 text-sm"
                    onclick="openSheet(`{!! e($item->narasi) !!}`)">
                    🛡️Info Detail
                  </button>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-4 text-center text-gray-500">
                  Belum ada riwayat tes.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

    </div>
  </main>

  <x-footer />

  <!-- ================= BOTTOM SHEET ================= -->
  <div id="bottomSheet"
       class="fixed inset-0 z-50 bg-black/40 opacity-0 invisible transition-opacity duration-300 md:hidden">
    <div
      class="absolute bottom-0 left-0 w-full bg-white rounded-t-3xl p-5
             translate-y-full transition-transform duration-300">
      <div class="w-12 h-1.5 bg-gray-300 rounded-full mx-auto mb-4"></div>

      <h3 class="text-center font-semibold mb-3">Detail Tindakan</h3>

      <div id="sheetContent"
           class="text-sm text-gray-700 whitespace-pre-line max-h-[60vh] overflow-y-auto"></div>

      <button onclick="closeSheet()"
              class="mt-4 w-full py-3 bg-sky-500 text-white rounded-full">
        Tutup
      </button>
    </div>
  </div>

  <!-- ================= SCRIPTS ================= -->

  <!-- Bottom Sheet -->
  <script>
    const sheet = document.getElementById('bottomSheet');
    const sheetBox = sheet.querySelector('div');
    const sheetContent = document.getElementById('sheetContent');

    function openSheet(content) {
      sheetContent.innerHTML = content;
      sheet.classList.remove('opacity-0', 'invisible');
      sheetBox.classList.remove('translate-y-full');
    }

    function closeSheet() {
      sheet.classList.add('opacity-0', 'invisible');
      sheetBox.classList.add('translate-y-full');
    }

    sheet.addEventListener('click', e => {
      if (e.target === sheet) closeSheet();
    });
  </script>

  <!-- Dropdown -->
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
      arrow.classList.toggle("rotate-180");
    });

    dropdown.querySelectorAll(".dropdown-item").forEach(item => {
      item.addEventListener("click", () => {
        label.textContent = item.dataset.value;
        menu.classList.add("opacity-0", "invisible", "translate-y-2");
        arrow.classList.remove("rotate-180");
      });
    });

    document.addEventListener("click", e => {
      if (!dropdown.contains(e.target)) {
        menu.classList.add("opacity-0", "invisible", "translate-y-2");
        arrow.classList.remove("rotate-180");
      }
    });
  </script>

  <!-- Chart -->
  <script>
    const ctx = document.getElementById('tesChart').getContext('2d');

    const labels = [
      @foreach ($riwayat->sortBy('tanggal_tes') as $item)
        '{{ optional($item->tanggal_tes)->format("d M Y H:i") }}',
      @endforeach
    ];

    const scores = [
      @foreach ($riwayat->sortBy('tanggal_tes') as $item)
        {{ $item->score ?? 0 }},
      @endforeach
    ];

    new Chart(ctx, {
      type: 'line',
      data: {
        labels,
        datasets: [{
          data: scores,
          borderColor: '#0ea5e9',
          tension: 0.4,
          fill: false,
          pointRadius: 6,
          pointBackgroundColor: '#0ea5e9'
        }]
      },
      options: {
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
