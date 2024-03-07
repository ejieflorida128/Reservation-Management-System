<?php
    include('../connection/conn.php');


        if(isset($_POST['EditInformationOfTheSaidProfileAccount'])){

            $id = $_POST['EditInformationOfTheSaidProfileAccount'];
        
            $sql = "SELECT * FROM user WHERE id = '$id' ";
            $result = mysqli_query($conn,$sql);
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
            mysqli_query($conn, $sql);
          }
?>