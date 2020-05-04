@extends('layout.main')

@section('title','Welcome To Web Based Election')

@section('content')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-form-title" style="background-image: url({{ asset('assets/images/bg-01.jpg') }});">
					<span class="login100-form-title-1">
						Halaman Login Pemilihan
					</span>
                </div>

                <form class="login100-form validate-form" action="{{ url('/vote/login') }}" method="post">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
					<div class="wrap-input100 validate-input m-b-18" data-validate = "UniqueCode is required">
						<span class="label-input100">UniqueCode</span>
                        <input class="input100" type="password" name="uniquecode" placeholder="Enter uniquecode" autofocus>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
                </form>

			</div>
		</div>
    </div>
</body>

@endsection
