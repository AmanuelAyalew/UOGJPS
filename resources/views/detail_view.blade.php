@extends('layouts.employee')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-lg-12 margin-tb" style="display: flex; justify-content: space-between">
                                <div class="pull-left">
                                    <h2> Show Registered Vacancies</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ url('vacancy_list') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job_Title:</strong>
                                    {{ $vacancyRegister->job_title }}
                                </div>
                                <div class="form-group">
                                    <strong>Vacancy_Type:</strong>
                                    {{ $vacancyRegister->vacancy_type }}
                                </div>
                                <div class="form-group">
                                    <strong>Departement_Name:</strong>
                                    {{ $vacancyRegister->departement_name }}
                                </div>
                                <div class="form-group">
                                    <strong>Currency:</strong>
                                    {{ $vacancyRegister->currency }}
                                </div>
                                <div class="form-group">
                                    <strong>Date_Posted:</strong>
                                    {{ $vacancyRegister->date_posted }}
                                </div>
                                <div class="form-group">
                                    <strong>Sum_Of_Expertise:</strong>
                                    {{ $vacancyRegister->sum_of_expertise }}
                                </div>
                                <div class="form-group">
                                    <strong>Deadline:</strong>
                                    {{ $vacancyRegister->deadline }}
                                </div>
                                <div class="form-group">
                                    <strong>Maximum_Age:</strong>
                                    {{ $vacancyRegister->maximum_age }}
                                </div>
                                <div class="form-group">
                                    <strong>Location:</strong>
                                    {{ $vacancyRegister->location }}
                                </div>
                                <div class="form-group">
                                    <strong>Minimum_Grade:</strong>
                                    {{ $vacancyRegister->minimum_grade }}
                                </div>
                                <div class="form-group">
                                    <strong>Job_Requirement:</strong>
                                    {{ $vacancyRegister->job_requirement }}
                                </div>
                                <div class="form-group">
                                    <strong>Year_Of_Graduation_Starts_at:</strong>
                                    {{ $vacancyRegister->year_of_graduation_starts_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
