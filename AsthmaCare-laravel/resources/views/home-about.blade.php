@extends('layout.app') 

@section('title', 'Tentang Kami')

@section('content')

{{-- Navbar tampil sesuai status login --}}
        @auth
            <x-navbar />
        @else
            <x-navbar_index />
        @endauth

<!-- Apa itu AsthmaCare -->

<section class="bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="{{ asset('images/asmaorang.png') }}" alt="AsthmaCare" class="w-full max-w-md mx-auto drop-shadow-2xl animate-float">
            </div>
            
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">APA ITU ASTHMACARE?</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Sahabat Kesehatan Pernafasan Anda</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-4">
                    Asma merupakan penyakit kronis yang menyerang saluran pernapasan dan membutuhkan penanganan cepat agar tidak berkembang menjadi kondisi berat. Namun, masih banyak masyarakat yang kesulitan mengenali gejala awal asma.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    AsthmaCare hadir sebagai solusi untuk membantu Anda melakukan deteksi dini terhadap risiko penyakit asma dengan mudah, cepat, dan gratis. Platform kami menggunakan metode Asthma Control Test (ACT).
                </p>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-3xl font-bold text-sky-600 mb-1">100%</p>
                        <p class="text-gray-600 text-sm">Gratis Tanpa Biaya</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-3xl font-bold text-sky-600 mb-1">24/7</p>
                        <p class="text-gray-600 text-sm">Akses Kapan Saja</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-3xl font-bold text-sky-600 mb-1">5 Menit</p>
                        <p class="text-gray-600 text-sm">Tes Cepat</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-md">
                        <p class="text-3xl font-bold text-sky-600 mb-1">ACT</p>
                        <p class="text-gray-600 text-sm">Asthma Control Test</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Cara Menggunakan -->
<section class="bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">PANDUAN</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Cara Menggunakan AsthmaCare</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Ikuti 4 langkah mudah untuk mendapatkan hasil analisis asma Anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="relative" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300 h-full">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-bold text-2xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        1
                    </div>
                    <div class="mt-6 mb-4">
                        <span class="text-6xl">📝</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Daftar/Login</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Buat akun gratis atau login untuk mulai menggunakan layanan AsthmaCare
                    </p>
                </div>
                <!-- Arrow -->
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 z-10">
                    <svg class="w-8 h-8 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="relative" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300 h-full">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-bold text-2xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        2
                    </div>
                    <div class="mt-6 mb-4">
                        <span class="text-6xl">✅</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Isi Kuesioner</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Jawab Beberapa pertanyaan ACT tentang gejala dan kondisi asma yang Anda alami
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 z-10">
                    <svg class="w-8 h-8 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="relative" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300 h-full">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-bold text-2xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        3
                    </div>
                    <div class="mt-6 mb-4">
                        <span class="text-6xl">📊</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Lihat Hasil</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Dapatkan hasil analisis instan dengan skor ACT dan interpretasinya
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 z-10">
                    <svg class="w-8 h-8 text-sky-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div class="relative" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl transition-shadow duration-300 h-full">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-bold text-2xl w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        4
                    </div>
                    <div class="mt-6 mb-4">
                        <span class="text-6xl">💊</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Dapatkan Saran</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Terima rekomendasi dan tips kesehatan sesuai kondisi Anda
                    </p>
                </div>
            </div>
        </div>
        
        <!-- CTA Button -->
        <div class="text-center mt-12">
            <a href="/pertanyaan" class="inline-block bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                Mulai Tes Sekarang →
            </a>
        </div>
    </div>
</section>

