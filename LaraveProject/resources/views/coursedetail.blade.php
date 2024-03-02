@extends('layouts.frontend.master')

<!-- Main Wrapper -->
@section('content')
<div class="main-wrapper mt-5">


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">
                                    <a href="{{route('catalogue')}}">All Courses</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">{{$course->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Inner Banner -->
    <div class="inner-banner" style="min-height: 300px;padding-top:80px ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instructor-wrap border-bottom-0 m-0">
                        <div class="about-instructor align-items-center">
                            <div class="abt-instructor-img">
                                <a href="   "><img src="{{asset($course->trainers[0]->image)}}" alt="img" class="img-fluid"></a>
                            </div>
                            <div class="instructor-detail me-3">
                                <h5><a href="">{{$course->trainers[0]->name}}</a></h5>
                                <h2>{{$course->title}}</h2>
                            </div>

                        </div>

                    </div>

                    <p class="text-justify">{{$course->excerpts}}</p>

                </div>
            </div>
        </div>
    </div>
    <!-- /Inner Banner -->

    <!-- Course Content -->
    <section class="page-content course-sec">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">

                    <!-- Overview -->
                    <div class="card overview-sec">
                        <div class="card-body text-justify">
                            <h5 class="subs-title">Overview</h5>

                           {!! $course->fullText !!}
                        </div>
                    </div>
                    <!-- /Overview -->





                </div>

                <div class="col-lg-4">
                    <div class="sidebar-sec">

                        <!-- Video -->
                        <div class="video-sec vid-bg">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{$course->courseDetail}}" target="_blank" class="video-thumbnail" data-fancybox="">
                                        <div class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <img class="" src="{{asset($course->image)}}" style="height:300px;max=width: 300px" alt="">

                                    </a>
                                    <div class="video-details">

                                        <div class="row gx-2">

                                            <div class="col-md-12">
                                                <a href="javascript:void(0);" class="btn btn-wish w-100"><i class="feather-share-2"></i> Share</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Video -->

                        <!-- Include -->
                        <div class="card include-sec">
                            <div class="card-body">
                                <div class="cat-title">
                                    <h4>Booking</h4>
                                </div>
                                <ul>
                                    <form id="paymentForm">
                                    <li id="showamount" style="display: none">
                                       <span style="font-weight: 800;font-size: 25px;" id="codeNo"></span> <span id="saleamount" style="font-weight: 400;font-size: 35px;"> </span>
                                    </li>
                                    <li>

                                         <div class="form-group">
                                             <label>Resident Country</label><br>
                                             <select name="country" id="country" class="form-control" style="border-radius:20px">
                                                 <option value="">~ select resident country ~</option>
                                                 @foreach($countries as $country)
                                                     <option value="{{$country->continent}}/{{$country->country}}">{{$country->country}}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>Mode of Training</label><br>
                                            <select name="" id="" class="form-control" style="border-radius:20px">
                                                <option value="">~ select choice ~</option>
                                                @foreach($modeOfTraining as $training)
                                                    <option value="   ">{{$training->mode}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>Course Date</label><br>
                                            <select name="" id="" class="form-control" style="border-radius:20px">
                                                <option value="">~ select choice ~</option>
                                                @foreach($date as $dat)
                                                    <option value="">{{$dat->date}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>Course Time</label><br>
                                            <select name="" id="" class="form-control" style="border-radius:20px">
                                                <option value="">~ select choice ~</option>
                                                @foreach($time as $dat)
                                                    <option value="">{{$dat->time}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>No of Participant</label><br>
                                            <select name="" id="" class="form-control" style="border-radius:20px">
                                                <option value="">~ select choice ~</option>
                                                @foreach($noPart as $dat)
                                                    <option value="">{{$dat->number}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>Sponsorship</label><br>
                                            <select name="" id="" class="form-control" style="border-radius:20px">
                                                <option value="">~ select choice ~</option>
                                                @foreach($sponsor as $dat)
                                                    <option value="">{{$dat->sponsorship}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>Email</label><br>
                                            <input type="text" style="border-radius:20px;" id="email" name="email" placeholder="Enter email" class="form-control">
                                        </div>
                                    </li>
                                    <li>

                                        <div class="form-group">
                                            <label>WhatsApp Number</label><br>
                                            <input type="text" style="border-radius:20px;" placeholder="Enter whatsapp number" class="form-control">
                                        </div>
                                    </li>
                                    <li>
                                       <div class="row" id="nigeria" style="display:none">
                                           <div class="col-md-12">
                                               <div class="form-group" >
                                                   <input type="submit"  onclick="payWithPaystack()" class="btn btn-wish w-100" value="Book Now">
                                               </div>
                                           </div>
                                       </div>
                                        <div class="col-md-12" id="africa" style="display:none">
                                            <div class="form-group" >
                                                <input type="submit" class="btn btn-wish w-100" value="Book Now">
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="other" style="display:none">
                                            <div class="form-group" >
                                                <input type="submit" class="btn btn-wish w-100" value="Book Now ">
                                            </div>
                                        </div>
                                    </li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <!-- /Include -->


                    </div>

                </div>


            </div>


        </div>


    </section>
    <!-- /Pricing Plan -->

</div>
<!-- /Main Wrapper -->
@endsection

@section('frontendscript')
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>

        $(document).ready(function(){
            var rateAmount = {!! json_encode($course->price) !!};
            var isValid = false;
            var currency = '';
            var symbol = '';
            var rate = 0;
            var formatCost = 0
            var currencyRateUrl = 'http://data.fixer.io/api/latest?access_key=66b04421a8487a0bc2ec99f8f5e0e031&base=EUR&symbols='

            /*=================== format number function ==========*/
            function formatNumber(number) {
                // Use toFixed to control decimal places

                // Add commas for thousands separators
                formattedNumber = number.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                return formattedNumber;
            }
            /*=================== /format number function ==========*/
            /*====================== function  ajax to get country code=======================*/
            function fetchData(country,continent) {
                // Create a new XMLHttpRequest object
                console.log(country)
                var xhr = new XMLHttpRequest();

                // Define the API endpoint
                var url = `https://restcountries.com/v2/name/${country}`;
                // Configure the request
                xhr.open('GET', url, true);
                // Set up a callback function to handle the response
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Parse the JSON response
                        var response = JSON.parse(xhr.responseText);
                        // Log the response to the console (you can do something else with it)
                        currency = (continent === 'Africa' || continent === 'Nigeria') ? response[0].currencies[0].code : 'USD'

                        symbol = (continent === 'Africa' || continent === 'Nigeria') ?  response[0].currencies[0].symbol : '$';

                        fetchRate(currency,symbol,continent)
                        $('#showamount').show()

                    }
                };

                // Send the request
                xhr.send();
            }
            /*============================= /function  ajax to get country code ==================*/

            /* ==============   get currency rate of  currency code */
            function fetchRate(code,symbol,continent) {
                // Create a new XMLHttpRequest object
                if(continent !== 'Africa' && continent !== 'Nigeria')
                {

                    code = 'USD'
                }
                var xhr = new XMLHttpRequest();

                // Define the API endpoint
                var url = `${currencyRateUrl}${code}`;

                console.log(url)
                // Configure the request
                xhr.open('GET', url, true);
                // Set up a callback function to handle the response
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Parse the JSON response
                        var response = JSON.parse(xhr.responseText);
                        // Log the response to the console (you can do something else with it)
                        var apiRate = response.rates[code];

                        //=================== maths dynamics
                        var costPurchase = apiRate * rateAmount
                         formatCost = costPurchase.toFixed(2)
                        var valueFormatted = formatNumber(formatCost)
                        $('#saleamount').text(valueFormatted)
                        $('#codeNo').text(symbol)


                    }
                };

                // Send the request
                xhr.send();
            }
            /* ==============   /get currency rate of  currency code */

            $('#country').change(function(e){

                var country = $(this).val();
                var splitResult = country.split('/');

                if(country.trim().length !== 0)
                {

                    if(splitResult[0] == 'Africa')
                    {
                        $('#africa').show()
                        $('#nigeria').hide()
                        $('#other').hide()

                    }
                    else if(splitResult[0] == 'Nigeria')
                    {
                        $('#nigeria').show()
                        $('#other').hide()
                        $('#africa').hide()
                    }
                    else {
                        $('#other').show()
                        $('#africa').hide()
                        $('#nigeria').hide()
                    }


                    fetchData(splitResult[1],splitResult[0]);



                }
                else
                {
                    $('#other').hide()
                    $('#africa').hide()
                    $('#nigeria').hide()
                    $('#showamount').hide()
                }



            })



           /* paystack function */
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener("submit", payWithPaystack, false);

            function payWithPaystack(e) {
                e.preventDefault();

                let handler = PaystackPop.setup({
                    key: 'pk_test_15cc7eb938c75614fd2490b056eeaeb11a8208be', // Replace with your public key
                    email: document.getElementById("email").value,
                    amount: formatCost * 100,
                    currency:'NGN',
                    ref: ''+Math.floor((Math.random() * 1000000000) + 1),
                    onClose: function(){
                        alert('Window closed.');
                    },
                    callback: function(response){
                        let message = 'Payment complete! Reference: ' + response.reference;
                        alert(message);
                    }
                });

                handler.openIframe();
            }

           /* /paystack function */



        })
    </script>



@endsection
