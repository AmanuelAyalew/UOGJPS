{{-- @extends('layouts.employee')  
  @section('content')
  <div class="content-wrapper">
  <section class="content">
  <div class="row">
      <div class="col-lg-12 margin-tb">
      <div class="pull-right">
          <div class="pull-left">
              <h2>UoG EMS</h2>
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
       
  <form action="{{ route('profile2.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
       
  
       <div class="row">
  
  
       <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>job_title:Banking Opration,Bank trainee</strong>
                  
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
                    <!-- <label class="col-md-4 control-label" >Attache report</label> -->
                    <div class="form-group">
                        <label for="resume">Resume File</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <input name="files"  autocomplete="off" id="resume" placeholder="files" class="form-control"  type="file"  required ="required">
                        </div>
                    </div>
                    </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="grade8">Grade 8 Certification</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <input name="file"  autocomplete="off" id="grade8" placeholder="file" class="form-control"  type="file"  required ="required">
                        </div>
                    </div>
                </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit"  class="btn btn-primary active" style="margin-left:35%;margin-top:1%">save</button>
                <button type="reset"  class="btn btn-primary active" style="margin-left:2%;margin-top:1%">Reset</button>
  
             </div>
                
  </form>
  </section>
  </div>  
  @endsection --}}

@extends('layouts.employee')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="content-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12 margin-tb" style="display: flex; justify-content: space-between">

                                <div class="pull-left">
                                    <h2>Edit profile-step 2/4 -(CV and Grade 8 Certification) </h2>
                                </div>
                                <div class="pull-right">

                                    <a class="btn btn-primary"href="{{ url('/profile1') }}"><i
                                            class="fa-solid fa-angle-left"></i> Back</a>
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
                        <h2>Attachment for Application</h2>

                        <form action="{{ route('profile2.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf



                            <div class="row">


                                <br>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <table>
                                        <tr>
                                            <div class="form-group">

                                                <div class="input-group">
                                                    <td>
                                                        <label for="resume">Resume File:</label>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-list"></i></span>
                                                            <input name="files" autocomplete="off" id="resume"
                                                                placeholder="files" class="form-control" type="file"
                                                                required="required">
                                                        </div>
                                                    </td>
                                                </div>
                                            </div>
                                </div>
                                </tr>
                                <tr>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <td>
                                                    <br> <label for="grade8">Grade 8 Certification:</label> <span
                                                        class="input-group-addon"><i
                                                            class="glyphicon glyphicon-list"></i></span>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <input name="file" autocomplete="off" id="grade8"
                                                            placeholder="file" class="form-control" type="file"
                                                            required="required">
                                                    </div>
                                                </td>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                </table>


                                <button type="submit" class="btn btn-success mt-4"><i
                                        class="fa-solid fa-check"></i>{{ ' ' }}Save and Next</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
