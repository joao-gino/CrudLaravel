<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('vendor/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">
    <title>CRUD</title>
</head>
<body>
<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">Lista de Produtos no Almoxarifado</h3>
        <table id="myTable" class="table small table-hover">
            <thead>
                <tr class="text-center">
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Interagir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $p)
                <tr class="text-center">
                    <td>{{$p->nome}}</td>
                    <td>{{$p->quantidade}}</td>
                    <td>
                        <button data-toggle="modal" data-target="#modalProduto" class="btn btn-primary btn-sm mr-2">Editar</button>
                        <button data-ref="{{ $p->id }}" id="btn-apagar-produto" class="btn btn-danger btn-sm">Apagar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <button data-toggle="modal" data-target="#modalProduto" class="btn btn-success btn-sm">Cadastrar Produto</button>     
    </div>
</div>
</div>
<!-- Modal para cadastrar um produto -->
<div class="modal fade" id="modalProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar um Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nome-produto" class="col-form-label">Nome do Produto:</label>
            <input type="text" class="form-control" id="nome-produto">
          </div>
          <div class="form-group">
            <label for="quantidade-produto" class="col-form-label">Quantidade:</label>
            <input type="text" class="form-control" id="quantidade-produto">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button id="btn-confirmar-produto" type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script src="{{ asset('vendor/js/jquery-351.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap-452.min.js') }}"></script>
<script src="{{ asset('vendor/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/js/app.js') }}"></script>
<script src="{{ asset('vendor/js/jszip.min.js') }}"></script>
<script>
$(document).ready(function(){
    
    $('#myTable').on('click','.btn-danger', function (){

        let info = {
            id: $(this).attr('data-ref')
        }

        $.post('/apagar-produto', info).done(function(result){
            alert(result);
            window.open('home', '__self');
        });

    });

})
</script>