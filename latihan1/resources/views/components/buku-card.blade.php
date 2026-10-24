@props(['buku'])

<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
    <h3>{{ $buku->kode_buku }} - {{ $buku->judul }}</h3>
    <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
    <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>

    @if($buku->stok > 0)
        <p style="color: green;"><strong>Status:</strong> Tersedia</p>
    @else
        <p style="color: red;"><strong>Status:</strong> Tidak Tersedia</p>
    @endif
    <p><strong>Stok:</strong> {{ $buku->stok }}</p>
</div>