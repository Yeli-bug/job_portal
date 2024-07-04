@extends('front.layouts.app')

@section('main')

<section class="section-0 lazy d-flex bg-image-style dark align-items-center "   class="" data-bg="{{ asset('assets/images/banner5.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1>Encuentra el trabajo de tus sueños</h1>
                <p>Puestos de trabajo disponibles para egresados.</p>
                <div class="banner-btn mt-5"><a href="#" class="btn btn-primary mb-4 mb-sm-0">Descubre</a></div>
            </div>
        </div>
    </div>
</section>

<section class="section-1 py-5"> 
    <div class="container">
        <div class="card border-0 shadow p-5">
            <div class="row">
                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Palabras clave">
                </div>
                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Ubicación">
                </div>
                <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                    <select name="category" id="category" class="form-control">
                        <option value="">Selecciona una categoría</option>
                        <option value="">Desarrollo de Software</option>
                        <option value="">Administración de Sistemas</option>
                        <option value="">Seguridad Informática</option>
                        <option value="">Ciencia de Datos y Análisis</option>
                    </select>
                </div>
                
                <div class="col-md-3 mb-xs-3 mb-sm-3 mb-lg-0">
                    <div class="d-grid gap-2">
                        <a href="jobs.html" class="btn btn-primary btn-block">Buscar</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>


<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Categorías Populares</h2>
        <div class="row pt-5">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Diseño y Creatividad</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Automatización y Robótica</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Desarrollo de Software</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Administración de Sistemas</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Seguridad Informática</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Ciencia de Datos y Análisis</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Gestión de Proyectos de TI</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Soporte Técnico y Help Desk</h4></a>
                    <p class="mb-0"><span>50</span> Posiciones disponibles</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-3 py-5">
    <div class="container">
        <h2>Trabajos Destacados</h2>
        <div class="row pt-5">
            <div class="job_listing_area">                    
                <div class="job_lists">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">7000-12000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">7000-12000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">7000-12000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">7000-12000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">7000-12000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">7000-12000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>                             
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-3 bg-2 py-5">
    <div class="container">
        <h2>Últimos Trabajos publicados</h2>
        <div class="row pt-5">
            <div class="job_listing_area">                    
                <div class="job_lists">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">6000-10000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">6000-10000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">6000-10000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">6000-10000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">6000-10000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Desarrollador Web</h3>
                                    <p>Necesitamos un Desarrollador Web para nuestra empresa.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Puebla</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                            <span class="ps-1">Remoto</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                            <span class="ps-1">6000-10000</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="job-detail.html" class="btn btn-primary btn-lg">Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>             
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

