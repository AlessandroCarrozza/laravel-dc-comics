@extends("layouts.app")

@section("page-title", "Lista dei fumetti")


@section("content")

<a href="{{route("comics.create")}}" type="button" class="btn btn-primary">Crea nuovo fumetto</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
    @foreach($comics as $comic)
      <tr>
        <th scope="row">{{$comic->id}}</th>
        <td>{{$comic->title}}</td>
        <td>${{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td class="d-flex">
          <a href="{{route('comics.show', ['comic' => $comic->id])}}" type="button" class="btn btn-primary m-1">Visualizza</a>
          <a href="{{route('comics.edit', ['comic' => $comic->id])}}" type="button" class="btn btn-warning m-1">Modifica</a>
        
          <form action="{{route("comics.destroy", ["comic" => $comic->id])}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger m-1">Elimina</button>
          </form>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>
@endsection