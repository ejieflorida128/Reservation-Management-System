<?php
    include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

        <article>
                <div class="header">
                <h2>Reservation Management System</h2>
                </div>
                <div class="main">
                <div class="container" style = "margin-top: 80px;">
                    <div class="section1">
                                    <a href="profile.php">
                                    <div class="box">
                                    <div class="title">
                                                Profile
                                    </div>
                                    <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="rgb(61, 59, 59)" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
                                    </div>
                                    <div class="dis">
                                            Click here to proceed in the profile section!
                                    </div>
                                </div>
                                    </a>

                                   

                                <a href="ship_reservation.php">
                                <div class="box">
                                    <div class="title">
                                            Ship Reservation
                                    </div>
                                    <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="rgb(61, 59, 59)    " class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
</svg>
                                    </div>
                                    <div class="dis">
                                        Click here to reserve ticket for a ship!
                                    </div>
                                </div>
                                </a>
                    </div>
                    <div class="section2">
                    
                                <a href="my_reservation.php">
                                <div class="box">
                                    <div class="title">
                                        My Reservation
                                    </div>
                                    <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="rgb(61, 59, 59)   " class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
</svg>
                                    </div>
                                    <div class="dis">
                                        Click here to proceed to your reserved ships!
                                    </div>
                                </div>
                                </a>


                               <a href="about.php">
                               <div class="box">
                                    <div class="title">
                                      About my Project
                                    </div>
                                    <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="rgb(61, 59, 59)" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
</svg>
                                    </div>
                                    <div class="dis">
                                        Click here to know more about the creator!
                                    </div>
                                </div>  
                               </a>
                    </div>
                </div>
                </div>
                <div class="footer">
                <p>I am Brenda Taghoy - Researvation Management System  @ 2024 / Slsu 2nd Year</p>

                </div>

               
        </article>
    
</body>
</html>