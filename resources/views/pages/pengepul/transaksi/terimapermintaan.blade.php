@extends('layouts.pengepul_layouts.app')
@section('content')

<div class="mb-4 flex flex-row gap-12">
    <a href="{{ route('dashboard-petani') }}">
        <i data-feather="arrow-left"></i>
    </a>
    <p>Atur Transaksi</p>
</div>


<form action="{{ route('terima-permintaan-proses', $transaksi->id_transaksi) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="pegawai">Pilih Pegawai</label>
    <select name="id_pegawai" id="pegawai">
        @foreach ($pegawais as $pegawai)
            <option value="{{ $pegawai->id_pegawai }}" {{ $pegawai->id_pegawai == $transaksi->id_pegawai ? 'selected' : '' }}>{{ $pegawai->nama }}</option>    
        @endforeach
    </select>

    <label for="date">Tanggal Penjemputan</label>
    <input type="date" name="tanggal_penjemputan" id="date">    

    <button type="submit">Proses</button>
</form>


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