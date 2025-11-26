@extends('layout.app')

@section('title', 'Form Pertanyaan Tes Deteksi Gejala Asma')

@section('content')
<!-- Navbar -->
@auth
    <x-navbar />
@else
    <x-navbar_index />
@endauth

<!-- Hero Section -->
<section class="max-w-5xl mx-auto mt-10 p-10 bg-white rounded-3xl shadow-lg">
    <div class="flex flex-col md:flex-row items-center gap-8">
        <div class="flex-1">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3 leading-tight">
                Form Pertanyaan Tes Deteksi Gejala Asma
            </h1>
            <p class="text-gray-700 text-lg">
                Jawab pertanyaan berikut sesuai kondisi Anda, lalu klik 
                <span class="font-semibold text-sky-600">Submit</span> di akhir untuk melihat hasil analisis.
            </p>
        </div>
        <div class="flex-shrink-0">
            <img src="{{ asset('images/orangbatuk.png') }}" alt="Asma Illustration" class="w-56 md:w-64">
        </div>
    </div>
</section>

{{-- Error / Alert Section --}}
<div class="max-w-5xl mx-auto mt-6 px-6">
    @if(session('error'))
        <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl mb-4">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<!-- Progress Section -->
<div class="max-w-5xl mx-auto mt-4 px-6">
    <p id="progress-text" class="text-gray-700 font-medium mb-3 text-base">
        Pertanyaan 1 dari 10
    </p>
    <div class="w-full bg-gray-200 h-2.5 rounded-full">
        <div id="progress-bar" 
             class="bg-sky-400 h-2.5 rounded-full transition-all duration-500" 
             style="width: 10%;"></div> {{-- 1/10 = 10% --}}
    </div>
</div>

