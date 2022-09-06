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
<!-- Lo mandamos a un archivo blade.php  -->
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif