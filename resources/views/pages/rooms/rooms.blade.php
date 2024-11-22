@extends('layouts.app')
{{--<?php
//include('db.php');
?>--}}
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chocolat.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-gn538Mzj+8F/wJtFl5Mz6VJ/bGUgwbQSW26U+QI8Uz6U3V9LG4MEd7bT1Sowc7w6TynQGSxGUzr88RxlyNOFGrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<body>
    <!-- Header -->
    <h1 class="title"><b>Rooms</b></h1>
    <div class="container mt-4">
        <h2><b>Single Room</b></h2>
        <div class="row">
            <!-- Left Column (Big Picture) -->
            <div class="col-md-6" id="bigpic">
                <img src="imgs/bed3.jpg" alt="Big Picture" class="img-fluid custom-image1">
            </div>

            <!-- Right Column (Four Smaller Pictures) -->
            <div class="col-md-6">
                <div class="row">
                    <!-- First Small Picture with Title and Description -->
                    <div class="col-md-6 mb-4">
                        <img src="imgs/bed3.jpg" alt="Small Picture 1" class="img-fluid custom-img">
                    </div>

                    <!-- Second Small Picture with Title and Description -->
                    <div class="col-md-6 mb-4">
                        <img src="imgs/bed3.jpg" alt="Small Picture 2" class="img-fluid custom-img">
                    </div>
                </div>

                <div class="row">
                    <!-- Third Small Picture with Title and Description -->
                    <div class="col-md-6 mb-4">
                        <img src="imgs/bed3.jpg" alt="Small Picture 3" class="img-fluid custom-img">
                    </div>

                    <!-- Fourth Small Picture with Title and Description -->
                    <div class="col-md-6 mb-4">
                        <img src="imgs/bed3.jpg" alt="Small Picture 4" class="img-fluid custom-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="details-container">
            <div class="details">
            <h7>2 guests • 1 bed • 1 bathroom</h7><br>
            <h7><b>☆ 4.63 • 
            <span class="reviews-link" data-bs-toggle="modal" data-bs-target="#exampleModal">60 reviews</span>
            </b></h7>
                <div class="detail-item">
                    <img src="imgs/breakfast.png" alt="Food Icon" class="icon">
                    <p>Free Breakfast for two</p>
                </div>
                <div class="detail-item1">
                    <img src="imgs/aircon1.png" alt="Food Icon" class="icon">
                    <p>Fully Air-Conditioned</p>
                </div>
                <div class="detail-item1">
                    <img src="imgs/cozy1.png" alt="Food Icon" class="icon">
                    <p>Cozy Atmosphere</p>
                </div>
            </div>
            <div class="pricing-details">
                <!-- Add your pricing and check-in/check-out details here -->
                <h3>Pricing</h3>
                <p>Price per night: P2500.00</p>
                <!-- Check-in and Check-out Date Information -->
                <div class="row">
                    <div class="col-md-6">
                        <h3>Check-in</h3>
                        <input type="text" id="checkInDate" class="rounded-start">
                    </div>
                    <div class="col-md-6">
                        <h3>Check-out</h3>
                        <input type="text" id="checkOutDate" class="rounded-end">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Additional People</h3>
                        <input type="number" id="quantity" value="0" min="0">
                    </div>
                    <div class="col-md-6">
                        <h3>Extra Beddings</h3>
                        <input type="number" id="beddings" value="0" min="0">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h3>Pool</h3>
                        <select id="rateSelection">
                            <option value="none">None</option>
                            <option value="pool">Pool Day Rate (8 am - 6 pm for 50 pesos)</option>
                            <option value="night">Night Rate (6 pm - 10 pm for 80 pesos)</option>
                            <option value="overnight">Overnight (6 pm - 6 am the next day for 130 pesos)</option>
                            <option value="overday">Overday (8 am - 8 am the next day for 180 pesos)</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h3>Quantity</h3>
                        <input type="number" id="ticket" value="0" min="0">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Calculate Button -->
                        <button id="calculateBtn" class="btn btn-primary">
                            {{ __('Calculate') }}
                        </button>
                    
                        <!-- Check-In Button -->
                        @if($canCheckIn ?? false) <!-- Conditional rendering -->
                            <button 
                                id="checkInBtnSingle" 
                                class="btn btn-success" 
                                data-bs-toggle="modal" 
                                data-bs-target="#checkInModalSingle">
                                {{ __('Check-In') }}
                            </button>
                        @else
                            <button 
                                id="checkInBtnSingle" 
                                class="btn btn-success" 
                                style="display: none;">
                                {{ __('Check-In') }}
                            </button>
                        @endif
                    
                        <!-- Result Display -->
                        <p id="resultSingle" class="total-cost">
                            {{ $result ?? '' }}
                        </p>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12" id="res1">
                        <p id="result" class="total-cost"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')
        
        myModal.addEventListener('shown.bs.modal', () => {
          myInput.focus()
        })
    </script>
    <script src="bootstrap-5.3.2-dist\js\bootstrap.min.js"></script>
    <script>

        $(document).ready(function () {
        
        function resetInputsSingle() {
        // Reset the values to their initial state
        $("#checkInDate").val(formattedDate);
        $("#checkOutDate").val("");
        $("#quantity").val("0");
        $("#beddings").val("0");
        $("#rateSelection").val("none");
        $("#ticket").val("0");
        $("#resultSingle").text("");
        }

        var currentDate = new Date();
        var currentMonth = (currentDate.getMonth() + 1).toString().padStart(2, '0');
        var currentDay = currentDate.getDate().toString().padStart(2, '0');
        var currentYear = currentDate.getFullYear();
        // Create the formatted date as mm/dd/yyyy
        var formattedDate = currentMonth + '/' + currentDay + '/' + currentYear;
        // Set the initial value of the check-in input to the current date
        $("#checkInDate").val(formattedDate);

        $("#checkInDate").datepicker();
        $("#checkOutDate").datepicker();      
        $("#calculateBtn").click(function () {
            var checkInDate = $("#checkInDate").datepicker("getDate");
            var checkOutDate = $("#checkOutDate").datepicker("getDate");

            if (!checkOutDate) {
                alert("Please select a check-out date.");
                return;
            }

            const InDate = new Date(document.getElementById('checkInDate').value);
            const OutDate = new Date(document.getElementById('checkOutDate').value);

            if (OutDate < InDate) {
                alert('Checkout date cannot be before the check-in date.');
            } else {
                var timeDiff = checkOutDate - checkInDate;
                var days = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

                var selectedRate = $("#rateSelection").val();
                var rate = 0;

                if (selectedRate === "pool") {
                    rate = 50;
                } else if (selectedRate === "night") {
                    rate = 80;
                } else if (selectedRate === "overnight") {
                    rate = 130;
                } else if (selectedRate === "overday") {
                    rate = 180;
                }

                var additionalPeople = $("#quantity").val();
                var extraBeddings = $("#beddings").val();
                var ticketQuantity = $("#ticket").val();

                var additionalPeopleCost = additionalPeople * 200 * days;
                var extraBeddingsCost = extraBeddings * 500 * days;
                var poolCost = selectedRate !== "none" ? ticketQuantity * rate * days : 0;

                var total = (days * 2500) + additionalPeopleCost + extraBeddingsCost + poolCost;

                $("#resultSingle").text("Total cost: " + total);
                $("#checkInBtnSingle").show();

                $("#checkInDateTextSingle").text($("#checkInDate").val());
                $("#checkOutDateTextSingle").text($("#checkOutDate").val());
                $("#totalCostTextSingle").text(total);
            }
        });
        $("#checkInBtnSingle").click(function () {
        // Show the check-in modal for the single room
        $("#checkInModalSingle").modal("show");
        resetInputsSingle();
        $(this).hide();
        });

        function resetInputsDouble() {
        // Reset the values to their initial state for the double room
        $("#checkInDate1").val(formattedDate1);
        $("#checkOutDate1").val("");
        $("#quantity1").val("0");
        $("#beddings1").val("0");
        $("#rateSelection1").val("none");
        $("#ticket1").val("0");
        $("#resultDouble").text("");
        }

        $("#checkInBtnDouble").click(function () {
        // Show the check-in modal for the double room
        $("#checkInModalDouble").modal("show");
        resetInputsDouble();
        $(this).hide();
        }); 

        var currentDate1 = new Date();
        var currentMonth1 = (currentDate1.getMonth() + 1).toString().padStart(2, '0');
        var currentDay1 = currentDate1.getDate().toString().padStart(2, '0');
        var currentYear1 = currentDate1.getFullYear();

        // Create the formatted date as mm/dd/yyyy
        var formattedDate1 = currentMonth1 + '/' + currentDay1 + '/' + currentYear1;

        // Set the initial value of the check-in input to the current date
        $("#checkInDate1").val(formattedDate1);
        $("#checkInDate1").datepicker();
        $("#checkOutDate1").datepicker();      
        $("#calculateBtn1").click(function () {
            var checkInDate1 = $("#checkInDate1").datepicker("getDate");
            var checkOutDate1 = $("#checkOutDate1").datepicker("getDate");

            if (!checkOutDate1) {
                alert("Please select a check-out date.");
                return;
            }

            const InDate1 = new Date(document.getElementById('checkInDate1').value);
            const OutDate1 = new Date(document.getElementById('checkOutDate1').value);

            if (OutDate1 < InDate1) {
                alert('Checkout date cannot be before the check-in date.');
            } else {
                var timeDiff1 = checkOutDate1 - checkInDate1;
                var days1 = Math.ceil(timeDiff1 / (1000 * 60 * 60 * 24));

                var selectedRate1 = $("#rateSelection1").val();
                var rate1 = 0;

                if (selectedRate1 === "pool") {
                    rate1 = 50;
                } else if (selectedRate1 === "night") {
                    rate1 = 80;
                } else if (selectedRate1 === "overnight") {
                    rate1 = 130;
                } else if (selectedRate1 === "overday") {
                    rate1 = 180;
                }

                var additionalPeople1 = $("#quantity1").val();
                var extraBeddings1 = $("#beddings1").val();
                var ticketQuantity1 = $("#ticket1").val();

                var additionalPeopleCost1 = additionalPeople1 * 200 * days1;
                var extraBeddingsCost1 = extraBeddings1 * 500 * days1;
                var poolCost1 = selectedRate1 !== "none" ? ticketQuantity1 * rate1 * days1 : 0;

                var total1 = (days1 * 4000) + additionalPeopleCost1 + extraBeddingsCost1 + poolCost1;

                $("#resultDouble").text("Total cost: " + total1);
                $("#checkInBtnDouble").show();

                $("#checkInDateTextDouble").text($("#checkInDate1").val());
                $("#checkOutDateTextDouble").text($("#checkOutDate1").val());
                $("#totalCostTextDouble").text(total1);
            }
        });
        });
    </script>     
</body>
</html>
