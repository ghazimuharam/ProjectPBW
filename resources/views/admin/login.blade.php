<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="login-page">
        <div class="form">
          <h3>Admin Login</h3>
<<<<<<< HEAD
          <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form">
            <input type="text" placeholder="Username"/>
            <input type="password" placeholder="Password"/>
            <button>login</button>
=======
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
>>>>>>> parent of 9a84b1f... Add Seeders, modify login view, update VoteController
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