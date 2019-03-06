### Pré requisitos para rodar o laravel

* Composer Instalado
* PHP 7.0.1
* Variável de ambiente do PHP


### Comandos necessários após o clone

* Copiar o conteúdo do .env.example e colorcar num novo arquivo .env
* Configurar a conexão de banco do arquivo .env

```bash
> composer install
> php artisan key:generate
> php artisan config:clear
> php artisan migrate
> php artisan cache:clear
> php artisan storage:link
> php artisan serve
```
* Colocar uma imagem default com o nome 1.png em storage\app\public\back
* Ative o apache e o mySql em seu control pane e abra seu navegador em http://localhost:8000

### Detalhes sobre alguns requisitos

* Não foi possível concluir a edição do crachá(layout e fonte do texto) em tempo hábil, como alternativa optei deixar um layout padronizado para todos os crachás impressos, onde os dados informados no campo de texto deverão estar no formato apresentado na planilha de exemplo. Deste forma também não será necessário informar os cabeçalhos no campo de texto, apenas os valores na ordem definida.

* Os templates que foram usados nesse projeto foram redimensionado em 50%, pois no tamanho original apresentavam alguns problemas na exibição dos mesmos no pdf.
