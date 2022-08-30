<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    

    <title>Ingreso Post</title>
</head>
<body>

    <main>
        <div class="tt">
            <h1>Ingreso de Post</h1>
        </div>
       

        <form action="{{route('post.store')}}" method="post">
       <!--  @if ($errors->any())
        @foreach($errors->all() as $error)
        <div calss="alert alert-danger">
            {{$error}}
        </div>
        @endforeach
        @endif -->
            @csrf


            <!-- si hay una seccion con estatus levantado que imoprima el segundo y despues de imprimirlo la secion se baja 
        se desencadena una sola vez-->
            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif


            <div class="login">
                <section class="row ">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Titulo</label>
                    <br>
                    <input type="text" name ="title">
                    @error('title')
                    <small calss="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                    
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Url Corta</label>
                    <br>
                    <input type="text" name ="slug">
                    @error('slug')
                    <small calss="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                </div>
                </section> 
            </div>
            

            <div class="login">
                <section class="row ">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Contenido</label>
                            <br>
                            <textarea name="content"></textarea>
                            @error('content')
                            <small calss="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Descripcion</label>
                            <br>
                            <textarea name="description" id="" cols="45" rows="10"></textarea>
                            @error('description')
                            <small calss="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <br>
                        <button class="boton_2"> Enviar </button>   
                    </div>
                </section>
            </div>
        </form>
    </main>
    
</body>
</html>