@extends('layout.main')

@section('title','Admin Login')

@section('content')
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('assets/images/bg-01.jpg') }});">
					<span class="login100-form-title-1">
						Admin Login
					</span>
                </div>
                    <form class="login100-form" method="POST" action="{{ route('adminlogin') }}">
                        @csrf
                        <div class="m-b-18">
                            <h6 class="my-2">Username</h6>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control bg-light" placeholder="Username"/>
                            </div>
                            <h6 class="my-2">Password</h6>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control bg-light" placeholder="Password"/>
                            </div>
                        </div>
                        @if(session('message'))
                            <p>
                                {{ session('message') }}
                            </p>
                        @endif
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">Login</button>
                            <h5><a class="ml-3 login100-form-btn" href="/">Home</a></h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
<script>
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
