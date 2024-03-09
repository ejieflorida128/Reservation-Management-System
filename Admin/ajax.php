<?php

include('../connection/conn.php');
session_start();

if(isset($_POST['searchUserAccount']) && $_POST['searchUserAccount'] == true){
    if($_POST['searchValue'] == null){
        $table = '<div style="max-height: 420px; max-width: 1000px; overflow-y: auto;">'; // Added max-height and overflow-y properties
    $table .= '<table class="table table-bordered table-hover" style = "box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1); ">
            <thead class="table-dark" id="table-header" style="position: sticky; top: 0; background-color: #343a40; color: white;">
            <tr> 
                <th scope="col" class="text-center align-middle">No.</th>
                <th scope="col" class="text-center align-middle">Username</th>
                <th scope="col" class="text-center align-middle">Password</th>
                <th scope="col" class="text-center align-middle">Fullname</th>
                <th scope="col" class="text-center align-middle">Age</th>
                <th scope="col" class="text-center align-middle">Gmail</th>
                <th scope="col" class="text-center align-middle">Location</th>
                <th scope="col" class="text-center align-middle">Number</th>
              
            </tr>
            </thead>
            <tbody>';
            
          

    $sql = "SELECT * FROM user ORDER BY id DESC";
    $result = mysqli_query($connforMyOnlineDb, $sql);
    $no = 0;

    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $no++;
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $fullname = $row['fullname'];
        $age = $row['age'];
        $gmail = $row['gmail'];
        $location = $row['location'];
        $number = $row['number'];
        

        $table .= '<tr>
            <td scope="row" class="text-center align-middle">' . $no . '</td>
            <td scope="row" class="text-center align-middle">' . $username . '</td>
            <td class="text-center align-middle">' . $password . '</td>
            <td class="text-center align-middle">' . $fullname . '</td>
            <td class="text-center align-middle">' . $age . '</td>
            <td class="text-center align-middle">' . $gmail . '</td>
            <td class="text-center align-middle">' . $location . '</td>
            <td class="text-center align-middle">' . $number . '</td>
       
    </td>
            
        </tr>';

        $number++;
    }
}else{
    // If no data, display a row with "No Data Information"
    $table .= '<tr><td colspan="8" class="text-center" style = "font-size: 20px; letter-spacing: 4px; background-color: #d95f57;">No Data Information</td></tr>';
}

    $table .= '</tbody></table></div>';
    
    // Return the generated table markup as the response
    echo $table;
    }else{
      

        if(isset($_POST['searchValue'])){

         $value = $_POST['searchValue'];

          $table = '<div style="max-height: 400px; max-width: 1000px; overflow-y: auto;">'; // Added max-height and overflow-y properties
          $table .= '<table class="table table-bordered table-hover" style = "box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1); ">
                  <thead class="table-dark" id="table-header" style="position: sticky; top: 0; background-color: #343a40; color: white;">
                  <tr> 
                        <th scope="col" class="text-center align-middle">No.</th>
                        <th scope="col" class="text-center align-middle">Username</th>
                        <th scope="col" class="text-center align-middle">Password</th>
                        <th scope="col" class="text-center align-middle">Fullname</th>
                        <th scope="col" class="text-center align-middle">Age</th>
                        <th scope="col" class="text-center align-middle">Gmail</th>
                        <th scope="col" class="text-center align-middle">Location</th>
                        <th scope="col" class="text-center align-middle">Number</th>
                       
                  </tr>
                  </thead>
                  <tbody>';

          $fullname = $_SESSION['fullname'];
      
          $sql = "SELECT * FROM user WHERE username LIKE '%$value%' OR password LIKE '%$value%' OR gmail LIKE '%$value%' OR fullname LIKE '%$value%' OR location LIKE '%$value%' OR age LIKE '%$value%' ORDER BY id DESC";

          $result = mysqli_query($connforMyOnlineDb, $sql);
          $no = 0;
      
          if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {

            $no++;

            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            $fullname = $row['fullname'];
            $age = $row['age'];
            $gmail = $row['gmail'];
            $location = $row['location'];
            $number = $row['number'];
            
    
            $table .= '<tr>
            <td scope="row" class="text-center align-middle">' . $no . '</td>
            <td scope="row" class="text-center align-middle">' . $username . '</td>
            <td class="text-center align-middle">' . $password . '</td>
            <td class="text-center align-middle">' . $fullname . '</td>
            <td class="text-center align-middle">' . $age . '</td>
            <td class="text-center align-middle">' . $gmail . '</td>
            <td class="text-center align-middle">' . $location . '</td>
            <td class="text-center align-middle">' . $number . '</td>
          
                
            </tr>';
    
          }
      }else{
          $table .= '<tr><td colspan="8" class="text-center" style = "font-size: 20px; letter-spacing: 4px; background-color: #d95f57;">No Data Information</td></tr>';
  
          }
      
          $table .= '</tbody></table></div>';
          
          // Return the generated table markup as the response
          echo $table;
  
  
        }

       
    }
}


// reservation

