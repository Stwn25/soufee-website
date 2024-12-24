@extends('Petani.layouts.app')
@section('content')



<script>
    const btkatalog = document.querySelector('#bt-katalog');
    const btriwayat = document.querySelector('#bt-riwayat');
    const btpenjemputan = document.querySelector('#bt-penjemputan');

    const tekskatalog = document.querySelector('#teks-katalog');
    const teksriwayat = document.querySelector('#teks-riwayat');
    const tekspenjemputan = document.querySelector('#teks-penjemputan');

    const penjemputan1 = document.querySelector('#img-truk-1');
    const penjemputan2 = document.querySelector('#img-truk-2');

    const katalog1 = document.querySelector('#img-katalog-1');
    const katalog2 = document.querySelector('#img-katalog-2');

    const riwayat1 = document.querySelector('#img-riwayat-1');
    const riwayat2 = document.querySelector('#img-riwayat-2');

    const isiKatalog = document.querySelector('#isi-katalog');
    const isiRiwayat = document.querySelector('#isi-riwayat');
    const isiPenjemputan = document.querySelector('#isi-penjemputan');

    btriwayat.style.backgroundColor = '#1C3F3A';
    teksriwayat.style.color = '#edebe4';
    riwayat1.style.display = 'none';
    riwayat2.style.display = 'block';

    btpenjemputan.style.backgroundColor = '#edebe4';
    tekspenjemputan.style.color = '#1C3F3A';
    penjemputan1.style.display = 'block';
    penjemputan2.style.display = 'none';

    btkatalog.style.backgroundColor = '#edebe4';
    tekskatalog.style.color = '#1C3F3A';
    katalog1.style.display = 'block';
    katalog2.style.display = 'none';

    isiKatalog.style.display = 'none';
    isiRiwayat.style.display = 'block';
    isiPenjemputan.style.display = 'none';
</script>
@endsection
