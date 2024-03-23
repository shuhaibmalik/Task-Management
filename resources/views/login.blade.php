<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
   
    <!-- Login Form -->
    <form  action="{{route('login')}}" method="post">
        @csrf
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <button type="submit" class="fadeIn fourth">Log In</button>
    </form>
  </div>
</div>
</body>
</html>
