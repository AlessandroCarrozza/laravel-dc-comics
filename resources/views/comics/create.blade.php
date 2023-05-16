@extends("layouts.app")

@section("page-title")
Crea un nuovo fumetto
@endsection

@section("content")

<h1>Crea nuovo fumetto:</h1>

<form method="POST" action="{{route("comics.store")}}">

    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="email" class="form-control" id="title" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea type="password" class="form-control" id="description"></textarea>
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="password" class="form-control" id="thumb">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="password" class="form-control" id="price">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="password" class="form-control" id="series">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="password" class="form-control" id="sale_date">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="password" class="form-control" id="type">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection