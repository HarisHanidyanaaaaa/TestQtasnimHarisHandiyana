<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang - Index</title>
    
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
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Data Barang  | jika ingin menambah data klik disini</h4>
                      <a href="" type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#modalId">tambah data</a>
                <!-- Modal -->
                <div
                    class="modal fade"
                    id="modalId"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modalTitleId"
                    aria-hidden="true"
                >
                  <form action="{{ route('Barang-Store') }}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div
                        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                   Tambah Data
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                  
                                    <input type="text" class="form-control" id="inputData" placeholder="Nama Barang" name="nama_barang">
                                </div>
                                 <div class="form-group mb-3">
                                  
                                    <input type="number" class="form-control" id="inputData" placeholder="Stok" name="stok">
                                </div>
                                 <div class="form-group mb-3">
                                  
                                    <input type="text" class="form-control" id="inputData" placeholder="Jenis Barang" name="jenis_barang">
                                </div>
                                    
                              
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="submit"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                
                <script>
                    var modalId = document.getElementById('modalId');
                
                    modalId.addEventListener('show.bs.modal', function (event) {
                          // Button that triggered the modal
                          let button = event.relatedTarget;
                          // Extract info from data-bs-* attributes
                          let recipient = button.getAttribute('data-bs-whatever');
                
                        // Use above variables to manipulate the DOM
                    });
                </script>
                        <div class="d-flex ">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                       <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Jenis Barang</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @php ($counter = 1) @foreach ($barang as $b)
                                
                                <tr>
                                    <td>{{ $counter }}</td> 
                                    <td>{{ $b->nama_barang }}</td>
                                    <td>{{ $b->stok }}</td>
                                    <td>{{ $b->jenis_barang }}</td>
                                   <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$b->id}}">Edit</button> <div class="modal fade" id="editModal{{$b->id}}" tabindex="-1" aria-labelledby="editModal{{$b->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal{{$b->id}}Label">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    <form action="{{ url('Barang-Update/'.$b->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                        <div class="mb-3">
                       
                            <input type="text" class="form-control" id="editProduct{{$b->nama_barang}}" name="nama_barang" value="{{$b->nama_barang}}" >
                        </div>
                        <div class="mb-3">
                  
                            <input type="number" class="form-control" id="editProduct{{$b->stok}}" name="stok" value="{{$b->stok}}" >
                        </div>
                      
                        <div class="mb-3">
                           
                            <input type="text" class="form-control" id="editProduct{{$b->jenis_barang}}" name="jenis_barang" value="{{$b->jenis_barang}}" >
                        </div>
                        
                        
                     
                            
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                       <a href="{{ route('Barang-Delete', $b->id) }}"class="btn btn-danger delete-btn"
       onclick="event.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    document.getElementById('delete-form-{{$b->id}}').submit();
                }">
        Hapus
    </a>

    <form id="delete-form-{{$b->id}}" action="{{ route('Barang-Delete', $b->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
                                    </td>
                                </tr>
                               
                              @php ($counter++) @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
