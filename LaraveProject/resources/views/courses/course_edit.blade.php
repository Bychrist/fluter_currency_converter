@extends('layouts.adminlayout')
@section('content')
    <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <form class="user"  method="POST" enctype="multipart/form-data" action="{{ route('course.store') }}">

                            @csrf
                            <div class="row">
                             <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create a Course</h1>
                                        </div>

                                            @csrf
                                            <div class="form-group">

                                                <input type="title" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course title" id="title" name="title" :value="old('title')" required autofocus autocomplete="title" />

                                                <x-input-error :messages="$errors->get('title')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>
                                              <div class="form-group">

                                                <textarea  class=" form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course exerpts (max:100 words)" id="excerpts" name="excerpts" :value="old('excerpts')" required autofocus autocomplete="excerpts" ></textarea>

                                                <x-input-error :messages="$errors->get('excerpts')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                            <div class="form-group">
                                                <span class="pl-3" style="color:black;font-size:12px">Course Content</span>
                                                <textarea  class="ckeditor form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course content" id="fullText" name="fullText" :value="old('fullText')" required autofocus autocomplete="fullText" ></textarea>

                                                <x-input-error :messages="$errors->get('fullText')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                          <div class="form-group">
                                                <span class="pl-3" style="color:black;font-size:12px">Who Should Attend</span>
                                                <textarea  class="ckeditor form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="Who is to attend" id="whoShouldAttend" name="whoShouldAttend" :value="old('whoShouldAttend')" required autofocus autocomplete="whoShouldAttend" ></textarea>

                                                <x-input-error :messages="$errors->get('whoShouldAttend')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>




                                        <button class="btn btn-primary btn-user btn-block">
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
                                                <input type="file" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course image" id="image" name="image" :value="old('image')" required autofocus autocomplete="image" />

                                                <x-input-error :messages="$errors->get('image')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>
                                            <div class="form-group ">

                                                <input type="number" min="0" step="0.01" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course cost" id="price" name="price" :value="old('price')" required autofocus autocomplete="price" />

                                                <x-input-error :messages="$errors->get('price')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                        <div class="form-group">
                                                <span class="pl-3" style="color:black;font-size:12px">Course Detail</span>
                                                <textarea  class="ckeditor form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="course detail" id="courseDetail" name="courseDetail" :value="old('courseDetail')" required autofocus autocomplete="courseDetail" ></textarea>

                                                <x-input-error :messages="$errors->get('courseDetail')" style="color:red;font-size:11px" class="mt-2" />
                                            </div>

                                          <div class="form-group">
                                                <span class="pl-3" style="color:black;font-size:12px">Info Funding</span>
                                                <textarea  class="ckeditor form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="Info funding" id="infoFunding" name="infoFunding" :value="old('infoFunding')" required autofocus autocomplete="infoFunding" ></textarea>

                                                <x-input-error :messages="$errors->get('infoFunding')" style="color:red;font-size:11px" class="mt-2" />
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






