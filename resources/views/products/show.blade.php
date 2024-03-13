<x-layout>
<body>
  <main>
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
  </main>
</x-layout>