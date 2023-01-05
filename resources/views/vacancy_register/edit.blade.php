@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-lg-12 margin-tb" style="display: flex; justify-content: space-between">
                                <div class="pull-left">
                                    <h2>Edit Vacancy</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('vacancy_register.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
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

                    <div class="card-body">
                        <form action="{{ route('vacancy_register.update', $vacancyRegister->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jobTitle">Job_Title</label>
                                        <input name="job_title" type="text" value="{{ $vacancyRegister->job_title }}"
                                            class="form-control" id="jobTitle" placeholder="Job Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="departementName">Departement Name</label>
                                        <select name="departement_name" id="departementName"
                                            value="{{ $vacancyRegister->departement_name }}" class="form-control">
                                            @foreach ($departementNames as $departementName)
                                                <option value="{{ $departementName->name }}">{{ $departementName->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_posted">Date Posted</label>
                                        <input name="date_posted" value="{{ $vacancyRegister->date_posted }}" type="date"
                                            class="form-control" id="date_posted" placeholder="date_posted">
                                    </div>
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input name="deadline" type="date" class="form-control" id="deadline"
                                            value="{{ $vacancyRegister->deadline }}" placeholder="Deadline">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input name="location" type="text" class="form-control" id="location"
                                            value="{{ $vacancyRegister->location }}" placeholder="location">
                                    </div>
                                    <div class="form-group">
                                        <label for="jobRequirement">Job Requirement</label>
                                        <textarea name="job_requirement" class="form-control" id="jobRequirement" placeholder="Job Requirement">{{ $vacancyRegister->job_requirement }}</textarea>
                                    </div>


                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="vacancyType">Vacancy Type</label>
                                        <select value="{{ $vacancyRegister->vacancy_type }}" name="vacancy_type"
                                            type="text" class="form-control" id="vacancyType" placeholder="Vacancy Type">
                                            <option value="local">local</option>
                                            <option value="global">global</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="currency">Currency</label>
                                        <select value="{{ $vacancyRegister->currency }}" name="currency" type="text"
                                            class="form-control" id="currency" placeholder="Currency">
                                            <option value="etb">ETB</option>
                                            <option value="usd">USD</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="sum_of_expretise">Sum_Of_Expretise</label>
                                        <input value="{{ $vacancyRegister->sum_of_expertise }}" type="number"
                                            name="sum_of_expertise" class="form-control" id="sum_of_expretise"
                                            placeholder="sum_of_expretise">
                                    </div>
                                    <div class="form-group">
                                        <label for="maximum_age">Maximum Age</label>
                                        <input value="{{ $vacancyRegister->maximum_age }}" type="number"
                                            name="maximum_age" class="form-control" id="maximum_age"
                                            placeholder="maximum age">
                                    </div>
                                    <div class="form-group">
                                        <label for="minimum_grade">Minimum Grade</label>
                                        <input value="{{ $vacancyRegister->minimum_grade }}" type="number"
                                            name="minimum_grade" class="form-control" id="minimum_grade"
                                            placeholder="minimum grade">
                                    </div>
                                    <div class="form-group">
                                        <label for="year_of_graduation">Year Of Graduation Starts at</label>
                                        <input value="{{ $vacancyRegister->year_of_graduation_starts_at }}"
                                            type="text" name="year_of_graduation_starts_at" class="form-control"
                                            id="year_of_graduation">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
