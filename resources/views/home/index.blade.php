@extends('layouts.main')

@section('contents')
    <div class="container header-main-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 block-logo">
                <div>
                    <div id="block-sitebranding" class="margin-top-15 clearfix site-branding block block-system block-system-branding-block no-title">


                        <a href="/monte/" title="Home" rel="home" class="site-branding-logo padding-top-20">
                            <img src="/images/parla_horizontal.png" alt="Home" class="img-responsive">

                        </a>
                    </div>

                </div>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 header-right">
                <div class="header-right-inner">
                    Edição Número 000<br>
                    de 06/Fevereiro/2018 à 26/Fevereiro/2018

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=250" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=350" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=450" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=550" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=4505" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=4506" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/1000/750/?image=4507" alt="" class="img-responsive"></div>
                    <div class="swiper-slide"><img src="https://picsum.photos/300/200/?10" alt="">0</div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="col-md-3">
            <img src="https://picsum.photos/1000/750/?image=4505" alt="" class="img-responsive"><br>
            <img src="https://picsum.photos/1000/750/?image=2505" alt="" class="img-responsive"><br>
            <img src="https://picsum.photos/1000/750/?image=1505" alt="" class="img-responsive"><br>
        </div>
    </div>




    {{--

        <div class="slider">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <!-- Slider main container -->
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img src="/images/post-18.jpg"></div>
                                <div class="swiper-slide"><img src="/images/post-19.jpg"></div>
                                <div class="swiper-slide"><img src="/images/post-18.jpg"></div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    --}}










    <div class="articles">
        <div class="container">

            <div class="row">

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>

                <article class="col-md-4">
                    <div class="row">
                        <figure class="col-xs-12">
                            <a href="/post"><img class="img img-responsive article-img" src="https://picsum.photos/1000/750/?random" ></a>
                            <figcaption class="article-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <h3 class="article-title"><a href="/post">Your article title goes here</a></h3>
                    <span class="post-category ">Saúde</span><span class="post-divider">/</span><span class="post-created ">06 Fevereiro 2018</span>
                    {{--<h5 class="article-subtitle"><a href="/post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque turpis ut velit malesuada suscipit. </a></h5>--}}
                    <div class="article-intro" >
                        <p>
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor. Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor..
                        </p>
                    </div>
                    <a href="#" class="readmore btn btn-primary">Leia Mais</a>
                    <footer>
                        <span class="label label-default">alerj</span>
                        <span class="label label-default">tags</span>
                        <span class="label label-default">jornal</span>
                    </footer>
                </article>
            </div>
        </div>
    </div>



@stop
