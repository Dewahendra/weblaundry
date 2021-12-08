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
                        <a class="collapse-item" href="http://127.0.0.1:8000/">Dashboard</a>
                        <a class="collapse-item" href="http://127.0.0.1:8000/toko">Data Pemilik Toko</a>
                        <a class="collapse-item active" href="http://127.0.0.1:8000/pengguna">Data Pengguna</a>
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
                    <h1 class="h3 mb-4 text-gray-800">Data Pemilik Toko</h1>

                     <!-- DataTales Example -->
                     <div class="container">

                      <!-- Outer Row -->
                      <div class="row justify-content-center">
              
                          <div class="col-xl-10 col-lg-12 col-md-9">
              
                              <div class="card o-hidden border-0 shadow-lg my-5">
                                  <div class="card-body p-0">
                                      <!-- Nested Row within Card Body -->
                                              <div class="p-5">
                                                  <div class="text-center">
                                                      <h1 class="h4 text-gray-900 mb-4">{{ $title }}</h1>
                                                  </div>
                                                  <form action="{{(isset($pengguna))?route('pengguna.update', $pengguna->id):route('pengguna.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @if (isset($pengguna))
                                                    @method('PUT')
                                                    @endif
                                                    <div class="form-group">
                                                        <label class="block text-sm font-medium text-black">
                                                          Email
                                                        </label>
                                                          <input type="email" name="Email" value="{{(isset($pengguna))?$pengguna->Email:old('Email')}}" class="@error('Email') @enderror form-control form-control-user">
                                                      </div>
                                                      <div class="text-xs"> @error('Email') {{$message}} @enderror</div>

                                                      <div class="form-group">
                                                        <label class="block text-sm font-medium text-black">
                                                          Nama
                                                        </label>
                                                          <input type="text" name="Nama" value="{{(isset($pengguna))?$pengguna->Nama:old('Nama')}}" class="@error('Nama') @enderror form-control form-control-user">
                                                      </div>
                                                      <div class="text-xs"> @error('Nama') {{$message}} @enderror</div>

                                                      <div class="form-group">
                                                        <label class="block text-sm font-medium text-black">
                                                          Alamat
                                                        </label>
                                                          <input type="text" name="Alamat" value="{{(isset($pengguna))?$pengguna->Alamat:old('Alamat')}}" class="@error('Alamat') @enderror form-control form-control-user">
                                                      </div>
                                                      <div class="text-xs"> @error('Alamat') {{$message}} @enderror</div>

                                                      <div class="form-group">
                                                      <label class="block text-sm font-medium text-black">
                                                        No_Telepon
                                                      </label>
                                                          <input type="number" name="No_Telepon" value="{{(isset($pengguna))?$pengguna->No_Telepon:old('No_Telepon')}}" class="@error('No_Telepon') @enderror form-control form-control-user">
                                                      </div>
                                                      <div class="text-xs"> @error('No_Telepon') {{$message}} @enderror</div>
                                                      <br>
                                                      <button type="submit" class="btn btn-primary btn-user btn-block">
                                                          Simpan
                                                      </button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
              
                          </div>
              
                      </div>
              
                  </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('layouts.footer')