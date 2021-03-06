<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CrachApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container">
            @if(session()->has('message'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                @endif
            <form action="{{ URL::to('/image') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h2>1 - Criar Modelo</h2>
                <label for="imageUpload" class="btn btn-primary">Anexar Imagem de Fundo</label>
                <input type="file" id="imageUpload" accept="image/*" style="display: none" (change)="onFileSelected($event)" name="back">
                <a href="https://blog.even3.com.br/crachas-para-eventos-academicos/">Dica: Templates</a>
                <br>
                <br>
        
                <div id="image" contenteditable="true" style="height: 640px; width: 436px;">

                    <img src="storage/back/1.png" height="640px" width= "436px">
                    
                </div>
                
                <br>

                <h2>2 - Importar Participantes</h2>
                <h5>Copie e cole aqui o conteúdo da planilha excel, incluindo nas seguinte ordem os campos:<br> nome, país, instituição, email, inscrição </h5>
                <br>
                <textarea name="participantes" class="form-control" style="height: 400px; width: 900px"></textarea>

                <br>

            <h2>3 - Baixar</h2>
            <input class="btn btn-primary" type="submit" value="Baixar Crachás " />   
            </form>
</div>
    </body>
</html>
