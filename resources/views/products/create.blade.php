<x-layout>
  @if ($errors->any())
    <ul style="position: fixed; top:20px; left: 20px" class="alert alert-danger">
      @foreach ($errors->all() as $err)
          <li>{{ $err }}</li>
      @endforeach
    </ul>
  @endif

  <h1>Please add product</h1>
  <form method="POST" action="/products" enctype="multipart/form-data">
    @csrf
    <label>
      Product name:
      <input name="name"/>
    </label>
    <label>
      Description:
      <textarea name="description"></textarea>
    </label>
    <label>
      Price:
      <input type="number" step="0.01" max="9" name="price"/>
    </label>
    <label>
      Image:
      <input name="image" type="file" accept="image/*"/>
    </label>
    <button>Add</button>
  </form>
</x-layout>