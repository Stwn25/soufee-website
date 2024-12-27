@extends('layouts.petani_layouts.app')
@section('content')
    
<form action="{{ route('permintaan-petani-proses', $kapasitas->id_kapasitas) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="jumlah_permintaan" id="">
    <button type="submit">Minta</button>
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
