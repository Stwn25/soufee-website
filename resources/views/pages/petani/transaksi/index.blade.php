@extends('layouts.petani_layouts.app')
@section('content')
    
<div class="grid grid-cols-2 gap-2 text-center">
    {{-- class="bg-[#1C3F3A] text-[#edebe] py-2 rounded-md" --}}
    
    <div class="border-2 border-[#1C3F3A] text-[#edebe4] bg-[#1C3F3A] rounded-md py-2 cursor-pointer" id="bt-pending">
        <p class="font-medium">Pending</p>
    </div>
    
    <div class="border-2 border-[#1C3F3A] text-[#1C3F3A] rounded-md py-2 cursor-pointer" id="bt-proses">
        <p class="font-medium">Proses</p>
    </div>

</div>


<div class="" id="data-pending">
    <table class="w-full text-center mt-2">
        <thead>
            <tr class="border-b-2 border-[#d9d9d9]">
                <th>No.</th>
                <th>Tanggal Permintaan</th>
                <th>Pengepul</th>
                <th>Jenis Kopi</th>
                <th>Jumlah Permintaan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis_pending as $transaksi)
                <tr class="py-4 border-b-2 border-[#d9d9d9]">
                    <td>{{ $loop->iteration }}</td>
                    <td class="py-4">{{ $transaksi->created_at ->format('d M Y') }}</td>
                    <td class="py-4">{{ $transaksi->users->name }}</td>
                    <td>{{ $transaksi->kapasitas->jenis_kopis->nama_jenis }}</td>
                    <td>{{ $transaksi->jumlah_permintaan }} kg</td>
                    <td>Rp.{{ number_format($transaksi->total_harga) }}</td>
                    <td class="flex justify-center py-4">
                        <div class="flex gap-2">
                            <form action="{{ route('delete-permintaan', $transaksi->id_transaksi) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="bg-[#ff4b4b] text-white py-2 px-3 rounded-md">Batalkan</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="hidden" id="data-proses">
    <table class="w-full text-center mt-2">
        <thead>
            <tr class="border-b-2 border-[#d9d9d9]">
                <th>No.</th>
                <th>Tanggal Permintaan</th>
                <th>Pengepul</th>
                <th>Jenis Kopi</th>
                <th>Jumlah Permintaan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis_proses as $transaksi)
                <tr class="py-4 border-b-2 border-[#d9d9d9]">
                    <td>{{ $loop->iteration }}</td>
                    <td class="py-4">{{ $transaksi->created_at ->format('d M Y') }}</td>
                    <td class="py-4">{{ $transaksi->users->name }}</td>
                    <td>{{ $transaksi->kapasitas->jenis_kopis->nama_jenis }}</td>
                    <td>{{ $transaksi->jumlah_permintaan }} kg</td>
                    <td>Rp.{{ number_format($transaksi->total_harga) }}</td>
                    <td class="flex justify-center py-4">
                        <div class="flex gap-2 cursor-default   ">
                                <p class="bg-[#ffb703] text-white py-2 px-3 rounded-md">Diproses</p>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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

    const pending = document.querySelector('#data-pending');
    const proses = document.querySelector('#data-proses');
    const btPending = document.querySelector('#bt-pending');
    const btProses = document.querySelector('#bt-proses');

    btProses.addEventListener('click', () => {
        pending.classList.add('hidden');
        proses.classList.remove('hidden');
        btPending.style.backgroundColor = '#edebe4';
        btPending.style.color = '#1C3F3A';
        btProses.style.backgroundColor = '#1C3F3A';
        btProses.style.color = '#edebe4';
    });

    btPending.addEventListener('click', () => {
        pending.classList.remove('hidden');
        proses.classList.add('hidden');
        btPending.style.backgroundColor = '#1C3F3A';
        btPending.style.color = '#edebe4';
        btProses.style.backgroundColor = '#edebe4';
        btProses.style.color = '#1C3F3A';
    });

</script>

@endsection