<!-- Multi-step Form -->
<form id="tes-asthma-form" 
      action="{{ route('pertanyaan.kirim') }}" 
      method="POST" 
      class="max-w-5xl mx-auto mt-10 bg-white p-10 rounded-3xl shadow-lg">
    @csrf

    {{-- STEP 1: Usia (Age) --}}
    <section data-step="1">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Berapa usia Anda saat ini?
        </h2>

        <div class="space-y-4 text-lg">
            <input type="number" 
                   name="Age" 
                   min="1" max="120"
                   value="{{ old('Age') }}"
                   class="w-full border-gray-300 rounded-xl px-4 py-2 text-lg focus:ring-sky-400 focus:border-sky-400"
                   placeholder="Masukkan usia Anda (dalam tahun)"
                   required>
        </div>
    </section>

    {{-- STEP 2: Gender --}}
    <section data-step="2" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Apa jenis kelamin Anda?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Gender" value="Male" 
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Gender') == 'Male' ? 'checked' : '' }}
                       required>
                <span>Laki-laki</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Gender" value="Female"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Gender') == 'Female' ? 'checked' : '' }}>
                <span>Perempuan</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Gender" value="Other"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Gender') == 'Other' ? 'checked' : '' }}>
                <span>Lainnya</span>
            </label>
        </div>
    </section>

    {{-- STEP 3: BMI --}}
    <section data-step="3" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Berapa nilai BMI (Body Mass Index) Anda?
        </h2>

        <p class="text-sm text-gray-600 mb-3">
            Contoh: 22.5. Jika tidak tahu, Anda bisa menghitung dari berat badan dan tinggi badan.
        </p>

        <div class="space-y-4 text-lg">
            <input type="number" 
                   step="0.1"
                   name="BMI" 
                   min="10" max="60"
                   value="{{ old('BMI') }}"
                   class="w-full border-gray-300 rounded-xl px-4 py-2 text-lg focus:ring-sky-400 focus:border-sky-400"
                   placeholder="Masukkan nilai BMI Anda (contoh: 22.5)"
                   required>
        </div>
    </section>

    {{-- STEP 4: Smoking_Status --}}
    <section data-step="4" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Bagaimana status merokok Anda saat ini?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Smoking_Status" value="Never"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Smoking_Status') == 'Never' ? 'checked' : '' }}
                       required>
                <span>Tidak pernah merokok</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Smoking_Status" value="Former"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Smoking_Status') == 'Former' ? 'checked' : '' }}>
                <span>Pernah merokok, sekarang berhenti</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Smoking_Status" value="Current"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Smoking_Status') == 'Current' ? 'checked' : '' }}>
                <span>Saat ini masih merokok</span>
            </label>
        </div>
    </section>

    {{-- STEP 5: Family_History --}}
    <section data-step="5" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Apakah ada riwayat asma pada keluarga dekat Anda?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Family_History" value="0"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Family_History') == '0' ? 'checked' : '' }}
                       required>
                <span>Tidak ada</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Family_History" value="1"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Family_History') == '1' ? 'checked' : '' }}>
                <span>Ya, ada riwayat asma di keluarga</span>
            </label>
        </div>
    </section>

    {{-- STEP 6: Allergies --}}
    <section data-step="6" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Alergi utama apa yang Anda miliki?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Allergies" value="None"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Allergies') == 'None' ? 'checked' : '' }}
                       required>
                <span>Tidak ada alergi yang diketahui</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Allergies" value="Dust"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Allergies') == 'Dust' ? 'checked' : '' }}>
                <span>Alergi debu</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Allergies" value="Pollen"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Allergies') == 'Pollen' ? 'checked' : '' }}>
                <span>Alergi serbuk sari/tanaman</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Allergies" value="Pets"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Allergies') == 'Pets' ? 'checked' : '' }}>
                <span>Alergi hewan peliharaan (bulu, dll)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Allergies" value="Multiple"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Allergies') == 'Multiple' ? 'checked' : '' }}>
                <span>Beberapa alergi sekaligus</span>
            </label>
        </div>
    </section>

    {{-- STEP 7: Air_Pollution_Level --}}
    <section data-step="7" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Bagaimana tingkat paparan polusi udara di lingkungan tempat Anda tinggal/bekerja?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Air_Pollution_Level" value="Low"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Air_Pollution_Level') == 'Low' ? 'checked' : '' }}
                       required>
                <span>Rendah (udara relatif bersih)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Air_Pollution_Level" value="Moderate"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Air_Pollution_Level') == 'Moderate' ? 'checked' : '' }}>
                <span>Sedang</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Air_Pollution_Level" value="High"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Air_Pollution_Level') == 'High' ? 'checked' : '' }}>
                <span>Tinggi (dekat jalan besar/pabrik, sering berasap)</span>
            </label>
        </div>
    </section>

    {{-- STEP 8: Physical_Activity_Level --}}
    <section data-step="8" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Bagaimana tingkat aktivitas fisik Anda dalam keseharian?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Physical_Activity_Level" value="Sedentary"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Physical_Activity_Level') == 'Sedentary' ? 'checked' : '' }}
                       required>
                <span>Sangat kurang aktif (banyak duduk, jarang bergerak)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Physical_Activity_Level" value="Moderate"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Physical_Activity_Level') == 'Moderate' ? 'checked' : '' }}>
                <span>Aktivitas sedang (jalan kaki/olah raga ringan beberapa kali per minggu)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Physical_Activity_Level" value="Active"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Physical_Activity_Level') == 'Active' ? 'checked' : '' }}>
                <span>Sangat aktif (sering olahraga/pekerjaan fisik berat)</span>
            </label>
        </div>
    </section>

    {{-- STEP 9: Occupation_Type --}}
    <section data-step="9" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Jenis lingkungan kerja utama Anda saat ini?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Occupation_Type" value="Indoor"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Occupation_Type') == 'Indoor' ? 'checked' : '' }}
                       required>
                <span>Indoor (lebih banyak di dalam ruangan, misalnya kantor)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Occupation_Type" value="Outdoor"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Occupation_Type') == 'Outdoor' ? 'checked' : '' }}>
                <span>Outdoor (lebih banyak di luar ruangan, misalnya lapangan/industri)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Occupation_Type" value="Both"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Occupation_Type') == 'Both' ? 'checked' : '' }}>
                <span>Kombinasi indoor dan outdoor</span>
            </label>
        </div>
    </section>

    {{-- STEP 10: Comorbidities --}}
    <section data-step="10" class="hidden">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Apakah Anda memiliki penyakit penyerta (komorbiditas) berikut?
        </h2>

        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="Comorbidities" value="0"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Comorbidities') == '0' ? 'checked' : '' }}
                       required>
                <span>Tidak ada penyakit penyerta</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Comorbidities" value="Diabetes"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Comorbidities') == 'Diabetes' ? 'checked' : '' }}>
                <span>Diabetes</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Comorbidities" value="Hypertension"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Comorbidities') == 'Hypertension' ? 'checked' : '' }}>
                <span>Hipertensi (tekanan darah tinggi)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Comorbidities" value="COPD"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Comorbidities') == 'COPD' ? 'checked' : '' }}>
                <span>Penyakit paru obstruktif kronis (PPOK/COPD)</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="Comorbidities" value="Multiple"
                       class="w-5 h-5 text-sky-500 focus:ring-sky-400"
                       {{ old('Comorbidities') == 'Multiple' ? 'checked' : '' }}>
                <span>Lebih dari satu komorbiditas</span>
            </label>
        </div>
    </section>

    {{-- Buttons --}}
    <div class="flex justify-end mt-10 gap-3">
        <button type="button" id="btn-back"
                class="py-2 px-6 text-gray-900 font-semibold border border-gray-500 rounded-xl 
                       shadow-[-4px_4px_0px_rgba(150,150,150,1)] 
                       hover:translate-x-[-2px] hover:translate-y-[2px] 
                       hover:shadow-[-2px_2px_0px_rgba(150,150,150,1)] 
                       hover:bg-gray-100 transition duration-200 ease-in-out"
                disabled>
            Kembali
        </button>
        
        <button type="submit" id="btn-next"
                class="py-2 px-6 text-white font-semibold bg-[#01E1FF] border border-white rounded-xl 
                       shadow-[-4px_4px_0px_rgba(150,150,150,1)] 
                       hover:translate-x-[-2px] hover:translate-y-[2px] 
                       hover:shadow-[-2px_2px_0px_rgba(150,150,150,1)] 
                       hover:bg-[#0BBAD1] transition duration-200 ease-in-out">
            Selanjutnya
        </button>
    </div>
</form>

{{-- JS untuk handle slide pertanyaan --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const steps = document.querySelectorAll('[data-step]');
        const totalSteps = steps.length;
        let currentStep = 1;

        const progressText = document.getElementById('progress-text');
        const progressBar  = document.getElementById('progress-bar');
        const btnNext      = document.getElementById('btn-next');
        const btnBack      = document.getElementById('btn-back');
        const form         = document.getElementById('tes-asthma-form');

        function updateProgress() {
            progressText.textContent = `Pertanyaan ${currentStep} dari ${totalSteps}`;
            const percent = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${percent}%`;
        }

        function showStep(step) {
            steps.forEach(sec => {
                const s = parseInt(sec.getAttribute('data-step'));
                if (s === step) {
                    sec.classList.remove('hidden');
                } else {
                    sec.classList.add('hidden');
                }
            });

            // Tombol kembali disable di step 1
            btnBack.disabled = (step === 1);

            // Ubah teks tombol next di step terakhir
            if (step === totalSteps) {
                btnNext.textContent = 'Submit';
            } else {
                btnNext.textContent = 'Selanjutnya';
            }

            updateProgress();
        }

        btnNext.addEventListener('click', (e) => {
            // kalau belum step terakhir -> jangan submit dulu
            if (currentStep < totalSteps) {
                e.preventDefault(); // cegah submit
                currentStep++;
                showStep(currentStep);
                return;
            }
            // kalau sudah step terakhir, biarkan form submit normal (HTML5 validation jalan)
        });

        btnBack.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // Init
        showStep(currentStep);
    });
</script>
@endsection
