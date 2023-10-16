@extends('layout.layout-base')
@section('content')
<script src="{{asset("js/index.js")}}"></script>
<div class="container">
    <h1 class="project-title">Criando novo projeto</h1>
    
    <main class="userMain">
        <form action="" method="post">
            <div class="row p-3">
                <div class="col-5 m-2">
                    <h3>Nome do Projeto</h3>
                    <input type="text" class="form-control">
                    <small>Escolha um nome bem legal</small>
                    <br>
                    <h3>Descrição (opcional)</h3>
                    <textarea type="text" class="form-control" rows="5"></textarea>
                    <small>Descreva o abjetivo desses dados</small>
                    <br>
                    <h3 id="">Dominios abilitados para requiçoes <a onclick="addForm()" class="btn btn-outline-light">+</a></h3>
                    <div id="addInput" class=" text-light">
                        <input type="text" class="form-control" name="origem-1">
                    </div>
                    <small>São todos os sites que estão abilitados a enviar requisições nessa api desse site</small>

                </div>
                <div class="col-5">
                    <h3>Dados a serem recebidos <a onclick="addInput()" class="btn btn-outline-light">+</a></h3>
                    <div id="fields" class="inputsConfig">

                    </div>
                </div>
            </div>
        </form>
    </main>
    <div id="templates" class="d-none">
        <div id="template" class="inputConfig">
            <input class="form-control"  type="text" name="">
            <select class="form-control" name="" id="">
                <option value="">email</option>
                <option value="">texto</option>
                <option value="">data</option>
                <option value="">nome</option>
                <option value="">cep</option>
                <option value="">cpf</option>
                <option value="">telefone</option>
            </select>
        </div>
    </div>
</div>

@endsection