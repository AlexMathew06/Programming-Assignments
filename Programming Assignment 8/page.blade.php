<!DOCTYPE html>
<html lang="en">
<head>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>News 24/7</title>

</head>
<body>
 <nav class="navbar navbar-inverse">
 <div class="container-fluid">
 <div class="navbar-header">
  <a class="navbar-brand" href="#">Home</a>
 </div>
 <div>
 <ul class="nav navbar-nav">
  <li> <a href="{{url('/stories')}}">Stories</a></li>
  <li> <a href="{{url('/locations')}}">Locations</a></li>
  <li> <a href="#">Create a new story</a></li>
 </ul>
 </div>
 </div>
 </nav>
<div class="container">

 @yield('content')

 </div>
<!-- online links -->
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
</body>
</html>