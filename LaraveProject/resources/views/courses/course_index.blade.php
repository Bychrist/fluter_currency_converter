@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of Courses Created</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Course Title</th>
                                            <th>Excerpts</th>
                                            <th>Image</th>
                                            <th>Date Created</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Course Title</th>
                                            <th>Excerpts</th>
                                            <th>Image</th>
                                            <th>Date Create</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if ($courseList->count() > 0)
                                            @foreach ($courseList as $courseList )
                                                    <tr>
                                                        <td>{{$courseList->title}}</td>
                                                        <td>{{substr($courseList->excerpts,0,50)}}</td>
                                                        <td>
                                                           <img src="{{asset("/$courseList->image")}}" style="width:80px;height:80px" alt="">
                                                        </td>
                                                        <td>{{date('d-m-Y', strtotime($courseList->created_at))}}</td>
                                                        <td>
                                                            <a href="{{route('course.edit',$courseList->id)}}" class="btn btn-warning btn-circle">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td>

                                                            <form onSubmit="return confirm('Do you want to delete this course?') " action="{{ route('course.destroy',$courseList->id)}}" method="POST">
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
                <!-- /.container-fluid -->
@endsection
