<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources\css\app.css', 'resources\js\app.js'])
  </head>
  <body>
    <div class="text-center m-3">
        <h1>Ciao {{$article->user->name}}uova richiesta contatto</h1>
        <p>L'utente {{$user->name}}
        <p>Email : {{$user->email}}</p>
        <p>È interessato all'articolo {{$article->title}}.</p>
        <p>Ti invitiamo a contattarlo appena possibile.</p>
    </div>
  </body>
</html>