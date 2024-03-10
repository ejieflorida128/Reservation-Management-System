<?php
    include('../connection/conn.php');
    session_start();


        if(isset($_POST['EditInformationOfTheSaidProfileAccount'])){

            $id = $_POST['EditInformationOfTheSaidProfileAccount'];
        
            $sql = "SELECT * FROM user WHERE id = '$id' ";
            $result = mysqli_query($connforMyOnlineDb,$sql);
            $response = array();
        
            while($row = mysqli_fetch_assoc($result)){
                $response = $row;
            }
        
            echo json_encode($response);
        }else{
            $response['status'] =   200;
            $response['message'] = "Invalid or Data Information!";
        }


        if(isset($_POST['EditClicked'])){
      
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $number = $_POST['number'];
            $location = $_POST['location'];
            $gmail = $_POST['gmail'];
            if(empty($_POST['pic']) || $_POST['pic'] == null){
              $pic = "../profile_pictures/default.jpg";
            }else{
              
              $pic = "../profile_pictures/".$_POST['pic'];
            }
            $SelectedIdToBeEdited = $_POST['SelectedIdToBeEdited'];
            $sex = $_POST['sex'];
          
            $sql = "UPDATE user SET fullname = '$fullname', age = '$age', location = '$location', img = '$pic' , number = '$number',gmail = '$gmail',sex = '$sex' WHERE id = '$SelectedIdToBeEdited'";
            mysqli_query($connforMyOnlineDb, $sql);
          }





   if (isset($_POST['searchShips']) && $_POST['searchShips'] == true){

        $value = $_POST['searchValue'];

        if($value == null){
          // if walay value ang search bar

            $getAllItems = "SELECT * FROM ships ORDER BY id DESC";
            $queryForItems = mysqli_query($connforMyOnlineDb,$getAllItems);

            $counToRow = 0;

            $div = '<div class = "row">';

            while($get = mysqli_fetch_assoc($queryForItems)){

              $counToRow ++;

                $picInDb = '../Ships/'.$get['image'];
                $shipId = $get['id'];
                $name = $get['name'];
          

                $div.='
                <div class="col-md-4">
                <div class="card" style="width: 17rem; height: 24rem; margin: 30px; box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1);">
                <img src='.$picInDb.' class="card-img-top" style = "height: 300px;">
                <div class="card-body">
                <h5 class="card-title" style = "display: flex; justify-content: center; color: rgb(114, 111, 111);"></h5>
                <h6 class="card-text"  style = "display: flex; justify-content: center; color: rgb(114, 111, 111); position: relative; top: -20px;" > '.$name.' </h6>
                
                <button onclick="ToReserve('.$shipId.', \''.$name.'\')" class="btn btn-success" style="width:235px; position: absolute; bottom: 10px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reserve">
                <div style = "margin-left: 15px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-card-checklist" viewBox="0 0 16 16" style = "position: relative; left: -10px;">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
              </svg>
                  Reserve 
                </div>
                
                </button>
              
                  </div>
              </div>
              </div>
                
                
                ';
                
              
                if($counToRow % 3 == 0){
                  $div .= '</div>'; // Close current row
                  $div .= '<div class="row">'; // Start new row
                }
            }


            
            $div.='</div>';
            echo $div;
    
            
        }else{

          // if naay value ang search bar

          $getAllItems = "SELECT * FROM ships WHERE name LIKE '%$value%'";
          $queryForItems = mysqli_query($connforMyOnlineDb,$getAllItems);

          $counToRow = 0;

          $div = '<div class = "row">';

          while($get = mysqli_fetch_assoc($queryForItems)){

            $counToRow ++;

            $picInDb = '../Ships/'.$get['image'];
            $shipId = $get['id'];
            $name = $get['name'];
      

            $div.='
            <div class="col-md-4">
            <div class="card" style="width: 17rem; height: 24rem; margin: 30px; box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1);">
            <img src='.$picInDb.' class="card-img-top" style = "height: 300px;">
            <div class="card-body">
            <h5 class="card-title" style = "display: flex; justify-content: center; color: rgb(114, 111, 111);"></h5>
            <h6 class="card-text"  style = "display: flex; justify-content: center; color: rgb(114, 111, 111); position: relative; top: -20px;" > '.$name.' </h6>
            <button onclick="Reserve('.$shipId.', \''.$name.'\')" class="btn btn-success" style="width:235px; position: absolute; bottom: 10px;"> 
                <div style = "margin-left: 15px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-card-checklist" viewBox="0 0 16 16" style = "position: relative; left: -10px;">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
              </svg>
                  Reserve 
                </div>
                
                </button>
          
              </div>
          </div>
          </div>
            
            
            ';
            
          
                  if($counToRow % 3 == 0){
                    $div .= '</div>'; // Close current row
                    $div .= '<div class="row">'; // Start new row
                  }
              }
                
            $div.='</div>';
            echo $div;
          }
        }




        if(isset($_POST['ReserveShip']) && $_POST['ReserveShip'] == true){
              $ShipId = $_POST['ShipId'];
              $ShipName = $_POST['ShipName'];
              $fullname = $_POST['fullname'];
              $location = $_POST['location'];
              $age = $_POST['age'];
              $UserId = $_POST['UserId'];
              $number = $_POST['number'];
              $quantity = $_POST['quantity'];
              $date = $_POST['date'];

              $sql = "INSERT INTO reservation (UserId,ShipId,ShipName,fullname,location,age,number,quantity,date) VALUES ('$UserId','$ShipId','$ShipName','$fullname','$location','$age','$number','$quantity','$date')";
              mysqli_query($connforMyOnlineDb,$sql);

        }


        






        // my reservation

        if(isset($_POST['searchReservation']) && $_POST['searchReservation'] == true){
          if($_POST['searchValue'] == null){
            $table = '<div style="max-height: 420px; max-width: 1000px; overflow-y: auto;">'; // Added max-height and overflow-y properties
        $table .= '<table class="table table-bordered table-hover" style = "box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1); ">
                <thead class="table-dark" id="table-header" style="position: sticky; top: 0; background-color: #343a40; color: white;">
                <tr> 
                    <th scope="col" class="text-center align-middle">No.</th>
                    <th scope="col" class="text-center align-middle">Ship Name</th>
                    <th scope="col" class="text-center align-middle">Fullname</th>
                    <th scope="col" class="text-center align-middle">Age</th>
                    <th scope="col" class="text-center align-middle">Location</th>
                    <th scope="col" class="text-center align-middle">Number</th>
                    <th scope="col" class="text-center align-middle">Ticket Quantity</th>
                    <th scope="col" class="text-center align-middle">Reservation Date</th>
                </tr>
                </thead>
                <tbody>';
                
                $fullname = $_SESSION['fullname'];
    
        $sql = "SELECT * FROM reservation WHERE fullname = '$fullname' ORDER BY id DESC";
        $result = mysqli_query($connforMyOnlineDb, $sql);
        $no = 0;
    
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $no++;
            $id = $row['id'];
            $ShipName = $row['ShipName'];
            $fullname = $row['fullname'];
            $age = $row['age'];
            $location = $row['location'];
            $number = $row['number'];
            $quantity = $row['quantity'];
            $date = $row['date'];
            
    
            $table .= '<tr>
                <td scope="row" class="text-center align-middle">' . $no . '</td>
                <td scope="row" class="text-center align-middle">' . $ShipName . '</td>
                <td class="text-center align-middle">' . $fullname . '</td>
                <td class="text-center align-middle">' . $age . '</td>
                <td class="text-center align-middle">' . $location . '</td>
                <td class="text-center align-middle">' . $number . '</td>
                <td class="text-center align-middle">' . $quantity . '</td>
                <td class="text-center align-middle">' . $date . '</td>
                
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
                      <th scope="col" class="text-center align-middle">Ship Name</th>
                      <th scope="col" class="text-center align-middle">Fullname</th>
                      <th scope="col" class="text-center align-middle">Age</th>
                      <th scope="col" class="text-center align-middle">Location</th>
                      <th scope="col" class="text-center align-middle">Number</th>
                      <th scope="col" class="text-center align-middle">Ticket Quantity</th>
                      <th scope="col" class="text-center align-middle">Reservation Date</th>
                      </tr>
                      </thead>
                      <tbody>';
  
              $fullname = $_SESSION['fullname'];
          
              $sql = "SELECT * FROM reservation WHERE fullname = '$fullname' AND (ShipName LIKE '%$value%' OR fullname LIKE '%$value%' OR location LIKE '%$value%' OR date LIKE '%$value%' OR age LIKE '%$value%') ORDER BY id DESC";

              $result = mysqli_query($connforMyOnlineDb, $sql);
              $no = 0;
          
              if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $no++;
                $id = $row['id'];
                $ShipName = $row['ShipName'];
                $fullname = $row['fullname'];
                $age = $row['age'];
                $location = $row['location'];
                $number = $row['number'];
                $quantity = $row['quantity'];
                $date = $row['date'];
                
        
                $table .= '<tr>
                    <td scope="row" class="text-center align-middle">' . $no . '</td>
                    <td scope="row" class="text-center align-middle">' . $ShipName . '</td>
                    <td class="text-center align-middle">' . $fullname . '</td>
                    <td class="text-center align-middle">' . $age . '</td>
                    <td class="text-center align-middle">' . $location . '</td>
                    <td class="text-center align-middle">' . $number . '</td>
                    <td class="text-center align-middle">' . $quantity . '</td>
                    <td class="text-center align-middle">' . $date . '</td>
                    
                </tr>';
        
                $number++;
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
        
?>