<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
{{-- 入力内容確認ページ --}}
<body>
  <div>
    <form action="{{ route('send.show') }}" method="post">
      @csrf
        <label>お名前</label>  {{$fullname}} 
        <input type="hidden" name="fullname" value={{$fullname}}><br>
        
        <label>性別</label>  {{$sex}} 
        <input type="hidden" name="sex" value={{$sex}}><br>
        
        <label>メールアドレス</label>  {{$email}} 
        <input type="hidden" name="email" value={{$email}}><br>
        
        <label>郵便番号</label>  〒{{$postcode}} 
        <input type="hidden" name="postcode" value={{$postcode}}><br>
        
        <label>住所</label>  {{$address}} 
        <input type="hidden" name="address" value={{$address}}><br>
        
        <label>建物名</label>  {{$building_name}}
        <input type="hidden" name="building_name" value={{$building_name}}><br>
        
        <label>ご意見</label>  {{$opinion}} 
        <input type="hidden" name="opinion" value={{$opinion}}><br>
        
        <button type="submit" value="ture">送信</button>
        <a name="back" type="submit" value="true">修正する</a>
    </form>
  </div>
</body>
</html>