<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@livewireStyles
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">

            @if (Auth::check('web'))
            <a class="navbar-brand" href="#"><img style="border-radius: 17px; width: 50px; heigth: 50px;" src="{{Storage::disk('public')->url(Auth::user()->foto ? Auth::user()->foto : 'images/usuarios/default.png')}}" alt=""> {{Auth::user()->nombre_usuario}}</a>
            @endif

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @if (Auth::check('web'))
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('empresas.index')}}">Empresas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('usuarios.index')}}">Usuarios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('ventas.index')}}">Ventas</a>
                    </li>

                    @livewire('login.logout')
                </ul>
              @endif

          </div>
        </div>
      </nav>
    <!-- el mb es margin bottom y el mt es margin top, sirve como un br pues xd, tambien se puede
    usar my-5 y es margin y, lo cual sirve para los 2. -->
      <div class="container mb-5 mt-5">
        {{$slot}}
      </div>

<!-- normalmente se pone al final lo de javascript al final porque es pesado y para que no tarde tanto tiempo cargando ps xd -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@livewireScripts
<script>

    livewire.on('alerta', mensaje=>{
        Swal.fire({
            icon: 'error',
            title: 'Ocurrio un error',
            text: mensaje
          })
    });
    livewire.on('empresaCreate', mensaje=>{
        Swal.fire({
            icon: 'success',
            text: mensaje,
            title: 'Se creo una empresa exitosamente'
          })
    });

    livewire.on('alertaxd', mensaje=>{
        Swal.fire({
            icon: 'success',
            title: mensaje,
            width: 600,
            padding: '3em',
            color: '#716add',
            background: '#fff',
            backdrop: `
                rgba(0,0,123,0.4)
                url("https://c.tenor.com/KcAMlR3DdcoAAAAd/verbalase-tetris.gif")
                left top
                no-repeat
            `
    })
});

</script>
</body>
</html>
