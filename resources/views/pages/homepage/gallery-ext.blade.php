

{{--<?php
//include('db.php');
?>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATAG IP Students Foundation</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Include Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/rooms0.css">
</head>

<section class="portfolio-w3ls" id="gallery">
    <h3 class="title-w3-agileits title-black-wthree">More Gallery</h3>

    <!-- Gallery for more images -->
    <div class="row">
        @foreach($moreImages as $image)
            <div class="col-md-4 gallery-grid gallery1">
                <a href="{{ asset('imgs/' . $image) }}" class="swipebox">
                    <img src="{{ asset('imgs/' . $image) }}" class="img-responsive" alt="{{ $image }}">
                </a>
            </div>
        @endforeach
    </div>
</section>