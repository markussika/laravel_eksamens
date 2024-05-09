<x-layout>
<x-slot:heading>
    Edit page
</x-slot:heading>
  @if ($errors->any())
    <ul style="position: fixed; top:20px; left: 20px" class="alert alert-danger">
      @foreach ($errors->all() as $err)
          <li>{{ $err }}</li>
      @endforeach
    </ul>
  @endif

  <h1>Please update product</h1>
  <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>
      Product name:
      <input value="{{$product->name}}" name="name"/>
    </label>
    <label>
      Description:
      <textarea name="description">{{$product->description}}</textarea>
    </label>
    <label>
      Price:
      <input type="number"  name="price" value="{{$product->price}}"/>
    </label>
    <label>
      Image:
      <img src="{{$product->imageURL}}" width="200px" />
      <input name="image" type="file" accept="image/*" value={{$product->imageURL}}/>
    </label>
    <button>Update</button>
  </form>

</x-layout>