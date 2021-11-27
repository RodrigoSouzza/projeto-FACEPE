@extends('layout') 
@section('conteudo')
<h1 id="pedido">
    hora da alegria,faça seu pedido AGORA!
</h1>
<div class="form">
<form action="/salvoP" autocomplete="off" method="post" class="row g-3 needs-validation" novalidate>
  @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Digite seu nome</label>
    <input type="text" class="form-control" id="validationCustom01" name="nome">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Refeição</label>
    <input type="text" class="form-control" id="validationCustom01" name="refeicao">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Categoria</label>
    <select class="form-select" id="validationCustom04" name="categoria">
      <option selected value="almoco">Almoço</option>
      <option value="janta">Janta</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>    
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="validationCustom01" name="endereco">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Forma de pagamento</label>
    <select class="form-select" id="validationCustom04" name ="pagamento"required>
      <option selected value="dinheiro">Dinheiro</option>
      <option value="cartao">Cartão</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div> 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Realizar pedido</button>
  </div>
</form>
</div>
@endsection