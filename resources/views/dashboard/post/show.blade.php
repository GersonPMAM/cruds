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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <title>Ingreso Post</title>
</head>
<body>
<header>
@include('dashboard.partials.nav-header-main')
</header>

    <main>
        <div class="tt">
            <h1>Post</h1>
        </div>
        

    <form action="{{route('post.store')}}" method="post">
        <!-- Incluimo el archo que esta en la ruta -->


            <div class="login">
                <section class="row ">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Titulo</label>
                    <br>
                    <!-- El value es para mandar un valor predefinido, el old se guarda en una secion flas -->
                    <input readonly type="text" name ="title" value="{{$post->title}}">
                    @error('title')
                    <small calss="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                    
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Url Corta</label>
                    <br>
                    <input readonly type="text" name ="slug" value="{{$post->slug}}" >
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
                            <textarea readonly name="content">{{$post->content}}</textarea>
                            @error('content')
                            <small calss="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <br>
                         
                    </div>
                </section>
            </div>
        </form>
    </main>
</body>
</html>