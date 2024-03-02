@extends('layouts.adminlayout')
@section('title')
    view and create participants
@endsection
@section('content')
    <div class="container-fluid">

        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    @if(isset($date))
                        <form class="user"  method="POST"  action="{{ route('training_time.update',$date->id) }}">
                            @method('PUT')
                            @else
                                <form class="user"  method="POST"  action="{{ route('training_time.store') }}">
                                    @endif


                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    @if(isset($date))
                                                        <h1 class="h4 text-gray-900 mb-4">Update Time </h1>
                                                    @else
                                                        <h1 class="h4 text-gray-900 mb-4">Create Time </h1>
                                                    @endif



                                                </div>


                                                <div class="form-group">

                                                    <input type="text"  class="form-control form-control-user" aria-describedby="emailHelp"
                                                           id="date" name="time" value="{{ isset($date) ? $date->time : old('time') }}"   />

                                                    <x-input-error :messages="$errors->get('time')" style="color:red;font-size:11px" class="mt-2" />
                                                </div>




                                                <button class="btn btn-primary btn-user btn-block submitbutton" style="margin-top:18px">
                                                    Submit
                                                </button>


                                            </div>
                                        </div>

                                    </div>
                                </form>
                </div>
            </div>

        </div>

    </div>
    <div class="container-fluid">



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Created List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Time</th>
                            <th>Created Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Time</th>
                            <th>Created Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if ($dates->count() > 0)
                            @foreach ($dates as $date )
                                <tr>
                                    <td>{{$date->time}}</td>
                                    <td>{{date('d-m-Y', strtotime($date->created_at))}}</td>
                                    <td>
                                        <a href="{{route('training_time.edit',$date->id)}}" class="btn btn-warning btn-circle">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <form onSubmit="return confirm('Do you want to delete this date?') " action="{{ route('training_time.destroy',$date->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-circle">     <i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>

                            @endforeach
                        @endif



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
