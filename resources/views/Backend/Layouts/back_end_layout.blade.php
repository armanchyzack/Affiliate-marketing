<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
    <link href="{{ asset('Backend/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-md-0 me-3 me-lg-4 ms-5 ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">NAVBAR</div>
                        <a class="nav-link" href="{{ route('navbar.view') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-alt text-white" aria-hidden="true"></i></div>
                            Navbar
                        </a>
                        <div class="sb-sidenav-menu-heading">Category</div>
                        <a class="nav-link" href="{{ route('category.view') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-alt text-white" aria-hidden="true"></i></div>
                            Category
                        </a>
                        <a class="nav-link" href="{{ route('category.all') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-alt text-white" aria-hidden="true"></i></div>
                            All Category
                        </a>

                        <a class="nav-link" href="{{ route('sub.category.all') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-alt text-white" aria-hidden="true"></i></div>
                            All Sub-Category
                        </a>
                        <div class="sb-sidenav-menu-heading">Product</div>
                        <a class="nav-link" href="{{ route('product.view') }}">
                            <div class="sb-nav-link-add"><i class="fa fa-plus text-white" aria-hidden="true"></i></div>
                            Add Product
                        </a>
                        <a class="nav-link" href="{{ route('product.all') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-list-alt text-white" aria-hidden="true"></i></div>
                            All Product
                        </a>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        permisition Role
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tiny.cloud/1/09gvj0cuqtw8vv6x9sterkrafnddrxjfddv71eij0ajorpvu/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('Backend/js/scripts.js') }}"></script>
    @stack('customJs')
</body>

</html>
