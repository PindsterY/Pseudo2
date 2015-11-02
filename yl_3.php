<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<input type="text" id="city" placeholder="city"/>
<button onclick="get_forecast()">Send</button>
<br>

<span id="forecast">xxx</span>
<script>
    function get_forecast() {
        var city = $('#city').val();

        $.get(
            "http://api.openweathermap.org/data/2.5/weather?q="+city+"&units=metric&APPID=cceae4bea40ef924b53815b220e725a2",
            function (data) {
                //console.log(data.weather[0].description);
                var weather_forecast = data.weather[0].description;
                $('#forecast').html(weather_forecast);
            }
        );
    }

</script>

</body>
</html>

