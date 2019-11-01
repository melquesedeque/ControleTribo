<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<body>
    
    <form style="border:#ccc">
        <div class="container" style="margin-top:10px">

            <h2>Controle da Tribo</h2>

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="igreja">Igreja</label>
                        <select class="form-control" id="igreja" name="igreja">
                            <option>-Selecione a Igreja-</option>
                            <option>Atalaia</option>
                            <option>Pilar</option>
                        </select>
                    </div>    
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="NomeTribo">Tribo</label>
                        <select class="form-control" id="NomeTribo" name="NomeTribo">
                            <option>-Selecione a Tribo-</option>
                            <option>Aser</option>
                            <option>Benjamin</option>
                            <option>Dan</option>
                            <option>Efrain</option>
                            <option>Judá</option>
                        </select>
                    </div>
                </div>

                <div class='col-sm-6'>
                    <div class="form-group">
                        <label for="DataTribo">Data da Tribo</label>
                        <div class="input-group date">
                            <input type="date" class="form-control" id="DataTribo" name="DataTribo" maxlength="10">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
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
                        <input type="number" class="form-control" id="qtd">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                </div>
            </div>
        </div>
      </form>

      <!-- Plugin pro Datapicker novo -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</body>
</html>