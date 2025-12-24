@extends('layout.app')

@section('title', 'Riwayat')

@section('content')
<body class="bg-gray-50 font-sans">

  <x-navbar />

  <!-- Main Section -->
  <main class="max-w-5xl mx-auto py-10 px-6">
    <div class="bg-white rounded-3xl shadow-lg border-2 border-sky-200 p-6">

      <!-- Search & Controls -->
      <div class="flex justify-between items-center mb-6 flex-wrap gap-3">


        <!-- Dropdown + Button -->
        <div class="flex items-center gap-3">
          
          <!-- Export Button -->
          <a href="{{ route('riwayat.pdf') }}"
            class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white px-4 py-2 rounded-full hover:from-[#0097a7] hover:to-[#55c6ff] transition text-sm font-medium">
            📄 Ekspor ke PDF
          </a>
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
            @forelse($riwayat as $item)
              @php
                $badgeColor = $item->resiko === 'High'
                    ? 'bg-red-100 text-red-700'
                    : 'bg-green-100 text-green-700';
              @endphp

              <tr class="border-b hover:bg-sky-50 align-top">
                <td class="py-3 px-4">
                  {{ optional($item->tanggal_tes)->format('d M Y H:i') }}
                </td>

                <td class="py-3 px-4">
                  {{ $item->score ?? '-' }}
                </td>

                <td class="py-3 px-4">
                  <span class="px-3 py-1 rounded-full text-xs font-medium {{ $badgeColor }}">
                    {{ $item->resiko ?? 'Tidak Diketahui' }}
                  </span>
                </td>

                <!-- TINDAKAN -->
                <td class="py-3 px-4">

                  <!-- DESKTOP -->
                  <div class="hidden md:block text-xs text-gray-700 whitespace-pre-line">
                    {!! $item->narasi !!}
                  </div>

                  <!-- MOBILE BUTTON -->
                  <button 
                    class="md:hidden text-cyan-600 text-xs font-medium underline"
                    onclick="toggleDetail(this)">
                    Info Detail
                  </button>

                  <!-- MOBILE DETAIL -->
                  <div class="md:hidden mt-2 hidden text-xs text-gray-700 whitespace-pre-line bg-sky-50 p-3 rounded-lg">
                    {!! $item->narasi !!}
                  </div>

                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="py-4 px-4 text-center text-gray-500">
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

  <!-- Toggle Detail Mobile -->
  <script>
    function toggleDetail(button) {
      const detail = button.nextElementSibling;
      detail.classList.toggle('hidden');
      button.textContent = detail.classList.contains('hidden')
        ? 'Info Detail'
        : 'Tutup Detail';
    }
  </script>

  <!-- Chart Script -->
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
          label: 'Skor Tes',
          data: scores,
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
