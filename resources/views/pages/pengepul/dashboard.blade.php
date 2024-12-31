@extends('layouts.pengepul_layouts.app')
@section('content')
    
<div class="w-full flex justify-between items-center">
    <p>Kapasitas yang Anda miliki.</p>
    <a href="{{ route('create-kapasitas') }}">
        <div class="flex gap-2 py-2 px-3 bg-[#1C3F3A] rounded-xl">
            <img src="{{ asset('img/tabler_plus.svg') }}" alt="">
            <button type="submit" class="font-medium text-white">Tambah Kapasitas</button>
        </div>
    </a>
</div>

<div class="w-full grid grid-cols-4 gap-4 pb-4">
    @foreach ($kapasitas as $item)

    <div class="rounded-xl shadow-md overflow-hidden relative z-1">
        <div>
            <img src="{{ asset('img/coffe-bean-img.jpg') }}" alt="kopi">
        </div>
        <div class="p-2 flex flex-col gap-2">
            <p><span class="font-semibold text-xl">Rp.{{ number_format($item->harga_per_kg) }}</span>/kg</p>
            <div class="w-full overflow-hidden border-1 items-center flex border-[#1C3F3A] rounded-full h-4 mt-2">
                <div class="bg-[#1C3F3A] h-4 rounded-full" style="width:{{ $item->kapasitas_terbaru/$item->kapasitas_maksimum * 100 }}%;"></div>
            </div>
            @if ($item->kapasitas_terbaru > 0)
                <div class="flex justify-between">
                    <p class="text-gray-400 font-medium text-sm">{{ $item->jenis_kopis->nama_jenis}}</p>
                    <p class="font-semibold text-right text-sm">{{  number_format($item->kapasitas_terbaru) }}kg <span class="font-light text-gray-500 text-[80%]">/ {{ number_format($item->kapasitas_maksimum) }}kg </span></p>
                </div>
            @else
                <div class="flex justify-between">
                    <p class="text-gray-400 font-medium text-sm">{{ $item->jenis_kopis->nama_jenis}}</p>
                    <p class="font-semibold text-right text-sm text-[#ff4b4b]">Habis!</p>
                </div>
            @endif
            <p class="mb-16">{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</p>
            <div class="flex gap-2 absolute bottom-4 right-1.5">
                <a href="{{ route('update-kapasitas', $item->id_kapasitas) }}">
                    <p class="bg-[#ffb703] text-white py-2 px-3 rounded-md">update</p>
                </a>
                <form action="{{ route('delete-kapasitas', $item->id_kapasitas) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="bg-[#ff4b4b] text-white py-2 px-3 rounded-md">Delete</button>
                </form>
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