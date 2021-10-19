@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="h1">Residents</h1>
        </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#updateProfileModal">
            <i class="fa fa-user-plus"></i> Add Resident
        </button>

        {{--        Table       --}}
        @if(!empty($residents))
            <div class="card mt-2 mb-1">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">First</th>
                            <th scope="col" class="text-center">Last</th>
                            <th scope="col" class="text-center">Handle</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($residents as $resident)
                            <tr>
                                <td class="text-center">{{ $resident->first_name }}</td>
                                <td class="text-center">{{ $resident->last_name }}</td>
                                <td class="text-center">{{ $resident->middle_name }}</td>
                                <td>
                                    <div class="row text-center">
                                        <div class="col">
                                            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{ $residents->links() }}



        <!-- ******************** Modal Section ******************** -->
        <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <form action={{ url("resident") }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-center" id="exampleModalCenterTitle"><b>Add Resident</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="row">
                                <div class="col-5">

                                    <!-- Avatar -->
                                    <div class="container mb-5">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                                                <input type="file" id="wizard-picture" name="image_url" class="">
                                            </div>
                                            <h6 class="h5">Choose Picture</h6>
                                        </div>
                                    </div>

                                    <!-- Firstname -->
                                    <div class="form-group mt-4">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Firstname..." required>
                                    </div>
                                    <!-- Lastname -->
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Lastname..." required>
                                    </div>
                                    <!-- Lastname -->
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name" placeholder="Middle Name...">
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Suffix</label>
                                                <select class="form-control" name="suffix" id="exampleFormControlSelect1">
                                                    <option></option>
                                                    <option>Sr</option>
                                                    <option>Jr</option>
                                                    <option>II</option>
                                                    <option>III</option>
                                                    <option>IV</option>
                                                    <option>V</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="b_day">Date of Birth</label>
                                                <input type="date" id="b_day" class="form-control" name="birth_date"
                                                       value="{{ date('Y-m-d') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ********** Card Division ********** -->
                                <div class="col-7">
                                    <!-- Zone -->
                                    <div class="form-group">
                                        <label>Zone</label>
                                        <input type="text" class="form-control" placeholder="Select Zone...">
                                    </div>
                                    <!-- PhoneNumber -->
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">+63</span>
                                            <input type="text" class="form-control" name="phone_number" placeholder="10 digit (ex. 9123456789)" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <!-- Lastname -->
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email address..." required>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Gender</label>
                                                <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label>Nationality</label>
                                                <input type="text" class="form-control" name="nationality" placeholder="Nationality..." required>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Monthly Income</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">₱</span>
                                                    <input type="number" step="0.01" class="form-control" name="monthly_income" placeholder="ex. 10,000.00" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label>Occupation</label>
                                                <input type="text" class="form-control" name="occupation" placeholder="Occupation..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Birth Place</label>
                                        <input type="text" class="form-control" name="birth_place" placeholder="Birth Place...">
                                    </div>
                                    <div class="form-group">
                                        <label>Former Address</label>
                                        <input type="text" class="form-control" name="former_address" placeholder="Former Address...">
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function(){
            $("#wizard-picture").change(function(){
                readURL(this);
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


    </script>

@endsection


