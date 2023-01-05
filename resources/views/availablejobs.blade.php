@extends('layouts.main1')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Available Jobs</h1>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <br>
                <!-- /.card-header -->
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

                                        <a href="availablejobs/show/{{ $registeredVacancy->id }}">Detail view <span
                                                class="badge"></span></a><br>
                                    </td>
                                </tr>
                            @endforeach
                            <div class="pull-right">

                        </tbody>
                        <tfoot>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>

    </section>
@endsection
