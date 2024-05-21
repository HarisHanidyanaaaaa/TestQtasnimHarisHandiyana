<div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{ url('') }}/dist/assets/images/logo.svg" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
                
                <li class='sidebar-title'>Main Menu</li>
                
            
                
                <li class="sidebar-item active ">

                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>

                    
                </li>
                
            
                
                
                
            
                
               
                
                
                <li class="sidebar-item  ">

                    <a href="{{ route('Barang-Index') }}" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Form Data Barang</span>
                    </a>

                    
                </li>
                
            
                
                <li class="sidebar-item  ">

                
            
              
            
                
                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Data Transaksi</span>
                    </a>

                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{ route('Transaksi-Index') }}">Data Transaksi</a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.compare') }}">Data Perbandingan Transaksi</a>
                        </li>
                    
                        
                    </ul>
                    
                </li>
                
            
                
             
                
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
