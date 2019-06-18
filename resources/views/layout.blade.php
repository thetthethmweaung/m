<!DOCTYPE html>
<html>
<head>
	<title>Member Info Bank</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
    body{
            background-color: #daedf1;
        }
        h1, button {
            font-family:"Rockwell";
            color: #3c565d;
        }
    </style>

</head>
<body>
<div class="container">
	@yield('content')
	
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="//code.jquery.com/jquery-1.12.3.js"></script>

    <script>
    $(document).ready(function() {
        $.dobPicker({
            daySelector: '#dobday', /* Required */
            monthSelector: '#dobmonth', /* Required */
            yearSelector: '#dobyear', /* Required */
            dayDefault: 'Day', /* Optional */
            monthDefault: 'Month', /* Optional */
            yearDefault: 'Year', /* Optional */
            minimumAge: 12, /* Optional */
            maximumAge: 80 /* Optional */
        });
    });
</script>
<script src="assets/script/jquery.js"></script>
<script src="assets/script/bootstrap.min.js"></script>
<script src="assets/Minimalist-jQuery-Plugin-For-Birthday-Selector-DOB-Picker/dobpicker.js"></script>

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

    

</body>
</html>

