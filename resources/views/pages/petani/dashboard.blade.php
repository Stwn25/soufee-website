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
        <div class="p-2">
            <p class="font-bold text-xl">{{ $item->kapasitas }} kg</p>
            <p class="text-gray-400">{{ $item->jenis_kopis->nama_jenis}}</p>
            <p class="mb-16">{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</p>
            <div class="flex gap-2 absolute bottom-4 right-1.5">
                
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    const btkatalog = document.querySelector('#bt-katalog');
    const btriwayat = document.querySelector('#bt-riwayat');
    const btpenjemputan = document.querySelector('#bt-penjemputan');

    const tekskatalog = document.querySelector('#teks-katalog');
    const teksriwayat = document.querySelector('#teks-riwayat');
    const tekspenjemputan = document.querySelector('#teks-penjemputan');

    const penjemputan1 = document.querySelector('#img-truk-1');
    const penjemputan2 = document.querySelector('#img-truk-2');

    const katalog1 = document.querySelector('#img-katalog-1');
    const katalog2 = document.querySelector('#img-katalog-2');

    const riwayat1 = document.querySelector('#img-riwayat-1');
    const riwayat2 = document.querySelector('#img-riwayat-2');

    const isiKatalog = document.querySelector('#isi-katalog');
    const isiRiwayat = document.querySelector('#isi-riwayat');
    const isiPenjemputan = document.querySelector('#isi-penjemputan');

    btkatalog.style.backgroundColor = '#1C3F3A';
    tekskatalog.style.color = '#edebe4';
    katalog1.style.display = 'none';
    katalog2.style.display = 'block';

    btpenjemputan.style.backgroundColor = '#edebe4';
    tekspenjemputan.style.color = '#1C3F3A';
    penjemputan1.style.display = 'block';
    penjemputan2.style.display = 'none';

    btriwayat.style.backgroundColor = '#edebe4';
    teksriwayat.style.color = '#1C3F3A';
    riwayat1.style.display = 'block';
    riwayat2.style.display = 'none';

    isiKatalog.style.display = 'block';
    isiRiwayat.style.display = 'none';
    isiPenjemputan.style.display = 'none';
</script>
@endsection
