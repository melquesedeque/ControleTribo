<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Tribos Financeiro</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('assets/TableConsultas/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/TableConsultas/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
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

		<div class="container-table100">
			<div class="wrap-table100">
                    <form class="form-inline my-2" style="float: right;" method="get" action="{{ route('pesquisarIgreja') }}">
                        <div class="form-group">
                                <select class="form-control" id="igreja" name="igreja" style="margin-left: -2%;">
                                    <option>-Selecione a Igreja-</option>
                                    <option>Atalaia</option>
                                    <option>Pilar</option>
                                </select>
                            </div>    
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Igreja</th>
								<th class="column2">Data</th>
								<th class="column3">Oferta</th>
                                <th class="column4" style="text-align: center;">Quantidade</th>
                                <th class="column5" style="text-align: center;">Opções</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($tribos as $item)
                                <tr>
                                    <td class="column1">{{ $item->igreja }}</td>
                                    <td class="column2">{{ $item->dataTribo }}</td>
                                    <td class="column3">{{ $item->oferta }}</td>
                                    <td class="column4" style="text-align: center;">{{ $item->quantidadePessoal }}</td>

                                    <td class="column5" style="text-align: center;">
                                        <form action="{{ route('telaEditar', ['idTribo' => $item->id]) }}" method="get">
                                            <button type="submit">Editar</button>
                                        </form>
                                        <form action="{{ route('deletarTribo', ['idTribo' => $item->id]) }}" method="get">
                                            <button type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="{{ asset('assets/TableConsultas/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/TableConsultas/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('assets/TableConsultas/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/TableConsultas/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/TableConsultas/js/main.js')}}"></script>

</body>
</html>