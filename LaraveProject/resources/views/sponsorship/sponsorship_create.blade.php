@extends('layouts.adminlayout')
@section('title')
    view and create sponsorships
@endsection
@section('content')
    <div class="container-fluid">

        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    @if(isset($sponsorship))
                        <form class="user"  method="POST"  action="{{ route('sponsorship.update',$sponsorship->id) }}">
                            @method('PUT')
                            @else
                                <form class="user"  method="POST"  action="{{ route('sponsorship.store') }}">
                                    @endif


                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    @if(isset($sponsorship))
                                                        <h1 class="h4 text-gray-900 mb-4">Update Sponsorship </h1>
                                                    @else
                                                        <h1 class="h4 text-gray-900 mb-4">Create Sponsorship </h1>
                                                    @endif



                                                </div>


                                                <div class="form-group">

                                                    <input type="input" class="form-control form-control-user" aria-describedby="emailHelp"
                                                           placeholder="sponsorship type name" id="sponsorship" name="sponsorship" value="{{ isset($sponsorship) ? $sponsorship->sponsorship : old('sponsorship') }}"   />

                                                    <x-input-error :messages="$errors->get('sponsorship')" style="color:red;font-size:11px" class="mt-2" />
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
                <h6 class="m-0 font-weight-bold text-primary">List of Trainers Created</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sponsorship Type</th>
                            <th>Created Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sponsorship Type</th>
                            <th>Created Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if ($sponsorships->count() > 0)
                            @foreach ($sponsorships as $sponsorship )
                                <tr>
                                    <td>{{$sponsorship->sponsorship}}</td>
                                    <td>{{date('d-m-Y', strtotime($sponsorship->created_at))}}</td>
                                    <td>
                                        <a href="{{route('sponsorship.edit',$sponsorship->id)}}" class="btn btn-warning btn-circle">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <form onSubmit="return confirm('Do you want to delete this course?') " action="{{ route('sponsorship.destroy',$sponsorship->id)}}" method="POST">
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
