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
    

    <title>Ingreso Category</title>
</head>
<body>
<header>
    @include('dashboard.partials.nav-header-main')
</header>

    <main>
        <div class="tt">
            <h1>Ingreso de categorias</h1>
        </div>
       

    <form action="{{route('category.store')}}" method="post">
            <div class="login">
                <section class="row ">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Categoria</label>
                    <br>
                    <input readonly type="text" name ="title" value="{{$category->title}}">
                    @error('title')
                    <small calss="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Url Corta</label>
                    <br>
                    <input type="text" name ="slug"  value="{{$category->slug}}">
                    @error('slug')
                    <small calss="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                </div>
                </section> 
            </div>

        </form>
    </main>
</body>
</html>