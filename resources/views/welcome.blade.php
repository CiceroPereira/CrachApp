<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container">
        <h2>1 - Criar Modelo</h2>
            <label for="imageUpload" class="btn btn-primary">Anexar Imagem de Fundo</label>
            <input type="file" id="imageUpload" accept="image/*" style="display: none" (change)="onFileSelected($event)">
            <a href="https://blog.even3.com.br/crachas-para-eventos-academicos/">Dica: Templates</a>
            <br>
            <br>
    
            <div id="image" contenteditable="true" style="height: 1240px; width: 872px;">

                <img src="img/Cracha01.png" height="1240px" width= "872px">
                
            </div>
            
            <br>

            <h2>2 - Importar Participantes</h2>
            <h5>Copie o conteúdo da planilha excel, incluindo os cabeçalhos e cole aqui</h5>
            <br>
            <textarea class="form-control" style="height: 400px; width: 900px"></textarea>

            <br>

            <h2>3 - Baixar</h2>
            <button class="btn btn-primary" >Baixar Crachás</button> 
</div>
    </body>
</html>
