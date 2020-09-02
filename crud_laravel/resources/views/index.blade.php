@extends('templates.template')

@section('content')
    <h1 class = "text-center">Crud</h1> <hr>

    <div class="text-center" mt-3 mb-4>
        <a href="">
      		<button class = "btn btn dark">Cadastrar</button>
      	</a>
    </div>

    <div class = "col-8 m-auto">

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($book as $books)
  	@php
  	   $user=$books->find($books->id)->relUsers;
  	@endphp

  	@foreach($book as $books)
    <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->title}}</td>
      <td>{{$user->name}}</td>
      <td>{{$books->autor}}</td>
      <td>

      	<a href="">
      		<button class = "btn btn dark">Visualizar</button>
      	</a>

      	<a href="">
      		<button class = "btn btn dark">Editar</button>
      	</a>

      	<a href="">
      		<button class = "btn btn dark">Deletar</button>
      	</a>
    </tr>
 @endforeach
  </tbody>
</table>




    </div>
@endsection