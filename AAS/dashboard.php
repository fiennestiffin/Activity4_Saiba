<?php 

session_start();

if (!isset($_SESSION["currentUserEmail"])) {
    echo "Invalid Entry";
    exit();
}

?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/main-style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/dboard-style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="main-div">
        <div class="red-div">
            <div class="logo-container d-flex flex-row align-items-center justify-content-center">
                <div class="logo-holder">
                    <div class="wmsulogo"></div>
                </div>
                <h1>WMSU</h1>
            </div>

            <div class="tabs-div d-flex flex-column align-items-center justify-content-center">
                <div class="tabs-container">
                    <ul class="nav tabs-nav nav-pills nav-fill d-flex flex-column">
                        <li class="nav-item tabs-dashboard">
                            <a class="nav-link dashboard active d-flex flex-row" aria-current="page" href="dashboard.php">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item tabs-groups">
                            <a class="nav-link groups d-flex flex-row " aria-current="page" href="groups.php">
                                <i class="material-icons">group</i>
                                <p>Groups</p>
                            </a>
                        </li>

                        <li class="nav-item tabs-appointments">
                            <a class="nav-link appointments d-flex flex-row " aria-current="page" href="appointments.php">
                                <i class="material-icons">event</i>
                                <p>Appointments</p>
                            </a>
                        </li>

                        <li class="nav-item tabs-my-events">
                            <a class="nav-link my-events d-flex flex-row " aria-current="page" href="events.php">
                                <i class="material-icons">edit_calendar</i>
                                <p>Events</p> 
                            </a>
                        </li>
                    </ul>
                </div>

                <button type="button" class="btn btn-primary ne-btn" data-bs-toggle="modal" data-bs-target="#ne-modal">New Event</button>
            </div>
            
            <div class="rbottom-div d-flex align-items-center justify-content-center">
                <div class="logout-div d-flex flex-row">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </div>
            </div>
            
        </div>

        <div class="white-div d-flex flex-column align-items-center">
            <div class="divtop d-flex justify-content-center">
                <div class="top-bar d-flex align-items-center">
                    <h5>Dashboard</h5>
                </div>
            </div>
            

            <div class="dashboard-main-div d-flex flex-row">
                <div class="dboard-left-content">
                    <div class="welcome-texts">
                        <h2>welcome</h2>
                            <?php echo "<h1> ". $_SESSION["currentUserFirstName"] . " " . $_SESSION["currentUserLastName"] . " </h1>" ?>
                        <h2 class="pos-txt">Professor</h2>
                    </div>
                    <div class="dboard-left-panels-div d-flex flex-column align-items-center">
                        <div class="panel left-panels overview-panel d-inline-flex flex-row">
                            <div class="app-today-div d-flex flex-row align-items-center justify-content-center">
                                <i class="material-icons">today</i>

                                <div class="ov-txt">
                                    <h1>XX</h1>
                                    <h2>Appointments</h2>
                                    <h3>TODAY</h3>
                                </div>
                            </div>

                            <div class="created-events-div d-flex flex-row align-items-center justify-content-center">
                                <i class="material-icons">event_available</i>

                                <div class="ov-txt">
                                    <h1>XX</h1>
                                    <h2>Created Events</h2>
                                    <h3>&nbsp</h3>
                                </div>
                            </div>

                            <div class="cancelled-div d-flex flex-row align-items-center justify-content-center">
                                <i class="material-icons">event_busy</i>

                                <div class="ov-txt">
                                    <h1>XX</h1>
                                    <h2>Cancelled</h2>
                                    <h3>&nbsp</h3>
                                </div>
                            </div>
                        </div>

                        <div class="panel left-panels today-panel">

                        </div>
                    </div>
                    
                </div>

                <div class="dboard-right-content align-items-center">
                    <div class="panel up-events d-inline-flex flex-column align-items-center">
                        <div class="up-text-holder d-flex justify-content-center">
                            <p>Upcoming Appointments</p>
                        </div>
                        
                        <div class="up-app-container d-inline-flex flex-row">
                            <div class="app-color d-flex align-items-center">
                                <div class="circle up-app-color"></div>
                            </div>
                            <div class="app-details-div d-flex flex-column justify-content-center">
                                <h1>Name</h1>
                                <p>Position/Group</p>
                            </div>
                            <div class="app-timedate d-flex flex-column justify-content-center align-items-end">
                                <p>XX:XX XM</p>
                                <p>MM-DD-YYYY</p>
                            </div>
                        </div>

                        <div class="see-more-div">
                            <a class="see-more" href="appointments.php">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>