<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

    <title>Portal Pemilihan</title>
    <style>
        .imageClip{
            width:400px;
            height: 400px;
            overflow:hidden;
        }
    </style>
  </head>

  <body>
    <section id="Navbar">
      <div class="container-fluid p-0">
        <nav class="navbar navbar-light bg-darkblue justify-content-around">
          <h2 class="navbar-brand text-white">Vilection</h2>
          <h4>Welcome</h4>
          <a class="text-white" href="{{ url('/vote/logout') }}"><h4>Logout</h4></a>
        </nav>
      </div>
   </section>

   <section id="alert">
     <div class="container p-4">
      <div class="alert alert-secondary text-center" role="alert">
        Welcome to the Vilection! Use your vote wisely.
      </div>
     </div>
   </section>

   <section id="candidates">
     <div class="container text-center">
      <div class="row justify-content-center">
      @foreach($candidate as $c)
        <div class="col-lg-4 pb-4 d-flex">
          <div class="card">
            <img class="bd-placeholder-img card-img-top" width="400" height="400" name="foto" src="@if($c->foto == null) {{ asset('assets\images\default-profile-pic.png') }}
                          @else {{ asset('assets/img/') }}/{{ $c->foto }} @endif" alt=" {{ $c->nama}}'s picture">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title" name="nama" id="nama"> {{ $c->nama }}</h5>
              <p class="card-text" name="bio">{{ $c->bio }}</p>
              <a href="{{ route('vote', $c->id) }}" class="btn btn-primary mt-auto">Vote me!</a>
            </div>
          </div>
        </div>
      @endforeach

      </div>
    </div>
   </section>

  </body>
</html>

<style>

  .bg-darkblue{
    background-color: #061C30;
  }

  h3,h4{
    color: #CCCCCC;
  }

</style>
