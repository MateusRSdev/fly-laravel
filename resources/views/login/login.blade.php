@extends('layout.layout-base')
@section('content')

<div class="container">
    <div class="bg-ligth p-5 col-5 mx-auto mt-5 rounded shadow-lg">
        <h3 class="display-5">Login</h3>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Endereço de email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Lembrar meu login</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
</div>

@endsection

