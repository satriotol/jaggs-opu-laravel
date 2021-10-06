<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">JAGGS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">JS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{Request::routeIs('abouts.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('abouts.index')}}">
                    <i class="fas fa-address-card"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="{{Request::routeIs('benefits.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('benefits.index')}}">
                    <i class="fas fa-plus"></i>
                    <span>Benefit</span>
                </a>
            </li>
            <li class="{{Request::routeIs('products.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('products.index')}}">
                    <i class="fas fa-home"></i>
                    <span>Product</span>
                </a>
            </li>
            <li class="{{Request::routeIs('location.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('location.index')}}">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location</span>
                </a>
            </li>
            <li class="{{Request::routeIs('slider.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('slider.index')}}">
                    <i class="fas fa-images"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="{{Request::routeIs('site_plan.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('site_plan.index')}}">
                    <i class="far fa-map"></i>
                    <span>Site Plan</span>
                </a>
            </li>
            <li class="{{Request::routeIs('social_media.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('social_media.index')}}">
                    <i class="far fa-comment-alt"></i>
                    <span>Social Media</span>
                </a>
            </li>
            <li class="{{Request::routeIs('phone.*') ? 'active' : ''}}">
                <a class="nav-link " href=" {{route('phone.index')}}">
                    <i class="fas fa-phone"></i>
                    <span>Phone</span>
                </a>
            </li>
        </ul>
    </aside>
</div>