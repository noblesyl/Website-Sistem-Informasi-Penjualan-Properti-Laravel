<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manajemen Perusahaan X</title>
    <link rel="stylesheet" href="{{ asset('backend/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        @include('backend.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('backend.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between flex-wrap">

                                @yield('content')


                            </div>
                        </div>
                    </div>
                </div>
                @include('backend.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>
    <script src="{{ asset('backend/js/data-table.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.js') }}"></script>
</body>

</html>
