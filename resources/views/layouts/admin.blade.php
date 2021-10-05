<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <livewire:styles />
    @yield('page-title')
</head>
<body id="body">
    @include('components.web.navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                @include('components.admin.side-panel')
            </div>
            <div class="col-8">
                @yield('content')
            </div>
        </div>
    </div>
    @include('components.web.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <livewire:scripts />
    @yield('scripts')
</body>
</html>