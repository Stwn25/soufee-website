@extends('layouts.pengepul_layouts.app')
@section('content')

<p>Ini Riwayat</p>

<script>
    const bt = document.querySelector('#bt-riwayat');
    const teks = document.querySelector('#teks-riwayat');
    const img1 = document.querySelector('#img-riwayat-1');
    const img2 = document.querySelector('#img-riwayat-2');
    
    bt.style.backgroundColor = '#1C3F3A';
    teks.style.color = '#edebe4';
    img1.style.display = 'none';
    img2.style.display = 'block';

</script>
@endsection