@extends('layouts.employee')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">

                        <h1>Application - {{ $registeredVacancy->job_title }}</h1>
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

                    <div class="card-body">

                        <form action="{{ route('vacancy_list.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="Jobcode">Job code</label>
                                <input name="Jobcode" type="text" readonly value="{{ $registeredVacancy->vacancy_code }}"
                                    class="form-control" id="Jobcode" placeholder="Jobcode">
                            </div>
                            <div class="form-group">
                                <label for="Jobexp">Job experiance/year</label>
                                <input name="Jobexp" type="number" readonly
                                    value="{{ $registeredVacancy->year_of_graduation_starts_at }}" class="form-control"
                                    id="Jobexp" placeholder="Job experiance/year">
                            </div>
                            <div class="form-group">
                                <label for="Grade">your grade</label>
                                <input name="Grade" type="number" readonly
                                    value="{{ $registeredVacancy->minimum_grade }}" min="0" max="4"
                                    step="any" class="form-control" id="Grade" placeholder="Grade">
                            </div>
                            <div class="form-group">
                                <label for="max_age">Maximum Age</label>
                                <input name="max_age" type="number" readonly value="{{ $registeredVacancy->maximum_age }}"
                                    class="form-control" id="max_age" placeholder="Maximum Age">
                            </div>
                            <div class="form-group">
                                <label for="Age">your Age</label>
                                <input name="Age" type="number" class="form-control" id="Age" placeholder="Age">


                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    @endsection
