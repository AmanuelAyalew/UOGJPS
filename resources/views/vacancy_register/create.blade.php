@extends('layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card">

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

                    <div class="card-body">

                        <form action="{{ route('vacancy_register.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jobTitle">Job_Title</label>
                                        <input name="job_title" type="text" class="form-control" id="jobTitle"
                                            placeholder="Job Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="departementName">Departement Name</label>
                                        <select name="departement_name" id="departementName" class="form-control">
                                            <option value="" selected disabled>--- select departement name ---
                                            </option>
                                            @foreach ($departementNames as $departementName)
                                                <option value="{{ $departementName->name }}">{{ $departementName->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_posted">Date Posted</label>
                                        <input name="date_posted" type="date" class="form-control" id="date_posted"
                                            placeholder="date_posted">
                                    </div>
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input name="deadline" type="date" class="form-control" id="deadline"
                                            placeholder="Deadline">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input name="location" type="text" class="form-control" id="location"
                                            placeholder="location">
                                    </div>
                                    <div class="form-group">
                                        <label for="jobRequirement">Job Requirement</label>
                                        <textarea name="job_requirement" class="form-control" id="jobRequirement" placeholder="Job Requirement"></textarea>
                                    </div>


                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="vacancyType">Vacancy Type</label>
                                        <select name="vacancy_type" type="text" class="form-control" id="vacancyType"
                                            placeholder="Vacancy Type">
                                            <option value="local">local</option>
                                            <option value="global">global</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="currency">Currency</label>
                                        <select name="currency" type="text" class="form-control" id="currency"
                                            placeholder="Currency">
                                            <option value="etb">ETB</option>
                                            <option value="usd">USD</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="sum_of_expretise">Sum_Of_Expretise</label>
                                        <input type="number" name="sum_of_expertise" class="form-control"
                                            id="sum_of_expretise" placeholder="sum_of_expretise">
                                    </div>
                                    <div class="form-group">
                                        <label for="maximum_age">Maximum Age</label>
                                        <input type="number" name="maximum_age" class="form-control" id="maximum_age"
                                            placeholder="maximum age">
                                    </div>
                                    <div class="form-group">
                                        <label for="minimum_grade">Minimum Grade</label>
                                        <input type="number" min="0" max="4" step="any"
                                            name="minimum_grade" class="form-control" id="minimum_grade"
                                            placeholder="minimum grade">
                                    </div>
                                    <div class="form-group">
                                        <label for="year_of_graduation">Year Of Graduation Starts at</label>
                                        <input type="text" name="year_of_graduation_starts_at" class="form-control"
                                            id="year_of_graduation">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    @endsection
