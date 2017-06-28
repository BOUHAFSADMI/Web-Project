<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->

    <style>
        body { background-color:#CCC ; margin-left: 100px; }
        #map-outer {  height: 440px;
            padding: 20px;
            border: 2px solid #CCC;
            margin-bottom: 20px;
            background-color:#FFF }
        #map-container { height: 400px }
        @media all and (max-width: 991px) {
            #map-outer  { height: 650px }
        }
        .input-group[class*="col-"] {
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
</head>

<body>
<?php
include_once "controller/confereneDetailsController.php";
?>
<header>
    <nav>
        <ul class="menu" id="contenuId">
            <li><a href="">Accueil</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
    </nav>
</header>

<div id="weather">
    <!-- weather widget start --><div id="m-booked-weather-bl250-69439"> <a href="//www.booked.net/weather/sillafene-w31529" class="booked-wzs-250-175" style="background-color:#137AE9;"> <div class="booked-wzs-250-175-data wrz-03"> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>11</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>19&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>1&deg;</div> </div> </div> <div class="booked-wzs-250-175-city">Sillafene</div> <div class="booked-wzs-250-175-date">Thursday, 19 January</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Mon</td> <td>Tue</td> <td>Wed</td> <td>Fri</td> <td>Sat</td> <td>Sun</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>1&deg;</td> <td class="week-day-val">-2&deg;</td> <td class="week-day-val">-2&deg;</td> <td class="week-day-val">0&deg;</td> <td class="week-day-val"><span class="plus">+</span>3&deg;</td> <td class="week-day-val">0&deg;</td> </tr> </table> </a> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'//s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-69439'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="http://widgets.booked.net/weather/info?action=get_weather_info&ver=4&cityID=w31529&type=3&scode=124&ltid=3457&domid=w209&cmetric=1&wlangID=1&color=137AE9&wwidth=250&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
</div>

<?php
   $conference = new conference($result);
?>
<div id="info">
    <div>
        <h3>Titre: <?= $conference->getTitre(); ?></h3>
        <p>Date Soumission: <?= $conference->getDateSoumission(); ?></p>
        <p>Date Déroulement: <?= $conference->getDateDeroulement(); ?></p>
        <p id="contenuConf">Contenu: <?= utf8_encode($conference->getContenu()); ?></p>
    </div>
    <div>
        <h3>Les Anciens Versions</h3>
        <?php foreach ($oldConfs as $confs) :
            $conference=new conference($confs);
            ?>
            <?php echo "<a href='index.php?conf=".$conference->getId()."' target='_blank'>"; ?>
            <div id="journal">
                <legend><?= $conference->getTitre(); ?></legend>
            </div>
            <?php echo "</a>"; ?>
        <?php endforeach;?>
    </div>

</div>

<br><br><br><br><br><br>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>

    function init_map() {
        var var_location = new google.maps.LatLng(36.513419,5.038368);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"Venice"});

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);

</script>

<div class="container">
    <div class="row">
        <div id="map-outer" class="col-md-12">
            <div id="map-container" class="col-md-8"></div>
        </div><!-- /map-outer -->
    </div> <!-- /row -->
</div>
</body>
</html>