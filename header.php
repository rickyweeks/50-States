<?php

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
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50 States</title>
    <!-- Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
                </li>
                <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="stateDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    50 States
                </a>
                <div class="dropdown-menu" aria-labelledby="stateDropdown">
                    <?php
                    foreach ($states as $state) {
                        $stateunderscorelowercase = strtolower(preg_replace('/\s+/', '_', $state));
                        echo '<a class="dropdown-item" href="pages/' . $stateunderscorelowercase . '.html">' . $state . '</a>';
                    }
                    ?>
                <li class="nav-item">
                <a class="nav-link" href="/projects/php-capstone">TaskTracker</a>
                </li>
                </div>
            </li>
        </ul>
    </div>
</nav>