<header id="header">
    <nav class="header-nav">
        <ul class="header-nav-wrapper">
            <li class="header-nav__list-top"><a href="{{ route('home.index') }}"><img class="header-logo__img" src="{{ asset('images/logo.png') }}" alt="ロゴ"></a></li>
            <li class="header-nav__list-search">
                <form action="" method="get">
                    @csrf
                    <input type="text" name="keyword">
                    <button type="submit">検索</button>
                </form>
            </li>
            <li class="header-nav__list"><a href="{{ route('login') }}">ログイン</a></li>
            <li class="header-nav__list"><a href="{{ route('favorite.index') }}">お気に入り</a></li>
            <li class="header-nav__list"><a href="{{ route('cart.index') }}">カート</a></li>
            <li class="header-nav__list"><a href="{{ route('order.history.index') }}">注文履歴</a></li>
        </ul>
    </nav>
    
    <nav>
        <ul class="header-category__wrapper">
            <li class="header-category__list"><a class="header-category" href="{{ route('home.index') }}">TOP</a></li>
            <li class="header-category__list">
                <a class="header-category" href="{{ route('women.index') }}">WOMEN</a>
                <ul class="header-category__dropdown-menu active">
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.outer.index') }}">アウター</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.tops.index') }}">トップス</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.skirt.index') }}">スカート</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.one_piece.index') }}">ワンピース</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.pants.index') }}">パンツ</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.jeans.index') }}">ジーンズ</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.inner.index') }}">インナー</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('women.room.index') }}">ルーム</a></li>
                </ul>
            </li>
            <li class="header-category__list">
                <a class="header-category" href="{{ route('men.index') }}">MEN</a>
                <ul class="header-category__dropdown-menu active">
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.outer.index') }}">アウター</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.tops.index') }}">トップス</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.sweat.index') }}">スウェット</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.knit.index') }}">ニット</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.pants.index') }}">パンツ</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.jeans.index') }}">ジーンズ</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.inner.index') }}">インナー</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('men.room.index') }}">ルーム</a></li>
                </ul>
            </li>
            <li class="header-category__list">
                <a class="header-category" href="{{ route('kids.index') }}">KIDS</a>
                <ul class="header-category__dropdown-menu active">
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.outer.index') }}">アウター</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.tops.index') }}">トップス</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.shirt.index') }}">シャツ</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.one_piece.index') }}">ワンピース</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.pants.index') }}">パンツ</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.sweat.index') }}">スウェット</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.inner.index') }}">インナー</a></li>
                    <li class="header-category-dropdown-menu__list"><a href="{{ route('kids.room.index') }}">ルーム</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>