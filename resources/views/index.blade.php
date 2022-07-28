<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
{{-- お問合せページ --}}
<body>
  <h1 class="title">お問い合わせ</h1>
  <form action="{{ route('confirm.send') }}" method="post">
    @csrf
    <table class="fullname">
      お名前
      @if ($errors->has('fullname'))
        <p>{{ $errors->first('fullname') }}</p>
      @endif
      <tr>
        <th> <input type="text" name="fullname" value="{{ old('fullname') }}"></th>
        <td> <input type="text" name="fullname" value="{{ old('fullname') }}"></td>
      </tr>
      <tr>
        <th>例）山田</th>
        <td>例）太郎</td>
      </tr>
    </table>
    
    性別 
      @if ($errors->has('sex'))
        <p>{{ $errors->first('sex') }}</p>
      @endif
    <input type="radio" name="sex" value="male" value="{{ old('sex') }}"> 男性 <input type="radio" value="female" name="sex" value="{{ old('sex') }}"> 女性 <br>
    
    メールアドレス
      @if ($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
      @endif
    <input type="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" value="{{ old('email') }}"><br>
    例）test@example.com <br>
    
    郵便番号
      @if ($errors->has('postcode'))
        <p>{{ $errors->first('postcode') }}</p>
      @endif
    〒<input type="text" pattern="\d{3}-?\d{4}" name="postcode" value="{{ old('postcode') }}"><br>
    例）123-4567 <br>
    
    住所
      @if ($errors->has('address'))
        <p>{{ $errors->first('address') }}</p>
      @endif
    <input type="text" name="address" value="{{ old('address') }}"><br>
    例）東京都渋谷区千駄ヶ谷1-2-3 <br>
    
    建物名
    <input type="text" name="building_name" value="{{ old('building_name') }}"><br>
    例）千駄ヶ谷マンション101 <br>
    
    ご意見
      @if ($errors->has('opinion'))
        <p>{{ $errors->first('opinion') }}</p>
      @endif
    <textarea name="opinion">{{ old('opinion') }}</textarea><br>
    
    <button type="submit">確認</button>
  </form>
</body>
</html>