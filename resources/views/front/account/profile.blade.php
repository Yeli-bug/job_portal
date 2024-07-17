@extends('front.layouts.app')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Configuración de la Cuenta</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                @include('front.account.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-4">
                        <h3 class="fs-4 mb-1">Mi Perfil</h3>
                        <div class="mb-4">
                            <label for="" class="mb-2">Nombre*</label>
                            <input type="text" placeholder="Ingresa Nombre" class="form-control" value="">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Correo Electrónico*</label>
                            <input type="text" placeholder="Ingresa Correo Electrónico" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Designación*</label>
                            <input type="text" placeholder="Designación" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Telefono*</label>
                            <input type="text" placeholder="Móvil" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer p-4">
                        <button type="button" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-4">
                        <h3 class="fs-4 mb-1">Cambiar Contraseña</h3>
                        <div class="mb-4">
                            <label for="" class="mb-2">Contraseña Anterior*</label>
                            <input type="password" placeholder="Contraseña Anterior" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Nueva Contraseña*</label>
                            <input type="password" placeholder="Nueva Contraseña" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Confirmar Contraseña*</label>
                            <input type="password" placeholder="Confirmar Contraseña" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer p-4">
                        <button type="button" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- @section('customJs')
<script type="text/javascript">
$("#userForm").submit(function(e){
    e.preventDefault();

    $.ajax({
        url: '{{ route("account.updateProfile") }}',
        type: 'put',
        dataType: 'json',
        data: $("#userForm").serializeArray(),
        success: function(response) {

            if(response.status == true) {

                $("#name").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')

                $("#email").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')

                window.location.href="{{ route('account.profile') }}";

            } else {
                var errors = response.errors;

                if (errors.name) {
                    $("#name").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors.name)
                } else {
                    $("#name").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')
                }

                if (errors.email) {
                    $("#email").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors.email)
                } else {
                    $("#email").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')
                }
            }

        }
    });
});


$("#changePasswordForm").submit(function(e){
    e.preventDefault();

    $.ajax({
        url: '{{ route("account.updatePassword") }}',
        type: 'post',
        dataType: 'json',
        data: $("#changePasswordForm").serializeArray(),
        success: function(response) {

            if(response.status == true) {

                $("#name").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')

                $("#email").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')

                window.location.href="{{ route('account.profile') }}";

            } else {
                var errors = response.errors;

                if (errors.old_password) {
                    $("#old_password").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors.old_password)
                } else {
                    $("#old_password").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')
                }

                if (errors.new_password) {
                    $("#new_password").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors.new_password)
                } else {
                    $("#new_password").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')
                }

                if (errors.confirm_password) {
                    $("#confirm_password").addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors.confirm_password)
                } else {
                    $("#confirm_password").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('')
                }
            }

        }
    });
});
</script>
@endsection --}}