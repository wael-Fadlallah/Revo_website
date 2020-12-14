<!-- contacts -->
<br><br>
<section class="w3l-contact mt-5">
  <div class="contacts-9 py-5 mt-5">
    <div class="container py-lg-3">
      <div class="row top-map">
        <div class="cont-details col-md-5 text-right">
          <div class="heading mb-lg-4 mb-4">
            <h3 class="head">معلوماتنا</h3>
          </div>
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <p style="direction:ltr">+242916246240</p>
            </div>
          </div>
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <p style="direction:ltr">+242906866826</p>
            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <p>revolution.technology.co@gmail.com</p>
            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <p>شارع الستين جنوب تقاطع الشرقي </p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">

          <div id="map" style="height: 120%;width: 100%;"></div>


        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br><br><br>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhn3CcFrxIJaLsCu2g0g2LHjmp8XNDpSI&callback=initMap&libraries=&v=weekly"
  defer
></script>
<script>
    let map;
    let position = {lat: 15.561151, lng: 32.578934};
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: position,
    zoom: 15,
  });

  var marker = new google.maps.Marker({
      position: position ,
      map : map 
    });
}
 
  </script>