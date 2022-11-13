<?php
use Illuminate\Support\Facades\View;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping page</title>
    <!-- Latest compiled and minified CSS --><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

{{ view::make('header') }}
@yield("content")
{{ view::make('footer') }}

</body>
<style>

    .custom-login{
        height:800px;
        padding-top: 100px;
    }
    img.slider-img{
        height:400px !important
    }
    .custom-product
    {
        height:600px !important
    }
    .slider-text
    {
        background-color: #1987547a !important;
    }
    .trending-image
    {
        height: 100px;
    }
    .trending-item
    {
        float: left;
        width: 15%;
    }
    .trending-wrapper
    {
        margin: 30px;
    }
    .detail-img
    {
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-divider
    {

        margin-bottom: 20px;
        padding-bottom: 20px;
    }

</style>
</html>
