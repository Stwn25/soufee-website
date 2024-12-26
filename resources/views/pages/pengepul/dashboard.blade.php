@extends('layouts.pengepul_layouts.app')
@section('content')
    
<div class="w-full flex justify-between  items-center">
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
        <div class="p-2">
            <p class="font-semibold text-xl">{{ $item->kapasitas_terbaru }}kg <span class="font-light text-gray-500 text-[70%]">/ {{ $item->kapasitas_maksimum }}kg </span></p>
            <div class="w-full overflow-hidden border-1 items-center flex border-[#1C3F3A] rounded-full h-4 mt-2">
                <div class="bg-[#1C3F3A] h-4 rounded-full" style="width:{{ $item->kapasitas_terbaru/$item->kapasitas_maksimum * 100 }}%;"></div>
            </div>
            <p class="text-gray-400">{{ $item->jenis_kopis->nama_jenis}}</p>
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
    const btkatalog = document.querySelector('#bt-katalog');
    const btriwayat = document.querySelector('#bt-riwayat');
    const btpegawai = document.querySelector('#bt-pegawai');

    const tekskatalog = document.querySelector('#teks-katalog');
    const teksriwayat = document.querySelector('#teks-riwayat');
    const tekspegawai = document.querySelector('#teks-pegawai');

    const pegawai1 = document.querySelector('#img-user-1');
    const pegawai2 = document.querySelector('#img-user-2');

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

    btpegawai.style.backgroundColor = '#edebe4';
    tekspegawai.style.color = '#1C3F3A';
    pegawai1.style.display = 'block';
    pegawai2.style.display = 'none';

    btriwayat.style.backgroundColor = '#edebe4';
    teksriwayat.style.color = '#1C3F3A';
    riwayat1.style.display = 'block';
    riwayat2.style.display = 'none';

    isiKatalog.style.display = 'block';
    isiRiwayat.style.display = 'none';
    isiPenjemputan.style.display = 'none';
</script>
@endsection