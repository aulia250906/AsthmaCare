@extends('layout.app')

@section('title', 'Profil Saya')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">

    {{-- ALERT SUKSES --}}
    <x-alert-success />

    {{-- HEADER --}}
    <x-header-section />

    {{-- FORM PROFIL (SATU FORM UNTUK SEMUA DATA) --}}
    <x-account-form :user="$user" />

    {{-- CARD GANTI PASSWORD --}}
    <x-password-card />
</div>
@endsection
