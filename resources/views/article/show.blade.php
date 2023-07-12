<x-main>
  
  <div class="container rounded p-0 w-75 mt-5">
    <div class="row">
      <x-carousel :article="$article" />
      <div class="col-md-6 mt-5 d-flex flex-column align-items-around justify-content-around">
        <div>
          <span class="background_blue rounded p-1 text-white">{{$article->category->name}}</span>
        </div>
        <h3 class="mt-5">{{$article->title}}</h3>
        <span>{{$article->description}}</span>
        <h2 style="color: rgb(0, 167, 0)">€{{$article->price}}</h2>
        <hr class="w-75">
        <h6>Creato il {{$article->created_at->format('d/m/Y')}}, dall'utente <a href="{{route('user.show', ['user'=>$article->user])}}">{{$article->user->name}}</a></h6>
      </div>
    </div>
  </div>
  
</x-main>