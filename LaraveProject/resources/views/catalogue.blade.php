@extends('layouts.frontend.master')
 @section('content')


    <section class="course-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">


                    <div class="showing-list">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="show-filter add-course-info ">
                                    <form action="#">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-md-6 col-item">
                                                <div class=" search-group">
                                                    <i class="feather-search"></i>
                                                    <input type="text" class="form-control" placeholder="Search our courses" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-item">
                                                <div class="form-group select-form mb-0">

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        @foreach($getCourses as $course)
                            <div class="col-lg-12 col-md-12 d-flex">
                            <div class="course-box course-design list-course d-flex">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{asset($course->image)}}">
                                        </a>
                                        <!-- <div class="price">
                                     <h3>$300 <span>$99.00</span></h3>
                                        </div> -->
                                    </div>
                                    <div class="product-content">
                                        <div class="head-course-title">
                                            <h3 class="title"><a href="course-details.html">{{$course->title}}</a></h3>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{route('course-detail',Str::slug($course->title))}}" class="btn btn-primary">BOOK NOW</a>
                                            </div>
                                        </div>
                                        <div style="padding:0px !important; " class="course-info border-bottom-0 pb-0 d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center text-justify">
                                                    {{$course->excerpts}}
                                            </div>

                                        </div>

                                        <div class="course-group d-flex mb-0">
                                            <div class="course-group-img d-flex">

                                                <div class="course-name">
                                                    <h4><a href="instructor-profile.html">{{$course->trainers[0]->name}}</a></h4>
                                                    <p>Trainer</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    {{$getCourses->links()}}



                </div>
                <x-sticky-sidebar />
            </div>






        </div>
    </section>

@endsection
