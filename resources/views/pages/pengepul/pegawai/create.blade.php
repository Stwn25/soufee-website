@extends('layouts.pengepul_layouts.app')
@section('content')
    
<form action="{{ route('store-pegawai') }}" method="POST" class="flex flex-col">
    @csrf

    <label for="kapasitas" class="font-semibold">Nama Pegawai</label>
    <input type="text" name="nama" id="kapasitas" placeholder="Masukkan nama pegawai" class="mb-4 border-0 px-8 py-2 rounded-xl">

    <label for="deskripsi" class="font-semibold">Nomor Telepon Pegawai</label>
    <input type="text" name="no_telepon" id="deskripsi" placeholder="Masukkan nomor telepon pegawai" class="mb-4 border-0 px-8 py-2 rounded-xl">

    <label for="deskripsi" class="font-semibold">Alamat Pegawai</label>
    <input type="text" name="alamat" id="deskripsi" placeholder="Masukkan alamat pegawai" class="mb-4 border-0 px-8 py-2 rounded-xl">

    <div class="absolute right-4 bottom-0">
        <a href="{{ route('data-pegawai') }}" class="px-16 py-3 text-[#1C3F3A] border-2 border-[#1C3F3A] font-semibold rounded-md">Batal</a>
        <button type="submit" class="px-16 py-3 bg-[#1C3F3A] font-semibold text-[#edebe4] rounded-md">Tambah</button>
    </div>
</form>

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

    btkatalog.style.backgroundColor = '#edebe4';
    tekskatalog.style.color = '#1C3F3A';
    katalog1.style.display = 'block';
    katalog2.style.display = 'none';

    btpegawai.style.backgroundColor = '#1C3F3A';
    tekspegawai.style.color = '#edebe4';
    pegawai1.style.display = 'none';
    pegawai2.style.display = 'block';

    btriwayat.style.backgroundColor = '#edebe4';
    teksriwayat.style.color = '#1C3F3A';
    riwayat1.style.display = 'block';
    riwayat2.style.display = 'none';

    isiKatalog.style.display = 'block';
    isiRiwayat.style.display = 'none';
    isiPenjemputan.style.display = 'none';
</script>
@endsection