@extends('template.tmpitcg')

@section('title', 'Accueil')


@section('bannerpage')
@show

@section('datacontent')


    <!--=====================================-->
    <!--============== Banner ===============-->
    <!--=====================================-->

    <div class="sub-banner-con darkBlueBg col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="sub-banner-text darkBlueBg regular-font col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <h1>Our <span class="light-font"> Business</span> Partners</h1>
                        </div>
                        <!--sub-banner-text-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <div class="sub-banner-img subbannerabout col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="{{asset('assets/img/banners/about-banner.jpg')}}">
            </div>
            <!--row-->
        </div>
        <!--col-lg-12-->
    </div>



    <!--=====================================-->
        <!--============== Partners =============-->
        <!--=====================================-->
        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="row darkBlueBg">
                    <div class=" text-center" style="height:auto;padding-top: 2%;padding-bottom: 2%;">
                        {{ $partner->links('pagination::bootstrap-4') }}
                    </div>


                    <!--================================================-->
                    <!--============== Partner Services Liste  ===============-->
                    <!--================================================-->
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row text-center" style="margin-right: 1%">

                                @foreach ($partner as $partnerlst)

                                    <aside class="services-plans col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <figure>
                                            @if ($partnerlst->backimgpartner !=Null)
                                                <img src="{{asset('assets/img/partners/')}}/{{$partnerlst->backimgpartner}}" alt="" />
                                            @else
                                                <img src="{{asset('assets/img/partners/services-img1.jpg')}}" alt="" />
                                            @endif
                                        </figure>
                                        <div class="service-innerbox greyBg">
                                            <a href="https://{{$partnerlst->linkpartner}}" target="_blank">
                                                <div class="icon-holder darkBlueBg" data-effect="helix">
                                                    <span><img src="{{asset('assets/img/partners')}}/{{$partnerlst->imgpartner}}" alt="invest-img2" /></span>
                                                </div>
                                            </a>
                                            <h4 style="font-size:90%">{{$partnerlst->titlepartner}}</h4>
                                            <p>Services</p>
                                            <p style="font-size: 100%">
                                                {{Str::limit($partnerlst->servicepartner, 20, ' (...)');}}
                                            </p>
                                            <!--service-innerbox-->
                                        </div>
                                        <!--services-plans--><br>
                                    </aside>

                                @endforeach
                                <!--row-->
                            </div>
                            <!--container-->
                        </div>
                        <!--paddingBox-->
                    </div>

                    <div class="spacer"></div>

                    <div class="darkBlueBg text-center" style="height:padding-bottom: 2%;">
                        {{ $partner->links('pagination::bootstrap-4') }}
                    </div>
                </div>

                <!--container-->
            </div>
            <!--col-lg-12-->
        </div>
        <!--main-contentbox-->




    </div>

@endsection