<!-- Tim Pengembang -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">TIM KAMI</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tim Pengembang AsthmaCare</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Mahasiswa Teknik Informatika Politeknik Negeri Batam yang berdedikasi mengembangkan solusi kesehatan digital</p>
        </div>
        
            <!-- Manajer Proyek / Dosen Pembimbing -->
            <div class="max-w-4xl mx-auto mb-16" data-aos="zoom-in">
                <div class="bg-gradient-to-br from-white to-sky-50 rounded-3xl shadow-2xl p-8 md:p-12 border-2 border-sky-200">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-shrink-0">
                            <div class="relative">
                                <div class="w-40 h-40 rounded-full shadow-xl overflow-hidden bg-gray-200">
                                    <!-- Ganti src dengan path foto dosen -->
                                    <img src="images/dosen.jpg" alt="Dr. Ari Wibowo" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-2 -right-2 bg-yellow-400 rounded-full p-3 shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center md:text-left flex-1">
                            <div class="inline-block bg-gradient-to-r from-yellow-400 to-orange-400 text-white font-bold px-4 py-1 rounded-full text-sm mb-3">
                                Manajer Proyek & Dosen Pembimbing
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Dr. Ari Wibowo, S.T., M.T.</h3>
                            <p class="text-sky-600 font-semibold mb-4">Politeknik Negeri Batam</p>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Dosen pembimbing yang mengarahkan dan membimbing tim dalam pengembangan sistem. Memberikan arahan metodologi Agile dan memastikan kualitas pengembangan produk sesuai standar akademik dan industri.
                            </p>
                            <div class="flex flex-wrap justify-center md:justify-start gap-2">
                                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">Project Management</span>
                                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">Agile Methodology</span>
                                <span class="bg-sky-100 text-sky-700 px-3 py-1 rounded-full text-sm font-medium">Quality Assurance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Anggota Tim - Grid 2 kolom -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Ketua Tim -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <!-- Foto Header -->
                    <div class="h-64 bg-gradient-to-br from-sky-400 to-blue-500 relative overflow-hidden">
                        <!-- Ganti src dengan path foto member -->
                        <img src="images/Aulia.jpeg" alt="Muhamad Aulia" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-yellow-400 text-white font-bold px-3 py-1 rounded-full text-xs shadow-lg">
                            Ketua Tim
                        </div>
                    </div>
                    
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Muhamad Aulia</h3>
                        <p class="text-sky-600 font-semibold text-sm mb-2">3312401074</p>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Memimpin tim, Menganalisis alur sistem dan membuat diagram (Use Case, ERD, Activity, Class). dan memastikan timeline proyek berjalan sesuai rencana.
                        </p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="bg-sky-50 text-sky-700 px-3 py-1 rounded-full text-xs font-medium">Project Lead</span>
                            <span class="bg-sky-50 text-sky-700 px-3 py-1 rounded-full text-xs font-medium">Diagram Designer</span>
                        </div>
                    </div>
                </div>
                
                <!-- Anggota 1 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <!-- Foto Header -->
                    <div class="h-64 bg-gradient-to-br from-emerald-400 to-green-500 relative overflow-hidden">
                        <!-- Ganti src dengan path foto member -->
                        <img src="images/muhammad-faiq.jpg" alt="Muhammad Faiq" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Muhammad Faiq</h3>
                        <p class="text-emerald-600 font-semibold text-sm mb-2">3312401031</p>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Fokus pada pengembangan backend sistem, database design, integrasi FastAPI untuk prediksi asma, dan implementasi algoritma ACT.
                        </p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-xs font-medium">Backend Dev</span>
                            <span class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-xs font-medium">Database</span>
                        </div>
                    </div>
                </div>
                
                <!-- Anggota 2 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <!-- Foto Header -->
                    <div class="h-64 bg-gradient-to-br from-violet-400 to-purple-500 relative overflow-hidden">
                        <!-- Ganti src dengan path foto member -->
                        <img src="images/leo.jpg" alt="Leo Afif Eka Permana" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Leo Afif Eka Permana</h3>
                        <p class="text-violet-600 font-semibold text-sm mb-2">3312401041</p>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                            Bertanggung jawab atas frontend development dengan Tailwind CSS, dan responsiveness aplikasi.
                        </p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="bg-violet-50 text-violet-700 px-3 py-1 rounded-full text-xs font-medium">Frontend Dev</span>
                            <span class="bg-violet-50 text-violet-700 px-3 py-1 rounded-full text-xs font-medium">Requirement</span>
                        </div>
                    </div>
                </div>
                
                <!-- Anggota 3 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <!-- Foto Header -->
                    <div class="h-64 bg-gradient-to-br from-pink-400 to-rose-500 relative overflow-hidden">
                        <!-- Ganti src dengan path foto member -->
                        <img src="images/arabella.jpg" alt="Arabella Advania Ginting" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Arabella Advania Ginting</h3>
                        <p class="text-pink-600 font-semibold text-sm mb-2">3312401049</p>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                           Mendesain seluruh tampilan website dan Bertanggung jawab atas UI/UX design, frontend development dengan Tailwind CSS, dan responsiveness aplikasi.
                        </p>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="bg-pink-50 text-pink-700 px-3 py-1 rounded-full text-xs font-medium">UI/UX</span>
                            <span class="bg-pink-50 text-pink-700 px-3 py-1 rounded-full text-xs font-medium">Frontend</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>

 {{-- Footer --}}
        @auth
            <x-footer />
        @else
            <x-footer_index />
        @endauth

@endsection