<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

    <title>Portal Pemilihan</title>
  </head>

  <body>
    <section id="Navbar">
      <div class="container-fluid p-0">
        <nav class="navbar navbar-light bg-darkblue justify-content-around">
          <a class="navbar-brand"  href="../"> <h3>Vilection</h3></a>
          <h4>Welcome</h4>
          <a class="text-secondary" href="#"><h4>Logout</h4></a>
        </nav>
      </div>
   </section>

   <section id="alert">
     <div class="container p-4">
      <div class="alert alert-secondary text-center" role="alert">
        Selamat datang di halaman pemilihan, gunakan hak pilih Anda dengan bijak.
      </div>
     </div>
   </section>
  
   <section id="candidates">
     <div class="container text-center">
      <div class="row justify-content-center">
      @foreach($candidate as $c)
        <div class="col-md-4 pb-4">
          <div class="card">
            <img class="card-img-top " name="foto" src="@if($c->foto == null) {{ asset('assets\images\default-profile-pic.png') }}
                          @else {{ $c->foto }} @endif" alt=" {{ $c->nama}}'s picture">
            <div class="card-body">
              <h5 class="card-title" name="nama" id="nama"> {{ $c->nama }}</h5>
              <p class="card-text" name="bio">{{ $c->bio }}</p>
              <a href="#" class="btn btn-primary">Vote me!</a>
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