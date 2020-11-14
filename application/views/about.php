
<style>
  /* Styles for dialog window */
  #small-dialog {
    background: white;
    padding: 5px;
    max-width: 750px;
    margin: 40px auto;
    position: relative;
  }

  div#small-dialog iframe {
    width: 100%;
    height: 400px;
    display: block;
  }


  /**
* Fade-zoom animation for first dialog
*/

  /* start state */
  .my-mfp-zoom-in .zoom-anim-dialog {
    opacity: 0;

    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;



    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
  }

  /* animate in */
  .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
    opacity: 1;

    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }

  /* animate out */
  .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);

    opacity: 0;
  }

  /* Dark overlay, start state */
  .my-mfp-zoom-in.mfp-bg {
    opacity: 0;
    -webkit-transition: opacity 0.3s ease-out;
    -moz-transition: opacity 0.3s ease-out;
    -o-transition: opacity 0.3s ease-out;
    transition: opacity 0.3s ease-out;
  }

  /* animate in */
  .my-mfp-zoom-in.mfp-ready.mfp-bg {
    opacity: 0.8;
  }

  /* animate out */
  .my-mfp-zoom-in.mfp-removing.mfp-bg {
    opacity: 0;
  }



  /**
* Fade-move animation for second dialog
*/

  /* at start */
  .my-mfp-slide-bottom .zoom-anim-dialog {
    opacity: 0;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;

    -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
    -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
    -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
    -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
    transform: translateY(-20px) perspective(600px) rotateX(10deg);

  }

  /* animate in */
  .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
    opacity: 1;
    -webkit-transform: translateY(0) perspective(600px) rotateX(0);
    -moz-transform: translateY(0) perspective(600px) rotateX(0);
    -ms-transform: translateY(0) perspective(600px) rotateX(0);
    -o-transform: translateY(0) perspective(600px) rotateX(0);
    transform: translateY(0) perspective(600px) rotateX(0);
  }

  /* animate out */
  .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
    opacity: 0;

    -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
    -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
    -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
    -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
    transform: translateY(-10px) perspective(600px) rotateX(10deg);
  }

  /* Dark overlay, start state */
  .my-mfp-slide-bottom.mfp-bg {
    opacity: 0;

    -webkit-transition: opacity 0.3s ease-out;
    -moz-transition: opacity 0.3s ease-out;
    -o-transition: opacity 0.3s ease-out;
    transition: opacity 0.3s ease-out;
  }

  /* animate in */
  .my-mfp-slide-bottom.mfp-ready.mfp-bg {
    opacity: 0.8;
  }

  /* animate out */
  .my-mfp-slide-bottom.mfp-removing.mfp-bg {
    opacity: 0;
  }
