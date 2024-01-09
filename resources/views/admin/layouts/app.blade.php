<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.includes.head')

<body class="hold-transition sidebar-mini layout-fixed  vh-100">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-3">Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img style="height: 20px;width:20px" src="/admin/dist/img/admin.png" alt="">
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ route('admin.logout') }}" class="nav-link">
                                        <p style="color: rgb(0, 0, 0)">
                                            Çıxış
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        <div class="wrapper">
            @include('admin.layouts.includes.menu')
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/plugins/chart.js/Chart.min.js"></script>
    <script src="/admin/plugins/sparklines/sparkline.js"></script>
    <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/admin/dist/js/adminlte.js"></script>
    <script src="/admin/dist/js/demo.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/admin/dist/js/pages/dashboard.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: $(this).data('route'),
                    data: {
                        '_method': 'delete'
                    },
                    success: function(response, textStatus, xhr) {
                        alert(response)
                        window.location = '/posts'
                    }
                });
            })
        });
    </script>
    @stack('scripts')

</body>

</html>
