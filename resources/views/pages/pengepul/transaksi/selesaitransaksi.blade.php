@extends('layouts.pengepul_layouts.app')
@section('content')

<div class="mb-4 flex flex-row gap-12">
    <a href="{{ route('transaksi-pengepul') }}">
        <i data-feather="arrow-left"></i>
    </a>
    <p>Selesaikan Transaksi</p>
</div>

<form action="{{ route('selesaikan-transaksi-proses', $transaksi->id_transaksi) }}" method="POST" class="flex flex-col">
    @csrf
    @method('PUT')

    <label for="" class="font-semibold">Jenis Pembayaran</label>
    <select name="id_pembayaran" id="" class="border-0 px-8 py-2 rounded-xl">
        @foreach ( $pembayaran as $jenis)
            <option value="{{ $jenis->id_pembayaran }}">{{ $jenis->jenis_pembayaran }}</option>
        @endforeach
    </select>

    <button type="submit" class="px-16 py-4 bg-[#1C3F3A] font-semibold text-[#edebe4] rounded-xl absolute right-4 bottom-2">Selesaikan Transaksi</button>
</form>

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