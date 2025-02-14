<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo">
                <img src="{{ asset('img/logo.svg') }}" alt="coachtech">
            </div>
            <div class="header__search">
                <form action="/search" method="post" class="header__search-form">
                    <input type="text" name="keyword" placeholder="なにをお探しですか?">
                </form>
            </div>
            <div class="header__nav">
                <form action="/logout" class="header__nav__logout">
                    <button>ログアウト</button>
                </form>
                <div class="header__nav__mypage">
                    <button>マイページ</button>
                </div>
                <div class="header__nav__sell">
                    <button>出品</button>
                </div>
            </div>
        </div>
    </header>
    <main class="main"></main>
</body>

</html>