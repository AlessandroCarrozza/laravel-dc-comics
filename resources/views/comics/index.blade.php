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
        <td>
          <a href="{{route('comics.show', ['comic' => $comic->id])}}" type="button" class="btn btn-primary">Visualizza</a>
          <a href="" type="button" class="btn btn-warning">Modifica</a>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>
@endsection