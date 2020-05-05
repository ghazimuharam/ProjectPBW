<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <div class="login-page ">
        <div class="form">
          <h3>Admin Login</h3>
          <form class="login-form" method="POST" action="{{ route('adminlogin') }}">
            @csrf
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            @if(session('message'))
                <p>
                    {{ session('message') }}
                </p>
            @endif
            <button type="submit">login</button>
            <h5><a href="/">Home</a></h5>
          </form>
        </div>
      </div>
</body>
</html>

<script>
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
