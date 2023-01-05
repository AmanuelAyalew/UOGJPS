@extends('layouts.employee')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">


                <div class="row ">
                    <div class="col">


                        <div class="card">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif




                            <div class="card-header">
                                <div class="pull-right">

                                    <h2> Edit Profiles -Step1/4 - (Basic)</h2>
                                </div>

                            </div>
                            <br />
                            <form action="{{ route('profile1.store') }}" method="Post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">

                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <h3><strong>Basic Information</strong></h3>
                                                <br>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="text" value="{{ $user->email }}" readonly
                                                        class="form-control " id="Email" name="Email"
                                                        placeholder="Enter Email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="VacancyCode">Mobile_Number</label>
                                                    <input type="text" value="{{ $user->phonenumber }}" readonly
                                                        class="form-control " id="Mobile_Number" name="Mobile_Number"
                                                        placeholder="Enter job Vacancy Code">
                                                </div>


                                                <div class="form-group">
                                                    <label for="First_Name">First_Name</label>
                                                    <input type="text" class="form-control "
                                                        value="{{ $user->firstname }}" readonly id="First_Name"
                                                        name="First_Name" placeholder="Enter First_Name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="FatherName">FatherName</label>
                                                    <input type="text" class="form-control "
                                                        value="{{ $user->fathername }}" readonly id="FatherName"
                                                        name="FatherName" placeholder="Enter posting date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_name">last_name</label>
                                                    <input type="text" class="form-control "
                                                        value="{{ $user->grandfathername }}" readonly id="last_name"
                                                        name="last_name" placeholder="Enter last_name">
                                                </div>







                                                <br>

                                                <h3><strong>Addtional Details</strong></h3>
                                                <br>
                                                <div class="form-group">
                                                    <label for="BirthDate">BirthDate</label>
                                                    <input type="date" class="form-control " id="BirthDate"
                                                        name="BirthDate" placeholder="Enter Job Requirement"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Marital_Status">Marital_Status</label>
                                                    <input type="text" class="form-control " id="Marital_Status"
                                                        name="Marital_Status" placeholder="Enter Vacancy Raised">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Gender">Gender</label>
                                                    <select class="form-control " id="Gender" name="Gender"
                                                        placeholder="Enter Vacancy Type"> <i
                                                            class="right fas fa-angle-left"></i>>
                                                        <option value="" selected readonly> Select Gender
                                                        </option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="Title">Title</label>
                                                    <input type="text" class="form-control " id="Title"
                                                        name="Title" placeholder="Enter Sum_of_Job_Expire">
                                                </div>


                                            </div>

                                            <br>


                                            <div class="col">

                                                <h3><strong>Address</strong></h3>

                                                <br>

                                                <div class="form-group">
                                                    <label for="Country">Country</label>
                                                    <input type="text" class="form-control " id="Country"
                                                        name="Country" placeholder="Please Enter Country" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="region">region</label>
                                                    <input type="text" class="form-control " id="region"
                                                        name="region" placeholder="Please Enter region" />
                                                </div>
                                                <div class="form-group">

                                                    <label for="Zone">Zone</label>
                                                    <input type="text" class="form-control " id="Zone"
                                                        name="Zone" placeholder="Enter Zone">
                                                </div>


                                                <div class="form-group">

                                                    <label for="Wereda">Wereda</label>
                                                    <input type="text" class="form-control " id="Wereda"
                                                        name="Wereda" placeholder="Enter Wereda">
                                                </div>

                                                <div class="form-group">

                                                    <label for="Kebele">Kebele</label>
                                                    <input type="text" class="form-control " id="Kebele"
                                                        name="Kebele" placeholder="Enter Kebele">
                                                </div>

                                                <div class="form-group">

                                                    <label for="House_Number">House_Number</label>
                                                    <input type="text" class="form-control " id="House_Number"
                                                        name="House_Number" placeholder="Enter House_Number">
                                                </div>
                                                <div class="form-group">

                                                    <label for="Phone">Phone</label>
                                                    <input type="number" class="form-control " id="Phone"
                                                        name="Phone" placeholder="Enter Phone">
                                                </div>

                                                <div class="form-group">

                                                    <label for="fax">fax</label>
                                                    <input type="text" class="form-control " id="fax"
                                                        name="fax" placeholder="Enter fax">
                                                </div>

                                            </div>
                                        </div>
                                        <br>

                                        <button type="submit" class="btn btn-success"><i
                                                class="fa-solid fa-check"></i>{{ ' ' }}Save and Next
                                        </button>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
