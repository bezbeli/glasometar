<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Raskrinkavanje">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

{{-- <link rel="manifest" href="{{asset('manifest.json')}}"> --}}

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('images/apple-touch-icon-57x57.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/apple-touch-icon-144x144.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{asset('images/apple-touch-icon-60x60.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{asset('images/apple-touch-icon-120x120.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{asset('images/apple-touch-icon-76x76.png')}}" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{asset('images/apple-touch-icon-152x152.png')}}" />
<link rel="icon" type="image/png" href="{{asset('images/favicon-196x196.png')}}" sizes="196x196" />
<link rel="icon" type="image/png" href="{{asset('images/favicon-96x96.png')}}" sizes="96x96" />
<link rel="icon" type="image/png" href="{{asset('images/favicon-32x32.png')}}" sizes="32x32" />
<link rel="icon" type="image/png" href="{{asset('images/favicon-16x16.png')}}" sizes="16x16" />
<link rel="icon" type="image/png" href="{{asset('images/favicon-128.png')}}" sizes="128x128" />
<meta name="application-name" content="Glasometar"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="{{asset('images/mstile-144x144.png')}}" />
<meta name="msapplication-square70x70logo" content="{{asset('images/mstile-70x70.png')}}" />
<meta name="msapplication-square150x150logo" content="{{asset('images/mstile-150x150.png')}}" />
<meta name="msapplication-wide310x150logo" content="{{asset('images/mstile-310x150.png')}}" />
<meta name="msapplication-square310x310logo" content="{{asset('images/mstile-310x310.png')}}" />

{{-- {!! seo_helper()->render() !!} --}}

@yield('header_script')
</head>
