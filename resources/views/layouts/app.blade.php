<!DOChtml>
<html>
@include('layouts.head')
<body>
@include('layouts.top-nav')
<main role="main" class="container">
    <div class="starter-template">
        @yield('content')
    </div>
</main>
@include('layouts.foot')
</body>
</html>