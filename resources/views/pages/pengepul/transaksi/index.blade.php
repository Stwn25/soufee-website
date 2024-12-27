@extends('layouts.pengepul_layouts.app')
@section('content')
    
<h1>ini transaksi</h1>

<script>
    const bt = document.querySelector('#bt-transaksi');
    const teks = document.querySelector('#teks-transaksi');
    const img1 = document.querySelector('#img-transaksi-1');
    const img2 = document.querySelector('#img-transaksi-2');
    
    bt.style.backgroundColor = '#1C3F3A';
    teks.style.color = '#edebe4';
    img1.style.display = 'none';
    img2.style.display = 'block';
</script>
@endsection