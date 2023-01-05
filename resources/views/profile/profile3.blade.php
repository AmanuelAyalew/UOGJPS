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
                                    <a class="btn btn-primary"href="{{ url('/profile2') }}"><i
                                            class="fa-solid fa-angle-left"></i> Back</a>
                                    <h3>Edit Profiles - Step 3/4 - (Qualification)</h3>
                                    @if (count($profile3) > 0)
                                        <a href="profile4" class="btn btn-primary">Next <i
                                                class="fa-solid fa-angle-right"></i></a>
                                    @else
                                        <button class="btn btn-secondary">Next <i
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
                                <h5>Registered Education Qualification</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Departement</th>
                                            <th scope="col">Grade</th>
                                            <th scope="col">Diploma</th>
                                            <th scope="col">Transcript</th>
                                            <th scope="col">Cost Sharing</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    @if (count($profile3) == 0)
                                        <tbody>

                                            <td colspan="6" class="text-center text-danger"><b>No History Added</b></td>

                                        </tbody>
                                    @endif
                                    @foreach ($profile3 as $profile)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>{{ $profile->department }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $profile->grade }}</p>

                                                </td>
                                                <td>

                                                    @if ($profile->diploma)
                                                        <a href="/files/{{ $profile->diploma }}" download><i
                                                                class="fa-solid fa-cloud-arrow-down"></i>Download</a>
                                                    @else
                                                        <p>Not attached</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($profile->transcript)
                                                        <a href="/files/{{ $profile->transcript }}" download><i
                                                                class="fa-solid fa-cloud-arrow-down"></i>Download</a>
                                                    @else
                                                        <p>Not attached</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($profile->cost_sharing)
                                                        <a href="/files/{{ $profile->cost_sharing }}" download><i
                                                                class="fa-solid fa-cloud-arrow-down"></i>Download</a>
                                                    @else
                                                        <p>Not attached</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('profile3.destroy', $profile->id) }}"
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
                                <form action="{{ route('profile3.store') }}" method="Post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col">

                                        <div class="row">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Qualification Type</th>
                                                        <th scope="col">Departement</th>
                                                        <th scope="col">Qualification Title</th>
                                                        <th scope="col">Grade(out of 4)</th>
                                                        <th scope="col">Date Recived</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input required type="text" class="form-control"
                                                                id="catagory" name="catagory"
                                                                placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <input required type="text" class="form-control"
                                                                id="qualification_type" name="qualification_type"
                                                                placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <select name="department" required class="form-control">
                                                                @foreach ($departement as $dep)
                                                                    <option value="{{ $dep->name }}">{{ $dep->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input required type="text" class="form-control"
                                                                id="qualification_title" name="qualification_title"
                                                                placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <input type="number" min="0" max="4"
                                                                step="any" class="form-control" id="grade"
                                                                name="grade" placeholder="Enter Departement Name">
                                                        </td>
                                                        <td>
                                                            <input required type="date" class="form-control"
                                                                id="date_recived" name="date_recived"
                                                                placeholder="Enter Departement Name">
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <table class="table table-bordered mt-25">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Diploma</th>
                                                        <th scope="col">Transcript</th>
                                                        <th scope="col">Cost Sharing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input class="form-control" id="transcript" name="diploma"
                                                                type="file" />
                                                        </td>
                                                        <td>
                                                            <input class="form-control" id="transcript" name="transcript"
                                                                type="file" />
                                                        </td>
                                                        <td>
                                                            <input class="form-control" id="cost_sharing"
                                                                name="cost_sharing" type="file" />
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
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
    @endsection
