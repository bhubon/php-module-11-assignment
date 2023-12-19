<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Product Managemt</div>
                <a class="nav-link collapsed" href="{{ route('product.index') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    All Products
                </a>
                <a class="nav-link collapsed" href="{{ route('product.create') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Add Product
                </a>
                <a class="nav-link collapsed" href="{{ route('orders') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Orders
                </a>
            </div>
        </div>
    </nav>
</div>
