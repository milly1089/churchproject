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
                    <h1 class="h3 mb-0 text-gray-800">Weeekly Bulletin</h1>
                   </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#bulletinModal">                   
                            <i class="fas fa-fw fa-plus"></i>
                              Add Bulletin
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
                            <h6 class="m-0 font-weight-bold text-primary">Testimonies</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="branchesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Bulletin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Bulletin</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($bulletins as $bulletin)
                                            <tr>
                                                <td>{{ $bulletin->bulletin_url  }}</td>
                                                <td>
                                                    <a href="/delete-mission" class="btn-sm btn-info">delete</a>
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

    <!-- Add Mission Modal-->
    <form action="/add-bulletin" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="bulletinModal" tabindex="-1" role="dialog" aria-labelledby="bulletinModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bulletinModalLabel">Add Weekly Bulletin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <label style="margin-left:0px; font-weight:bold;" for="project_photo">Bulletin</label>
                        <input type="file" style="padding-top:10px; padding-bottom:40px;" class="form-control" id="bulletin" name="bulletin">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload Bulletin</a>
                </div>
            </div>
        </div>
    </div>
</form>

    @include('admin-dashboard.layouts.javascript')

@endsection