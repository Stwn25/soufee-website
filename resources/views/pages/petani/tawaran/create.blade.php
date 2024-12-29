@extends('layouts.petani_layouts.app')
@section('content')

<div class="mb-4">
    <a href="{{ route('dashboard-petani') }}">
        <i data-feather="arrow-left"></i>
    </a>
</div>

<div class="grid grid-cols-[0.7fr_1fr] gap-4 mb-4">
    <div class="rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/coffe-bean-img.jpg') }}" alt="kopi">
    </div>
    <div class=" flex flex-col justify-around">
        <div>
            <p>Pengepul:</p>
            <p class="font-semibold">{{ $kapasitas->users->name}}</p>
        </div>
        <div>
            <p>Jenis Kopi:</p>
            <p class="font-semibold">{{ $kapasitas->jenis_kopis->nama_jenis}}</p>
        </div>
        <div>
            <p>Harga:</p>
            <p class="font-semibold">Rp.{{ number_format($kapasitas->harga_per_kg) }} <span class="font-light text-gray-500 text-[80%]">/kg </span></p>
        </div>
        <div>
            <p>Sisa Kapasitas:</p>
            <p class="font-semibold">{{ number_format($kapasitas->kapasitas_terbaru) }}kg <span class="font-light text-gray-500 text-[80%]">/{{ number_format($kapasitas->kapasitas_maksimum) }}kg </span></p>
        </div>
        <div>
            <p>Deskripsi:</p>
            <p class="font-semibold">{{ $kapasitas->deskripsi }}</p>
        </div>
    </div>
</div>
    
<form action="{{ route('permintaan-petani-proses', $kapasitas->id_kapasitas) }}" method="POST" class="flex flex-col gap-2">
    @csrf
    @method('PUT')
    <input type="number" name="jumlah_permintaan" id="" placeholder="Masukkan jumlah kopi yang ingin dijual (kg)" class="text-center border-0 px-8 py-2 rounded-xl">
    <button type="submit" class="w-ful py-2 text-[#edebe4] border-2 border-[#1C3F3A] bg-[#1C3F3A] font-semibold rounded-md">Jual Kopi</button>
</form>

<script>
    const bt = document.querySelector('#bt-katalog');
    const teks = document.querySelector('#teks-katalog');
    const img1 = document.querySelector('#img-katalog-1');
    const img2 = document.querySelector('#img-katalog-2');
    
    bt.style.backgroundColor = '#1C3F3A';
    teks.style.color = '#edebe4';
    img1.style.display = 'none';
    img2.style.display = 'block';
</script>
@endsection
