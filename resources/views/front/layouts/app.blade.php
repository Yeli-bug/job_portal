<!DOCTYPE html>
<html class="no-js" lang="es"/>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Seguimiento | Encuentra el mejor empleo</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">SeguimientoUPTx</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.html">Inicio</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="jobs.html">Empleos</a>
					</li>										
				</ul>				
				<a class="btn btn-outline-primary me-2" href="login.html" type="submit">iniciar sesión</a>
				<a class="btn btn-primary" href="post-job.html" type="submit">Anuncia un empleo</a>
			</div>
		</div>
	</nav>
</header>

@yield('main')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image"  name="image">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark py-3 bg-2">
    <div class="container text-white">
        <h2 class="text-center fw-bold text-white">Contáctanos</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/integrante1.jpeg') }}" class="img-fluid team-photo mb-2" alt="Foto de Integrante 1">
                <h6>Tania Meza Contreras</h6>
                <p>Jefa de area</p>
                <p><a href="mailto:email1@ejemplo.com" class="text-white">ranieyang3@gmail.com</a></p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/integrante2.jpeg') }}" class="img-fluid team-photo mb-2" alt="Foto de Integrante 2">
                <h6>Yulived Cuecuecha Angulo</h6>
                <p>Analista</p>
                <p><a href="mailto:email2@ejemplo.com" class="text-white">tatlilee034@gmail.com</a></p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/integrante3.jpeg') }}" class="img-fluid team-photo mb-2" alt="Foto de Integrante 3">
                <h6>Carlos Eduardo Mendoza Landa</h6>
                <p>Diseñador</p>
                <p><a href="mailto:email3@ejemplo.com" class="text-white">carloseduardolanda17@gmail.com</a></p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/images/integrante4.jpeg') }}" class="img-fluid team-photo mb-2" alt="Foto de Integrante 4">
                <h6>Anayeli Sánchez Cuayahuitla</h6>
                <p>Tester</p>
                <p><a href="mailto:email4@ejemplo.com" class="text-white">iley.yelian@gmail.com</a></p>
            </div>
        </div>
        <p class="text-center pt-3 fw-bold fs-6">© 2024 UPTx Company, todos los derechos reservados.</p>
    </div>
</footer>



<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
		<meta name="csrf-token" content="2mHeQivILztRLR1RGKGQEm7b3eQm1YTQFciicXJ9" />
	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
	});
</script>
@yield('customJs')
</body>
</html>

<!-- vista del home "2"-->
