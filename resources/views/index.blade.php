
@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Peliculas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('pelicula.create') }}" class="btn btn-info" >Añadir Pelicula</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Calificacion</th>
             </thead>
             <tbody>
              @if($peliculas->count())  
              @foreach($peliculas as $pelicula)  
              <tr>
                <td>{{$pelicula->nombre}}</td>
                <td>{{$pelicula->calificacion}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('Peliculas@edit', $pelicula->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('Peliculas@destroy', $pelicula->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $peliculas->links() }}
    </div>
  </div>
</section>
 
@endsection