<x-layout>
<x-slot:heading>
      {{$product->name}}
    </x-slot:heading>
  <main>
@auth
    <h1>{{$product->name}}</h1>
    <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
    <p>{{$product->description}}
    </p>
    <p>{{$product->price}} EUR</p>

    <form method="POST" action="/products/{{$product->id}}">
      @csrf
      @method("DELETE")
      <button>❌</button>
    </form>
    <form method="POST" action="/products/{{$product->id}}/edit">
      @csrf
     
      <button>edit</button>
    </form>
@endauth
@guest
<h1>{{$product->name}}</h1>
    <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
    <p>{{$product->description}}
    </p>
    <p>{{$product->price}} EUR</p>

    
@endguest
  </main>

</x-layout>