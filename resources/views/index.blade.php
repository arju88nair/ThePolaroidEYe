<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
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
        /*span#spanTag {*/
            /*float: left;*/
            /*padding-left: 4%;*/
            /*margin-top: 2%;*/
            /*font-size: 1.5em;*/
        /*}*/
 ul#ul{
     list-style-type: none;
     background-color: grey;
 }
 li.il{
     padding-bottom: 7%;
     border:thin solid black;
     overflow-y: hidden;
 }
 img.imgTag{
     width:14%;
     height:auto;
     float:left
 }

        *, *:before, *:after {
            box-sizing: border-box;
        }

        .range-slider {
            margin: 60px 0 0 0%;
            margin-top: -9%;
            padding-bottom: 6%;
        }

        .range-slider {
            width: 26%;
        }

        .range-slider__range {
            -webkit-appearance: none;
            width: calc(100% - (73px));
            height: 10px;
            border-radius: 5px;
            background: #d7dcdf;
            outline: none;
            padding: 0;
            margin: 0;
        }

        .range-slider__range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #2c3e50;
            cursor: pointer;
            -webkit-transition: background .15s ease-in-out;
            transition: background .15s ease-in-out;
        }

        .range-slider__range::-webkit-slider-thumb:hover {
            background: #1abc9c;
        }

        .range-slider__range:active::-webkit-slider-thumb {
            background: #1abc9c;
        }

        .range-slider__range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border: 0;
            border-radius: 50%;
            background: #2c3e50;
            cursor: pointer;
            -webkit-transition: background .15s ease-in-out;
            transition: background .15s ease-in-out;
        }

        .range-slider__range::-moz-range-thumb:hover {
            background: #1abc9c;
        }

        .range-slider__range:active::-moz-range-thumb {
            background: #1abc9c;
        }

        .range-slider__value {
            display: inline-block;
            position: relative;
            width: 60px;
            color: #fff;
            line-height: 20px;
            text-align: center;
            border-radius: 3px;
            background: #2c3e50;
            padding: 5px 10px;
            margin-left: 8px;
        }

        .range-slider__value:after {
            position: absolute;
            top: 8px;
            left: -7px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-right: 7px solid #2c3e50;
            border-bottom: 7px solid transparent;
            content: '';
        }

        ::-moz-range-track {
            background: #d7dcdf;
            border: 0;
        }

        input::-moz-focus-inner,
        input::-moz-focus-outer {
            border: 0;
        }

        #hue {
            margin-top: -9%;
            height: 300px;
            width: 50px;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);

            background: -moz-linear-gradient(top, #ff0000 0%, #ffff00 17%, #00ff00 33%, #00ffff 50%, #0000ff 67%, #ff00ff 83%, #ff0000 100%);
            background: -ms-linear-gradient(top, #ff0000 0%, #ffff00 17%, #00ff00 33%, #00ffff 50%, #0000ff 67%, #ff00ff 83%, #ff0000 100%);
            background: -o-linear-gradient(top, #ff0000 0%, #ffff00 17%, #00ff00 33%, #00ffff 50%, #0000ff 67%, #ff00ff 83%, #ff0000 100%);
            background: -webkit-gradient(linear, left top, left bottom, from(#ff0000), color-stop(0.17, #ffff00), color-stop(0.33, #00ff00), color-stop(0.5, #00ffff), color-stop(0.67, #0000ff), color-stop(0.83, #ff00ff), to(#ff0000));
            background: -webkit-linear-gradient(top, #ff0000 0%, #ffff00 17%, #00ff00 33%, #00ffff 50%, #0000ff 67%, #ff00ff 83%, #ff0000 100%);
            background: linear-gradient(to bottom, #ff0000 0%, #ffff00 17%, #00ff00 33%, #00ffff 50%, #0000ff 67%, #ff00ff 83%, #ff0000 100%);
        }

        #ie-1 {
            height: 17%;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0000', endColorstr='#ffff00');
        }

        #ie-2 {
            height: 16%;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff00', endColorstr='#00ff00');
        }

        #ie-3 {
            height: 17%;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ff00', endColorstr='#00ffff');
        }

        #ie-4 {
            height: 17%;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffff', endColorstr='#0000ff');
        }

        #ie-5 {
            height: 16%;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0000ff', endColorstr='#ff00ff');
        }

        #ie-6 {
            height: 17%;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff00ff', endColorstr='#ff0000');
        }

        body {
            position: relative;
        }

        /*#section1 {padding-top:50px;height:auto;color: #fff; background: url(http://i.stack.imgur.com/PEnJm.png), linear-gradient(#ffffff, #aaaaaa);*/
        /*background-blend-mode: multiply;}*/
        /*#section2 {padding-top:50px;height:500px;color: #fff;  background: #263039 url(http://i.stack.imgur.com/PEnJm.png);*/
        /*background-blend-mode: multiply;}*/
        #section2 {
            padding-top: 50px;
            height: auto;
            color: #fff;
            background: #263039 url(http://i.stack.imgur.com/PEnJm.png);
            background-blend-mode: multiply;
        }

        #section1 {
            padding-top: 50px;
            height: auto;
            color: #fff;
            background: url(http://i.stack.imgur.com/PEnJm.png), radial-gradient(#444854, #34373e);
            background-blend-mode: multiply;
        }

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
            <p id="offset_text">Spread</p>
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
                <ul id="ul">
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>
                    <li class="il"><img src="http://www.w3schools.com/css/img_fjords.jpg" class="imgTag"><span id="spanTag">Hue</span><span id="hueVal">50</span><br><p id="Ips">Ip of the user</p><span id="ip"></span><br><span id="dated">Added at</span><span>nhfgjbknlm;,kjbhjvgjhbjn,k.m</span></li>


                </ul>



            </div>



        </center>

    </div>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{!! asset('script/jquery.knob.js') !!}"></script>


<!-- jQuery File Upload Dependencies -->
<script type="text/javascript" src="{!! asset('script/jquery.ui.widget.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/jquery.iframe-transport.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/jquery.fileupload.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/script.js') !!}"></script>
<script>
    $(document).on('input change', '#spread', function () {
        var spread = $(this).val();
        var hue = $('#hueRange').val();
        console.log(spread);
        $.ajax({
            type: "POST",
            url: "db",
            data: {'spread': spread, 'hue': hue},
            cache: true,
            success: function (e) {
                var data = e;
                console.log(data.length);
                for (var i = 0; i < data.length; i++) {

                    var url = data[i].url;
                    var ip=data[i].ip;
                    var hue=data[i].hue;
                    var date=data[i].created_at;
                    console.log(date)


    }

    },
    error:function () {
        console.log("hi");
    }
    })
    ;


    })
    ;

</script>
</html>

