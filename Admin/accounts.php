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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="accounts.css">
</head>
<body>


<article>
                <div class="header">
                <h2>View User Account Information</h2>
                <div class = "searchBar" style = "display: flex; margin-top: 80px; position: absolute; top: -60px; left: 20px;">
                                        <input type = "text" name = "searchData" id = "searchData" class = "form-control">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style = "position: absolute; top: 5px; left: 220px;">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
                            </div>  
                </div>
                <div class="main">
                        <div class="containert" style = "margin-top: 100px; margin-left: -40px; display: flex; ">
                                <div class="tableForUserAccount" id = "tableForUserAccount"></div>
                                
                        </div>
    

                </div>
                <div class="footer">
                     <p>I am Brenda Taghoy - Researvation Management System  @ 2024 / Slsu 2nd Year</p>
                </div>
            </article>
    

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


            <script>
                  $(document).ready(function () {
                        DisplaTableForUserAccounts(null);
                                $("#searchData").on('input', function () {
                                    var value = $(this).val();

                                    DisplaTableForUserAccounts(value);

                                });         
                      });

            function refreshIfClose(){
                    $(document).ready(function () {
                     location.reload();
                     DisplaTableForUserAccounts(null);              
            });
            }



            function DisplaTableForUserAccounts(searchValue) {
                    $.ajax({
                        url: "ajax.php",
                        type: 'post',
                        data: {
                            searchUserAccount: true,
                            searchValue: searchValue
                        },
                        success: function (data, status) {
                            console.log(data); // Check the data in the console
                            $('#tableForUserAccount').html(data);                       
                        }
                    });
                }



                </script>
</body>
</html>