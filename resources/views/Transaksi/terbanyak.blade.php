<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Index</title>
    
    <link rel="stylesheet" href="{{ url('') }}/dist/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{ url('') }}/dist/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{ url('') }}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ url('') }}/dist/assets/css/app.css">
    <link rel="shortcut icon" href="{{ url('') }}/dist/assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
    <div id="app">
        @include('Layout.side')


        <div id="main">
           @include('Layout.head')
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        
        <div class="row mb-4">
            <div class="col-md-12">
                @include('Layout.info')
                
<div
    class="table-responsive"
>
<form action="{{ route('Transaksi-Index') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari" name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
</form>
   
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function updateFields(select) {
        var selectedOption = select.options[select.selectedIndex];
        var stokInput = document.querySelector('input[name="stok"]');
        var jenisInput = document.querySelector('input[name="jenis_barang"]');
        
        stokInput.value = selectedOption.getAttribute('data-stok');
        jenisInput.value = selectedOption.getAttribute('data-jenis');
    }
</script>
            </div>
            <div class="col-md-4">
                
               
            </div>
        </div>
    </section>
</div>

         @include('Layout.footer')
        </div>
    </div>
    <script src="{{ url('') }}/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{ url('') }}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/dist/assets/js/app.js"></script>
    
    <script src="{{ url('') }}/dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ url('') }}/dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ url('') }}/dist/assets/js/pages/dashboard.js"></script>

    <script src="{{ url('') }}/dist/assets/js/main.js"></script>
</body>
</html>
