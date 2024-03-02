@extends('layouts.adminlayout')
@section('content')
    <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <form class="user"  method="POST" enctype="multipart/form-data" action="{{ route('course.update',$getEditCourse->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                             <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create a Course</h1>
                                        </div>

                                            <div class="form-group">

                                                <input type="title" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course title" id="title" name="title" value="{{$getEditCourse->title}}" required autofocus autocomplete="title" />

                                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                              <div class="form-group">

                                                <textarea  class=" form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course exerpts (max:100 words)" id="excerpts" name="excerpts" required autofocus autocomplete="excerpts" >{{$getEditCourse->excerpts}}</textarea>
                                                  <div class="char-counter text-danger" style="font-size:11px;padding-left:15px">Characters remaining: <span id="charCount">350</span></div>

                                                <x-input-error :messages="$errors->get('excerpts')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                            <div class="form-group">
                                                <span class="pl-3" style="color:black;font-size:12px">Course Content</span>
                                                <textarea  class="ckeditor form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course content" id="fullText" name="fullText" value="" required autofocus autocomplete="fullText" >{{$getEditCourse->fullText}}</textarea>

                                                <x-input-error :messages="$errors->get('fullText')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>


                                        <button class="btn btn-primary btn-user btn-block submitbutton">
                                            Submit Course
                                        </button>


                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">&nbsp;</h1>
                                        </div>
                                         <div class="form-group ">
                                                <span class="pl-3" style="color:black;font-size:12px">Upload Course Image</span>
                                             <img src="{{asset($getEditCourse->image)}}" style="width:50px;height:50px;margin-bottom: 2px" alt="">
                                                <input type="file" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course image" id="image" name="image"  autofocus autocomplete="image" />

                                                <x-input-error :messages="$errors->get('image')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>
                                            <div class="form-group">
                                                <select name="trainer" id="trainer" class="form-control " aria-describedby="emailHelp" style="border-radius:20px;">
                                                    <option value="{{$getEditCourse->trainers[0]->id}}">{{$getEditCourse->trainers[0]->name}}</option>
                                                    @foreach($trainers as $trainer)
                                                        @if($getEditCourse->trainers[0]->id != $trainer->id)
                                                            <option value="{{$trainer->id}}" >{{$trainer->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group ">

                                                <input type="number" min="0" step="0.01" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course cost" id="price" name="price" value="{{$getEditCourse->price}}" required autofocus autocomplete="price" />

                                                <x-input-error :messages="$errors->get('price')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                        <div class="form-group">
                                                <span class="pl-3" style="color:black;font-size:12px">Course Detail</span>
                                                <input  class="form-control form-control-user"  placeholder="course url e.g https://yoututbe.com" id="courseDetail" name="courseDetail" :value="old('courseDetail')" required autofocus autocomplete="courseDetail" />


                                                <x-input-error :messages="$errors->get('courseDetail')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
@endsection

@section('jquery')
    <x-character-count />
@endsection




