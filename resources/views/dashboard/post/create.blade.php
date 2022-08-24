<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Ingreso Post</title>
</head>
<body>

    <main>
        <div class="tt">
            <h1>Ingreso de Post</h1>
        </div>
    

        <form action="{{route('post.store')}}" method="post">
            @csrf


            <div class="login">
                <section class="row ">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Titulo</label>
                    <br>
                    <input type="text" name ="title">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Url Corta</label>
                    <br>
                    <input type="text" name ="slug">
                </div>
                </section> 
            </div>
            

            <div class="login">
                <section class="row ">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Contenido</label>
                            <br>
                            <textarea name="content"></textarea>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Descripcion</label>
                            <br>
                            <textarea name="description" id="" cols="45" rows="10"></textarea>
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