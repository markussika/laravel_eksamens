<x-layout>
  <main>
    <x-slot:heading>
      Home page
    </x-slot:heading>
    <h1>Products</h1>
    
    @foreach($products as $product)
    <article>
      <div>
    <a href="/products/{{$product->id}}">
      {{$product->name}}
      <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
      <p>{{$product->description}}
      </p>
      <p>{{$product->price}} EUR</p>
      </a>
      </div>
    </article>
    @endforeach
  </main>
</x-layout>