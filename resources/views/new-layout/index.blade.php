<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('new-components.link')

</head>

<body>
    @include('new-components.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('new-components.script')
</body>

</html>
