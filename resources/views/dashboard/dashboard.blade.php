@extends('layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jobTitle">Job_Title</label>
                                        <input type="text" class="form-control" id="jobTitle" placeholder="Job Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="departementName">Departement Name</label>
                                        <input type="text" class="form-control" id="departementName"
                                            placeholder="Departement Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input type="date" class="form-control" id="deadline" placeholder="Deadline">
                                    </div>
                                    <div class="form-group">
                                        <label for="jobRequirement">Job Requirement</label>
                                        <textarea class="form-control" id="jobRequirement" placeholder="Job Requirement"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="vacancyRaisedBy">Vacancy_Raised_By</label>
                                        <input type="text" class="form-control" id="vacancyRaisedBy"
                                            placeholder="Vacancy_Raised_By">
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="vacancyType">Vacancy Type</label>
                                        <select type="text" class="form-control" id="vacancyType"
                                            placeholder="Vacancy Type">
                                            <option value="local">local</option>
                                            <option value="global">global</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="currency">Currency</label>
                                        <select type="text" class="form-control" id="currency" placeholder="Currency">
                                            <option value="etb">ETB</option>
                                            <option value="usd">USD</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="sum_of_expretise">Sum_Of_Expretise</label>
                                        <input type="number" class="form-control" id="sum_of_expretise"
                                            placeholder="sum_of_expretise">
                                    </div>
                                    <div class="form-group">
                                        <label for="maximum_age">Maximum Age</label>
                                        <input type="number" class="form-control" id="maximum_age"
                                            placeholder="maximum age">
                                    </div>
                                    <div class="form-group">
                                        <label for="minimum_grade">Minimum Grade</label>
                                        <input type="number" class="form-control" id="minimum_grade"
                                            placeholder="minimum grade">
                                    </div>
                                    <div class="form-group">
                                        <label for="year_of_graduation">Year Of Graduation</label>
                                        <input type="number" class="form-control" id="year_of_graduation"
                                            placeholder="year_of_graduation">
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
