<form action="sitebuilder.php" method="POST">
    <button type="submit" name="makesite">Generate States Website</button>
</form>

<?php

if(isset($_POST['makesite'])) {
    echo 'Site Completed';
}

$states = array(
    "Alabama",
    "Alaska",
    "Arizona",
    "Arkansas",
    "California",
    "Colorado",
    "Connecticut",
    "Delaware",
    "Florida",
    "Georgia",
    "Hawaii",
    "Idaho",
    "Illinois",
    "Indiana",
    "Iowa",
    "Kansas",
    "Kentucky",
    "Louisiana",
    "Maine",
    "Maryland",
    "Massachusetts",
    "Michigan",
    "Minnesota",
    "Mississippi",
    "Missouri",
    "Montana",
    "Nebraska",
    "Nevada",
    "New Hampshire",
    "New Jersey",
    "New Mexico",
    "New York",
    "North Carolina",
    "North Dakota",
    "Ohio",
    "Oklahoma",
    "Oregon",
    "Pennsylvania",
    "Rhode Island",
    "South Carolina",
    "South Dakota",
    "Tennessee",
    "Texas",
    "Utah",
    "Vermont",
    "Virginia",
    "Washington",
    "West Virginia",
    "Wisconsin",
    "Wyoming"
);

foreach($states as $state) {
//build all pages

$stateunderscore = preg_replace('/\s+/', '_', $state);
$stateunderscorelowercase = strtolower($stateunderscore);

$myfile = fopen("pages/".$stateunderscorelowercase.".html", "w") or die("Unable to open file!");
$iframeWidth = "80%"; 
$txt = <<<EOT
<!DOCTYPE html>
<html>
<head>
    <title>$state</title>
    <style>
        iframe {
            width: $iframeWidth;
            height: 80vh;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="https://portfolio.rickyweeksjr.opalstacked.com/">Portfolio</a>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/projects/myguests">My Guests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projects/movies">Movie Tracker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projects/100">100 Pages</a>
            <li class="nav-item active">
                <a class="nav-link" href="/projects/states">50 States</a>
            </li>
        </ul>
    </div>
</nav>
<h1>$state</h1>
<img src="https://jaxcode.com/stateflags/$stateunderscore.svg.png" alt="50 state maps" class="img-responsive"><br><br>
<iframe src="https://en.wikipedia.org/wiki/$stateunderscore" title="$state"></iframe>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
EOT;;
fwrite($myfile, $txt);
fclose($myfile);

}

?>