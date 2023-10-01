@extends('layout.layout-base')
@section('content')

<div class="container">
    <div class="form-container p-5 col-5 mx-auto mt-5 rounded shadow-lg">
        <h3 class="display-5 text-dark">Criar Conta</h3>
        {{ $errors->create->first() }}

        <form action="{{route("register")}}"  method="post" >
          @csrf
            <div class="form-group">
              @error('name')
                  <small>{{$message}}</small>
              @enderror
              <label for="name">Nome</label>
              <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Seu nome">
            </div>
            <div class="form-group">
              <label for="email">Endereço de email</label>
              @error('email')
              <small>{{$message}}</small>
              @enderror
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="pass">Senha</label>
              @error('password')
              <small>{{$message}}</small>
              @enderror
              <input type="password" class="form-control" name="password" id="pass" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              @error('rememberMe')
              <small>{{$message}}</small>
              @enderror
              <input type="checkbox" class="form-check-input" name="rememberMe" value="true" >
              <label class="form-check-label" for="exampleCheck1">Lembrar meu login</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
</div>

@endsection

