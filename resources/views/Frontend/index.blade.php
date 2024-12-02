@extends('Frontend.layout.front_end_layouts')

@section('content')
    <!-- Begin site-content
        ================================================== -->
    <div class="site-content">
        <div class="container">
            <!-- SLIDER -->

            <div class="row">
                <div id="main-slider" class="carousel slide margb-2 col-lg-7" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slider" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <a href="https://themepush.com/demo-mediumish/mediumish-is-gutenberg-ready/">
                                <img width="1024" height="629"
                                    src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2019/05/1-e1679105616868-1024x629.jpg"
                                    class="d-block wp-post-image" alt="The 25 best European city breaks for 2023 and beyond"
                                    data-no-lazy="1" decoding="async" srcset=""
                                    sizes="(max-width: 1024px) 100vw, 1024px" />
                                <div class="carousel-caption d-flex h-100 align-items-center">
                                    <h3 class="carousel-excerpt d-block">
                                        <span class="title d-block">The 25 best European city breaks for 2023 and
                                            beyond</span>
                                        <span class="fontlight d-block hidden-md-down">Bucharest&#8217;s history alternated
                                            periods of
                                            development and decline from the early settlements
                                            in&nbsp;antiquity&nbsp;until its consolidation as the
                                            national capital of Romania late in the 19th century.
                                            First mentioned as the &#8220;Citadel&nbsp;of
                                            București&#8221; in 1459,...</span>
                                        <span class="btn btn-simple">Read More</span>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a href="#main-slider" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="editor col-lg-5">
                    <div class="site-section" bis_skin_checked="1">
                        <div class="container" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">

                                <div bis_skin_checked="1">
                                    <div class="section-title" bis_skin_checked="1">
                                        <h2>Trending</h2>
                                    </div>

                                    <div class="trend-entry d-flex" bis_skin_checked="1">
                                        <div class="number align-self-start" bis_skin_checked="1">01.</div>
                                        <div class="trend-contents" bis_skin_checked="1">
                                            <h2 class="card-title"><a href="blog-single.html">News Needs to Meet Its
                                                    Audiences Where They Are</a></h2>
                                            <div class="post-meta" bis_skin_checked="1">
                                                <span class="d-block"><a href="#">Dave Rogers</a> in <a
                                                        href="#">News</a></span>
                                                <span class="date-read">Jun 14 <span class="mx-1">•</span> 3 min read
                                                    <span class="icon-star2"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <p>
                                        <a href="#" class="more">See All Trends <span
                                                class="icon-keyboard_arrow_right"></span></a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($categories as $index=>$category)
            @if ($index == 0)
            <div class="section-title listpostsbycats">
                <h2 class="d-flex justify-content-between align-items-center">
                    <span>{{ $category->title }} &nbsp;</span>
                    <a class="d-block morefromcategory" href="https://themepush.com/demo-mediumish/category/life/">
                        &nbsp; <i class="fa fa-angle-right"></i>
                    </a>
                </h2>
            </div>

            <div class="row listrecent listpostsbycats  thiscatstyle1 post-style-1" bis_skin_checked="1">


                <div class="col-md-12 col-lg-4 grid-item" id="post-55" bis_skin_checked="1">
                    <div class="card post poststyle1big h-100" bis_skin_checked="1"><a
                            href="https://themepush.com/demo-mediumish/how-to-be-more-confident-in-public/"><img
                                class="poststyle1big-img"
                                src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2020/10/max-NQZonbcNon8-unsplash.jpg"></a>
                        <div class="card-block d-flex flex-column" bis_skin_checked="1">
                            <h2 class="card-title"><a
                                    href="https://themepush.com/demo-mediumish/how-to-be-more-confident-in-public/">Handicrafts:
                                    A Precious Cultural Heritage</a></h2>
                            <span class="card-text d-block">Handicrafts, as a form of art, have an inherent quality of
                                capturing the cultural essence of a region. They offer a tangible connection to the past,
                                preserving traditional crafts...</span>
                            <div class="metafooter mt-auto" bis_skin_checked="1">
                                <div class="wrapfooter" bis_skin_checked="1">
                                    <span class="meta-footer-thumb">
                                        <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img
                                                alt=""
                                                src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&amp;d=mm&amp;r=g"
                                                srcset="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&amp;d=mm&amp;r=g 2x"
                                                class="avatar avatar-40 photo author-thumb" height="40" width="40"
                                                decoding="async"></a>
                                    </span>
                                    <span class="author-meta">
                                        <span class="post-name"><a
                                                href="https://themepush.com/demo-mediumish/author/wowthemesnet/">Sal</a></span><br>
                                        <span class="post-date">May 22, 2023</span>
                                        <span class="dot"></span>
                                        <span class="readingtime">1 min read</span>
                                    </span>
                                    <span class="post-read-more">
                                        <a href="https://themepush.com/demo-mediumish/how-to-be-more-confident-in-public/"
                                            title="Read Story">
                                            <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
                                                <path
                                                    d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-8" bis_skin_checked="1">
                    <div class="row h-100" bis_skin_checked="1">
                        @foreach ($otherProducts as $pp)

                        <div class="col-md-6 col-lg-6 grid-item"  bis_skin_checked="1">
                            <div class="card post h-100" bis_skin_checked="1"><a
                                    href="https://themepush.com/demo-mediumish/how-to-be-more-confident-in-public/"><img
                                        class="poststyle1-img"
                                        src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2020/10/max-NQZonbcNon8-unsplash.jpg"></a>
                                <div class="card-block d-flex flex-column" bis_skin_checked="1">
                                    <h2 class="card-title"><a
                                            href="https://themepush.com/demo-mediumish/how-to-be-more-confident-in-public/">Handicrafts:
                                            A Precious Cultural Heritage</a></h2>
                                    <div class="metafooter mt-auto pt-0" bis_skin_checked="1">
                                        <div class="wrapfooter" bis_skin_checked="1">
                                            <span class="meta-footer-thumb">
                                                <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img
                                                        alt=""
                                                        src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=28&amp;d=mm&amp;r=g"
                                                        srcset="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=56&amp;d=mm&amp;r=g 2x"
                                                        class="avatar avatar-28 photo author-thumb" height="28"
                                                        width="28" decoding="async"></a>
                                            </span>
                                            <span class="author-meta">
                                                <span class="post-name"><a
                                                        href="https://themepush.com/demo-mediumish/author/wowthemesnet/">Sal</a></span><br>
                                                <span class="post-date">May 22, 2023</span>
                                                <span class="dot"></span>
                                                <span class="readingtime">1 min read</span>
                                            </span>
                                            <span class="post-read-more">
                                                <a href="https://themepush.com/demo-mediumish/how-to-be-more-confident-in-public/"
                                                    title="">
                                                    <svg class="svgIcon-use" width="25" height="25"
                                                        viewBox="0 0 25 25">
                                                        <path
                                                            d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                            fill-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="clearfix" bis_skin_checked="1"></div>
            </div>
            @else


                        <div class="section-title listpostsbycats">
                            <h2 class="d-flex justify-content-between align-items-center">
                                <span>{{ $category->title }} &nbsp;</span>
                                <a class="d-block morefromcategory" href="https://themepush.com/demo-mediumish/category/social/">
                                    &nbsp; <i class="fa fa-angle-right"></i>
                                </a>
                            </h2>
                        </div>
                        <section class="featured-posts listpostsbycats post-style-2">
                            <div class="row listfeaturedtag h-100">
                                <div class="col-md-6 mb-30">
                                    <div class="card post_card_tall h-100" id="post-165">
                                        <div class="row h-100">
                                            <div class="col-lg-5 wrapthumbnail">
                                                <a class="d-block h-100"
                                                    href="https://themepush.com/demo-mediumish/how-to-maximize-flexibility/"><img
                                                        src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2020/10/liliya-grek-tGB6ELI22ME-unsplash.jpg" /></a>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="card-block d-flex flex-column h-100">
                                                    <h2 class="card-title">
                                                        <a href="https://themepush.com/demo-mediumish/how-to-maximize-flexibility/">Small
                                                            businesses often
                                                            can spot and react more
                                                            quickly to market trends</a>
                                                    </h2>
                                                    <span class="card-text d-block">For small businesses, it’s a thin line between
                                                        success
                                                        and failure. Flexibility is key. This ability to respond
                                                        swiftly...</span>
                                                    <div class="metafooter mt-auto">
                                                        <div class="wrapfooter">
                                                            <span class="meta-footer-thumb">
                                                                <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img
                                                                        alt=""
                                                                        src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g"
                                                                        srcset="
                                          https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x
                                        "
                                                                        class="avatar avatar-40 photo author-thumb" height="40"
                                                                        width="40" decoding="async" /></a>
                                                            </span>
                                                            <span class="author-meta">
                                                                <span class="post-name"><a
                                                                        href="https://themepush.com/demo-mediumish/author/wowthemesnet/">Sal</a></span><br />
                                                                <span class="post-date">Oct 8, 2020</span>
                                                                <span class="dot"></span>
                                                                <span class="readingtime">1 min read</span>
                                                            </span>
                                                            <span class="post-read-more">
                                                                <a href="https://themepush.com/demo-mediumish/how-to-maximize-flexibility/"
                                                                    title="">
                                                                    <svg class="svgIcon-use" width="25" height="25"
                                                                        viewBox="0 0 25 25">
                                                                        <path
                                                                            d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
            @endif



            @endforeach

            <!-- POSTS BY CATEGORIES -->
            <div class="section-title listpostsbycats">
                <h2 class="d-flex justify-content-between align-items-center">
                    <span>creativity &nbsp;</span>
                    <a class="d-block morefromcategory" href="https://themepush.com/demo-mediumish/category/creativity/">
                        &nbsp; <i class="fa fa-angle-right"></i>
                    </a>
                </h2>
            </div>
            <section class="post-style-4 listpostsbycats">
                <div class="row h-100">
                    <div class="col-md-3 mb-30">
                        <div class="card post postbox_default h-100">
                            <a class="postbox_default_thumbnail"
                                href="https://themepush.com/demo-mediumish/encourage-a-love-of-reading-during-national-family-literacy-month/"
                                alt="Encourage a Love of Reading During National Family Literacy Month"><img
                                    width="700" height="1049"
                                    src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2019/10/preillumination-seth-cNlQpTstCK8-unsplash.jpg"
                                    class="attachment-medium_large size-medium_large wp-post-image" alt=""
                                    decoding="async"
                                    srcset="
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2019/10/preillumination-seth-cNlQpTstCK8-unsplash.jpg          700w,
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2019/10/preillumination-seth-cNlQpTstCK8-unsplash-227x340.jpg  227w,
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2019/10/preillumination-seth-cNlQpTstCK8-unsplash-683x1024.jpg 683w
                "
                                    sizes="(max-width: 700px) 100vw, 700px" /></a>
                            <div class="card-block d-flex flex-column">
                                <h2 class="card-title">
                                    <a
                                        href="https://themepush.com/demo-mediumish/encourage-a-love-of-reading-during-national-family-literacy-month/">Encourage
                                        a Love of Reading During National Family
                                        Literacy Month</a>
                                </h2>
                                <span class="card-text">For many parents, it&#8217;s a struggle to get kids to read
                                    outside of the classroom, but November is the perfect
                                    time...</span>
                                <div class="metafooter mt-auto">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img
                                                    alt=""
                                                    src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g"
                                                    srcset="
                          https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x
                        "
                                                    class="avatar avatar-40 photo author-thumb" height="40"
                                                    width="40" decoding="async" /></a>
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"><a
                                                    href="https://themepush.com/demo-mediumish/author/wowthemesnet/">Sal</a></span><br />
                                            <span class="post-date">Oct 8, 2019</span>
                                            <span class="dot"></span>
                                            <span class="readingtime">1 min read</span>
                                        </span>
                                        <span class="post-read-more">
                                            <a href="https://themepush.com/demo-mediumish/encourage-a-love-of-reading-during-national-family-literacy-month/"
                                                title="Read Story">
                                                <svg class="svgIcon-use" width="25" height="25"
                                                    viewBox="0 0 25 25">
                                                    <path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="section-title listpostsbycats">
                <h2 class="d-flex justify-content-between align-items-center">
                    <span>technology &nbsp;</span>
                    <a class="d-block morefromcategory" href="https://themepush.com/demo-mediumish/category/technology/">
                        &nbsp; <i class="fa fa-angle-right"></i>
                    </a>
                </h2>
            </div>
            <section class="post-style-5 listpostsbycats">
                <div class="row h-100">
                    <div class="col-md-4 mb-30">
                        <div class="card post_card_tall h-100" id="post-41">
                            <div class="row h-100">
                                <div class="col-lg-5 wrapthumbnail">
                                    <a class="d-block h-100"
                                        href="https://themepush.com/demo-mediumish/food-fuel-and-finance-the-3fs-of-economics/"><img
                                            src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-08-11-2017_15-16-28-768x384.jpg" /></a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-block d-flex flex-column h-100">
                                        <h2 class="card-title">
                                            <a
                                                href="https://themepush.com/demo-mediumish/food-fuel-and-finance-the-3fs-of-economics/">Food,
                                                Fuel, and Finance … The 3Fs of Economics</a>
                                        </h2>
                                        <span class="card-text d-block">Nearly half of U.S. high school students say
                                            they do
                                            not know how to establish good credit and more...</span>
                                        <div class="metafooter mt-auto">
                                            <div class="wrapfooter">
                                                <span class="meta-footer-thumb">
                                                    <a href="https://themepush.com/demo-mediumish/author/sununderthesky/"><img
                                                            alt=""
                                                            src="https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=40&#038;d=mm&#038;r=g"
                                                            srcset="
                              https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=80&#038;d=mm&#038;r=g 2x
                            "
                                                            class="avatar avatar-40 photo author-thumb" height="40"
                                                            width="40" decoding="async" /></a>
                                                </span>
                                                <span class="author-meta">
                                                    <span class="post-name"><a
                                                            href="https://themepush.com/demo-mediumish/author/sununderthesky/">John
                                                            Smith</a></span><br />
                                                    <span class="post-date">Oct 7, 2020</span>
                                                    <span class="dot"></span>
                                                    <span class="readingtime">1 min read</span>
                                                </span>
                                                <span class="post-read-more">
                                                    <a href="https://themepush.com/demo-mediumish/food-fuel-and-finance-the-3fs-of-economics/"
                                                        title="">
                                                        <svg class="svgIcon-use" width="25" height="25"
                                                            viewBox="0 0 25 25">
                                                            <path
                                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="section-title listpostsbycats">
                <h2 class="d-flex justify-content-between align-items-center">
                    <span>social &nbsp;</span>
                    <a class="d-block morefromcategory" href="https://themepush.com/demo-mediumish/category/social/">
                        &nbsp; <i class="fa fa-angle-right"></i>
                    </a>
                </h2>
            </div>
            <section class="featured-posts listpostsbycats post-style-2">
                <div class="row listfeaturedtag h-100">
                    <div class="col-md-6 mb-30">
                        <div class="card post_card_tall h-100" id="post-146">
                            <div class="row h-100">
                                <div class="col-lg-5 wrapthumbnail">
                                    <a class="d-block h-100"
                                        href="https://themepush.com/demo-mediumish/enhance-your-look-with-these-style-tips/"><img
                                            src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-08-11-2017_02-04-49-768x384.jpg" /></a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-block d-flex flex-column h-100">
                                        <h2 class="card-title">
                                            <a
                                                href="https://themepush.com/demo-mediumish/enhance-your-look-with-these-style-tips/">Enhance
                                                Your Look With These Style Tips</a>
                                        </h2>
                                        <span class="card-text d-block">As we head into summer, it’s important to find
                                            accessories that show off your style, while brightening
                                            up your...</span>
                                        <div class="metafooter mt-auto">
                                            <div class="wrapfooter">
                                                <span class="meta-footer-thumb">
                                                    <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img
                                                            alt=""
                                                            src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g"
                                                            srcset="
                              https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x
                            "
                                                            class="avatar avatar-40 photo author-thumb" height="40"
                                                            width="40" decoding="async" /></a>
                                                </span>
                                                <span class="author-meta">
                                                    <span class="post-name"><a
                                                            href="https://themepush.com/demo-mediumish/author/wowthemesnet/">Sal</a></span><br />
                                                    <span class="post-date">Oct 8, 2019</span>
                                                    <span class="dot"></span>
                                                    <span class="readingtime">1 min read</span>
                                                </span>
                                                <span class="post-read-more">
                                                    <a href="https://themepush.com/demo-mediumish/enhance-your-look-with-these-style-tips/"
                                                        title="">
                                                        <svg class="svgIcon-use" width="25" height="25"
                                                            viewBox="0 0 25 25">
                                                            <path
                                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>

            <!-- BLOG POSTS ALL STORIES -->
            <section class="recent-posts">
                <div class="section-title">
                    <h2>
                        <span>All Stories</span>
                    </h2>
                </div>
                <!-- begin loop -->
                <div class="row listrecent">
                    <div class="col-md-6 col-lg-4 grid-item" id="post-75">
                        <div class="card post postbox_default h-100">
                            <a class="postbox_default_thumbnail"
                                href="https://themepush.com/demo-mediumish/unique-gifts-to-celebrate-your-love/"
                                alt="Unique Gifts to Celebrate Your Love"><img width="768" height="329"
                                    src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-768x329.jpg"
                                    class="attachment-medium_large size-medium_large wp-post-image" alt=""
                                    decoding="async"
                                    srcset="
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-768x329.jpg   768w,
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-600x257.jpg   600w,
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-1024x439.jpg 1024w,
                  https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35.jpg          1400w
                "
                                    sizes="(max-width: 768px) 100vw, 768px" /></a>
                            <div class="card-block d-flex flex-column">
                                <h2 class="card-title">
                                    <a href="https://themepush.com/demo-mediumish/unique-gifts-to-celebrate-your-love/">Unique
                                        Gifts to
                                        Celebrate Your Love</a>
                                </h2>
                                <span class="card-text">Couples who stay together deserve to celebrate their
                                    enduring commitment, but anniversary gifts can be difficult
                                    to choose. Sure, there are...</span>
                                <div class="metafooter mt-auto">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img
                                                    alt=""
                                                    src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g"
                                                    srcset="
                          https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x
                        "
                                                    class="avatar avatar-40 photo author-thumb" height="40"
                                                    width="40" decoding="async" /></a>
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"><a
                                                    href="https://themepush.com/demo-mediumish/author/wowthemesnet/">Sal</a></span><br />
                                            <span class="post-date">Oct 7, 2020</span>
                                            <span class="dot"></span>
                                            <span class="readingtime">1 min read</span>
                                        </span>
                                        <span class="post-read-more">
                                            <a href="https://themepush.com/demo-mediumish/unique-gifts-to-celebrate-your-love/"
                                                title="Read Story">
                                                <svg class="svgIcon-use" width="25" height="25"
                                                    viewBox="0 0 25 25">
                                                    <path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end loop -->
                <!-- pagination -->
                <div class="bottompagination">
                    <span class="navigation">
                        <li class="previous disabled">
                            <a href="https://themepush.com/demo-mediumish/" aria-label="First">First</a>
                        </li>
                        <li class="disabled">
                            <a href="https://themepush.com/demo-mediumish/" title="previous" aria-label="previous"><i
                                    class="fa fa-angle-double-left"></i></a>
                        </li>
                        <li class="active">
                            <a class="active" href="https://themepush.com/demo-mediumish/">1</a>
                        </li>
                        <li>
                            <a href="https://themepush.com/demo-mediumish/page/2/">2</a>
                        </li>
                        <li>
                            <a href="https://themepush.com/demo-mediumish/page/3/">3</a>
                        </li>
                        <li>
                            <a href="https://themepush.com/demo-mediumish/page/2/" title="next" aria-label="next"><i
                                    class="fa fa-angle-double-right"></i></a>
                        </li>
                        <li class="next">
                            <a href="https://themepush.com/demo-mediumish/page/3/" aria-label="Last">Last</a>
                        </li>
                    </span>
                </div>
            </section>

            <!-- JUMBO CATEGORIES CLOUD -->
            <div class="jumbotron fortags mt-4">
                <div class="row">
                    <div class="col-md-4 align-self-center text-center">
                        <h2 class="hidden-sm-down text-white">Explore &rarr;</h2>
                    </div>
                    <div class="col-md-8 align-self-center text-center">
                        <a href="https://themepush.com/demo-mediumish/category/creativity/"
                            class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 8pt"
                            aria-label="creativity (6 items)">creativity</a>
                        <a href="https://themepush.com/demo-mediumish/category/how-to/"
                            class="tag-cloud-link tag-link-5 tag-link-position-2" style="font-size: 8pt"
                            aria-label="how to (6 items)">how to</a>
                        <a href="https://themepush.com/demo-mediumish/category/life/"
                            class="tag-cloud-link tag-link-2 tag-link-position-3" style="font-size: 22pt"
                            aria-label="life (13 items)">life</a>
                        <a href="https://themepush.com/demo-mediumish/category/marketing/"
                            class="tag-cloud-link tag-link-4 tag-link-position-4" style="font-size: 15pt"
                            aria-label="marketing (9 items)">marketing</a>
                        <a href="https://themepush.com/demo-mediumish/category/social/"
                            class="tag-cloud-link tag-link-9 tag-link-position-5" style="font-size: 10.333333333333pt"
                            aria-label="social (7 items)">social</a>
                        <a href="https://themepush.com/demo-mediumish/category/technology/"
                            class="tag-cloud-link tag-link-8 tag-link-position-6" style="font-size: 10.333333333333pt"
                            aria-label="technology (7 items)">technology</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-content -->
@endsection
