@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">{{ __('Dashboard') }}</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="row">

                                            <div class="col-lg-3 col-6">

                                                <div class="small-box bg-warning">
                                                    <div class="inner">
                                                        <h3>{{ $numOfUsers }}</h3>
                                                        <p>Users</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fas fa-users"></i>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-6">

                                                <div class="small-box bg-info">
                                                    <div class="inner">
                                                        <h3>{{ $numOfVacancies }}</h3>
                                                        <p>Vacancies</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa-solid fa-registered"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
