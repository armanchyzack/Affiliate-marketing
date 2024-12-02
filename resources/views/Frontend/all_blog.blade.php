@extends('Frontend.layout.front_end_layouts')

@section('content')
     <!-- Begin site-content
		================================================== -->
  <div class="site-content">
    <div class="container">
      <section class="recent-posts">
        <div class="section-title">
          <h5 class="font400 mb-4">
            <p>Optional description for this category</p>
          </h5>
          <h2><span>marketing</span></h2>
        </div>

        <div class="row listrecent h-100">
          <!-- begin post -->
          <div class="col-md-6 col-lg-4 grid-item">
            <div class="card post postbox_default h-100">
              <a class="postbox_default_thumbnail"
                href="https://themepush.com/demo-mediumish/unique-gifts-to-celebrate-your-love/"
                alt="Unique Gifts to Celebrate Your Love"><img width="768" height="329"
                  src="https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-768x329.jpg"
                  class="attachment-medium_large size-medium_large wp-post-image" alt="" decoding="async"
                  fetchpriority="high" srcset="
                      https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-768x329.jpg   768w,
                      https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-600x257.jpg   600w,
                      https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35-1024x439.jpg 1024w,
                      https://themepush.com/demo-mediumish/wp-content/uploads/sites/2/2017/11/fig-07-11-2017_22-49-35.jpg          1400w
                    " sizes="(max-width: 768px) 100vw, 768px" /></a>
              <div class="card-block d-flex flex-column">
                <h2 class="card-title">
                  <a href="https://themepush.com/demo-mediumish/unique-gifts-to-celebrate-your-love/">Unique Gifts to
                    Celebrate Your Love</a>
                </h2>
                <span class="card-text">Couples who stay together deserve to celebrate their
                  enduring commitment, but anniversary gifts can be difficult
                  to choose. Sure, there are...</span>
                <div class="metafooter mt-auto">
                  <div class="wrapfooter">
                    <span class="meta-footer-thumb">
                      <a href="https://themepush.com/demo-mediumish/author/wowthemesnet/"><img alt=""
                          src="https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g"
                          srcset="
                              https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x
                            " class="avatar avatar-40 photo author-thumb" height="40" width="40"
                          decoding="async" /></a>
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
          <!-- end post -->
        </div>

        <!-- pagination -->
        <div class="bottompagination mt-4">
          <span class="navigation">
            <li class="previous disabled">
              <a href="https://themepush.com/demo-mediumish/category/marketing/" aria-label="First">First</a>
            </li>
            <li class="disabled">
              <a href="https://themepush.com/demo-mediumish/category/marketing/" title="previous"
                aria-label="previous"><i class="fa fa-angle-double-left"></i></a>
            </li>
            <li class="active">
              <a class="active" href="https://themepush.com/demo-mediumish/category/marketing/">1</a>
            </li>
            <li>
              <a href="https://themepush.com/demo-mediumish/category/marketing/page/2/">2</a>
            </li>
            <li>
              <a href="https://themepush.com/demo-mediumish/category/marketing/page/2/" title="next"
                aria-label="next"><i class="fa fa-angle-double-right"></i></a>
            </li>
            <li class="next">
              <a href="https://themepush.com/demo-mediumish/category/marketing/page/2/" aria-label="Last">Last</a>
            </li>
          </span>
        </div>
      </section>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-content -->
@endsection
