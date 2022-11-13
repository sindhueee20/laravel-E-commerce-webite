<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user'))
{
    $total = ProductController::CartItem();
}

$tota=0;
if(Session::has('user'))
{
    $tot = ProductController::Cartlist();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">E-Comm</a>
    </div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav">
        <li class="active"><a href="/myorders">Order</a></li>
    </ul>

    <form action="/search"  class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>

    <ul class="nav navbar-nav navba-right">
        <li><a href="/cartlist">Cart({{$total}})</a></li>
        @if(Session::has('user'))

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
          </li>
          @endif
        </ul>
  </div>


</nav>
</body>
</html>
