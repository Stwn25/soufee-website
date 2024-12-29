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

    <label for="kapasitas" class="font-semibold">Harga per Kilogram</label>
    <input type="number" name="harga_per_kg" id="kapasitas" placeholder="Masukkan harga kopi per kilogram" class="mb-4 border-0 px-8 py-2 rounded-xl" value="{{ $kapasitas->harga_per_kg }}">

    <label for="deskripsi" class="font-semibold">Deskripsi</label>
    <input type="textarea" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi kapasitas" value="{{ $kapasitas->deskripsi }}" class="mb-4 border-0 px-8 py-2 rounded-xl">
    <div class="absolute right-4 bottom-0">
        <a href="{{ route('dashboard-pengepul') }}" class="px-16 py-3 text-[#1C3F3A] border-2 border-[#1C3F3A] font-semibold rounded-md">Batal</a>
        <button type="submit" class="px-16 py-3 bg-[#1C3F3A] font-semibold text-[#edebe4] rounded-md">Update</button>
    </div>
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