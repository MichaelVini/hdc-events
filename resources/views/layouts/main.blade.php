<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!-- CSS Fonte do Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  
  <!-- CSS da aplicação --> 
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="/img/sun.png" alt="">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item" role="button"><a class="nav-link" href="/">Eventos</a></li>
          <li class="nav-item" role="button"><a class="nav-link" href="/eventos/create">Criar Eventos</a></li>
          <li class="nav-item" role="button"><a class="nav-link">Entrar</a></li>
          <li class="nav-item" role="button"><a class="nav-link">Cadastrar</a></li>
        </ul>
      </div>
    </nav>
  </header>
  @yield('content')
  <footer>
    <p>HTC Events &copy; 2022</p>
  </footer>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>