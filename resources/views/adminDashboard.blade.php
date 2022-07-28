{{-- 管理者ログイン後ページ --}}
<!DOCTYPE html>
<html labg="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewpotr" content="width=device-width, initial-scale=1">
    <title>ダッシュボード</title>
  </head>
  <body>
    <ul>
      <li>
        ログイン中：{{ Auth::guard('admin')->user()->name ?? 'undefind' }}
      </li>
    </ul>
    <a href="{{ route('admin.logout') }}">
      ログアウト
    </a>
  <li>
    <a href="{{route('admin.register')}}">
      アカウント作成
    </a>
  </li>
  </body>
</html>