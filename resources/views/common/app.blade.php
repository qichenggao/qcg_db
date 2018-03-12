<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport">
<link rel="shortcut icon" href="favicon.ico">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'Qcg') - Qcg 个人社区 </title>
@yield('styles_js')
</head>
<body id="home">

@include('common._header')

@yield('content')

@include('common._footer')

@yield('footer_js')

</body>
</html>