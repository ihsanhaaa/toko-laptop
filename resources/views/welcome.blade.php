@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="header-height"></div>

    <section class="hero-section hero-3 padding">
        <div class="support-hero"></div>
        <div class="container">
            <div class="hero-wrap">
                <div class="hero-content text-center">
                    <h1>Get Help With The <br> Advanced Support!</h1>
                    <p>We provide marketing services to startups and small businesses to looking for a partner of their <br>
                        digital media, design & development and communications requirents.</p>
                </div>
                <div class="support-search text-center">
                    <button type="submit" class="default-btn btn-pink">Search Now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="promo-section promo-3 bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="promo-content bg-red wow fadeInUp" data-wow-delay="300ms">
                        <i class="ti-files color-red"></i>
                        <h3>Help and Documentation</h3>
                        <p>We provide marketing services to startups and small businesses to looking for a partner of their
                            digital media.</p>
                        <a href="#" class="read-more color-red">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="promo-content bg-blue wow fadeInUp" data-wow-delay="400ms">
                        <i class="ti-comments color-blue"></i>
                        <h3>Community and Support</h3>
                        <p>We provide marketing services to startups and small businesses to looking for a partner of their
                            digital media.</p>
                        <a href="#" class="read-more color-blue">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="promo-content bg-yellow wow fadeInUp" data-wow-delay="500ms">
                        <i class="ti-layers color-yellow"></i>
                        <h3>Developer and Resources</h3>
                        <p>We provide marketing services to startups and small businesses to looking for a partner of their
                            digital media.</p>
                        <a href="#" class="read-more color-yellow">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section content-4 bd-bottom padding pos-rel">
        <div class="anim-elements">
            <div class="anim-element"></div>
            <div class="anim-element"></div>
            <div class="anim-element"></div>
            <div class="anim-element"></div>
            <div class="anim-element"></div>
        </div>
        <div class="container">
            <div class="row content-wrap">
                <div class="col-lg-6 sm-padding">
                    <div class="content-info wow fadeInLeft" data-wow-delay="300ms">
                        <h2>Inovative Affordable Customer <br> Support For Your Needs!</h2>
                        <p>We provide marketing services to startups and small businesses to looking for a partner of their
                            digital media, design &amp; development, lead generation and communications requirents.</p>
                        <a href="#" class="default-btn btn-pink">Submit a Ticket</a>
                    </div>
                </div>
                <div class="col-lg-6 img-wrap sm-padding wow fadeInRight" data-wow-delay="300ms">
                    <img src="img/support-moc.jpg" alt="content-img">
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section cta-2 padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 xs-padding">
                    <div class="cta-content">
                        <h2>Can't Find What You're Looking For? <br> We're Here To Help You!</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cta-content text-right">
                        <a href="#" class="default-btn btn-pink">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
