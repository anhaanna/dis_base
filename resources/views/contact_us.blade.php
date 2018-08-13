@extends('deafult.layouts.layout')
@section('content')

<div class="top-img">
   <img src="images/Contact-us-page-Disguise-1.jpg">
   <div class="text-img">
     <span class="txt">
       <h1>CONTACT US</h1>
       <p>We are just a phone or email away. <br>
       Contact us for trade enquiry in your market.</p>
     </span>
    </div>
</div>


<div class="contact-content">
  <div class="wrapper">
    <div class="cont-all">
      <div class="cont-text">
        <h4>Are you a brand owner interested in partnering with us for distributorship across markets in Africa and Asia, or a large distributor keen on Disguise Fragrances range by Brands Konnect? Then we would love to hear from you!</h4>
        <p><a href="http://BrandsKonnect.com" target="_blank">Click here to know more about the company behind Disguise Fragrances</a></p>
      </div>

      <div class="cont-midd">
        <div class="cont-left">
          <div class="brands-konnect">
            <img src="images/BK-logo-180x90.jpg">
          </div>
          <div class="b-k-text">
            <div class="b-k-text-left">
              <p>
                <strong>Corporate Office: </strong><br>
                Brands Konnect LLC,<br>
                409, Citadel Tower,<br>
                Business Bay, Dubai<br>
                UAE<br>
                Phone: +9714 4437306<br>
                Fax: +9714 4437861
              </p>
            </div>
            <div class="b-k-text-right">
              <p>
                <strong>Marketing Office</strong><br>
                Brands Konnect,<br>
                Taunusanlage 1,<br>
                60329 Frankfurt<br>
                Germany<br>
                marketing@brandskonnect.com<br>
                <a href="http://brandskonnect.com/">www.brandskonnect.com</a>
              </p>
            </div>
          </div>
          <div class="b-k-social">
            <a class="social social_twitter" href="https://twitter.com/disguiseuae">
                          <i class="fab fa-twitter"></i>
                      </a>
            <a class="social social_facebook" href="https://web.facebook.com/disguisefragrances?_rdc=1&_rdr">
                          <i class="fab fa-facebook-f"></i>
                      </a>
                      <a class="social social_instagram" href="https://www.instagram.com/ disguisefragrances/">
                          <i class="fab fa-instagram"></i>
                      </a>
                      <a class="social social_youtube" href="https://www.youtube.com/ watch?v=I9pQ1cs68uw">
                          <i class="fab fa-youtube"></i>
                      </a>
                      
          </div>
        </div>
        <div class="cont-right">
          <div class="cont-right-p">
            <p>
              <strong>Please submit your details below. Alternatively email us at <br>info@brandskonnect.com</strong>
            </p>
          </div>
          <form method="post" action="{{route('contact-us.store')}}">
            {{ csrf_field() }}
            <div class="cont-form">
              @if(Session::has('flash_message'))
                  <div class="thank-you">{{ Session::get('flash_message') }}</div>
                @endif
              <div class="row row-brd">
                <input class="pink-bg" type="text" name="name" placeholder="Name">
                @if($errors->has('name'))
                  <div class="errors">{{ $errors->first('name') }}</div>
                @endif
                <input class="pink-bg" type="email" name="email" placeholder="Email">
                @if($errors->has('email'))
                  <div class="errors">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="row row-brd">
                <input class="pink-bg" type="text" name="contact" placeholder="Contact">
                @if($errors->has('contact'))
                  <div class="errors">{{ $errors->first('contact') }}</div>
                @endif
                <input class="pink-bg" type="text" name="subject" placeholder="Subject">
                @if($errors->has('subject'))
                  <div class="errors">{{ $errors->first('subject') }}</div>
                @endif
              </div>
              <div class="row">
                <textarea name="message" placeholder="Message" class="pink-bg"></textarea>
                @if($errors->has('message'))
                  <div class="errors">{{ $errors->first('message') }}</div>
                @endif
              </div>
            </div>
            <button class="send" name="send">
              Send
            </button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <div class="wrapper">
    <div id="map"></div>
  </div>
    <script type="text/javascript">
      function initMap(){
        var locations = [
            ['The Citadel Tower, Business Bay', 25.183967, 55.260823,  'images/pin.png'],
            ['Dubai', 25.204849, 55.270783, 'images/pin.png'],
            ['United Arab Emirates', 23.424076, 53.847818,  'images/pin.png']
          ];

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: new google.maps.LatLng(25.183967, 55.260823),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });

          var infowindow = new google.maps.InfoWindow();

          var marker, i;

          for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
              map: map,
              icon: locations[i][3]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
              }
            })(marker, i));
          }
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhlERI11sUGhp67FRrIt5XKETpUUKwkog&callback=initMap"
  type="text/javascript"></script>



</div>

@endsection