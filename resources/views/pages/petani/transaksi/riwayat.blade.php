@extends('layouts.petani_layouts.app')
@section('content')
    
<table class="w-full text-center mt-2">
    <thead>
        <tr class="border-b-2 border-[#d9d9d9]">
            <th>No.</th>
            <th>Jenis Kopi</th>
            <th>Tanggal Permintaan</th>
            <th>Tanggal Penyelesaian</th>
            <th>Jumlah Permintaan</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksis_selesai as $transaksi)
            <tr class="py-4 border-b-2 border-[#d9d9d9]">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->kapasitas->jenis_kopis->nama_jenis }}</td>
                <td>{{ $transaksi->created_at ->format('d M Y') }}</td>
                <td>{{ $transaksi->updated_at ->format('d M Y') }}</td>
                <td>{{ $transaksi->jumlah_permintaan }} kg</td>
                <td>Rp.{{ number_format($transaksi->total_harga) }}</td>
                <td class="flex justify-center items-center py-4">
                    <div class="flex gap-2">
                        <p class="bg-[#1C3F3A] text-white py-2 px-3 rounded-md">Selesai</p>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

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