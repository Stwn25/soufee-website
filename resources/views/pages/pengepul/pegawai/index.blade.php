@extends('layouts.pengepul_layouts.app')
@section('content')
    
<div class="w-full flex justify-between  items-center">
    <p>Data pegawai yang Anda miliki.</p>
    <a href="{{ route('create-pegawai') }}">
        <div class="flex gap-2 py-2 px-3 bg-[#1C3F3A] rounded-xl">
            <img src="{{ asset('img/tabler_plus.svg') }}" alt="">
            <button type="submit" class="font-medium text-white">Tambah Pegawai</button>
        </div>
    </a>
</div>
    
<div>
    <table class="w-full text-center mt-2">
        <thead>
            <tr class="border-b-2 border-[#d9d9d9]">
                <th>Nama Pegawai</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
                <tr class="py-4 border-b-2 border-[#d9d9d9]">
                    <td class="py-4">{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->no_telepon }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td class="flex justify-center py-4">
                        <div class="flex gap-2">
                            <a href="{{ route('update-pegawai', $pegawai->id_pegawai) }}">
                                <p class="bg-[#ffb703] text-white py-2 px-3 rounded-md">update</p>
                            </a>
                            <form action="{{ route('delete-pegawai', $pegawai->id_pegawai) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-[#ff4b4b] text-white py-2 px-3 rounded-md">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    const bt = document.querySelector('#bt-pegawai');
    const teks = document.querySelector('#teks-pegawai');
    const img1 = document.querySelector('#img-user-1');
    const img2 = document.querySelector('#img-user-2');

    bt.style.backgroundColor = '#1C3F3A';
    teks.style.color = '#edebe4';
    img1.style.display = 'none';
    img2.style.display = 'block';
    // const btkatalog = document.querySelector('#bt-katalog');
    // const btriwayat = document.querySelector('#bt-riwayat');

    // const tekskatalog = document.querySelector('#teks-katalog');
    // const teksriwayat = document.querySelector('#teks-riwayat');


    // const katalog1 = document.querySelector('#img-katalog-1');
    // const katalog2 = document.querySelector('#img-katalog-2');

    // const riwayat1 = document.querySelector('#img-riwayat-1');
    // const riwayat2 = document.querySelector('#img-riwayat-2');
    // btkatalog.style.backgroundColor = '#edebe4';
    // tekskatalog.style.color = '#1C3F3A';
    // katalog1.style.display = 'block';
    // katalog2.style.display = 'none';


    // btriwayat.style.backgroundColor = '#edebe4';
    // teksriwayat.style.color = '#1C3F3A';
    // riwayat1.style.display = 'block';
    // riwayat2.style.display = 'none';
</script>
@endsection