@extends('layouts.employee')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">avelable jobs</h3>
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <th>Departement Name</th>
                                                <th>Location</th>
                                                <th>Job Requirement</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registeredVacancies as $registeredVacancy)
                                                <tr>
                                                    <td>{{ $registeredVacancy->job_title }}</td>
                                                    <td>{{ $registeredVacancy->departement_name }}</td>
                                                    <td>{{ $registeredVacancy->location }}</td>
                                                    <td>{{ $registeredVacancy->job_requirement }}</td>
                                                    <td>
                                                        <a href="{{ route('vacancy_list.show', $registeredVacancy->id) }}">Apply
                                                            <span class="badge"></span></a><br>
                                                        <a href="{{ url('detail_view', $registeredVacancy->id) }}">Detail
                                                            view <span class="badge"></span></a><br>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>


                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
