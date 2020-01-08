@extends('layouts.app')

@section('content')

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
                    <img src="/images/sliders/6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/sliders/5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/sliders/4.jpg" class="d-block w-100" alt="...">
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
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <section id="block-front-latest-news" class="block-content">
                    <div class="contents">
                        <ul class="nav nav-tabs" id="navtab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link show active" href="#introduction" role="tab" data-toggle="tab" aria-selected="true">Introduction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#history" role="tab" data-toggle="tab" aria-selected="false">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission_vision" role="tab" data-toggle="tab" aria-selected="false">Mission & Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#structure" role="tab" data-toggle="tab" aria-selected="false">Organization Chart</a>
                            </li>
                        </ul>
                        <div class="clearfix"><br></div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- block introduction -->
                            <div role="tabpanel" class="tab-pane fade show active" id="introduction">
                                <h3>Introduction</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h3>A Global Day of Action</h3>
                                <div class="small-article">
                                    <img src="/images/contents/about-us/7.jpg" class="thumbnail" alt="..."/>
                                </div>
                                <br>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- end of block introduction -->
                            <!-- block history -->
                            <div role="tabpanel" class="tab-pane fade" id="history">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3>History</h3>
                                    </div>
                                    <div class="col-sm-7">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="small-article">
                                            <img src="/images/contents/about-us/8.jpg" class="thumbnail" alt="..."/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h3>Occupation</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                        <div class="small-article">
                                            <img src="/images/contents/about-us/9.jpg" class="thumbnail" alt="..."/>
                                        </div>
                                        <br>
                                        <h3>Our Children</h3>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                        <div class="small-article">
                                            <img src="/images/contents/about-us/11.jpg" class="thumbnail" alt="..."/>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div><!-- end of block hostory -->
                            <!-- block mission & vision -->
                            <div role="tabpanel" class="tab-pane fade" id="mission_vision">
                                <h3>Mission</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                <h3>Vision</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                            </div><!-- end of block mission & vision -->
                            <!-- block organization chart -->
                            <div role="tabpanel" class="tab-pane fade" id="structure">
                                <h3>Organizational Chart</h3>
                                <br>
                                <div class="small-article">
                                    <img src="/images/contents/about-us/structure.jpg" class="thumbnail" alt="..."/>
                                    <footer>
                                        <small>Update on 08, March, 2019</small>
                                    </footer>
                                </div>

                            </div><!-- end of block organization chart -->
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right');
            </div>
        </div>
    </div>
@endsection
