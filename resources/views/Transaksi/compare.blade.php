<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Compare</title>
    
    <link rel="stylesheet" href="{{ url('') }}/dist/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{ url('') }}/dist/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{ url('') }}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ url('') }}/dist/assets/css/app.css">
    <link rel="shortcut icon" href="{{ url('') }}/dist/assets/images/favicon.svg" type="image/x-icon">
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
        <script src="{{ url('') }}/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{ url('') }}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/dist/assets/js/app.js"></script>
    
    <script src="{{ url('') }}/dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ url('') }}/dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ url('') }}/dist/assets/js/pages/dashboard.js"></script>

    <script src="{{ url('') }}/dist/assets/js/main.js"></script>
</body>
</html>
