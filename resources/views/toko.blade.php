@include('layouts.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DASHBOARD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fa fa-list-alt"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Halaman</h6>
                        <a class="collapse-item" href="http://127.0.0.1:8000/dashboard">Dashboard</a>
                        <a class="collapse-item active" href="http://127.0.0.1:8000/toko">Data Pemilik Toko</a>
                        <a class="collapse-item" href="http://127.0.0.1:8000/pengguna">Data Pengguna</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               @include('layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>Nama_Toko</th>
                                            <th>Alamat</th>
                                            <th>No_Telepon</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <a href="{{route('toko.create')}}" class="btn btn-primary">Tambah Data<i class=" ml-2 fas fa-plus-square"></i></a>
                                      <br>
                                      <br>
                                  <?php $No=1;?>
                                  @foreach ($toko as $item)
                                        <tr>
                                            <td>{{ $No }}</td>
                                            <td>{{ $item->Email }}</td>
                                            <td>{{ $item->Nama }}</td>
                                            <td>{{ $item->Nama_Toko }}</td>
                                            <td>{{ $item->Alamat }}</td>
                                            <td>{{ $item->No_Telepon }}</td>
                                            <form action="{{route('toko.destroy', $item->id)}}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                            <td>
                                            <a href="{{route('toko.edit', $item->id)}}" class="btn btn-primary">Edit<i class=" ml-2 fas fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger">Hapus<i class=" ml-2 fa fa-trash"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                  <?php $No++; ?>
                                  @endforeach
                                  {{$toko->links()}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('layouts.footer')