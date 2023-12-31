@extends('user.main')

@section('breadcrumb')
<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Category post</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category post</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@stop

@section('content')
<div class="col-lg-8">
    <div class="row gy-4">
        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                    <span class="post-format">
                        <i class="icon-picture"></i>
                    </span>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-1.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Become Better With Building In 1 Month</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Inspiration</a>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-2.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Most Important Thing You Need To Know About Swim</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Fashion</a>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-3.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">The Secrets To Finding Class Tools For Your Dress</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                    <span class="post-format">
                        <i class="icon-camrecorder"></i>
                    </span>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-4.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How I Improved My Fashion Style In One Day</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Trending</a>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-5.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Fashion</a>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-6.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Wondering How To Make Your Hair Style Rock?</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">How To</a>
                    <span class="post-format">
                        <i class="icon-picture"></i>
                    </span>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-7.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Make More Construction By Doing Less</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Culture</a>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-8.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Inspiration</a>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-9.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <!-- post -->
            <div class="post post-grid rounded bordered">
                <div class="thumb top-rounded">
                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                    <span class="post-format">
                        <i class="icon-earphones"></i>
                    </span>
                    <a href="blog-single.html">
                        <div class="inner">
                            <img src="images/posts/post-md-10.jpg" alt="post-title">
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Now You Can Have Your Thoughts Done Safely</a></h5>
                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                </div>
                <div class="post-bottom clearfix d-flex align-items-center">
                    <div class="social-share me-auto">
                        <button class="toggle-button icon-share"></button>
                        <ul class="icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="more-button float-end">
                        <a href="blog-single.html"><span class="icon-options"></span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
</div>
@stop