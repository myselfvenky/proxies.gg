
<footer class="bg-primary-darker">
    <div class="container py-14 py-md-10">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="{{ asset("/assets/images/ftr-logo.svg") }}" alt="ftr-logo">
            <p>{{ env('APP_NAME') }} is a web data extraction platform focused on providing proxy infrastructure as well as web scraping APIs. We offer a pool of billions of IPs in over 50 countries worldwide.</p><!-- /.social -->
          </div><!-- /.widget -->
        </div><!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget ftr-links">
            <h4 class="widget-title mb-3">ACCOUNT</h4>
            <ul>
              <li>
                <a href="https://dashboard.plainproxies.com/register">Create Account</a>
              </li>
              <li>
                <a href="https://dashboard.plainproxies.com/login">Login</a>
              </li>
            </ul>
          </div><!-- /.widget -->
        </div><!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget ftr-links">
            <h4 class="widget-title mb-3">Learn More</h4>
            <ul class="list-unstyled text-reset mb-0">
              <ul>
                <li>
                  <a class="a" onclick="Intercom('show');">IPv4 Residential</a>
                </li>
                <li>
                  <a href="{{ url("/residential-ipv6") }}">IPv6 Residential &nbsp; <span class="badge rounded-pill featured-post-gold">NEW</span></a>
                </li>
                <li>
                  <a class="a">SERP API</a>
                </li>
              </ul>
            </ul>
          </div><!-- /.widget -->
        </div><!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget ftr-links">
            <h4 class="widget-title mb-3">Our Newsletter</h4>
            <ul>
              <li>
                <a href="{{ url("/faq") }}">FAQs</a>
              </li>
              <li>
                <a href="{{ url("/blog") }}">Blogs</a>
              </li>
              <li>
                <a target="_blank" href="https://help.plainproxies.com">Resources</a>
              </li>
            </ul><!-- /.newsletter-wrapper -->
          </div><!-- /.widget -->
        </div><!-- /column -->
      </div><!--/.row -->
      <hr class="hr-light my-6">
      <div class="d-md-flex align-items-center justify-content-between">
        <p class="mb-2 mb-lg-0">© 2023 Plain Proxies. All rights reserved.</p>
        <div class="d-md-flex align-items-center justify-content-between imprint">
          <ul>
            <li>
              <a href="{{ url("/legal/imprint") }}">Imprint</a>
            </li>
            <li>
              <a href="{{ url("/legal/terms") }}">Terms</a>
            </li>
            <li>
              <a href="{{ url("/legal/privacy") }}">Privacy</a>
            </li>
          </ul>
        </div>
        <nav class="nav social social-white text-md-end" style="font-style: normal; font-weight: 500; font-size: 18px; line-height: 23px; letter-spacing: -.01em; color: rgba(255,255,255,.75); margin-right: 1rem;">
          Connect with us 
          <a href="{{ url("https://linkedin.com/company/PlainProxies") }}" target="_blank" style="margin-left: 1rem;"> <i class="fa-brands fa-linkedin-in"></i></a>
          <a href="{{ url("https://twitter.com/PlainProxies") }}" target="_blank"> <i class="fa-brands fa-twitter"></i></a> 
          <a href="{{ url("https://t.me/PlainProxies") }}" target="_blank"> <i class="fa-brands fa-telegram"></i></a> 
          <a href="{{ url("https://instagram.com/PlainProxies") }}" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
        </nav><!-- /.social -->
      </div>
    </div><!-- /.container -->
  </footer>
