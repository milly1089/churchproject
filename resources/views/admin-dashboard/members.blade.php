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
                   <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Members</h1>
                    </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#memberModal">
                            <i class="fas fa-fw fa-plus"></i>
                              Add Church Member
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
                            <h6 class="m-0 font-weight-bold text-primary">Members</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="employeesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($members as $member)
                                        <tr>
                                            <td>{{ $member->first_name.' '.$member->second_name }} </td>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->phone_number }}</td>
                                            <td>{{ $member->position }}</td>
                                            <td>
                                                <a href="/delete-member/{{ $member->id }}" class="btn-sm btn-info">delete</a>
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

    <!-- Add Employee Modal-->
    <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="employeeModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="/add-member">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="memberFirstName">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="memberFirstName" aria-describedby="emailHelp" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="memberLastName">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="memberLastName" aria-describedby="emailHelp" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="memberEmail">Email address</label>
                        <input type="email"  name="email" class="form-control" id="memberEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                      </div>
                      <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="memberPhoneNumber" >Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="memberPhoneNumber" placeholder="0795704301" required>
                      </div>
                      <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;">Church Position</label>
                          <div class="row" style="padding:10px;">
                              <select style="padding:10px;" class="col-lg-12  form-select" name="position" id="position"  aria-label="Default select example">
                                  <option value="Pastor">Pastor</option>
                                  <option selected value="Elder">Elder</option>
                                  <option selected value="Deacon">Deacon</option>
                                  <option value="Member">Member</option>
                              </select>
                          </div>                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" >Add Church Member</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin-dashboard.layouts.javascript')

@endsection
