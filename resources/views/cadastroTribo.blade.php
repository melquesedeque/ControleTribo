<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <link rel="icon" type="image/png" href="{{asset('assets/Login_v1/images/icons/favicon.ico')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/select2/select2.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/css/util.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/css/main.css')}}"/>
    <title>Cadastro</title>
</head>
<body>
    
    <div class="limiter">
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
                                    <label for="NomeTribo">Tribo</label>
                                    <select class="form-control" id="NomeTribo" name="nomeTribo">
                                        <option>-Selecione a Tribo-</option>
                                        <option>Aser</option>
                                        <option>Benjamin</option>
                                        <option>Dan</option>
                                        <option>Efrain</option>
                                        <option>Judá</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <label for="DataTribo">Data da Tribo</label>
                                    <div class="input-group date">
                                        <input type="date" class="form-control" id="DataTribo" name="dataTribo" maxlength="10">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='col-sm-6'>
                                <label for="oferta">Oferta</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="oferta" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
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
</body>
</html>