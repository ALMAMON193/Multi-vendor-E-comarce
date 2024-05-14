<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title></title>

    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />


    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') }}"
        rel="stylesheet" />

    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('js/toastify-js.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">







</head>

<body>
@include('admin.body.header')

    <div id="sideNavRef" class="side-nav-open">

        <a href="{{ url('/dashboard') }}" class="side-bar-item">
            <i class="bi bi-graph-up"></i>
            <span style="font-weight: bold" class="side-bar-item-caption">Dashboard</span>
        </a>

        <a href="{{ url('/customerPage') }}" class="side-bar-item">
            <i class="bi bi-people"></i>
            <span style="font-weight: bold"style="font-weight: bold" class="side-bar-item-caption">Customer</span>
        </a>

        <a href="{{ url('/categoryPage') }}" class="side-bar-item">
            <i class="bi bi-list-nested"></i>
            <span style="font-weight: bold" class="side-bar-item-caption">Category</span>
        </a>

        <a href="{{ url('/productPage') }}" class="side-bar-item">
            <i class="bi bi-bag"></i>
            <span style="font-weight: bold" class="side-bar-item-caption">Product</span>
        </a>

        <a href="{{ url('/salePage') }}" class="side-bar-item">
            <i class="bi bi-currency-dollar"></i>
            <span style="font-weight: bold" class="side-bar-item-caption">Create Sale</span>
        </a>

        <a href="{{ url('/invoicePage') }}" class="side-bar-item">
            <i class="bi bi-receipt"></i>
            <span style="font-weight: bold" class="side-bar-item-caption">Invoice</span>
        </a>

        <a href="{{ url('/reportPage') }}" class="side-bar-item">
            <i class="bi bi-file-earmark-bar-graph"></i>
            <span style="font-weight: bold" class="side-bar-item-caption">Report</span>
        </a>


    </div>


    <div id="contentRef" class="content">
        @yield('content')
    </div>

    <script>
        function MenuBarClickHandler() {
            let sideNav = document.getElementById('sideNavRef');
            let content = document.getElementById('contentRef');
            if (sideNav.classList.contains("side-nav-open")) {
                sideNav.classList.add("side-nav-close");
                sideNav.classList.remove("side-nav-open");
                content.classList.add("content-expand");
                content.classList.remove("content");
            } else {
                sideNav.classList.remove("side-nav-close");
                sideNav.classList.add("side-nav-open");
                content.classList.remove("content-expand");
                content.classList.add("content");
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'error':

                    toastr.options.timeOut = 10000;
                    toastr.error("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>

</body>

</html>