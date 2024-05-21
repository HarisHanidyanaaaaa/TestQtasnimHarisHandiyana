<!DOCTYPE html>
<html>
<head>
    <title>Perbandingan Jenis Barang</title>
</head>
<body>
    <h1>Perbandingan Jenis Barang</h1>

    <form method="GET" action="{{ route('transaksi.compare') }}">
        <label for="jenis_barang">Jenis Barang:</label>
        <input type="text" id="jenis_barang" name="jenis_barang" value="{{ request('jenis_barang') }}">

        <label for="start_date">Tanggal Mulai:</label>
        <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}">

        <label for="end_date">Tanggal Selesai:</label>
        <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}">

        <button type="submit">Filter</button>
    </form>

    <h2>Transaksi Terbanyak</h2>
    @if($terbanyak)
        <p>ID Transaksi: {{ $terbanyak->id }}</p>
        <p>Nama Barang: {{ $terbanyak->nama_barang }}</p>
        <p>Jumlah Terjual: {{ $terbanyak->jumlah_terjual }}</p>
        <p>Jenis Barang: {{ $terbanyak->jenis_barang }}</p>
        <p>Tanggal Transaksi: {{ $terbanyak->tanggal_transaksi }}</p>
    @else
        <p>Tidak ada transaksi.</p>
    @endif

    <h2>Transaksi Terendah</h2>
    @if($terendah)
        <p>ID Transaksi: {{ $terendah->id }}</p>
        <p>Nama Barang: {{ $terendah->nama_barang }}</p>
        <p>Jumlah Terjual: {{ $terendah->jumlah_terjual }}</p>
        <p>Jenis Barang: {{ $terendah->jenis_barang }}</p>
        <p>Tanggal Transaksi: {{ $terendah->tanggal_transaksi }}</p>
    @else
        <p>Tidak ada transaksi.</p>
    @endif
</body>
</html>
