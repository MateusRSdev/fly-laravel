@extends('layout.layout-base')
@section('content')


<div class="container">
    <h1>Dashboard</h1>
    <div class="row userMain py-5">
        <div class="col-8 pr-5 text-light">
            <h4>Informções da conta:</h4>
            <div  class="acountInfo">
                <strong>Nivel da conta:<p class="details">Developer</p></strong>
                <strong>Aplicacoes criadas:<p class="details" x-text="count"></p></strong>
                <strong>Aplicacoes criadas:<p class="details">5/1</p></strong>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center position-relative">
            <h3 class="userName">{{$userLogged->name}}</h3>
            <img class="m-2" src="{{asset("img\perfil-de-usuario.png")}}" width="150px" alt="">
            <a href="/user/config" class="config-icon-link rotate"><i class="ri-settings-3-line ri-2x rotate"></i></a>
        </div>
    </div>
    <div class="row mb-0">
        <h3 class="project-title col-10">Projetos:<i class="ri-lightbulb-flash-line"></i></h3>
        <div class="d-flex align-items-center w-auto">
        <a href="{{route("create.new")}}"class="btn button"><i class="ri-add-line"></i> Adicionar Novo</a>
        </div>
    </div>

    <div class="row ">
        <div   class="project d-flex mb-5">
            @foreach ($projectsUser as $project)
            <div class="card-project" data-aos="flip-up">
                <h5 class="m-4"><a href="">{{$project["name"]}} <i class="ri-link"></i></a></h5>
                <a href="{{$project["origin"]}}" target="_blank" class="card-link">{{$project["origin"]}}</a>
                @if ($project["active"] == 1)
                <p class="online" title="Serivço online"><i class="ri-global-line onlineOn"></i></p>
                @else
                <p class="online" title="Serivço online"><i class="ri-global-line onlineOff"></i></p>
                @endif
            </div>
            @endforeach


        </div>
    </div>
    
</div>

@endsection

