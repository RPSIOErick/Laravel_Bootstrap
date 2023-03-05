@extends('layouts.main')

@section('title', 'Projeto Web - Login')

@section('content')

<div class="container-fluid" id="SystemScreen">

    <div id="registerContent">

        <div id="registerTitle">

            Campo de Registro

        </div>
        <div class="container" id="register_screen">
            Preencha os campos para se registrar!
            <form>
            <div class="mb-3">
                <label for="InputName" class="form-label" style="font-weight: bold;">Nome de Usuário</label>
                <input type="text" class="form-control" id="InputUsername" aria-describedby="userHelp">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label" style="font-weight: bold;">Email</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label" style="font-weight: bold;">Senha</label>
                <input type="password" class="form-control" id="InputPassword">
                <div id="passwordHelp" class="form-text">Lembre-se detalhadamente.</div>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>

            <br>

            Já tem uma conta?! <a href="/login"> Entre aqui! </a> <br>

            <!--<span id="LoginWarning"> -> Função ainda não disponível <- </span>-->

        </div>

    </div>
    
</div>

@endsection