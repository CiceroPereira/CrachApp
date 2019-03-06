<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <style type="text/css">
            .image { 
              position: relative; 
             width: 100%; 
             text-align: center;
             margin-top: 100px
            }

        h2 { 
           position: absolute; 
           top: 100px; 
           left: 0; 
           width: 100%; 
        }

          h1 { 
           position: absolute; 
           top: 150px;
           left: 0; 
           width: 100%; 
        }

        h2 span { 
           color: #00000; 
           font: bold 40px/55px Helvetica, Sans-Serif; 
           letter-spacing: -1px;  
           padding: 10px; 
        }

         h1 span { 
           color: #00000; 
           font: bold 20px/35px Helvetica, Sans-Serif; 
           letter-spacing: -1px;  
           padding: 10px; 
        }

        </style>
  
    </head>
    <body>
        
    @foreach($participantes as $participante )
    
     <div class="image">
        <img src="storage/back/1.png">
        <h2><span>{{$participante->name}}</span></h2>
        <h1><span>{{$participante->pais}}<br>{{$participante->instituicao}}<br>{{$participante->email}}<br>Inscrição:{{$participante->inscricao}}</span></h1>
     </div>
    
    @endforeach


    </body>
</html>