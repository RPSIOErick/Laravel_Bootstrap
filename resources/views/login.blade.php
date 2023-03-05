@extends('layouts.main')

@section('title', 'Projeto Web - Login')

@section('content')

<div class="container-fluid" id="SystemScreen">

    <div id="loginContent">

        <div id="LoginTitle">

            Campo de Login

        </div>
        <div class="container" id="login_screen">
            Preencha os campos para poder entrar!
            <form>
            <div class="mb-3">
                <label for="InputEmail" class="form-label" style="font-weight: bold;">Email</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label" style="font-weight: bold;">Senha</label>
                <input type="password" class="form-control" id="InputPassword">
                <div id="passwordHelp" class="form-text">Seja cuidadoso com a sua senha!</div>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>

            <br>

            Caso não tenha uma conta, <a href="/register"> registre-se! </a> <br>

            <!--<span id="LoginWarning"> -> Função ainda não disponível <- </span>-->

        </div>

    </div>

</div>

@endsection