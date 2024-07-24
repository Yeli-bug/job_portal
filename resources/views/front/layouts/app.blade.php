<!DOCTYPE html>
<html class="no-js" lang="es" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Seguimiento | Encuentra el mejor empleo</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">SeguimientoUPTx</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{ route('home') }}">Inicio</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{ route('jobs') }}">Empleos</a>
					</li>										
				</ul>		
              	
				@if (!Auth::check())
				<a class="btn btn-outline-primary me-2" href="{{ route('account.login') }}" type="submit">Iniciar sesión</a>			
				@else
				    @if (Auth::user()->role == 'admin') 
					<a class="btn btn-outline-primary me-2" href="{{ route('admin.dashboard') }}" type="submit">Admin</a>				
					@endif	
					<a class="btn btn-outline-primary me-2" href="{{ route('account.profile') }}" type="submit">Cuenta</a>			
				@endif
				
			    <a class="btn btn-primary" href="{{ route('account.createJob') }}" type="submit">Anunciar un trabajo</a> 
			</div>
		</div>
	</nav>
</header>

@yield('main')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Cambiar foto de perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="profilePicForm" name="profilePicForm" action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto de perfil</label>
                <input type="file" class="form-control" id="image"  name="image">
                <p class="text-danger" id="image-error"></p>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
	$('.textarea').trumbowyg();

    $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
	});

    $("#profilePicForm").submit(function(e){
		e.preventDefault();

		var formData = new FormData(this);

		$.ajax({
			url: '{{ route("account.updateProfilePic") }}',
			type: 'post',
			data: formData,
			dataType: 'json',
			contentType: false,
			processData: false,
			success: function(response) {
				if(response.status == false) {
					var errors = response.errors;
					if (errors.image) {
						$("#image-error").html(errors.image)
					}
				} else {
					window.location.href = '{{ url()->current() }}';
				}
			}
		});
	});
</script>
@yield('customJs')

</body>
</html>

<!-- vista del home "2"-->
