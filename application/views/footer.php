<!-- / index-block8 -->
    <!-- footer-28 block -->
<section class="w3l-market-footer text-right ">
<footer class="footer-28">
        <div class="footer-bg-layer">
        <div class="container py-lg-3">
            <div class="row footer-top-28">
            <div class="col-md-6 footer-list-28 mt-5">
                <h6 class="footer-title-28"> معلومات الاتصال </h6>
                <ul>
                <li>
                    <p><strong>العنوان</strong> : شارع الستين جنوب تقاطع الشرقي </p>
                </li>
                <li>
                    <p><strong>الهاتف</strong> : <a href="tel:+249916246240">249916246240+</a></p>
                </li>
                <li>
                    <p><strong>البريد الالكتروني</strong> : <a href="mailto:revolution.technology.co@gmail.com">revolution.technology.co@gmail.com</a></p>
                </li>
                </ul>

                  <div class="main-social-footer-28 mt-3">
                    <ul class="social-icons">

                      <li class="facebook">
                        <a href="https://web.facebook.com/revo.tech.ltd" title="Facebook">
                          <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                      </li>

                      <li class="twitter">
                        <a href="#link" title="Twitter">
                          <span class="fa fa-twitter" aria-hidden="true"></span>
                        </a>
                      </li>

                      <!-- <li class="dribbble">
                        <a href="#link" title="Dribbble">
                          <span class="fa fa-dribbble" aria-hidden="true"></span>
                        </a>
                      </li>

                      <li class="google">
                        <a href="#link" title="Google">
                          <span class="fa fa-google" aria-hidden="true"></span>
                        </a>
                      </li> -->

                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">الصفحات</h6>
                      <ul>
                        <li><a href="#blog.html">الرئيسية</a></li>
                        <li><a href="about.html"> عن ريفو </a></li>
                        <li><a href="#pricing.html">الاتصال بنا</a></li>
                        <!--<li><a href="#pricing.html">Pricing</a></li> -->
                      </ul>
                    </div>

                    <!-- <div class="col-md-4 footer-list-28 mt-5">
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
                    </div> -->

                  </div>
                </div>
              </div>
            </div>


            <!-- <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
              <div class="container">
                <p class="copy-footer-28 text-center"> &copy; 2020 Market. All Rights Reserved. Design by <a
                    href="https://w3layouts.com/">W3Layouts</a></p>
              </div>
            </div>
          </div> -->
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

      <!-- jQuery, Bootstrap JS -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- Template JavaScript -->
      
      <script src="assets/js/owl.carousel.js"></script>

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