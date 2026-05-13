<?php
    include('data.php'); //Include all data from data.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forecast</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <div class="nav-logo">
                <div class="nav-logo-box">
                    <svg class="nav-logo-box-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                    <a href="/forc" class="nav-logo-link">VTDT Sky</a>
                </div>
                <div class="nav-logo-box">
                    <img src="https://forecast-app-vtdt.vercel.app/images/google-maps.gif" alt="location" class="nav-link-image">
                    <p class="nav-logo-text">
                        <?php echo $forecast["city"]["name"]; ?>,
                        <?php echo getCountry($forecast["city"]["country"]); ?>
                    </p>
                </div>
            </div>

            <div class="nav-info">
                <div>
                    <form>
                        <svg class="nav-info-input-svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2a9 9 0 1 0 6.293 15.293l4.707 4.707a1 1 0 0 0 1.414-1.414l-4.707-4.707A9 9 0 0 0 11 2zM11 4a7 7 0 1 1 0 14 7 7 0 0 1 0-14z"></path>
                        </svg>
                        <input class="nav-info-input" type="search" name="Search" placeholder="Search Location">
                    </form>
                </div>
                <button class="nav-info-button" type="button">
                    <svg class="nav-info-button-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                    </svg>
                    Light
                </button>
            </div>

            <div class="nav-links">
                <img src="https://forecast-app-vtdt.vercel.app/images/notification.gif" alt="notification" class="nav-link-image">
                <img src="https://forecast-app-vtdt.vercel.app/images/settings.gif" alt="settings" class="nav-link-image">
            </div>
        </div>

        <div class="content">
        <div class="weather-left">
            <div class="currentweather">
                <div class="card">
                    <div class="align-selector">
                        <div class="align-left">
                        <div>
                            Current weather
                        </div>
                            Local time: <?php echo date("g:i A"); ?>
                            <div class="align-icon-img bold-text">
                                <img src="https://cdn.weatherapi.com/weather/64x64/night/116.png" alt="weather icon">
                                <?php echo $firstDayMax; ?> °C
                            </div>
                            Feels like <?php echo $feelsLike; ?> °C
                        </div>
                        <select>
                                <option value="cel-km">Celsius and Kilometers</option>
                                <option value="fh-mile">Fahrenheit and Miles</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="info-about-weather">
                <div class="small-card card-text">
                    <div class="align-icon-img">
                        <img src="https://forecast-app-vtdt.vercel.app/images/wind.gif" alt="wind" class="weather-info-icons">
                        <p>Wind</p>
                    </div>
                    <?php echo $windSpeed; ?> km/h
                </div>

                <div class="small-card card-text">
                    <div class="align-icon-img">
                        <img src="https://forecast-app-vtdt.vercel.app/images/humidity.gif" alt="humidity" class="weather-info-icons">
                        <p>Humidity</p>
                    </div>
                    <?php echo $humidity; ?>%
                </div>
                <div class="small-card card-text">
                    <div class="align-icon-img">
                        <img src="https://forecast-app-vtdt.vercel.app/images/air-pump.gif" alt="pressure" class="weather-info-icons">
                        <p>Pressure</p>
                    </div>
                    <?php echo $pressure; ?> in
                </div>

                <div class="small-card card-text">
                    <div class="align-icon-img">
                        <img src="https://forecast-app-vtdt.vercel.app/images/clouds.gif" alt="clouds" class="weather-info-icons">
                        <p>Clouds</p>
                    </div>
                    <?php echo $clouds; ?>
                </div>
            </div>
            <div class="card">
                <div class="sun-moon-align">
                    <div class="sun-icon">
                    Sun Summary
                    <img src="https://forecast-app-vtdt.vercel.app/images/sun.gif" alt="Sunrise" class="sun-moon-images">
                    </div>
                    <div class="sun-moon-time">
                        <div class="align-images">
                            <img src="https://forecast-app-vtdt.vercel.app/images/field.gif" alt="sunrise-img" class="sunset-sunrise-img">
                            Sunrise<br>
                            <?php echo timeConvert($sunrise); ?>
                        </div>
                        <svg class="sun-moon-svg" viewBox="0 0 100 50">
                            <path d="M 10,50 A 40,40 0 1 1 90,50" fill="none" stroke="#e5e5e5" stroke-width="10"></path>
                            <path d="M 10,50 A 40,40 0 1 1 90,50" fill="none" stroke="#f59e0b" stroke-width="10" stroke-dasharray="126" stroke-dashoffset="126"></path>
                        </svg>
                        <div class="align-images">
                            <img src="https://forecast-app-vtdt.vercel.app/images/sunset.gif" alt="sunset-img" class="sunset-sunrise-img">
                            Sunset<br>
                            <?php echo timeConvert($sunset); ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="week-schedule">
                <div class="buttons-schedule">
                    <input type="button" value="Today" class="button-schedule">
                    <input type="button" value="Tomorrow" class="button-schedule">
                    <input type="button" value="10 Days" class="button-schedule">
                </div>
                <div class="todays-forecast">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>