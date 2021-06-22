<header class="site-header">
    <div class="container">
        <div class="site-header-inner">
            <div class="brand header-brand">
                <h1 class="m-0">
                    <a href="#">
                        <img class="header-logo-image" src="{{ asset('web_assets/images/logo.svg') }}" alt="Logo">
                    </a>
                </h1>
            </div>
            <div>
                <div class="pricing-table-cta mb-8" style="float: left; padding-right: 10px">
                    <a class="button button-primary button-shadow button-block" href="{{ route('login') }}">Login</a>
                </div>
                <div class="pricing-table-cta mb-8" style="float: right">
                    <a class="button button-primary button-shadow button-block" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>
</header>
