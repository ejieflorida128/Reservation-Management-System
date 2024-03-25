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
    <title>Pending</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="reservations.css">
</head>
<body>

 


    <article>
                    <div class="header">
                    <h2>Pending Reservations</h2>
                   
                    </div>
                    <div class="main">
                                    <div class="container" style = "margin-top: 80px;">
                                <table class = "table">
                                        <thead class = "table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Ship Name</th>
                                                <th>Fullname</th>
                                                <th>location</th>
                                                <th>Age</th>
                                                <th>Number</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            $sql = "SELECT * FROM reservation WHERE status = 'pending'";
                                            $query = mysqli_query($connforMyOnlineDb,$sql);

                                            $count = 0;

                                            while($test = mysqli_fetch_assoc($query)){

                                                $id = $test['id'];
                                                $count++;
                                                echo'
                                                <tr>    
                                                    <td>'.$count.'</td>
                                                    <td>'.$test['ShipName'].'</td>
                                                    <td>'.$test['fullname'].'</td>
                                                    <td>'.$test['location'].'</td>
                                                    <td>'.$test['age'].'</td>
                                                    <td>'.$test['number'].'</td>
                                                    <td>'.$test['quantity'].'</td>
                                                    <td>'.$test['date'].'</td>
                                                    <td>'.$test['status'].'</td>
                                                    <td style = "display:flex; margin: 5px;">
                                                            <a href = "confirm.php?id='.$id.'" class = "btn btn-success" style = "margin: 1px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                                          </svg>
                                                            </a>
                                                            <a href = "delete.php?id='.$id.'" class = "btn btn-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                          </svg>
                                                            </a>
                                                    </td>
                                                </tr>
                                        ';
                                            }
                                            
                                               
                                            ?>
                                        </tbody>
                                </table>
                            </div>

                    </div>
                    <div class="footer">
                        <p>I am Brenda Taghoy - Researvation Management System  @ 2024 / Slsu 2nd Year</p>
                    </div>
            </article>
    
</body>
</html>