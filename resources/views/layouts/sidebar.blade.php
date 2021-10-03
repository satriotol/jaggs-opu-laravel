<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">JAGGS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">JS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{Request::routeIs('abouts.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('abouts.index')}}">
                    <i class="far fa-square"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="{{Request::routeIs('benefits.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('benefits.index')}}">
                    <i class="far fa-square"></i>
                    <span>Benefit</span>
                </a>
            </li>
            <li class="{{Request::routeIs('products.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('products.index')}}">
                    <i class="far fa-square"></i>
                    <span>Product</span>
                </a>
            </li>
        </ul>
    </aside>
</div>