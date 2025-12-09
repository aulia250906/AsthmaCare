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
    <x-asthma.hero />

    {{-- Error / Alert Section --}}
    <x-asthma.error-alerts />

    <!-- Progress Section -->
    <x-asthma.progress />

    <!-- Multi-step Form -->
    <form id="tes-asthma-form" 
          action="{{ route('pertanyaan.kirim') }}" 
          method="POST" 
          class="max-w-5xl mx-auto mt-10 bg-white p-10 rounded-3xl shadow-lg">
        @csrf

        <x-asthma.step1 />
        <x-asthma.step2 />
        <x-asthma.step3 />
        <x-asthma.step4 />
        <x-asthma.step5 />
        <x-asthma.step6 />
        <x-asthma.step7 />
        <x-asthma.step8 />
        <x-asthma.step9 />
        <x-asthma.step10 />

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

    {{-- JS --}}
    <x-asthma.tes-script />
@endsection
