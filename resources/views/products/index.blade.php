<x-layout>
  <main>
    <h1>Products</h1>
    <a href="/products/create">Uztaisīt jaunu</a>
    @foreach($products as $product)
    <article>
      <h2><a href="/products/{{$product->id}}">{{$product->name}}</a></h2>
      <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
      <p>{{$product->description}}
      </p>
      <p>{{$product->price}} EUR</p>
    </article>
    @endforeach
  </main>
</x-layout>