@extends('layouts.employee')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <div style="display:flex; justify-content: space-between; align-items: center">
                                    <a class="btn btn-primary"href="{{ url('/profile3') }}"><i
                                            class="fa-solid fa-angle-left"></i> Back</a>
                                    <h3>Edit Profiles - Step 4/4 - (Employer History)</h3>
                                    @if (count($profile4) > 0)
                                        <a href="/home" class="btn btn-primary">Finish <i
                                                class="fa-solid fa-angle-right"></i></a>
                                    @else
                                        <button class="btn btn-secondary">Finish <i
                                                class="fa-solid fa-angle-right"></i></button>
                                    @endif

                                </div>


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


                            </div>

                        </div>
                    </div>

                    <div class="card-body">

                        <div class="card">
                            <div class="card-header">
                                <h5>Registered Employer History</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Empolyer</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Duration(year/s)</th>
                                            <th scope="col">Experiance Letter</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>

                                    @if (count($profile4) == 0)
                                        <tbody>

                                            <td colspan="6" class="text-center text-danger"><b>No History Added</b></td>

                                        </tbody>
                                    @endif

                                    @foreach ($profile4 as $profile)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>{{ $profile->employer }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $profile->job_title }}</p>

                                                </td>
                                                <td>

                                                    <p>{{ $profile->start_date }}->{{ $profile->end_date }}</p>

                                                    {{-- @if ($profile->diploma)
                                                        <a href="/files/{{ $profile->diploma }}" download><i
                                                                class="fa-solid fa-cloud-arrow-down"></i>Download</a>
                                                    @else
                                                        <p>Not attached</p>
                                                    @endif --}}
                                                </td>
                                                <td>
                                                    {{-- @if ($profile->transcript)
                                                        <a href="/files/{{ $profile->transcript }}" download><i
                                                                class="fa-solid fa-cloud-arrow-down"></i>Download</a>
                                                    @else
                                                        <p>Not attached</p>
                                                    @endif --}}
                                                    <p>{{ (strtotime($profile->end_date) - strtotime($profile->start_date)) / (60 * 60 * 24 * 7 * 4 * 12) }}
                                                    </p>
                                                </td>
                                                <td>
                                                    @if ($profile->experiance_letter)
                                                        <a href="/files/{{ $profile->cost_sharing }}" download><i
                                                                class="fa-solid fa-cloud-arrow-down"></i>Download</a>
                                                    @else
                                                        <p>Not attached</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('profile4.destroy', $profile->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger show_confirm"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                </td>
                                                </form>

                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New Education Qualification</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profile4.store') }}" method="Post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col">

                                        <div class="row">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Job Category</th>
                                                        <th scope="col">Employer</th>
                                                        <th scope="col">Job Title</th>
                                                        <th scope="col">Start Date</th>
                                                        <th scope="col">End Date</th>
                                                        <th scope="col">Experiance Letter</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input required type="text" class="form-control"
                                                                id="catagory" name="job_category"
                                                                placeholder="Enter Job Category">
                                                        </td>
                                                        <td>
                                                            <input required type="text" class="form-control"
                                                                name="employer" placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            {{-- <select name="department" required class="form-control">
                                                                @foreach ($departement as $dep)
                                                                    <option value="{{ $dep->name }}">{{ $dep->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select> --}}

                                                            <input required type="text" class="form-control"
                                                                name="job_title" placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <input required type="date" class="form-control"
                                                                name="start_date" placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control" id="grade"
                                                                name="end_date" placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <input type="file" class="form-control"
                                                                name="experiance_letter"
                                                                placeholder="Enter Departement Name">
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="submit" class="btn btn-success"><i
                                                class="fa-solid fa-check"></i>{{ ' ' }}Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
