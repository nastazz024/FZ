<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
$this->title = 'Contact';

?>

   <section class="drawer">
    <section id="contact" class="secondary-page">
      <div class="general">
           <!--Google Maps-->
            <div id="map_container">
			    <div id="map_canvas"></div>
		    </div>
          <div class="container">
           <div class="content-link col-md-12">
                  <div id="contact_form" class="top-score-title col-md-9 align-center">
                    <h3>Обратная <span>связь</span></h3>
                                <form method="post">
                                    
                                    <div class="name">
                                        <label for="name">* Имя:</label><div class="clear"></div>
                                        <input id="name" name="name" type="text" placeholder="Иван" required=""/>
                                    </div>
                                    <div class="email">
                                        <label for="email">* Электронная почта:</label><div class="clear"></div>
                                        <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>
                                    </div>
                                    <div class="message">
                                        <label for="message"> Сообщение:</label>
                                        <textarea name="messagetext" class="txt-area" id="message" cols="30" rows="4"></textarea>
                                    </div>
                                    
                                    <div id="loader">
                                        <input type="submit" value="Отправить"/>
                                    </div>
                                    <p class="success">Your message has been sent successfully.</p>
                                    <p class="error">E-mail must be valid and message must be longer than 20 characters.</p>
                                  </form>
                              </div>
                     <div id="info-company" class="top-score-title col-md-3 align-center">
                        <h3>Информация</h3>
                        <div class="col-md-12">
                          <p><i class="fa fa-phone"></i>+375 29 562-95-48 </p>
                          <p><i class="fa fa-envelope-o"></i>fz@info.com </p>
                          <p><i class="fa fa-globe"></i>пр-т Независимости, 196</p>
                          <p><i class="fa fa-map-marker"></i>Беларусь, Минск</p>
                        </div>            
                    </div>
                </div>
                </div>
                </div>
                </section>
                
    
    
    
</section>
<!--END MENU-->
<!-- Button Anchor Top-->
<script type="text/javascript">
    /********************************************
    GOOGLE MAPS
    ********************************************/

    // The following example creates a marker in Stockholm, Sweden
    // using a DROP animation. Clicking on the marker will toggle
    // the animation between a BOUNCE animation and no animation.
    $(document).ready(function ($) {
        "use strict";
        var stockholm = new google.maps.LatLng(53.9507129, 27.7082115);
        var parliament = new google.maps.LatLng(53.9507129, 27.7082115);
        var image = 'images/marker.png';
        var marker;
        var map;

        function initialize() {
            var styleArray = [
        {
            featureType: 'all',
            stylers: [
            { saturation: -1000 }
            ]
        }, {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [
            { hue: '#00ffee' },
            { saturation: -100 },
            { "lightness": -8 },
            { "gamma": 1.18 }
            ]
        }
        ];
            var mapOptions = {
                zoom: 17,
                styles: styleArray,
                center: stockholm
            };

            map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                icon: image,
                position: parliament
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function toggleBounce() {

            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    });
</script>
