@extends('layouts.app')
@section('content')
    <section id="contacto">
        <div class="container-fluid">
            <div class="row pt-5 justify-content-center" >
                <div class="col-12 pb-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="content-center">Contáctenos</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-6 ">
                    <form method="POST" action="{{url('contacto/create')}}" class="col-10 ">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email:</label>
                            <input id="email" type="email" class="form-control" name="email" placeholder="name@example.com" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nombres y Apellidos</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" class="form-control" name="mensaje" rows="3"> {{old('mensaje')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                    </form>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="row ">
                            <h5>Direccion:</h5>
                            <p class="col-12">Calle Santa Marta 220, Cercado - Arequipa </p>
                        </div>
                        <div class="row">
                            <h5>Teléfono:</h5>
                            <p class="col-12">+054 999999 </p>
                            <p class="col-12">+051 99999999 </p>
                        </div>
                        <div class="row">
                            <h5>Correo:</h5>
                            <p class="col-12">laboratoriodaurum@gmail.com</p>
                        </div>
                        <div class="row">
                            <h5>Whatsapp:</h5>
                            <p class="col-12">+051 99999999</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
