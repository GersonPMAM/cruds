<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>



    <title>Mi Primer Crud</title>
</head>
<body>
    <header >
        @include('dashboard.partials.nav-header-main')
        <!-- Creamos el boton de crar -->
        <a class="btn btn-primary" href="{{route('post.create')}}">Crear</a>
    </header>    

    <!-- Creamos las tablas -->
    <main>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tbody>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                Titulo
                            </td>
                            <td>
                                Ruta
                            </td>
                            <td>
                                Creacion
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </tbody>

                    <!-- Creamos un siclo que recorre el areglo cque creamos -->

                    @foreach($posts as $post)
                        <tr>
                            <td>

                                {{$post->id}}
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{$post->slug}}
                            </td>
                            <td>
                                {{$post->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$post->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">ver</a>
                                <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Actualizar</a>
                                <form method="POST" action="{{route('post.destroy',$post->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </thead>                
            </table>  
            <!-- Se agran los botones de siguiente y anterior -->
            {{$posts->links()}}        
        </div>
    </main>
</body>
</html>