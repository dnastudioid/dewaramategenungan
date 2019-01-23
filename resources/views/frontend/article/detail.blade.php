@extends('frontend.layouts.master')
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url(frontend/images/background/4.jpg)">
        <div class="auto-container">
            <h1>Detail Article</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Detail Article</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{URL::to('frontend/images/resource/news-4.jpg')}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <div class="post-info">Creative /Nov 26, 2017 / By Admin    </div>
                                <h2>Cheese and bacon roll</h2>
                                <div class="text">
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom lineLeverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User <a href="#">Generated content</a> in real-time will have multiple touchpoints for offshoring.</p>
                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the <a href="#">Information highway</a> will close the loop on focusing solely on hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs fromthe bottom line..</p>
                                    <blockquote>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate</blockquote>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a <a href="#">Streamlined</a> cloud solution. User generated content in urvival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved</p>
                                </div>
                                <div class="post-share-options clearfix">
                                    <div class="pull-left">
                                        <div class="share">Share</div>
                                    </div>
                                    <div class="pull-right">
                                        <ul class="social-icon-two">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Comments Area-->
                    <div class="comments-area">
                        <div class="group-title"><h2>02 Comments</h2></div>
                        
                        <!--Comment Box-->
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix"><strong>John Martin</strong><div class="comment-time">26 Nov, 2017 At 8:30am</div></div>
                                    <div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward</div>
                                    <a class="comment-reply" href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        
                        <!--Comment Box-->
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix"><strong>Daniel Vandaft</strong><div class="comment-time">26 Nov, 2017 At 8:30am</div></div>
                                    <div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward</div>
                                    <a class="comment-reply" href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--End Comments Area-->
                    
                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="group-title"><h2>Post A Comment</h2></div>
                        <!--Comment Form-->
                        <form method="post" action="https://expert-themes.com/html/shangrila/blog.html">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email id" required>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Comments"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send</button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                    <!--End Comment Form --> 
                    
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="https://expert-themes.com/html/shangrila/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="blog-cat style-two">
                                <li><a href="#">Pavlova <span>(6)</span></a></li>
                                <li><a href="#">Prawn cocktail <span>(4)</span></a></li>
                                <li><a href="#">Tim Tam <span>(5)</span></a></li>
                                <li><a href="#">Dagwood dog<span>(8)</span></a></li>
                                <li><a href="#">Sausage rolls <span>(4)</span></a></li>
                            </ul>
                        </div>
                        
                        <!--News-->
                        <div class="sidebar-widget recent-news">
                            <div class="sidebar-title">
                                <h2>Recent News</h2>
                            </div>
                            
                            <!--News Widget-->
                            <div class="news-widget">
                                <div class="text">
                                    <a href="#">Sausage meat wrapped in pastry and oven-baked</a>
                                </div>
                                <span class="days">26 Nov 2017</span>
                            </div>
                            
                            <!--News Widget-->
                            <div class="news-widget">
                                <div class="text">
                                    <a href="#">Pyrmont Point Hotel, 59 Harris St</a>
                                </div>
                                <span class="days">26 Nov 2017</span>
                            </div>
                            
                            <!--News Widget-->
                            <div class="news-widget">
                                <div class="text">
                                    <a href="#">Founded as a charity biscuit, it used to be handed out by Salvation Army</a>
                                </div>
                                <span class="days">26 Nov 2017</span>
                            </div>
                            
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title">
                                <h2>Tags</h2>
                            </div>
                            <a href="#">fresh</a>
                            <a href="#">seafood</a>
                            <a href="#">chef</a>
                            <a href="#">Snap</a>
                            <a href="#">Masterclass</a>
                            <a href="#">Food</a>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
@stop