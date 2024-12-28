@extends('layouts.petani_layouts.app')
@section('content')
    
<div>
    <a href="">Diminta</a>
    <a href="">Diproses</a>
</div>

<div class="flex gap-4">
    @foreach ($transaksis as $transaksi)
    <div>
        <p>{{ $transaksi->status_transaksis->status_transaksi }}</p>
        <p>{{ $transaksi->jumlah_permintaan }}</p>
        <p>{{ $transaksi->kapasitas->jenis_kopis->nama_jenis }}</p>
        <p>{{ $transaksi->created_at ->format('H:i') }}</p>
        <p>{{ $transaksi->created_at ->format('d M Y') }}</p>
    </div>
    @endforeach
</div>

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
