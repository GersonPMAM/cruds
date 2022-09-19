@include('dashboard.partials.sesion-flash-status')
<div class="login">
                <section class="row ">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Titulo</label>
                    <br>
                    <!-- El value es para mandar un valor predefinido, el old se guarda en una secion flas -->
                    <input type="text" name ="title" value="{{old('title',$post->title)}}" >
                    @error('title')
                    <small calss="text-danger">
                        {{$message}}
                    </small>
                    @enderror
                    
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <label for="">Url Corta</label>
                    <br>
                    <input type="text" name ="slug" value="{{old('slug',$post->slug)}}" >
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
                            <textarea name="content">{{old('content',$post->content)}}</textarea>
                            @error('content')
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