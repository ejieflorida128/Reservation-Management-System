<?php
         session_start();
         include('../connection/conn.php');
         include('sidebar.php');
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dasboard.css">
</head>
<body>

        <article>
                <div class="header">
                <h2>Admin Dashboard</h2>
                </div>
                <div class="container" style = "margin-top: 60px;">
                        <div class="section1" style = "display: flex;">
                          
                            <div class="boxs">
                                <div class="title">
                                        User Account Count
                                </div>  
                                <div class="count">
                                        <h2>
                                            <?php
                                                    $checkAccount = "SELECT * FROM user";
                                                    $check = mysqli_query($connforMyOnlineDb,$checkAccount);

                                                    $no = 0 ;

                                                    while($test = mysqli_fetch_assoc($check)){
                                                        $no++;
                                                    }

                                                    echo $no;
                                            ?>
                                        </h2>
                                </div>
                                <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
                                </div>
                            </div>
                            


                           
                            <div class="boxs">
                                <div class="title">
                                        User Reservation Count
                                </div>
                                <div class="count">
                                <h2>
                                            <?php
                                                    $checkAccount = "SELECT * FROM reservation WHERE status = 'accepted'";
                                                    $check = mysqli_query($connforMyOnlineDb,$checkAccount);

                                                    $no = 0 ;

                                                    while($test = mysqli_fetch_assoc($check)){
                                                        $no++;
                                                    }

                                                    echo $no;
                                            ?>
                                        </h2>
                                </div>
                                <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-r-square-fill" viewBox="0 0 16 16">
  <path d="M6.835 5.092v2.777h1.549c.995 0 1.573-.463 1.573-1.36 0-.913-.596-1.417-1.537-1.417z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.5 4.002h3.11c1.71 0 2.741.973 2.741 2.46 0 1.138-.667 1.94-1.495 2.24L11.5 12H9.98L8.52 8.924H6.836V12H5.5z"/>
</svg>
                                </div>
                            </div>
                       
                        </div>
                        <div class="section2" style = "display: flex;">
                        
                        <a href = "reservations.php" style = "text-decoration: none; color:rgb(61, 59, 59);">
                        <div class="box">
                                <div class="title">
                                    User Reservations
                                </div>
                                <div class="a_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
</svg>
                                </div>
                                <div class="a_dis">
                                    <p style = "font-size: 14px;">Click Here in order to proceed to User Reservations!</p>
                                </div>
                            </div>
                        </a>

                <a href = "accounts.php" style = "text-decoration: none; color: rgb(61, 59, 59);">
                            <div class="box">
                                <div class="title">
                                    User Accounts
                                </div>
                                <div class="a_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
</svg>
                                </div>
                                <div class="a_dis">
                                <p style = "font-size: 14px;">Click Here in order to proceed to User Accounts!</p>
                                </div>
                            </div>
                        </div>
                   </a>
                </div>
                <div class="footer">
                <p>I am Brenda Taghoy - Researvation Management System  @ 2024 / Slsu 2nd Year</p>
                </div>
        </article>
    
</body>
</html>