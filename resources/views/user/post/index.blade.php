@extends('user.main')

@section('breadcrumb')
<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Post</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Post</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@stop

@section('content')
<div class="col-lg-8">
    <!-- post single -->
    <div class="post post-single">
        <!-- post header -->
        <div class="post-header">
            <h1 class="title mt-0 mb-3">3 Easy Ways To Make Your iPhone Faster</h1>
            <ul class="meta list-inline mb-0">
                <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author">Katen Doe</a></li>
                <li class="list-inline-item"><a href="#">Trending</a></li>
                <li class="list-inline-item">29 March 2021</li>
            </ul>
        </div>
        <!-- featured image -->
        <div class="featured-image">
            <img src="images/posts/featured-lg.jpg" alt="post-title">
        </div>
        <!-- post content -->
        <div class="post-content clearfix">
            <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same <a href="#">vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>

            <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p>

            <figure class="figure">
                <img src="images/posts/post-lg-2.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
            </figure>

            <p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable.</p> 
            
            <img src="images/posts/single-sm-1.jpg" class="rounded alignleft" alt="...">
            <p>One could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>

            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing <a href="#">European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>

            <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>

            <h4>I should be incapable of drawing a single stroke</h4>

            <ul>
                <li>How about if I sleep a little bit</li>
                <li>A collection of textile samples lay spread out</li>
                <li>His many legs, pitifully thin compared with</li>
                <li>He lay on his armour-like back</li>
                <li> Gregor Samsa woke from troubled dreams</li>
            </ul>

            <p>To an English person, it will seem like simplified <a href="#">English</a>, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
        </div>
        <!-- post bottom section -->
        <div class="post-bottom">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <!-- tags -->
                    <a href="#" class="tag">#Trending</a>
                    <a href="#" class="tag">#Video</a>
                    <a href="#" class="tag">#Featured</a>
                </div>
                <div class="col-md-6 col-12">
                    <!-- social icons -->
                    <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="spacer" data-height="50" style="height: 50px;"></div>

    <div class="about-author padding-30 rounded">
        <div class="thumb">
            <img src="images/other/avatar-about.png" alt="Katen Doe">
        </div>
        <div class="details">
            <h4 class="name"><a href="#">Katen Doe</a></h4>
            <p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
            <!-- social icons -->
            <ul class="social-icons list-unstyled list-inline mb-0">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="spacer" data-height="50" style="height: 50px;"></div>
    <!-- section header -->
    <div class="section-header">
        <h3 class="section-title">Comments (3)</h3>
        <img src="images/wave.svg" class="wave" alt="wave">
    </div>
    <!-- post comments -->
    <div class="comments bordered padding-30 rounded">
        <ul class="comments">
            <!-- comment item -->
            <li class="comment rounded">
                <div class="thumb">
                    <img src="images/other/comment-1.png" alt="John Doe">
                </div>
                <div class="details">
                    <h4 class="name"><a href="#">John Doe</a></h4>
                    <span class="date">Jan 08, 2021 14:41 pm</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut tortor fringilla cursus sed quis odio.</p>
                    <a href="#" class="btn btn-default btn-sm">Reply</a>
                </div>
            </li>
            <!-- comment item -->
            <li class="comment child rounded">
                <div class="thumb">
                    <img src="images/other/comment-2.png" alt="John Doe">
                </div>
                <div class="details">
                    <h4 class="name"><a href="#">Helen Doe</a></h4>
                    <span class="date">Jan 08, 2021 14:41 pm</span>
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                    <a href="#" class="btn btn-default btn-sm">Reply</a>
                </div>
            </li>
            <!-- comment item -->
            <li class="comment rounded">
                <div class="thumb">
                    <img src="images/other/comment-3.png" alt="John Doe">
                </div>
                <div class="details">
                    <h4 class="name"><a href="#">Anna Doe</a></h4>
                    <span class="date">Jan 08, 2021 14:41 pm</span>
                    <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                    <a href="#" class="btn btn-default btn-sm">Reply</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="spacer" data-height="50" style="height: 50px;"></div>
    <!-- section header -->
    <div class="section-header">
        <h3 class="section-title">Leave Comment</h3>
        <img src="images/wave.svg" class="wave" alt="wave">
    </div>
    <!-- comment form -->
    <div class="comment-form rounded bordered padding-30">
        <form id="comment-form" class="comment-form" method="post">
            <div class="messages"></div>
            <div class="row">
                <div class="column col-md-12">
                    <!-- Comment textarea -->
                    <div class="form-group">
                        <textarea name="InputComment" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
                    </div>
                </div>
                <div class="column col-md-6">
                    <!-- Email input -->
                    <div class="form-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required">
                    </div>
                </div>
                <div class="column col-md-6">
                    <!-- Name input -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Website" required="required">
                    </div>
                </div>
                <div class="column col-md-12">
                    <!-- Email input -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your name" required="required">
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
        </form>
    </div>
</div>
@stop