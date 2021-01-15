@extends('layouts.app')
@section('content')
    <section id="nosotros">
        <div class="container pt-3">
            <div class="row justify-content-end content-center">
                <div class="col-7">
                    <h1>¿Quiénes somos?</h1><br>
                    <p> Somos una empresa dedicada a la venta de productos para los ojos :v, tenemos variedad de productos
                        para todo tipo de cliente, en caso requieran modelos explicitos se pueden manda a hacer.
                        Cada dia mejoramos para que usted pueda llevarse la mejor calidad para sus ojos.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="caracteristicas" class="bg-light-grey justify-content-center content-center">
        <div class="container">
            <div class="row pb-3">
                <div class="col-12 pt-3 pb-3">
                    <h1>¿Qué nos caracteriza?</h1><br>
                    <p>Contamos con la garantia de las lunas DAURUM, que nos da proteccion contra la luz azul</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/images/carac-C-1.png') }}" class="img-size" alt="lentes4">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/images/carac-C-2.png') }}" class="img-size" alt="lentes4">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('/images/carac-C-3.png') }}" class="img-size" alt="lentes4">
                </div>
            </div>
        </div>
    </section>
    <section id="tecnologia" class=" content-center">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-12 pt-3 pb-3">
                    <h1>¿Qué beneficios tiene para nosotros?</h1><br>
                </div>
                <div>
                    <img src="{{ asset('/images/carac-A-1.png') }}" class="tec-img-size" alt="lentes4">
                </div>
                <div>
                    <div class="col-12 pt-4 pb-4">
                        <img src="{{ asset('/images/carac-B-1.png') }}" class="tec-img-sizeb" alt="lentes4">
                    </div>
                    <div class="col-12 pt-4 pb-4">
                        <img src="{{ asset('/images/carac-B-2.png') }}" class="tec-img-sizeb" alt="lentes4">
                    </div>
                    <div class="col-12 pt-4 pb-4">
                        <img src="{{ asset('/images/carac-B-3.png') }}" class="tec-img-sizeb" alt="lentes4">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
