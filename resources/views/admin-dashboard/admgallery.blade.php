@extends('admin-dashboard.layouts.body')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

         @include('admin-dashboard.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                   <!-- Topbar -->
                   <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    @include('admin-dashboard.layouts.topbar')

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
                   </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#galleryModal">
                            <i class="fas fa-fw fa-plus"></i>
                              Add Picture
                         </span>
                    </div>

                     {{-- display success message on a successful action --}}
                     @if(Session::has('success'))
                     <div class="alert alert-success" role="alert">
                     {{ Session::get('success') }}
                     </div>
                     @endif

                     {{-- display error on top of the form --}}
                     @if ($errors->any())
                     <div class="alert alert-danger" role="alert">
                         <ul class="list-group">
                             @foreach ($errors->all() as $error )
                             <li class="list-group-item">
                             {{ $error }}
                             </li>
                             @endforeach
                         </ul>
                     </div>
                     @endif

                    <div class="row">

                        <!-- DataTales Example -->
                    <div class="card col-md-12 col-lg-12 shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="branchesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>picture</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>picture</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($gallery_images as $gallery_image)
                                            <tr>
                                                <td>
                                                    <img style="border:2px solid blue; border-radius:100%;" src="assets/img/{{ $gallery_image->picture_url }}" height="50" width="50" alt="Corporate Logo">
                                                </td>
                                                <td>{{ $gallery_image->year }}</td>
                                                <td>
{{--                                                    <button class="btn-sm btn-warning">edit</button>--}}
                                                    <a href="/delete-gallery-image/{{ $gallery_image->id }}" class="btn-sm btn-info">delete</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>


                    </div>

                    <!-- Content Row -->
                    <div class="row">


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Add Gallery Image Modal-->
    <form action="/add-gallery-image" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Add Picture</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="exampleInputEmail1">Year</label><br>
                        <select style="border-radius:5px; width:100%; padding:10px;" id="picture_year" name="picture_year" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          <option selected value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2022">2023</option>
                          <option value="2022">2024</option>
                          <option value="2022">2025</option>
                          <option value="2022">2026</option>
                        </select>
                    </div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <label style="margin-left:0px; font-weight:bold;" for="picture">Photo</label>
                        <input type="file" style="padding-top:10px; padding-bottom:40px;" class="form-control" name="picture" id="picture" >
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Picture</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </form>

    @include('admin-dashboard.layouts.javascript')

@endsection
