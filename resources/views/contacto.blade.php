@extends('layouts.plantilla')
@section('title', 'CONTACTO')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenido a la página de contacto</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <br>
                <form action="{{ route(envioMail) }}" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres y apellidos</label>
                        <input class="form-control" name="name" type="text" placeholder="Ingrese su nombre completo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Asunto</label>
                        <textarea class="form-control" name="asusnto" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection

