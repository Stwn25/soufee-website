@extends('layouts.petani_layouts.app')
@section('content')
    
<div>
    <h1>bagian per filteran</h1>
</div>

<div class="w-full grid grid-cols-4 gap-4 pb-4">
    @foreach ($kapasitas as $item)
    <div class="rounded-xl shadow-md overflow-hidden relative z-1">
        <div>
            <img src="{{ asset('img/coffe-bean-img.jpg') }}" alt="kopi">
        </div>
        <div class="p-2 flex flex-col gap-2">
            <div class="flex flex-col"> 
                <p><span class="font-semibold text-xl">Rp.{{ number_format($item->harga_per_kg) }}</span>/kg</p>
                <p class="text-gray-400 text-sm">{{ $item->users->name}}</p>
            </div>
            <div class="w-full overflow-hidden border-1 items-center flex border-[#1C3F3A] rounded-full h-4 mt-2">
                <div class="bg-[#1C3F3A] h-4 rounded-full" style="width:{{ $item->kapasitas_terbaru/$item->kapasitas_maksimum * 100 }}%;"></div>
            </div>
            <div class="flex justify-between">
                <p class="text-gray-400 font-medium text-sm">{{ $item->jenis_kopis->nama_jenis}}</p>
                <p class="font-semibold text-sm">{{ number_format($item->kapasitas_terbaru) }}kg <span class="font-light text-gray-500 text-[80%]">/ {{ number_format($item->kapasitas_maksimum) }}kg </span></p>
            </div>
            <p class="mb-16">{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</p>
            <div class="flex gap-2 absolute bottom-4 right-1.5">
                <a href="{{ route('permintaan-petani', $item->id_kapasitas) }}">
                    <p class="bg-[#ffb703] text-white py-2 px-8 rounded-md">Jual Disini</p>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

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
