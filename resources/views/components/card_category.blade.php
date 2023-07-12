<div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $category['name'] }}</h5>
      <div class="row">
        <a href="{{ route('category.show', ['category' => $category['id']]) }}" class="btn btn-primary">Visualizza</a>
      </div>
      @auth
      <div class="row">
        <a href="{{ route('category.edit', ['category' => $category['id']]) }}" class="btn btn-warning" >{{__('ui.modifica')}}</a>
      </div>
      <div class="row">
        <form action="{{route('category.destroy',['category'=>$category['id']])}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Elimina</button>
        </form>
      </div>
      @endauth
    </div>
  </div>
</div>