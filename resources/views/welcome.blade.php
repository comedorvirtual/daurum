@extends('layouts.app')
@section('content')
    <section id="portadavideo">
        <div id="idportada" class="container-fluid">
            <div class="contenedor-portada">
                <div class="contenedor-descripcion ">
                    <img src="{{asset('/images/logo/logo-completo.png')}}" class="img-fluid d-block" alt="Logo completo">
                    
                </div>


                <div class="contenedor-video">
                    <video muted loop autoplay playsinline poster="{{asset('/images/posterVideo/poster1.jpg')}}">
                        <source src="{{ asset('/video/portadaWeb.mp4') }}" type="video/mp4">
                    </video>
                </div>
                
            </div>
        </div>
    </section>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/images/portada-1.png') }}" class="d-block " alt="...">
               
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/portada-2.png') }}" class="d-block " alt="...">
               
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/portada-3.png') }}" class="d-block" alt="...">
               
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>


    <section id="destacados">
        <div class="container-fluid">
            <div class="row text-welcome content-center pt-3">
                <div class="col">
                    <h1>IRON BLUE</h1>
                    <p>Esta tecnologia nos protegera de los rayos azules emitidos por nuestros celulares, computadoras, laptops.
                    </p>
                    <p>Eliminando el </p>
                </div>
            </div>
            <div class="row">
                <!--
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
                -->
            </div>
        </div>
    </section>
@endsection
