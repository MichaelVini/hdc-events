@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
   <div id="event-create-container" class="event-create-container col-md-6 offset-md-3 pt-4">
      <h1>Crie o seu evento</h1>
      <form action="/eventos" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento">
         </div>
         <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" name="date" id="date">
         </div>
         <div class="form-group">
            <label for="image">Imagem do evento: </label>
            <input type="file" class="form-control-file" name="image" id="image" placeholder="Imagem do evento">
         </div>
         <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento">
         </div>
         <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
               <option value="1">Sim</option>
               <option value="0">Não</option>
            </select>
         </div>
         <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
         </div>
         <div class="form-group">
            <label for="items">Adicione itens de infraestrutura</label>
            <div class="form-group">
               <input type="checkbox" name="items[]" id="Cadeiras" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" id="Palco" value="Palco"> Palco
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" id="Cerveja Grátis" value="Cerveja Grátis"> Cerveja Grátis
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" id="Open food" value="Open food"> Open food
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" id="Brindes" value="Brindes"> Brindes
            </div> 
         </div>
         <input type="submit" class="btn btn-primary" value="Criar evento">
      </form>
   </div>
@endsection