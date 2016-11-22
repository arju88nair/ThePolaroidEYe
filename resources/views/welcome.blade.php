<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Mini Ajax File Upload Form</title>

    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

    <!-- The main CSS file -->
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css"/>

</head>

<body>

<form id="upload" method="post" action="{{ action('mainController@index') }}" enctype="multipart/form-data">

    <div id="drop">
        Drop Here

        <a>Browse</a>
        <input type="file" name="upl" multiple />
    </div>

    <ul>
        <!-- The file uploads will be shown here -->
    </ul>

</form>



<!-- JavaScript Includes -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{!! asset('script/jquery.knob.js') !!}"></script>


<!-- jQuery File Upload Dependencies -->
<script type="text/javascript" src="{!! asset('script/jquery.ui.widget.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/jquery.iframe-transport.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/jquery.fileupload.js') !!}"></script>
<script type="text/javascript" src="{!! asset('script/script.js') !!}"></script>



<!-- Our main JS file -->


<!-- Only used for the demos. Please ignore and remove. -->

</body>
</html>