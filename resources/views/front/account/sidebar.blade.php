<div class="card border-0 shadow mb-4 p-3">
    <div class="s-body text-center mt-3">
        <img src="assets/assets/images/avatar7.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
        <h5 class="mt-3 pb-0">{{ Auth::user()->name }}</h5>
        <p class="text-muted mb-1 fs-6">{{ Auth::user()->designation }}</p>
        <div class="d-flex justify-content-center mb-2">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Cambiar Foto de Perfil</button>
        </div>
    </div>
</div>
<div class="card account-nav border-0 shadow mb-4 mb-lg-0">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="account.html">Configuración de la Cuenta</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="post-job.html">Publicar un Trabajo</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="my-jobs.html">Mis Trabajos</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="job-applied.html">Trabajos Aplicados</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="saved-jobs.html">Trabajos Guardados</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="{{ route('account.logout') }}">Cerrar sesion</a>
            </li>
        </ul>
    </div>
</div>