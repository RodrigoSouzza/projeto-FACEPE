@extends('layout') 
@section('conteudo')
<h3>
    Cadastre seu cardápio aqui 
</h3>
<div class="form">
<form action="/salvo" autocomplete="off"method="post" class="row g-3 needs-validation" novalidate>
  @csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Refeição</label>
    <input type="text" class="form-control" id="validationCustom01" name = "nome">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Dia da semana</label>
    <input type="text" class="form-control" id="validationCustom02" name = "diasemana">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Categoria</label>
    <select class="form-select" id="validationCustom04" name = "categoria">
      <option selected value="almoco">Almoço</option>
      <option value ="janta">Janta</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div> 
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">descrição da refeição</label>
    <input type="text" class="form-control" id="validationCustom03" name ="descricao">
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>   
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Cadastrar refeição</button>
  </div>
</form>
</div>

@endsection