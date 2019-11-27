@extends('templateForm')
@section('body')

    <div class="limiter">

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">TRIBOS FINÂNCEIRO</a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (Route::current()->getName() === 'telaConsultas' ? 'active' : '') }} "> <a class="nav-link" href="{{ route('telaConsultas') }}">Consultas</a> </li>
                    <li class="nav-item {{ (Route::current()->getName() === 'telaCadastro'  ? 'active' : '') }} "> <a class="nav-link" href="{{ route('telaCadastro') }}">Cadastrar</a> </li>
                    <li class="nav-item {{ (Route::current()->getName() === 'telaPainel'    ? 'active' : '') }} "> <a class="nav-link" href="{{ route('telaPainel') }}">Dashboard</a> </li>
                </ul>
                </div>
            </nav>
        </header>

        <div class="container-login100">
            <form style="border:#ccc;" class="wrap-login100" method="post" action="{{ route('CadastroTribo') }}">
                @csrf
                    <div class="container" style="margin-top:10px;">
                            <span class="login100-form-title" style="margin-top: -15%;">
                                Controle da Tribo da Nação
                            </span>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="igreja">Igreja</label>
                                    <select class="form-control" id="igreja" name="igreja">
                                        <option>-Selecione a Igreja-</option>
                                        <option>Atalaia</option>
                                        <option>Pilar</option>
                                    </select>
                                </div>    
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="DataTribo">Data da Tribo</label>
                                    <div class="input-group date">
                                        <input type="date" class="form-control" id="DataTribo" name="dataTribo" maxlength="10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class='col-sm-6'>
                                <label for="oferta">Oferta</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="oferta" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </div>

                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <label for="qtd">Quatidade de Pessoas</label>
                                    <input type="number" class="form-control" id="qtd" name="quantidadePessoal">
                                </div>
                            </div>
                        </div>

                        @if ($errors->all())
                            @foreach ($errors->all() as $erro)
                                <div class="alert alert-danger" role="alert">
                                    {{ $erro }}
                                </div>
                            @endforeach
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>    
      <!-- Plugin pro Datapicker novo -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
@endsection