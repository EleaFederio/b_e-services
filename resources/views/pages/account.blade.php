@extends('layouts.app')

@section('content')

    <!-- Cards Left-Side -->
    <div class="container">
        <!-- title -->
        <div class="text-center mb-4">
            <h1 class="h1">My Account</h1>
        </div>

        <!-- Profile Main -->
        <div class="main-body">
            <div class="row gutter-sm">
            <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ url('images/spider.jpg') }}" alt="Admin" class="rounded-circle" width="150" />
                    <div class="mt-3">
                        <h4>Juan de la Cruz</h4>
                        <p class="text-secondary mb-1">Brgy. Secretary</p>
                        <p class="text-muted font-size-sm">Bonifacio Street, Gubat, Sorosogon</p>
                    </div>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateProfileModal">
                            Update Profile
                        </button>
                </div>
            </div>
        </div>

                <!-- Profile Details -->
        <div class="card mt-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Email:
                    </h6>
                    <span class="text-secondary">admin@admin.com</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Address:
                    </h6>
                    <span class="text-secondary">Bonifacio Street, Gubat, Sorosogon</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Mobile Number:
                    </h6>
                    <span class="text-secondary">09123456789</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Barangay ID:
                    </h6>
                    <span class="text-secondary">2021-000022</span>
                </li>
            </ul>
        </div>

    </div>

    <!-- Card Right-Side -->
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
            <!-- Logout Button -->
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('logout') }}"
                           class="btn btn-danger btn-sm"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ********** This Parts is for Modals ********** -->
    <!-- Update Profile Modal -->
    <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
             <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title w-100 text-center" id="exampleModalCenterTitle"><b>Update Profile</b></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                      <div class="modal-body">
                          <form>
                              <div class="row">
                                  <div class="col-5">
                                      <h6 class="text-center"><b>Name</b></h6>
                                      <!-- Firstname -->
                                      <div class="form-group">
                                          <label>First Name</label>
                                          <input type="text" class="form-control" placeholder="Firstname...">
                                      </div>
                                      <!-- Lastname -->
                                      <div class="form-group">
                                          <label>Last Name</label>
                                          <input type="text" class="form-control" placeholder="Lastname...">
                                      </div>
                                      <!-- Lastname -->
                                      <div class="form-group">
                                          <label>Middle Name</label>
                                          <input type="text" class="form-control" placeholder="Middle Name...">
                                      </div>
                                  </div>
                                  <div class="col-7">
                                      <h6 class="text-center"><b>Details</b></h6>
                                      <!-- Firstname -->
                                      <div class="form-group">
                                          <label>Zone</label>
                                          <input type="text" class="form-control" placeholder="Select Zone...">
                                      </div>
                                      <!-- Lastname -->
                                      <div class="form-group">
                                          <label>Phone Number</label>
                                          <input type="text" class="form-control" placeholder="Phone Number...">
                                      </div>
                                      <!-- Lastname -->
                                      <div class="form-group">
                                          <label>Middle Name</label>
                                          <input type="text" class="form-control" placeholder="Middle Name...">
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
             </div>
        </div>
    </div>

@endsection
