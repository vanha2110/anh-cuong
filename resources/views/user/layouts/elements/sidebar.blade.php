<?php
/**
 * @var string $current Selected menu
 */
$current = $current ?? '';
$menu = App\Models\Menu::create($current);
?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
    <div class="logo"><a href="{{ route('web.home') }}" class="simple-text logo-normal">
            Creative Tim
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ $menu->active('dashboard') }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ $menu->active('order') }}">
                <a class="nav-link" href="{{ route('order.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Order</p>
                </a>
            </li>
            <li class="nav-item {{ $menu->active('profile') }} ">
                <a class="nav-link" href="{{ route('profile.index') }}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            @if(auth()->user()->role == 0)
                <li class="nav-item {{ $menu->active('product') }}">
                    <a class="nav-link" href="{{ route('admin.product.index') }}">
                        <i class="material-icons">person</i>
                        <p>Product</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
