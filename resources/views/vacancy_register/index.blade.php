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
                                    <h2>Registered Vacancies List</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('vacancy_register.create') }}"> Add Vacancy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Job Title</th>
                                <th>Vacancy Code</th>
                                <th>Departement Name</th>
                                <th>Location</th>
                                <th>Job Requirement</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($registeredVacancies as $registeredVacancy)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $registeredVacancy->job_title }}</td>
                                    <td>{{ $registeredVacancy->vacancy_code }}</td>
                                    <td>{{ $registeredVacancy->departement_name }}</td>
                                    <td>{{ $registeredVacancy->location }}</td>
                                    <td>{{ $registeredVacancy->job_requirement }}</td>
                                    <td>

                                        <form action="{{ route('vacancy_register.destroy', $registeredVacancy->id) }}"
                                            method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('vacancy_register.show', $registeredVacancy->id) }}"><i
                                                    class="fas fa-eye"></i></a>

                                            <a class="btn btn-warning"
                                                href="{{ route('vacancy_register.edit', $registeredVacancy->id) }}"><i
                                                    class="fas fa-edit"></i></a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger show_confirm" title='Delete'><i
                                                    class="fas fa-trash"></i></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
