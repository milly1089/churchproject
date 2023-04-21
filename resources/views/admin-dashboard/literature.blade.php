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
                    <h1 class="h3 mb-0 text-gray-800">Literature</h1>
                   </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#galleryModal">
                            <i class="fas fa-fw fa-plus"></i>
                              Add Literature
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
                                            <th>Category</th>
                                            <th>Literature Name</th>
                                            <th>Author</th>
                                            <th>Year</th>
                                            <th>Quarter</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Category</th>
                                            <th>Literature Name</th>
                                            <th>Author</th>
                                            <th>Year</th>
                                            <th>Quarter</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($literatures as $literature)
                                            <tr>
                                                <td>{{ $literature->category }}</td>
                                                <td>{{ $literature->literature_url }}</td>
                                                <td>{{ $literature->author }}</td>
                                                <td>{{ $literature->year }}</td>
                                                <td>{{ $literature->quater }}</td>

                                                <td>
{{--                                                    <button class="btn-sm btn-warning">edit</button>--}}
                                                    <a href="/delete-literature/{{ $literature->id }}" class="btn-sm btn-info">delete</a>
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
    <form action="/add-literature" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Add Literature</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="literature_category">Category</label><br>
                        <select style="border-radius:5px; width:100%; padding:10px;" id="literature_category" name="literature_category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          <option value="health">Health</option>
                          <option value="prophecy">Prophecy</option>
                          <option value="music">Music</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="author">Author Name</label>
                        <input type="text" class="form-control" id="author" name="author">
                      </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="year">Year</label><br>
                        <select style="border-radius:5px; width:100%; padding:10px;" id="year" name="year" class="form-select form-select-lg mb-3">
                          <option selected value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                          <option value="2031">2031</option>
                          <option value="2032">2032</option>
                          <option value="2033">2033</option>
                          <option value="2034">2034</option>
                          <option value="2035">2035</option>
                          <option value="2036">2036</option>
                          <option value="2037">2037</option>
                          <option value="2038">2038</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="quater">Quater</label><br>
                        <select style="border-radius:5px; width:100%; padding:10px;" id="quater" name="quater" class="form-select form-select-lg mb-3">
                          <option selected value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                    </div>

                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <label style="margin-left:0px; font-weight:bold;" for="picture">Literature</label>
                        <input type="file" style="padding-top:10px; padding-bottom:40px;" class="form-control" name="literature" id="literature" >
                    </div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <label style="margin-left:0px; font-weight:bold;" for="picture">Cover Page <span style="color:red;">(Optional)</span></label>
                        <input type="file" style="padding-top:10px; padding-bottom:40px;" class="form-control" name="cover_page" id="cover_page" >
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Literature</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </form>

    @include('admin-dashboard.layouts.javascript')

@endsection
