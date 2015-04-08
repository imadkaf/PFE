<?php

/* eZDemoBundle:full:place_list.html.twig */
class __TwigTemplate_3d751a636d90a17b4f2122dad0cf47fbc1df018c0660d89777087436dd5a0a6d extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"content-view-full\">
        <div class=\"place-list-form\">
            <form action=\"\">
                <p>
                    <select id=\"max-dist-place-list\" disabled=\"disabled\">
                        <option value=\"10000\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("within 10000km"), "html", null, true);
        echo "</option>
                        <option value=\"1000\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("within 1000km"), "html", null, true);
        echo "</option>
                        <option value=\"100\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("within 100km"), "html", null, true);
        echo "</option>
                        <option value=\"10\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("within 10km"), "html", null, true);
        echo "</option>
                        <option value=\"1\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("within 1km"), "html", null, true);
        echo "</option>
                        <option value=\"0\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Show all places"), "html", null, true);
        echo "</option>
                    </select>
                </p>
                <p>
                    <button class=\"btn btn-warning btn-large\" id=\"sort-place-list\" disabled=\"disabled\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Show places"), "html", null, true);
        echo "
                    </button>
                </p>
                <p>
                    <button class=\"btn btn-warning btn-large\" id=\"gmap-place-list\" disabled=\"disabled\">
                        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View on Map"), "html", null, true);
        echo "
                    </button>
                    <div id=\"buttonContentMapHidden\" class=\"place-list-content-hidden\">
                        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hide Map"), "html", null, true);
        echo "
                    </div>
                </p>
            </form>
            <p id=\"sort-place-list-errors\" class=\"place-list-text-error\"></p>
            <p class=\"jsenable-place-list-info place-list-text-info\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Javascript must be enabled in order to use the place list feature"), "html", null, true);
        echo "
            </p>
        </div>

        <div class=\"row\">
            <div class=\"span9 place-list-name\">
                <h1>";
        // line 39
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name");
        echo "</h1>

                <div id=\"place-list-gmap-container\" class=\"place-list-gmap\"  >
                    <div id=\"maplocation-map\" class=\"place-list-map-size\"></div>
                </div>
                <div id=\"place-list-container\">
                    ";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Place:listPlaceList", array("locationId" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))));
        // line 50
        echo "
                </div>
            </div>
        </div>
    </section>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script>
        YUI(YUI3_config).use('io-base', 'node', function(Y) {
            //Generating URL with keys values that will be replaced when clicking
            var uriTemplate = '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ezpublish_ezdemo_ajax_sorted_place_list", array("locationId" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => "key_lat", "longitude" => "key_lon", "maxDist" => "key_dist")), "html", null, true);
        // line 62
        echo "',
                noGeoLocateMsg = '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Geolocation feature is not available on your browser, please consider updating it."), "html", null, true);
        echo "',
                disabledGeoLocateMsg = '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Geolocation feature is disabled on your browser. Check the permission settings to allow it."), "html", null, true);
        echo "',
                ajaxErrorMsg = '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Your request has failed, please try again later."), "html", null, true);
        echo "',
                container = Y.one('#place-list-container'),
                sortedPlaceButton = Y.one('#sort-place-list'),
                displayMapButton = Y.one('#gmap-place-list'),
                errorContainer = Y.one('#sort-place-list-errors'),
                distanceList = Y.one('#max-dist-place-list'),
                mapContainer = Y.one('#place-list-gmap-container'),
                buttonContentVisibleMap = displayMapButton.getContent(),
                buttonContentHiddenMap = Y.one('#buttonContentMapHidden').getContent(),
                markers=[];

            if (\"geolocation\" in navigator) {
                sortedPlaceButton.set('disabled', false);
                displayMapButton.set('disabled', false);
                distanceList.set('disabled', false);
            } else {
                errorContainer.setHTML(noGeoLocateMsg);
            }

            displayMapButton.on('click', function (e) {
                var placeList = Y.all('.place-list-item'),
                    mapView,
                    i;

                e.preventDefault();
                //The marker's array is reseted before each map init
                markers = [];
                mapView = function(mapId, latitude, longitude) {
                    var map = new google.maps.Map(document.getElementById(mapId), {
                                center: new google.maps.LatLng(latitude, longitude),
                                zoom: 13,
                                draggable: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            }),
                        infowindow = new google.maps.InfoWindow(),
                        latlngbounds = new google.maps.LatLngBounds();
                    //Markers are made from the data-attributes of the place list displayed
                    placeList.each(function (place) {
                        var marker = new google.maps.Marker( {
                            position: new google.maps.LatLng(
                                place.getData('place-lat'),
                                place.getData('place-long')
                            ),
                            title: place.getData('place-name'),
                            animation: google.maps.Animation.DROP
                        } );
                        markers.push(marker);
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.setContent(place.one('.infobox-content').getContent());
                            infowindow.setPosition(this.position);
                            infowindow.open(map, this);
                        } );
                    });
                    if( markers.length ) {
                        for (i = 0; i < markers.length; i++) {
                            markers[i].setMap(map);
                            // extend bounds with the position of the marker
                            latlngbounds.extend(markers[i].position);
                        }
                        // finally extend bounds with the map center
                        latlngbounds.extend(map.center);
                        map.fitBounds(latlngbounds);
                    }
                };

                navigator.geolocation.getCurrentPosition(function(position) {
                    mapView(\"maplocation-map\", position.coords.latitude, position.coords.longitude);
                } );

                if (mapContainer.hasClass(\"place-list-gmap\")) {
                    displayMapButton.setHTML(buttonContentHiddenMap);
                } else {
                    displayMapButton.setHTML(buttonContentVisibleMap);
                }

                mapContainer.toggleClass(\"place-list-gmap\");
            });

            sortedPlaceButton.on('click', function (e) {

                e.preventDefault();
                container.addClass('place-list-loading');

                navigator.geolocation.getCurrentPosition(function (position) {
                    var maxDist = distanceList.get('value'),
                        uri;
                    //Case maxdist == 0 allows to show all places (unsorted list)
                    if (maxDist == 0) {
                        uri = '";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ezpublish_ezdemo_ajax_default_placeList", array("locationId" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))), "html", null, true);
        echo "';
                    } else {
                        uri = uriTemplate.replace('key_lat', position.coords.latitude).replace('key_lon', position.coords.longitude).replace('key_dist', maxDist);
                    }
                    var config = {
                        method: 'GET',
                        on: {
                            success: function (id, response) {
                                container.setHTML(response.responseText);
                                container.removeClass('place-list-loading');
                                //if map open we update it and keep it open
                                if(!mapContainer.hasClass(\"place-list-gmap\")) {
                                    displayMapButton.invoke('click');
                                    mapContainer.toggleClass(\"place-list-gmap\");
                                    displayMapButton.setHTML(buttonContentHiddenMap);
                                }
                            },
                            failure: function (id, response) {
                                container.removeClass('place-list-loading');
                                errorContainer.setHTML(ajaxErrorMsg);
                            }
                        }
                    };
                    Y.io( uri, config );
                }, function () {
                    container.removeClass('place-list-loading');
                    errorContainer.setHTML(disabledGeoLocateMsg);
                }, {timeout:3000});
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:place_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 153,  133 => 65,  129 => 64,  125 => 63,  122 => 62,  120 => 59,  109 => 50,  107 => 45,  98 => 39,  89 => 33,  80 => 27,  74 => 24,  66 => 19,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
