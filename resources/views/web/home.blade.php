@extends('web.layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">Buy Chia plots </h1>
                    <p class="hero-paragraph">Want to farm on the Chia network but don't feel like getting specific hardware just for plotting? Tell us how many Chia plots you want and we will generate them for you to download or harvest from the cloud. No technical skills necessary! </p>
                </div>
            </div>
        </div>
    </section>

    <section class="features section">
        <div class="container">
            <div class="features-inner section-inner has-bottom-divider">
                <div class="features-wrap">
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('web_assets/images/feature-icon-01.svg') }}" alt="Feature 01">
                            </div>
                            <h4 class="feature-title mt-24">Completely Self Service</h4>
                            <p class="text-sm mb-0">Our services are completely automated which means you are in full control of the entire Plotting process and you never have to wait on a sales team or other human interaction.</p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('web_assets/images/feature-icon-02.svg') }}" alt="Feature 02">
                            </div>
                            <h4 class="feature-title mt-24">Multi-regional Plot download servers</h4>
                            <p class="text-sm mb-0">We have servers available all over the world to ensure you have the best connectivity when downloading your plots. There is always a server close to you.</p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('web_assets/images/feature-icon-03.svg') }}" alt="Feature 03">
                            </div>
                            <h4 class="feature-title mt-24">One month free hosting included</h4>
                            <p class="text-sm mb-0">Whether you buy 1 plot or 2500; we will host your plots an entire month for free! This ensures you have all the time you need to download your plots.</p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('web_assets/images/feature-icon-03.svg') }}" alt="Feature 03">
                            </div>
                            <h4 class="feature-title mt-24">Harvester hosting available</h4>
                            <p class="text-sm mb-0">Did you run out of harddisk storage space? Let us plot and harvest the plots directly for you using our Chia Cloud Hosting service.</p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('web_assets/images/feature-icon-03.svg') }}" alt="Feature 03">
                            </div>
                            <h4 class="feature-title mt-24">Free support included</h4>
                            <p class="text-sm mb-0">We have unlimited support available via our knowledge base, see the help icon in the bottom right. Support is ingrained in our company and both the CEO and CTO are available for any questions you might have at any time.</p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('web_assets/images/feature-icon-03.svg') }}" alt="Feature 03">
                            </div>
                            <h4 class="feature-title mt-24">One month free Harvesting hosting</h4>
                            <p class="text-sm mb-0">Want to harvest while you download the plots? The first month of our Chia Harvesting hosting is free right now so sign-up and send your plots to your harvester and download them while they are being farmed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section">
        <div class="container-md">
            <div class="pricing-inner section-inner">
                <div class="pricing-header text-center">
                    <h2 class="section-title mt-0">Unlimited for all</h2>
                    <p class="section-paragraph mb-0">13436 plots generated by 566 customers with an average of 24 plots per order, will yours be next?</p>
                </div>
                <div class="pricing-tables-wrap">
                    @foreach($products as $product)
                        <div class="pricing-table">
                        <div class="pricing-table-inner is-revealing">
                            <div class="pricing-table-main">
                                <div class="pricing-table-header pb-24">
                                    <div class="pricing-table-price">
                                        <span class="pricing-table-price-currency h2">$</span>
                                        <span class="pricing-table-price-amount h1">{{ $product->price }}</span>
                                        <span class="text-xs">/slot</span>
                                    </div>
                                </div>
                                <div class="pricing-table-features-title text-xs pt-24 pb-24">What you will get</div>
                                <ul class="pricing-table-features list-reset text-xs">
                                    <li>
                                        <span>{{ $product->description }}</span>
                                    </li>
                                </ul>
                                <div class="pricing-table-features-title text-xs pt-24 pb-24">
                                    <span class="pricing-table-price-currency h2">Slot: </span>
                                    <span class="pricing-table-price-amount h1"> {{ $product->slot }}</span>
                                </div>
                            </div>
                            <div class="pricing-table-cta mb-8">
                                @if($product->slot == 0)
                                    <button class="button button-primary button-shadow button-block" disabled>Sold out</button>
                                @else
                                    <a class="button button-primary button-shadow button-block" href="#">Pre order now</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
