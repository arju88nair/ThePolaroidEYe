<!DOCTYPE html>
<html>
<head>
    <title>The Polaroid Eye</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet'/>

    <!-- The main CSS file -->
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <script>
        $(document).ready(function () {
            var rangeSlider = function () {
                var slider = $('.range-slider'), range = $('.range-slider__range'), value = $('.range-slider__value');
                slider.each(function () {
                    value.each(function () {
                        var value = $(this).prev().attr('value');
                        $(this).html(value);
                    });
                    range.on('input', function () {
                        $(this).next(value).html(this.value);
                    });
                });
            };
            rangeSlider();

        });


    </script>
    <style>


    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">The Polaroid Eye</a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#section1">Upload</a></li>
                    <li><a href="#section2">Search</a></li>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="section1" class="container-fluid">
    <h1>Upload</h1>

    <form id="upload" method="post" action="{{ action('mainController@index') }}" enctype="multipart/form-data">

        <div id="drop">
            Drop Here

            <a>Browse</a>
            <input type="file" name="upl" multiple/>
        </div>

        <ul>
            <!-- The file uploads will be shown here -->
        </ul>

    </form>
</div>
<div id="section2" class="container-fluid">
    <h1>Search for the required hue</h1>

    <div class="container" style="margin-top: -7%">
        <center>
            <p id="hueText" style="margin-top: 9%">Hue</p>
            <br>

            <div id='hue'>
                <div id='ie-1'></div>
                <div id='ie-2'></div>
                <div id='ie-3'></div>
                <div id='ie-4'></div>
                <div id='ie-5'></div>
                <div id='ie-6'></div>
            </div>
        </center>
        <center>

            <div class="range-slider"><input class="range-slider__range" id="hueRange" type="range" value="0" min="0"
                                             max="360">
                <span class="range-slider__value">0</span>
            </div>
        </center>
        <br>

        <center>
            <center><p id="offset_text">Spread</p></center>
            <br>

            <div class="range-slider" id="offset_ranger" style="margin-top: -2%"><input class="range-slider__range"
                                                                                        id="spread"
                                                                                        type="range" value="0" min="0"
                                                                                        max="200">
                <span class="range-slider__value">0</span>
            </div>
        </center>
        <center>
            <div>
                <p id="count"></p>
                <ul id="ul">
                </ul>


            </div>


        </center>

    </div>
</div>

<div class="footers">The Polaroid Eye &nbsp;&nbsp;&nbsp;&nbsp; &copy;&nbsp; <strong>Nair</strong>.</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{!! asset('script/jquery.knob.js') !!}"></script>


<!-- jQuery File Upload Dependencies -->
<script type="text/javascript" src="{!! asset('script/jquery.ui.widget.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/jquery.iframe-transport.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/jquery.fileupload.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/script.js') !!}"></script>
<script>


</script>
</html>

