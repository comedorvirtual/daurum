@extends('layouts.app')
@section('content')


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/images/portada-1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/portada-2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/portada-3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="destacados">
        <div class="container-fluid">
            <div class="row text-welcome content-center pt-3">
                <div class="col">
                    <h1>Lentes exclusivos de temporada</h1>
                    <p>No te pierdas nuestros exclusivos modelos para esta temporada</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="destacados-contenedor">
                        <div class="destacados-detalles">
                        </div>
                        <img src="{{ asset('/images/foto-inicio-6.jpg') }}" class="img-fluid" alt="lentes2">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="destacados-contenedor">
                        <div class="destacados-detalles">
                        </div>
                        <img src="{{ asset('/images/foto-inicio-2.jpg') }}" class="img-fluid" alt="lentes2">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="destacados-contenedor">
                        <div class="destacados-detalles">
                        </div>
                        <img src="{{ asset('/images/foto-inicio-3.jpg') }}" class="img-fluid" alt="lentes3">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="destacados-contenedor">
                        <div class="destacados-detalles">
                        </div>
                        <img src="{{ asset('/images/foto-inicio-4.jpg') }}" class="img-fluid" alt="lentes4">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="destacados-contenedor">
                        <img src="{{ asset('/images/foto-inicio-1.jpg') }}" class="img-fluid" alt="lentes4">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="destacados-contenedor">
                        <img src="{{ asset('/images/foto-inicio-7.jpg') }}" class="img-fluid" alt="lentes4">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
