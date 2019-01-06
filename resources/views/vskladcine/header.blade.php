<header class="header">
    <div class="container">
        <div class="header__row">
            <div class="header__left">
                <button type="button" class="header__menu-toggle">
                    <span>Меню</span>
                </button>
                <button type="button" class="header__menu-toggle-mobile">
                    <span>Меню</span>
                </button>
                <div class="header__logo">
                    <a href="/" class="logo"><img class="logo__img" src="img/logo.png" width="149" height="47" alt=""></a>
                </div>
                <div class="header__menu">
                    <ul class="menu">
                        <li>
                            <a href="#" class="menu__dropdown-link">
                                <svg class="icon icon-arrow"><use xlink:href="img/icons.svg#icon-arrow"/></svg>
                                Информация
                            </a>
                            <ul class="menu__submenu">
                                <li><a href="#">О проекте</a></li>
                                <li><a href="#">Миссия</a></li>
                                <li><a href="#">Возможности</a></li>
                                <li><a href="#">Правила и инструкции</a></li>
                                <li><a href="#">Вопросы и предложения</a></li>
                                <li><a href="#">Темы для обсуждения</a></li>
                                <li><a href="#">Приглашаем авторов</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Пользователи</a></li>

                    </ul>
                </div>
            </div>
            <div class="header__right">
                <a href="#" class="btn btn-stock">
                    <svg class="icon icon-star"><use xlink:href="img/icons.svg#icon-star"/></svg>
                    <span>Мои складчины</span>
                </a>
                <div class="header__buttons">
                    <div class="buttons-items">
                        <div class="dropdown dropdown--comments">
                            <a href="#" class="btn-toggle btn-toggle--reminder btn-toggle--active">
                                <span><svg class="icon icon-comment"><use xlink:href="img/icons.svg#icon-comment"/></svg></span>
                            </a>
                        </div>
                        <div class="dropdown dropdown--reminder">
                            <a href="#" class="btn-toggle btn-toggle--reminder btn-toggle--active">
                                <span><svg class="icon icon-bell"><use xlink:href="img/icons.svg#icon-bell"/></svg></span>
                            </a>
                        </div>
                        <div class="dropdown dropdown-auth">
                            <button class="dropdown-toggle btn-toggle btn-toggle--user" type="button" data-toggle="dropdown">
                                <span><svg class="icon icon-user"><use xlink:href="img/icons.svg#icon-user"/></svg></span>
                            </button>
                            <div class="dropdown-menu">
                                <div class="authorization">
                                    <div class="authorization__title">
                                        Авторизация
                                    </div>
                                    <div class="authorization__social">
                                        <ul class="social">
                                            <li class="social__item"><a class="social__link" href="#"><svg class="icon icon-fb"><use xlink:href="img/icons.svg#icon-fb"/></svg></a></li>
                                            <li class="social__item"><a class="social__link" href="#"><svg class="icon icon-vk"><use xlink:href="img/icons.svg#icon-vk"/></svg></a></li>
                                            <li class="social__item"><a class="social__link" href="#"><svg class="icon icon-twitter"><use xlink:href="img/icons.svg#icon-twitter"/></svg></a></li>
                                            <li class="social__item"><a class="social__link" href="#"><svg class="icon icon-google"><use xlink:href="img/icons.svg#icon-google"/></svg></a></li>
                                            <li class="social__item"><a class="social__link" href="#"><svg class="icon icon-ok"><use xlink:href="img/icons.svg#icon-ok"/></svg></a></li>
                                        </ul>
                                    </div>
                                    <div class="authorization__title">
                                        Авторизация
                                    </div>
                                    <form action="#" class="form-validate">
                                        <div class="form-group">
                                            <input type="text" name="name" required class="form-control" placeholder="Ваше имя">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" required class="form-control" placeholder="Электронная почта">
                                        </div>
                                        <div class="form-group form-buttons">
                                            <button type="submit" class="btn btn-login">
                                                <span>Войти</span>
                                            </button>
                                        </div>
                                        <div class="form-group form-links">
                                            <a href="javascript:void(0);" data-src="#popup-registration" data-fancybox="">Я не зарегистрирован</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
@if(count($errors) > 0)
    <div class="alert alert-danger" style="width: 30%; margin-left: 17%">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(session('status'))
    <div class="alert alert-success" role="alert"style="text-align: center">
        {{ session('status') }}
    </div>
@endif