</style>
  <section class="w3l-about1">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <!-- <h5>Tagline</h5> -->
          <div class="section-width">
            <h2>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص.</h2>
          </div>
          <div class="link-list-menu">
            <p>We believe that we are outstanding. Not because we say it, but because we work hard at it. We are
              dedicated, committed and focused. We believe that every person will reach their personal best and overcome
              any challenge through a shared culture and ethos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-about2">
    <div class="features-main py-5">
      <div class="container py-lg-3">
        <h3 class="stat-title">We build great brands with passion & love</h3>
        <div class="row features">
          <div class="col-md-4 feature-1 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>15k+</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Active Reward Programs</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repellat dolor
                  facere ipsum dolorem autem voluptate tempora ad. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 feature-2 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>40M+</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Participating Members</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repellat dolor
                  facere ipsum dolorem autem voluptate tempora ad. </p>

              </div>
            </div>
          </div>
          <div class="col-md-4 feature-3 mt-5">
            <div class="feature-body">
              <div class="feature-images">
                <span>100+</span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel my-2">Partner Agencies</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repellat dolor
                  facere ipsum dolorem autem voluptate tempora ad. </p>
                <div class="hover">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-about5">
    <div class="py-5">
      <div class="container py-lg-3">
        <div class="heading text-center mx-auto">
          <h3 class="head">Market solutions for you business </h3>
          <p class="my-3 head"> Build an online presence with this professional bootstrap 4 landing page.</p>
        </div>
        <div class="history-info mt-5">
          <div class="position-relative">
            <img src="assets/images/video.jpg" class="img-fluid" alt="video-popup" />
            <!-- <a href="#popup-video" class="play-view text-center position-absolute">
						<span class="video-play-icon">
							<span class="fa fa-play"></span>
						</span>
					</a> -->

            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
              <span class="video-play-icon">
                <span class="fa fa-play"></span>
              </span>
            </a>

            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
              <iframe src="https://www.youtube.com/embed/JemJbNJ4ZtU" allowfullscreen=""></iframe>
            </div>

            <!-- popup -->
            <div id="popup-video" class="pop-overlay">
              <div class="popup">
                <div class="align-popup-video">
                  <iframe src="https://www.youtube.com/embed/JemJbNJ4ZtU" allowfullscreen></iframe>
                  <a class="close" href="#portfolio">&times;</a>
                </div>

              </div>
            </div>
            <!-- /popup -->


          </div>
          <div class="history mt-5">
            <h4>A Brief History</h4>
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti odit? At iure facere,
              porro repellat officia quas laboriosam repudiandae dolorem ipsum, dolores magnam assumenda soluta odit
              harum
              voluptate inventore ipsa maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo officia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-about3 py-5">
    <div class="container py-lg-3">
      <h3 class="text-center mb-3 timeline-title">We Have Come A Long Way</h3>
      <ul class="timeline">
        <!-- Item 1 -->
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="flag">Our Start</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas voluptatum ea
              culpa repellendus porro mollitia quidem incidunt ullam ducimus!</div>
          </div>
        </li>

        <!-- Item 2 -->
        <li>
          <div class="direction-l">
            <div class="flag-wrapper">
              <span class="flag">The Early Days</span>
            </div>
            <div class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad cumque exercitationem maiores
              alias! Necessitatibus nulla nostrum obcaecati iusto omnis dignissimos tempore ratione ab. Saepe qui
              voluptas
              nihil ullam maxime odio.</div>
          </div>
        </li>

        <!-- Item 3 -->
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="flag">Working Flow</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo, accusantium
              libero
              eligendi officiis iusto.</div>
          </div>
        </li>

        <!-- Item 4 -->
        <li>
          <div class="direction-l">
            <div class="flag-wrapper">
              <span class="flag">The Expansion</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo, accusantium
              libero
              eligendi officiis iusto.</div>
          </div>
        </li>


        <!-- Item 5 -->
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="flag">At Present</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate nemo, accusantium
              libero
              eligendi officiis iusto.</div>
          </div>
        </li>

        <!-- Item 2 -->
        <li>
          <div class="direction-l">
            <div class="flag-wrapper">
              <span class="flag">Future plans</span>
            </div>
            <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ducimus pariatur, molestiae
              autem suscipit totam error reprehenderit dolores nostrum reiciendis quas voluptas et repellat velit, qui
              eos
              ut minus consequuntur, quam facere? Culpa modi, facere laborum distinctio perspiciatis nesciunt sunt.
            </div>
          </div>
        </li>

      </ul>
    </div>
  </section>
  <section class="w3l-about4">
    <div class="contact1-bg py-5">
      <div class="container py-lg-3">
        <div class="contact-main row align-items-center">
          <div class="col-md-6">
            <div class="column">
              <h3 class="header mb-4">We are here for you</h3>
              <p class="head-main mb-3">Donec eu lorem et nulla eleifend convallis non dapibus est. Morbi erat nibh,
                sollicitudin
                vel est ut, egestas sollicitudin metus. Mauris et mi sed dapibus urna condimentum, et maximus lectus
                dapibus mattis.</p>
            </div>
            <div class="column2">
              <h6 class="contact-address"> Market - #135 block, Barnard St. Brooklyn, NY 10036, USA</h6>
            </div>
          </div>
          <div class="col-md-6 map mt-md-0 mt-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
              style="border:0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-block6 -->
  <section class="w3l-about6 py-5">
    <div class="container py-md-3 text-center">
      <div class="heading text-center mx-auto">
        <h3 class="head">We Would Love to Talk </h3>
        <p class="my-3 head">We love conversations, and would love to have one with you! Whether you’re looking for a
          speaker, an awesome career, or want to get started with a rewards program, we would love hear from you.</p>
      </div>
      <div class="buttons mt-4">
        <a href="#url" class="btn btn-outline-primary mr-2 btn-demo">Book a Demo</a>
        <a href="#url" class="btn btn-primary btn-demo ml-2">Get in touch</a>
      </div>
    </div>
  </section>
  <!-- / about-block6 -->
  <!-- footer-28 block -->
  <section class="w3l-market-footer">
    <footer class="footer-28">
      <div class="footer-bg-layer">
        <div class="container py-lg-3">
          <div class="row footer-top-28">
            <div class="col-md-6 footer-list-28 mt-5">
              <h6 class="footer-title-28">Contact information</h6>
              <ul>
                <li>
                  <p><strong>Address</strong> : #135 block, Barnard St. Brooklyn, NY 10036, USA</p>
                </li>
                <li>
                  <p><strong>Phone</strong> : <a href="tel:+404-11-22-89">+404-11-22-89</a></p>
                </li>
                <li>
                  <p><strong>Email</strong> : <a href="mailto:example@mail.com">example@mail.com</a></p>
                </li>
              </ul>

              <div class="main-social-footer-28 mt-3">
                <ul class="social-icons">
                  <li class="facebook">
                    <a href="#link" title="Facebook">
                      <span class="fa fa-facebook" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#link" title="Twitter">
                      <span class="fa fa-twitter" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="dribbble">
                    <a href="#link" title="Dribbble">
                      <span class="fa fa-dribbble" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="google">
                    <a href="#link" title="Google">
                      <span class="fa fa-google" aria-hidden="true"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Company</h6>
                  <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#blog.html">Blog Posts</a></li>
                    <li><a href="#pricing.html">FAQ</a></li>
                    <li><a href="#pricing.html">Pricing</a></li>
                  </ul>
                </div>
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Support</h6>
                  <ul>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#signup.html">Create account</a></li>
                    <li><a href="#learn.html">Learning Center</a></li>
                    <li><a href="#career.html">Team</a></li>
                  </ul>
                </div>
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Product</h6>
                  <ul>
                    <li><a href="#URL">Market</a></li>
                    <li><a href="#URL">VIP</a></li>
                    <li><a href="#URL">Resources</a></li>
                    <li><a href="#URL">Sale</a></li>
                    <li><a href="#URL">Admin UI</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
          <div class="container">
            <p class="copy-footer-28 text-center"> &copy; 2020 Market. All Rights Reserved. Design by <a
                href="https://w3layouts.com/">W3Layouts</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //footer-28 block -->

  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script for owlcarousel -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

</body>

</html>