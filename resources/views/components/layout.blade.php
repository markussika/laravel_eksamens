<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Products</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <p>BestShop</p>
  @auth
    <div>
      <p>Welcome, {{ auth()->user()->name }}</p>
      <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
      </form>
    </div>
  @endauth
  @guest
      <div>
        <p><a href="/login">Log In</a></p>
        <p><a href="/register">Register</a></p>
      </div>
  @endguest
</header>
{{ $slot }}
</body>
</html>