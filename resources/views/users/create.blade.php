<x-layout>
  <style>
     form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      form button {
        width: 100px;
      }
      input, textarea{
        border: 1px black;
      }
      
  </style>
  <x-slot:heading>
      Register
    </x-slot:heading>
  
    <form method="POST" action="/register">
      @csrf
      <label>
          <span>Username:</span>
          <input name="username">
      </label>
      @error("username")
        <p>{{$message}}</p>
      @enderror
      <label>
          <span>Email:</span>
          <input type="email" name="email">
      </label>
      @error("email")
        <p>Muļķis! {{$message}}</p>
      @enderror
      <label>
          <span>Password:</span>
          <input type="password" name="password">
      </label>
      @error("password")
        <p>Mēģini vēlreiz. {{$message}}</p>
      @enderror
      <button>Submit</button>
    </form>
</x-layout>
