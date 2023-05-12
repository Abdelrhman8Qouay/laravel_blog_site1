
{{-- app Layout  --}}
@extends('layouts.app')

@section('titlePage', 'Home')

@section('content')
    <div class="home">
        <div class="container">

            {{-- Head Of Home --}}
            <div class="head_home bg-apple text-white">
                {{-- header Layout  --}}
                @include('layouts.header')

                <hr class="my-3">
                <h1>THE HOME</h1>
                <hr class="my-3">

                <div class="row">
                    <div class="col-md-6">
                        <a href="#">
                            <div class="bigCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                    <div class="desc">
                                        Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 colCards">
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            {{-- Topics And More & Trending Section --}}
            <div class="end_comment_part my-5 mx-0 row justify-content-between">
                <div class="rest_run col-md-8 order-1">
                    <div class="top_news_part">
                        <h2 class="titlePart">Trending on Blog</h2>
                        <div class="content">
                            <a href="#">
                                <div class="bigCard">
                                    <div class="image">
                                        <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="body">
                                        <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                        <div class="date">mar 21, 2018</div>
                                        <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                        <div class="desc">
                                            Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bigCard">
                                    <div class="image">
                                        <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="body">
                                        <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                        <div class="date">mar 21, 2018</div>
                                        <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                        <div class="desc">
                                            Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bigCard">
                                    <div class="image">
                                        <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="body">
                                        <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                        <div class="date">mar 21, 2018</div>
                                        <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                        <div class="desc">
                                            Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bigCard">
                                    <div class="image">
                                        <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="body">
                                        <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                        <div class="date">mar 21, 2018</div>
                                        <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                        <div class="desc">
                                            Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bigCard">
                                    <div class="image">
                                        <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="body">
                                        <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                        <div class="date">mar 21, 2018</div>
                                        <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                        <div class="desc">
                                            Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bigCard">
                                    <div class="image">
                                        <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="body">
                                        <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                        <div class="date">mar 21, 2018</div>
                                        <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                        <div class="desc">
                                            Membuat design tidak hanya tentang mencari tahu kebutuhan user dan bisnis tetapi juga mencari tahu apa saja batasan nya, sehingga design yang dibuat bisa di develop.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="comments col-md-4">
                    <div class="discover mb-3">
                        <h2 class="titlePart">Discover more of what matters to you</h2>
                        <ul>
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Data Science</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Self Improvement</a></li>
                            <li><a href="#">Writing</a></li>
                            <li><a href="#">Relationships</a></li>
                            <li><a href="#">Machine Learning</a></li>
                            <li><a href="#">Productivity</a></li>
                            <li><a href="#">Politics</a></li>
                        </ul>
                        <a class="quickBtn" href="#">See more topics</a>
                    </div>
                    <div class="get mb-3">
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Status</a></li>
                            <li><a href="#">Writers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Text to speech</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            {{-- <div class="cats_part my-5">
                <h2 class="titlePart">CATEGORIES</h2>
                <div class="d-flex flex-wrap justify-content-between gap-5">
                    <a href="#">
                        <div class="catCard">
                            <div class="image">
                                <img src="https://www.dwinawan.com/blog/tutorial1.png" class="card-img-top" alt="">
                            </div>
                            <div class="body">
                                <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="catCard">
                            <div class="image">
                                <img src="https://www.dwinawan.com/blog/tutorial1.png" class="card-img-top" alt="">
                            </div>
                            <div class="body">
                                <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="catCard">
                            <div class="image">
                                <img src="https://www.dwinawan.com/blog/tutorial1.png" class="card-img-top" alt="">
                            </div>
                            <div class="body">
                                <div class="title">De</div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="catCard">
                            <div class="image">
                                <img src="https://www.dwinawan.com/blog/tutorial1.png" class="card-img-top" alt="">
                            </div>
                            <div class="body">
                                <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="catCard">
                            <div class="image">
                                <img src="https://www.dwinawan.com/blog/tutorial1.png" class="card-img-top" alt="">
                            </div>
                            <div class="body">
                                <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>

        {{-- Middle Section --}}
        <div class="adv bg-apple text-white my-5" style="min-height: 350px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">Content Left</div>
                    <div class="col-md-6">Content Right</div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr class="my-5">

            {{-- Comments & Others of Blogs Section --}}
            <div class="end_comment_part my-5 mx-0 row justify-content-between">
                <div class="rest_run col-md-8">
                    <div class="col-md-6 blogs_section">
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="author"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt="pers"> Felicia Wuin UX Collective</div>
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a href="#">
                            <div class="smCard">
                                <div class="image">
                                    <img src="https://www.dwinawan.com/blog/thumb_article40.jpg" class="card-img-top" alt="">
                                </div>
                                <div class="body">
                                    <div class="date">mar 21, 2018</div>
                                    <div class="title">Tentang batasan yang harus dipahami saat membuat design</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="comments col-md-4">
                    <div class="comments_section">
                        <h2 class="titlePart">Comments Section</h2>
                        <div class="box">
                            <div class="image"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt=""></div>
                            <div class="content">
                                <div class="date">Mars 15, 2020</div>
                                <div class="talk">you got this is true</div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt=""></div>
                            <div class="content">
                                <div class="date">Mars 15, 2020</div>
                                <div class="talk">you got this is true</div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt=""></div>
                            <div class="content">
                                <div class="date">Mars 15, 2020</div>
                                <div class="talk">you got this is true</div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt=""></div>
                            <div class="content">
                                <div class="date">Mars 15, 2020</div>
                                <div class="talk">you got this is true</div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image"><img src="https://miro.medium.com/v2/resize:fill:40:40/1*mDhF9X4VO0rCrJvWFatyxg.png" alt=""></div>
                            <div class="content">
                                <div class="date">Mars 15, 2020</div>
                                <div class="talk">you got this is true</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">
        </div>

        <div class="container">
            <div class="tag_comp d-flex justify-content-between overflow-hidden my-5 bg-transparent text-muted">
                <div class="comp"><ion-icon name="logo-facebook"></ion-icon></div>
                <div class="comp"><ion-icon name="logo-amazon"></ion-icon></div>
                <div class="comp"><ion-icon name="logo-github"></ion-icon></div>
                <div class="comp"><ion-icon name="logo-twitter"></ion-icon></div>
            </div>
        </div>
    </div>
@endsection
