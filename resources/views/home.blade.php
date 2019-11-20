@extends('layouts.app')

@section('content')

    <div class="container">
        {{-- Block slider --}}
        <section id="block-front-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/sliders/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/sliders/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/sliders/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>


        <div class="row">
            <div class="col-sm-9">
                <section id="block-front-latest-news" class="block-content">
                    <div class="title-block">
                        <span class="title">
                            Schools
                            {{-- <span class="corner"></span> --}}
                            <svg>
                                <polygon id="XMLID_16_" points="0,0 0,30 30,30 "/>
                            </svg>
                        </span>
                        <a href="#" class="show-all">Show all</a>
                        
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="big-article">
                                    <a href="#">
                                        <img src="/images/contents/1.jpg" alt="..."/>
                                        <footer>
                                            <h4>lorem title testing for website</h4>
                                        </footer>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="small-article">
                                            <a href="#">
                                                <img src="/images/contents/1.jpg" alt="..."/>
                                                <footer>
                                                    <h6>lorem title testing for website</h6>
                                                </footer>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col-sm-3">

            </div>
        </div>

    </div>

@endsection