if(isset($_POST['searchUserReservation']) && $_POST['searchUserReservation'] == true){
    if($_POST['searchValue'] == null){
        $table = '<div style="max-height: 420px; max-width: 1000px; overflow-y: auto;">'; // Added max-height and overflow-y properties
    $table .= '<table class="table table-bordered table-hover" style = "box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1); ">
            <thead class="table-dark" id="table-header" style="position: sticky; top: 0; background-color: #343a40; color: white;">
            <tr> 
                <th scope="col" class="text-center align-middle">No.</th>
                <th scope="col" class="text-center align-middle">Ship Name</th>
                <th scope="col" class="text-center align-middle">Fullname</th>
                <th scope="col" class="text-center align-middle">Location</th>
                <th scope="col" class="text-center align-middle">Age</th>
                <th scope="col" class="text-center align-middle">Number</th>
                <th scope="col" class="text-center align-middle">Ticket Quantity</th>
                <th scope="col" class="text-center align-middle">Reservation Date</th>
                <th scope="col" class="text-center align-middle">Actions</th>

            </tr>
            </thead>
            <tbody>';
            
          

    $sql = "SELECT * FROM reservation ORDER BY id DESC";
    $result = mysqli_query($connforMyOnlineDb, $sql);
    $no = 0;

    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $no++;
        $id = $row['id'];
        $ShipName = $row['ShipName'];
        $fullname = $row['fullname'];
        $location = $row['location'];
        $age = $row['age'];
        $number = $row['number'];
        $quantity = $row['quantity'];
        $date = $row['date'];
        

        $table .= '<tr>
            <td scope="row" class="text-center align-middle">' . $no . '</td>
            <td scope="row" class="text-center align-middle">' . $ShipName . '</td>
            <td class="text-center align-middle">' . $fullname . '</td>
            <td class="text-center align-middle">' . $location . '</td>
            <td class="text-center align-middle">' . $age . '</td>
            <td class="text-center align-middle">' . $number . '</td>
            <td class="text-center align-middle">' . $quantity . '</td>
            <td class="text-center align-middle">' . $date . '</td>
            <td class="text-center align-middle" style = "display: flex; justify-content: center;">
                    <button style = "margin-top: 7px;" onclick = "ToEdit('.$id.')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg>
                    </button>
                    <button style = "margin-top: 7px;" onclick = "Delete('.$id.')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                        </svg>
                    </button>
            </td>
            
        </tr>';

     
    }
}else{
    // If no data, display a row with "No Data Information"
    $table .= '<tr><td colspan="9" class="text-center" style = "font-size: 20px; letter-spacing: 4px; background-color: #d95f57;">No Data Information</td></tr>';
}

    $table .= '</tbody></table></div>';
    
    // Return the generated table markup as the response
    echo $table;
    }else{
      

        if(isset($_POST['searchValue'])){

         $value = $_POST['searchValue'];

          $table = '<div style="max-height: 400px; max-width: 1000px; overflow-y: auto;">'; // Added max-height and overflow-y properties
          $table .= '<table class="table table-bordered table-hover" style = "box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1); ">
                  <thead class="table-dark" id="table-header" style="position: sticky; top: 0; background-color: #343a40; color: white;">
                  <tr> 
                  <th scope="col" class="text-center align-middle">No.</th>
                  <th scope="col" class="text-center align-middle">Ship Name</th>
                  <th scope="col" class="text-center align-middle">Fullname</th>
                  <th scope="col" class="text-center align-middle">Location</th>
                  <th scope="col" class="text-center align-middle">Age</th>
                  <th scope="col" class="text-center align-middle">Number</th>
                  <th scope="col" class="text-center align-middle">Ticket Quantity</th>
                  <th scope="col" class="text-center align-middle">Reservation Date</th>
                  <th scope="col" class="text-center align-middle">Actions</th>
                  </tr>
                  </thead>
                  <tbody>';

          $fullname = $_SESSION['fullname'];
      
          $sql = "SELECT * FROM reservation WHERE ShipName LIKE '%$value%' OR fullname LIKE '%$value%' OR location LIKE '%$value%' OR age LIKE '%$value%' ORDER BY id DESC";

          $result = mysqli_query($connforMyOnlineDb, $sql);
          $no = 0;
      
          if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {

            $no++;
            $id = $row['id'];
            $ShipName = $row['ShipName'];
            $fullname = $row['fullname'];
            $location = $row['location'];
            $age = $row['age'];
            $number = $row['number'];
            $quantity = $row['quantity'];
            $date = $row['date'];
            
    
            $table .= '<tr>
                <td scope="row" class="text-center align-middle">' . $no . '</td>
                <td scope="row" class="text-center align-middle">' . $ShipName . '</td>
                <td class="text-center align-middle">' . $fullname . '</td>
                <td class="text-center align-middle">' . $location . '</td>
                <td class="text-center align-middle">' . $age . '</td>
                <td class="text-center align-middle">' . $number . '</td>
                <td class="text-center align-middle">' . $quantity . '</td>
                <td class="text-center align-middle">' . $date . '</td>
                <td class="text-center align-middle" style = "display: flex; justify-content: center;">
                <button style = "margin-top: 7px;" onclick = "ToEdit('.$id.')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg>
                </button>
                <button style = "margin-top: 7px;" onclick = "Delete('.$id.')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                </button>
        </td>
                
            </tr>';
          }
      }else{
          $table .= '<tr><td colspan="9" class="text-center" style = "font-size: 20px; letter-spacing: 4px; background-color: #d95f57;">No Data Information</td></tr>';
  
          }
      
          $table .= '</tbody></table></div>';
          
          // Return the generated table markup as the response
          echo $table;
  
  
        }

       
    }
}


//edit users reservation

if(isset($_POST['editReservationData']) && $_POST['editReservationData'] == true){
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];

        $sql = "UPDATE reservation SET quantity = '$quantity', date = '$date' WHERE id = $id";
        mysqli_query($connforMyOnlineDb,$sql);
}


//delete reservation for user
if(isset($_POST['DeleteReservation']) && $_POST['DeleteReservation'] == true){
    $id = $_POST['id'];
   
    $sql = "DELETE FROM reservation WHERE id = $id";
    mysqli_query($connforMyOnlineDb,$sql);
}









?>