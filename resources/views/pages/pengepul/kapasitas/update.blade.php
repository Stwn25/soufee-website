@extends('layouts.pengepul_layouts.app')
@section('content')
    
<form action="{{ route('update-kapasitas-proses', $kapasitas->id_kapasitas) }}" method="POST" class="flex flex-col">
    @csrf
    @method('PUT')
    <label for="id_jenis_kopi" class="font-semibold">Jenis Kopi</label>
    <select name="id_jenis_kopi" id="id_jenis_kopi" class="border-0 px-8 py-2 rounded-xl mb-4">
        @foreach ($jeniskopi as $namajenis )
            <option value="{{ $namajenis->id_jenis_kopi }}" {{ $namajenis->id_jenis_kopi == $kapasitas->id_jenis_kopi ? 'selected' : '' }}> {{ $namajenis->nama_jenis }} </option>
        @endforeach
    </select>

    <label for="kapasitas" class="font-semibold">Kapasitas Maksimum</label>
    <input type="number" name="kapasitas_maksimum" id="kapasitas" placeholder="Masukkan besar kapasitas" value="{{ $kapasitas->kapasitas_maksimum }}" class="mb-4 border-0 px-8 py-2 rounded-xl">

    <label for="deskripsi" class="font-semibold">Deskripsi</label>
    <input type="textarea" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi kapasitas" value="{{ $kapasitas->deskripsi }}" class="mb-4 border-0 px-8 py-2 rounded-xl">
    <div class="absolute right-4 bottom-0">
        <a href="{{ route('dashboard-pengepul') }}" class="px-16 py-3 text-[#1C3F3A] border-2 border-[#1C3F3A] font-semibold rounded-md">Batal</a>
        <button type="submit" class="px-16 py-3 bg-[#1C3F3A] font-semibold text-[#edebe4] rounded-md">Update</button>
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