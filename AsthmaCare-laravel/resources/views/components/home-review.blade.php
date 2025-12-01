@props(['reviews'])

<section class="py-24">
  <div class="max-w-7xl mx-auto px-8 md:px-12">
    <div class="text-center mb-16">
      <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">TESTIMONI</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Apa Kata Pengguna Kami</h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">Ribuan pengguna telah merasakan manfaatnya</p>
    </div>

    <!-- Main Featured Testimonial -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row items-center justify-center gap-12 mx-auto max-w-6xl bg-gradient-to-br from-white to-sky-50 rounded-3xl shadow-2xl p-10 md:p-12 border border-sky-100">
        <!-- Avatar -->
        <div class="flex-shrink-0 flex justify-center relative">
          <img src="{{ asset('images/orang.png') }}" alt="User" class="w-56 h-56 object-cover rounded-full shadow-xl ring-4 ring-sky-200">
          <!-- Verified Badge -->
          <div class="absolute bottom-2 right-2 bg-green-500 rounded-full p-2 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
          </div>
        </div>

        <!-- Isi Testimoni -->
        <div class="text-left flex flex-col justify-center flex-1">
          <div class="text-yellow-400 text-4xl mb-4">★★★★★</div>
          <p class="text-gray-700 text-xl md:text-2xl leading-relaxed mb-6 italic">
            "Aplikasi ini sangat membantu saya mengenali gejala asma lebih cepat. Analisisnya jelas, dan saya bisa langsung tahu kapan harus ke dokter."
          </p>
          <div class="flex items-center gap-4">
            <div>
              <p class="text-gray-900 font-bold text-lg">Siti Nurhaliza</p>
              <p class="text-gray-500 text-sm">Pengguna Aktif </p>
            </div>
            <div class="flex-1 border-l-2 border-sky-200 pl-4">
              <p class="text-sky-600 font-semibold text-sm">✓ Verified User</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
       @foreach ($reviews as $review)
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
          
          <div class="flex items-center gap-3 mb-4">

              <!-- Initial Avatar -->
              @php
                  $initial = strtoupper(substr($review->name, 0, 1));
                  $colorClasses = ['sky', 'emerald', 'violet', 'rose', 'amber', 'cyan'];
                  $color = $colorClasses[$loop->index % count($colorClasses)];
              @endphp

              <div class="w-12 h-12 bg-{{ $color }}-100 rounded-full flex items-center justify-center text-{{ $color }}-600 font-bold text-lg">
                  {{ $initial }}
              </div>

              <div>
                  <p class="font-bold text-gray-900">{{ $review->name }}</p>

                  <!-- Rating bintang -->
                  <div class="text-yellow-400 text-sm">
                      @for ($i = 1; $i <= 5; $i++)
                          {!! $i <= $review->rating ? '★' : '☆' !!}
                      @endfor
                  </div>
              </div>
          </div>

          <p class="text-gray-600 text-sm leading-relaxed italic">
              "{{ $review->comment }}"
          </p>
      </div>
@endforeach
</section>