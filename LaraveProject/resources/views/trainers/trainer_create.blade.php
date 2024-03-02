@extends('layouts.adminlayout')
@section('title')
   trainers
@endsection
@section('content')
    <div class="container-fluid">

        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    @if(isset($updateTrainers))
                        <form class="user"  method="POST" enctype="multipart/form-data" action="{{ route('trainer.update',$updateTrainers->id) }}">
                            @method('PUT')
                    @else
                        <form class="user"  method="POST" enctype="multipart/form-data" action="{{ route('trainer.store') }}">
                  @endif


                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        @if(isset($updateTrainers))
                                            <h1 class="h4 text-gray-900 mb-4">Update Trainer </h1>
                                        @else
                                            <h1 class="h4 text-gray-900 mb-4">Create Trainer </h1>
                                        @endif



                                    </div>


                                    <div class="form-group">

                                        <input type="input" class="form-control form-control-user" aria-describedby="emailHelp"
                                               placeholder="trainer full name" id="name" name="name" value="{{ isset($updateTrainers) ? $updateTrainers->name : old('name') }}"   />

                                        <x-input-error :messages="$errors->get('name')" style="color:red;font-size:11px" class="mt-2" />
                                    </div>




                                    <button class="btn btn-primary btn-user btn-block submitbutton" style="margin-top:58px">
                                        Submit Course
                                    </button>


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">&nbsp;</h1>
                                    </div>
                                    <div class="form-group">

                                        <textarea  class="form-control form-control-user" aria-describedby="emailHelp"
                                                   placeholder="trainer info" id="trainerInfo" name="trainerInfo" >{{ isset($updateTrainers) ? $updateTrainers->trainerInfo :  old('trainerInfo')}}</textarea>

                                        <x-input-error :messages="$errors->get('trainerInfo')" style="color:red;font-size:11px" class="mt-2" />
                                    </div>

                                    <div class="form-group">
                                        @if(isset($updateTrainers))
                                            <img src="{{asset($updateTrainers->image)}}" style="width:80px;height: 80px" alt="">
                                        @else
                                            @endif
                                        <input type="file" class="form-control form-control-user" aria-describedby="emailHelp"
                                              id="image" name="image"   />

                                        <x-input-error :messages="$errors->get('image')" style="color:red;font-size:11px" class="mt-2" />
                                    </div>

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
                            <th>Trainer Name</th>
                            <th>Trainer Info Excerpts</th>
                            <th>Trainer Image</th>
                            <th>Date Created</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Trainer Name</th>
                            <th>Trainer Info Excerpts</th>
                            <th>Trainer Image</th>
                            <th>Date Created</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if ($getTrainers->count() > 0)
                            @foreach ($getTrainers as $getTrainer )
                                <tr>
                                    <td>{{$getTrainer->name}}</td>
                                    <td>{{substr($getTrainer->trainerInfo,0,50)}}</td>
                                    <td>
                                        <img src="{{asset("/$getTrainer->image")}}" style="width:80px;height:80px" alt="">
                                    </td>
                                    <td>{{date('d-m-Y', strtotime($getTrainer->created_at))}}</td>
                                    <td>
                                        <a href="{{route('trainer.edit',$getTrainer->id)}}" class="btn btn-warning btn-circle">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <form onSubmit="return confirm('Do you want to delete this course?') " action="{{ route('trainer.destroy',$getTrainer->id)}}" method="POST">
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
