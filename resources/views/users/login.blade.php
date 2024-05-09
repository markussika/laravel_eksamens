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
    </style>

    <x-slot:heading>
      Login
    </x-slot:heading>
      
    <form method="POST" action="/login">
      @csrf
      <label>
          <span>Username:</span>
          <input name="username">
      </label>
      <label>
          <span>Password:</span>
          <input type="password" name="password">
      </label>
      @error("password")
        <p>Mēģini vēlreiz. {{$message}}</p>
      @enderror
      <button>Submit</button>
    </form>
    
    @if (session()->has("success"))
      <div x-data="{ open: true }">
        <div x-show="open">
          <p>{{ session("success") }}</p>
          <button @click="open = false">Close</button>
        </div>
      </div>
    @endif
    </x-layout>
