<?php
header("HTTP/1.1 503 Service Temporarily Unavailable");
header("Status: 503 Service Temporarily Unavailable");
header("Retry-After: 900");
?>
<!DOCTYPE html>
<html>
<head>
<title>AetherHub.com maintenance</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
    body {
        background-color: #337ab7;
        color: #ffffff;
    }

    a:link {
        color: #ffffff;
    }

    a:visited {
        color: #ffffff;
    }

    a:hover {
        color: #ffffff;
    }

    a:active {
        color: #ffffff;
    }
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="hidden-sm-down col-md-1 col-lg-3"></div>
        <div class="col-cs-12 col-sm-12 col-md-10 col-lg-6 text-center">
            <img class="img-fluid" src="https://aetherhub.github.io/dl/Logo1Large.png">
            <div class="mt-5">
                <h1>AetherHub.com is down for planned system maintenance</h1>
                <h4>The update window is 20minutes. We will be live again soon.</h4>
            </div>
        </div>
        <div class="hidden-sm-down col-md-1 col-lg-3"></div>
    </div>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <a href="https://discord.aetherhub.com" target="_blank"><i class="fab fa-discord fa-3x fa-fw" title="Join us on Discord"></i></a>
            <a href="https://twitter.com/AetherHubMedia" target="_blank"><i class="fab fa-twitter fa-3x fa-fw" title="Follow us on Twitter"></i></a>
        </div>
    </div>
</div>
</body>
</html>