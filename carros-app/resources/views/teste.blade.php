@extends('Layout.insert')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Registre o seu Carro</h1>
  <form action="/resgistar" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Marca:</label>
      <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca do Carro">
    </div>
    <div class="form-group">
      <label for="title">Ilha:</label>
      <select name="ilha" id="ilha" class="form-control">
        <option value="Santo Antão">Santo Antão</option>
        <option value="São Vicente">São Vicente</option>
        <option value="São Nicolau">São Nicolau</option>
        <option value="Sal">Sal</option>
        <option value="Boavista">Boavista</option>
        <option value="Maio">Maio</option>
        <option value="Santiago">Santiago</option>
        <option value="Fogo">Fogo</option>
        <option value="Brava">Brava</option>
        
      </select>
    </div>
    <div class="form-group">
      <label for="title">Kilometragem do veículo</label>
      <input type="text" class="form-control" id="kilometragem" name="kilometragem" placeholder="Quantos Km o veiculo já andou">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Faça uma breve descrição do veiculo"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Foto do veiculo:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <input type="submit" class="btn btn-primary" value="Inserir o Veiculo">
    <a href="/">Voltar ao iniciar</a>
  </form>
 
</div>

@endsection