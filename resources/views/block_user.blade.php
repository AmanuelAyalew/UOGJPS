@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="card-header">


                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>List of Users</h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>First Name</th>
                                <th>Father Name</th>
                                <th>Grand Father Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Type</th>
                                <th width="100px">Action</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->fathername }}</td>
                                    <td>{{ $user->grandfathername }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phonenumber }}</td>
                                    <td>{{ $user->type }}</td>

                                    <td>

                                        <form action="{{ route('block.update', $user->id) }}" method="POST">

                                            @csrf
                                            @method('PUT')
                                            @if($user->isBlocked == 1) 
                                                <button type="submit" class="btn btn-success show_block_confirm"
                                                data-name={{ $user->isBlocked == 1 ? 'Unblock' : 'Block' }}
                                                title='Block'>{{ $user->isBlocked == 1 ? 'Unblock' : 'Block' }}</button>
                                             @else 
                                                <button type="submit" class="btn btn-warning show_block_confirm"
                                                data-name={{ $user->isBlocked == 1 ? 'Unblock' : 'Block' }}
                                                title='Block'>{{ $user->isBlocked == 1 ? 'Unblock' : 'Block' }}</button>    
                                            
                                            @endif
                                            
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
