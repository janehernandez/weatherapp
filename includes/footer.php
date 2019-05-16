
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/ajaxGet.js"></script>
<script type="text/javascript" src="assets/js/ajaxFunctions.js"></script>

<script type="text/javascript" src="assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        ajaxGet.ajaxGetWeather($('#search-city').val());
        ajaxFunction.ajaxstartTime();
        
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>

<script type="text/javascript" src="assets/js/skycons.js"></script>
<script>
var icons = new Skycons({"color": "#999999"}),
    list  = [
        "sleet"
    ],
    i;

for(i = list.length; i--; )
    icons.set(list[i], list[i]);

icons.play();
</script>
<script>
    var icons = new Skycons({"color": "#f5f5f5"}),
        list  = [
            "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "clear-day", "snow", "wind",
            "fog"
        ],
        i;

    for(i = list.length; i--; )
        icons.set(list[i], list[i]);

    icons.play();
</script>

<script>
    $('#search-city').change(function () {
        ajaxGet.ajaxGetWeather($('#search-city').val());
       
    });
</script>
</body>
</html>