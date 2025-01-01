@extends('layouts.pengepul_layouts.app')
@section('content')
    
<form action="{{ route('update-pegawai-proses', $pegawai->id_pegawai) }}" method="POST" class="flex flex-col">
    @csrf
    @method('PUT')
    <label for="kapasitas" class="font-semibold">Nama Pegawai</label>
    <input type="text" name="nama" id="kapasitas" placeholder="Masukkan nama pegawai" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ $pegawai->nama }}">

    <label for="deskripsi" class="font-semibold">Nomor Telepon Pegawai</label>
    <input type="text" name="no_telepon" id="deskripsi" placeholder="Masukkan nomor telepon pegawai" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ $pegawai->no_telepon }}">

    <label for="deskripsi" class="font-semibold">Alamat Pegawai</label>
    <input type="text" name="alamat" id="deskripsi" placeholder="Masukkan alamat pegawai" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ $pegawai->alamat }}">

    <div class="absolute right-4 bottom-2">
        <a href="{{ route('data-pegawai') }}" class="px-16 py-3 text-[#1C3F3A] border-2 border-[#1C3F3A] font-semibold rounded-md">Batal</a>
        <button type="submit" class="px-16 py-3 bg-[#1C3F3A] font-semibold text-[#edebe4] rounded-md">Update</button>
    </div>
</form>

<script>
    const bt = document.querySelector('#bt-pegawai');
    const teks = document.querySelector('#teks-pegawai');
    const img1 = document.querySelector('#img-user-1');
    const img2 = document.querySelector('#img-user-2');

    bt.style.backgroundColor = '#1C3F3A';
    teks.style.color = '#edebe4';
    img1.style.display = 'none';
    img2.style.display = 'block';
</script>
@endsection