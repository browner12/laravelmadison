<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="application-name" content="{{ $_name }}"/>
<meta name="description" content="@yield('description', $_description)"/>
<meta name="keywords" content="@yield('keywords', $_keywords)"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="theme-color" content="#5BB75B"/>
<link rel="manifest" href="/manifest.json">

@stack('meta')
