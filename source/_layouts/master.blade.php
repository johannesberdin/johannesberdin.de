<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ie7lte ie8lte"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="ie7 ie7lte ie8lte"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8 ie8lte"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if !(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>{{ $page->title ? $page->title : 'entrepreneur, digital native, software engineer' }} @johannesberdin</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Sanchez" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/main.css', '') }}" />
    <script src="{{ mix('js/main.js', '') }}"></script>
</head>

<body>

  @yield('body')

</body>

</html>
