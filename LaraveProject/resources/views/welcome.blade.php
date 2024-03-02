@extends('layouts.frontend.master')
@section('content')
    <section class="home-slide d-flex align-items-center" >
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="home-slide-face aos aos-init aos-animate" data-aos="fade-up">
                        <div class="home-slide-text ">
                            <h5>The Leader in Online Learning</h5>
                            <h1>Engaging &amp;  Accessible Online Courses For All</h1>
                            <p>Own your future learning new skills online</p>
                        </div>


                                <div class="form-inner banner-content" style="width:43%;">
                                    <div class="input-group mb-4 ingroup">
                                        <span class="view_catalogue">
                                            View Courses
                                        </span>  &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('catalogue')}}" class="btn btn-primary sub-btn ml-5" type="submit" id="subbtn"  ><i class="fas fa-arrow-right"></i></a>
                                    </div>


                                </div>


                        <div class="trust-user">
                            <p>Trusted by over 15K Users <br>worldwide since 2022</p>
                            <div class="trust-rating d-flex align-items-center">

                                <div class="rating d-flex align-items-center">

                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center" >
                    <div class="girl-slide-img aos aos-init aos-animate" data-aos="fade-up">
                        <img src="{{asset('frontend/assets/img/object.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
