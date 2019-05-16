//base_url variable defined in the footer this is to generalize api uri
//loader_html variable defined in the footer for loader css

let ajaxGet = {
    init : function(){
        console.log("test");
    },

    ajaxGetWeather : function(city){
        $.ajax({
            type: "GET",
            url: "controllers/weatherController.php",
            data: { 
                'params': 'getWeather',
                'city': city,
            },
            dataType: "json",
            success: function(res) {
                document.getElementById("city").innerHTML = res.city.name;
                document.getElementById("temperature").innerHTML = res.list[0].main.temp + " <span>°c</span>" ;
                document.getElementById("condition").innerHTML = res.list[0].weather[0].description;

                document.getElementById("cloud").innerHTML = res.list[0].clouds.all + " %";
                document.getElementById("wind").innerHTML = res.list[0].wind.speed + " <span>Km/h</span>";
            }
        });
    }, 
}
