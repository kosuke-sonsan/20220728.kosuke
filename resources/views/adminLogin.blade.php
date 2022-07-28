{{-- 管理者ログインページ --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
    @endforeach
  @endif

  <form action="{{ route('admin.login') }}">
    @csrf
    <label for="email">Mail</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <button type="submit">login</button>
  </form>
</body>
</html>