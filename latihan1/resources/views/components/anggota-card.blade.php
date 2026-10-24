@props(['anggota'])

<div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
    <h3>{{ $anggota->id }} - {{ $anggota->nama }}</h3>
    <p><strong>Alamat:</strong> {{ $anggota->alamat }}</p>
    <p><strong>No. Telepon:</strong> {{ $anggota->no_telp }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $anggota->tgl_lhr }}</p>
</div>