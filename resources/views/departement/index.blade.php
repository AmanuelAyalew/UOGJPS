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
                                    <h2>Departement List</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('departement.create') }}"> Add
                                        Departement
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($departementNames as $departementName)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $departementName->name }}</td>
                                    <td>

                                        <form action="{{ route('departement.destroy', $departementName->id) }}"
                                            method="POST">

                                            <a class="btn btn-primary"
                                                href="{{ route('departement.show', $departementName->id) }}"><i
                                                    class="fas fa-eye"></i></a>

                                            <a class="btn btn-warning"
                                                href="{{ route('departement.edit', $departementName->id) }}"><i
                                                    class="fas fa-edit"></i></a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger show_confirm" title='Delete'><i
                                                    class="fas fa-trash"></i></button>
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

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,

        }
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
@endsection
