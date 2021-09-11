@extends('layouts.staticLayout')

@section('content')
    <link rel="stylesheet" href="css/formulario.css">
    <div class="setContent">
    <div class="contentLeft">
    <div class="containerContent">
    <div class="contentTitle">
            <h1>  CADASTRO <h1> </div>
        <class="input-group mb-3" style="margin-bottom: 0px;">
        <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Pessoa Jurídica
  </label>
  </div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Pessoa Física
  </label>

</div>

        <p>Nome*<p<br> <input type="text" class="form-control" placeholder="Seu nome completo" aria-label="Recipient's username" aria-describedby="button-addon2"></p>
        <class="input-group mb-3" style="margin-bottom: 0px;">
        <p>E-mail*<p<br> <input type="text" class="form-control" placeholder="Seu e-mail completo" aria-label="Recipient's username" aria-describedby="button-addon2"></p>

        <class="input-group mb-3" style="margin-bottom: 0px;">
        <p>Endereço*<p<br> <input type="text" class="form-control" placeholder="Seu endereço completo" aria-label="Recipient's username" aria-describedby="button-addon2"></p>
        <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
  <label class="form-check-label" for="inlineCheckbox3">3 (Não sou robô)</label>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
      </div>
    </div>

  </div>
</form>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    </div>
        </div>


@endsection
