@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card bg-dark text-white text-center">
                <div class="card-body">
                    <h1>Bjeri Ziles</h1>
                    <form action="/bjerizilestani" method="POST">
                        <div class="mb-3">
                            <button class="btn btn-primary btn-lg">Shtyp</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-dark text-center">
                <div class="card-body">
                    <h1 class="text-white">Oraret</h1>
                    <div class="accordion" id="accordionExample">
                        @foreach ($ditet_e_javes as $dita)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{$dita}}accordion">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#{{$dita}}accordionCollapse" aria-expanded="true"
                                    aria-controls="{{$dita}}accordionCollapse">
                                    E {{ ucfirst($dita) }}
                                </button>
                            </h2>
                            <div id="{{$dita}}accordionCollapse" class="accordion-collapse collapse"
                                aria-labelledby="{{$dita}}accordion" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Dita</th>
                                                <th scope="col">Fillon</th>
                                                <th scope="col">Mbaron</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($oraret[strtolower($dita)])
                                            @foreach ($oraret[strtolower($dita)] as $orar)

                                            <tr>
                                                <th scope="row">{{$orar["dita"]}}</th>
                                                <td>{{$orar["fillon"]}}</td>
                                                <td>{{$orar["mbaron"]}}</td>
                                                <td>
                                                    <a href="/modify/{{$orar['id']}}"
                                                        class="btn btn-warning btn-sm">Modifiko</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
