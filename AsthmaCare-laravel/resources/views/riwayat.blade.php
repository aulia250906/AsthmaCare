@extends('layout.app')

@section('title', 'Riwayat')

@section('content')
<body class="bg-gray-50 font-sans">

  <x-navbar />

  <!-- ================= MAIN ================= -->
  <main class="max-w-5xl mx-auto py-10 px-6">
    <div class="bg-white rounded-3xl shadow-lg border-2 border-sky-200 p-6">

      <!-- ===== HEADER ===== -->
      <div class="flex justify-end mb-6">
        <a href="{{ route('riwayat.pdf') }}"
           class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff]
                  text-white px-4 py-2 rounded-full text-sm font-medium
                  hover:from-[#0097a7] hover:to-[#55c6ff] transition">
          📄 Ekspor ke PDF
        </a>
      </div>

      <!-- ===== CHART ===== -->
      <div class="mb-6">
        <canvas id="tesChart" height="100"></canvas>
      </div>

      <!-- ===== TABLE ===== -->
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
            @forelse ($riwayat as $item)
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

                <td class="py-3 px-4">

                  <!-- DESKTOP (TIDAK DIUBAH) -->
                  <div class="hidden lg:block text-xs text-gray-700 whitespace-pre-line">
                    {!! $item->narasi !!}
                  </div>

                  <!-- MOBILE -->
                  <button
                    class="lg:hidden text-cyan-600 text-xs font-medium"
                    onclick="openSheet(`{!! e($item->narasi) !!}`)">
                    Info Detail
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

  <!-- ================= MOBILE BOTTOM SHEET ================= -->
  <div id="bottomSheet"
       class="fixed inset-0 z-50 bg-black/40 opacity-0 invisible
              transition-opacity duration-300 lg:hidden">

    <div id="sheetBox"
         class="absolute bottom-0 left-0 w-full bg-white rounded-t-3xl p-5
                translate-y-full transition-transform duration-500
                ease-[cubic-bezier(0.22,1,0.36,1)]">

      <!-- Drag Handle -->
      <div class="w-12 h-1.5 bg-gray-300 rounded-full mx-auto mb-4"></div>

      <h3 class="text-center font-semibold mb-3">
        Detail Tindakan
      </h3>

      <div id="sheetContent"
           class="text-xs text-gray-700 whitespace-pre-line
                  max-h-[60vh] overflow-y-auto">
      </div>

      <button onclick="closeSheet()"
              class="mt-4 w-full py-3 bg-sky-500 text-white rounded-full">
        Tutup
      </button>
    </div>
  </div>

  <!-- ================= SCRIPTS ================= -->

  <!-- Bottom Sheet Script -->
  <script>
    const sheet = document.getElementById('bottomSheet');
    const sheetBox = document.getElementById('sheetBox');
    const sheetContent = document.getElementById('sheetContent');

    let startY = 0;
    let currentY = 0;

    function openSheet(content) {
      sheetContent.innerHTML = content;
      sheet.classList.remove('opacity-0', 'invisible');
      sheetBox.classList.remove('translate-y-full');
    }

    function closeSheet() {
      sheet.classList.add('opacity-0', 'invisible');
      sheetBox.classList.add('translate-y-full');
      sheetBox.style.transform = '';
    }

    sheet.addEventListener('click', e => {
      if (e.target === sheet) closeSheet();
    });

    sheetBox.addEventListener('touchstart', e => {
      startY = e.touches[0].clientY;
    });

    sheetBox.addEventListener('touchmove', e => {
      currentY = e.touches[0].clientY;
      const diff = currentY - startY;
      if (diff > 0) {
        sheetBox.style.transform = `translateY(${diff}px)`;
      }
    });

    sheetBox.addEventListener('touchend', () => {
      const diff = currentY - startY;
      if (diff > 120) {
        closeSheet();
      } else {
        sheetBox.style.transform = '';
      }
    });
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
          data: scores,
          borderColor: '#0ea5e9',
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
