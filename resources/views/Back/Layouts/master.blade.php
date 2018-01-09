@include($appType.'.Include.head')
@include($appType.'.Include.sidebar')
@include($appType.'.Include.nav')
@include($appType.'.Include.foot')


@yield('head')
@yield('sidebar')
@yield('nav')
@yield('content')
@yield('foot')
