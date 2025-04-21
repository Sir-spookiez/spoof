<?php
// Predefined weather data for UK cities
$weatherData = [
    "London" => ["temp" => 12, "weather" => "Rainy", "humidity" => 80, "windSpeed" => 7, "icon" => "🌧️"],
    "Manchester" => ["temp" => 10, "weather" => "Cloudy", "humidity" => 75, "windSpeed" => 6, "icon" => "☁️"],
    "Birmingham" => ["temp" => 11, "weather" => "Partly Cloudy", "humidity" => 70, "windSpeed" => 5, "icon" => "🌤️"],
    "Glasgow" => ["temp" => 9, "weather" => "Drizzle", "humidity" => 85, "windSpeed" => 8, "icon" => "🌦️"],
    "Liverpool" => ["temp" => 10, "weather" => "Windy", "humidity" => 72, "windSpeed" => 9, "icon" => "🌬️"],
    "Edinburgh" => ["temp" => 8, "weather" => "Overcast", "humidity" => 78, "windSpeed" => 7, "icon" => "☁️"],
    "Bristol" => ["temp" => 13, "weather" => "Sunny", "humidity" => 65, "windSpeed" => 4, "icon" => "☀️"],
    "Sheffield" => ["temp" => 9, "weather" => "Cloudy", "humidity" => 74, "windSpeed" => 5, "icon" => "☁️"],
    "Leeds" => ["temp" => 10, "weather" => "Showers", "humidity" => 76, "windSpeed" => 6, "icon" => "🌦️"],
    "Cardiff" => ["temp" => 12, "weather" => "Rainy", "humidity" => 82, "windSpeed" => 7, "icon" => "🌧️"],
    "Belfast" => ["temp" => 9, "weather" => "Cloudy", "humidity" => 80, "windSpeed" => 5, "icon" => "☁️"],
    "Newcastle" => ["temp" => 8, "weather" => "Drizzle", "humidity" => 85, "windSpeed" => 6, "icon" => "🌦️"],
    "Southampton" => ["temp" => 14, "weather" => "Clear Sky", "humidity" => 60, "windSpeed" => 3, "icon" => "🌞"],
    "Nottingham" => ["temp" => 11, "weather" => "Partly Cloudy", "humidity" => 72, "windSpeed" => 4, "icon" => "🌤️"],
    "Leicester" => ["temp" => 12, "weather" => "Cloudy", "humidity" => 73, "windSpeed" => 4, "icon" => "☁️"],
    "Brighton" => ["temp" => 15, "weather" => "Sunny", "humidity" => 62, "windSpeed" => 3, "icon" => "☀️"],
    "Plymouth" => ["temp" => 13, "weather" => "Overcast", "humidity" => 70, "windSpeed" => 5, "icon" => "☁️"],
    "Aberdeen" => ["temp" => 7, "weather" => "Windy", "humidity" => 79, "windSpeed" => 9, "icon" => "🌬️"],
    "Norwich" => ["temp" => 12, "weather" => "Showers", "humidity" => 75, "windSpeed" => 6, "icon" => "🌦️"],
    "Swansea" => ["temp" => 11, "weather" => "Rainy", "humidity" => 83, "windSpeed" => 7, "icon" => "🌧️"],
    "Stoke" => ["temp" => 16, "weather" => "Rainy", "humidity" => 63, "windSpeed" => 9, "icon" => "🌧️"]
];

// Default city
$city = "London"; 

// Check if a city is selected from the form
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}

// Fetch weather details for the selected city
$selectedWeather = $weatherData[$city];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Page (UK Cities)</title>
    <link rel="icon" href="weather-icon.png" type="image/png"> <!-- Favicon -->
    <link rel="stylesheet" href="css/style.css" type="text/css"> <!-- Default style -->
    <?php
        if(isset($_COOKIE['css'])){
            $css = $_COOKIE['css'];
            echo "<link id=\"cssSelector\" type=\"text/css\" rel=\"stylesheet\" href=\"css/css.css\">";
        } else {
            echo "<link id=\"cssSelector\" type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\">";
        }
    ?>
</head>
<body>

<!-- City Selection Form -->
<div class="weather-form">
    <form method="GET" action="">
        <label for="city">
            Choose a UK city:
        </label>
        <select name="city" id="city">
            <?php
            foreach ($weatherData as $cityName => $data) {
                echo "<option value='$cityName' " . (($city == $cityName) ? 'selected' : '') . ">$cityName</option>";
            }
            ?>
        </select>
        <button type="submit">Get Weather</button>
    </form>
</div>

<!-- Display Weather Information -->
<div class="weather-card">
    <h2><?php echo htmlspecialchars($city); ?></h2>
    <div class="icon"><?php echo $selectedWeather['icon']; ?></div>
    <p class="temp"><?php echo $selectedWeather['temp']; ?>°C</p>
    <p class="condition"><?php echo ucfirst($selectedWeather['weather']); ?></p>
    <p>Humidity: <?php echo $selectedWeather['humidity']; ?>%</p>
    <p>Wind Speed: <?php echo $selectedWeather['windSpeed']; ?> m/s</p>
</div>

<!-- Footer with Theme Toggle -->
<footer>
        <div id="footer_left">
            <p>&copy; Tyler - <span id="CRYear" ></span></p>
            <p>Cookie Notification: WE USE COOKIES! If you continue to use this site, you agree to using cookies.</p>
        </div>
        <div id="footer_right">
            <p>Hight Contrast Mode</p>
            <label class="switch">
                <?php
                if (isset($css)){
                    if($css == "style.css"){
                        echo "<input id=\"cssTheme\" name=\"highContrast\" type=\"checkbox\" onclick=\"cssSwap()\">";
                    } else {
                        echo "<input id=\"cssTheme\" name=\"highContrast\" type=\"checkbox\" onclick=\"cssSwap()\" checked=\"true\">";
                    }
                    
                } 
                ?>
                <span class="slider round"></span>
            </label>
        </div>
    </footer>

<script src="js/copyrightYear.js"></script>
<script src="js/javascript.js"></script> <!-- Fixed script source typo -->

</body>
</html>