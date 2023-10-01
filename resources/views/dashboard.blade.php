@extends('layout.layout-base')
@section('content')
    
<div class="container">
    <h1>Dashboard</h1>
    <div class="row userMain py-5">
        <div class="col-8 pr-5 text-light">
            <h4>Informções da conta:</h4>
            <div class="acountInfo">
                <strong>Nivel da conta:<p class="details">Developer</p></strong>
                <strong>Aplicacoes criadas:<p class="details">5/1</p></strong>
                <strong>Aplicacoes criadas:<p class="details">5/1</p></strong>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center position-relative">
            <h3 class="userName">{{$userLogged->name}}</h3>
            <img class="m-2" src="{{asset("img\perfil-de-usuario.png")}}" width="150px" alt="">
            <a href="/user/config" class="config-icon-link rotate"><i class="ri-settings-3-line ri-2x rotate"></i></a>
        </div>
    </div>
    <h3 class="project-title">Projetos:<i class="ri-lightbulb-flash-line"></i></h3>

    <div class="row">
        <div class="project">
            
        </div>
    </div>
    
</div>
@endsection

