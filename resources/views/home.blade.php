@extends('layouts.app')

@section('content')
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parcial - David Almachi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

  <script src="main.js"></script>
</head>
<body>
  <div class="wrapper">

    
    <header>
           
      <nav class="main-nav">                
        <a href="#home">Inicio</a>
        <a href="#tvShows">Shows de television</a>
        <a href="#movies">Peliculas aclamadas</a>
        <a href="#originals">Solo originales</a>
        <a href="#">Lo que esta de moda</a>      
      </nav>
           
    </header>
   
    <section class="principal" >
      <div class="distribucion" id="home">
          <h1 id="home">Lo que esta de moda</h1>
          <div class="box">
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula01.jpg?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula02.jpg?raw=true" alt=""></a>
           <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula03.jpg?raw=true" alt=""></a>
       
          </div>
      </div>
      

      <h1 id="llegados">Recien llegados</h1>
      <div class="box">
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula04.jpg?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula05.jpg?raw=true" alt=""></a>
           <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula06.jpg?raw=true" alt=""></a>             
      </div>
      
      <h1 id="showstv">Shows de television</h1>
      <div class="box">
       <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula07.jpg?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula08.jpg?raw=true" alt=""></a>
           <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula09.jpg?raw=true" alt=""></a>
       
      </div>
      

      <h1 id="aventura">Aventura</h1>
      <div class="box">
        <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula10.jpg?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula11.jpg?raw=true" alt=""></a>
           <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula12.jpg?raw=true" alt=""></a>
        
      </div>

      <h1 id="originales">Solo originales</h1>
      <div class="box">
        <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula13.jpg?raw=true" alt=""></a>
            <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula14.jpg?raw=true" alt=""></a>
           <a href=""><img src="https://github.com/SurrenderChaos/peliculas/blob/master/pelicula15.jpg?raw=true" alt=""></a>     
      </div>
     
  </div>
</body>
</html>
@endsection
