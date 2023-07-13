<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources\css\app.css', 'resources\js\app.js'])
  </head>
  <body>
    <div class="text-center m-3">
        <h1>Nuova richiesta contatto</h1>
        <p>L'utente {{$user->name}} {{$user->surname}}  
        <p>Telefono : +39 {{$user->phone}}</p> 
        <p>Email : {{$user->email}}</p>
        <p>Ha richiesto di entrare in contatto con te.</p>
        <p>Ecco una sua breve descrizione: {{$user->description}}</p> 
    </div>
  </body>
</html>