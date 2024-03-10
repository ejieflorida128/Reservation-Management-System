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
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="profle.css">
</head>
<body>
    <article>
            <div class="header">
                    <h2>User Profile</h2>
            </div>

            <div class="main">
                    <div class="container" style = "margin-top: 70px; width:1100px; margin-left: -100px; display: flex; box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3); border: 2px solid grey; border-radius: 20px; padding: 20px; ">
                        <div class="section1">
                                <div class="profile">
                                    <img id ="profileImage" src = "<?php
                                             $id =  $_SESSION['id'];
                                             $sql = "SELECT * FROM user WHERE id = $id";
                                             $query = mysqli_query($connforMyOnlineDb,$sql);
                                             
                                             while($test = mysqli_fetch_assoc($query)){
                                                 echo $test['img'];
                                             }
                                    ?>" alt = "error of pic" style = "width: 450px; height: 450px;  box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3); border: 2px solid grey; border-radius: 20px;">
                                </div>
                        </div>
                        <div class="section2"  style = "margin-left: 80px; margin-top: 10px;">
                             <div class="credentials">
                                            <label for="fullname"> Fullname:</label>
                                        <input type="text" id="fullname" class="form-control" style="width: 300px">
                                        <label for="age">Age:</label>
                                        <input type="number" id="age" class="form-control" style="width: 100px">
                                        <label for="gmail">Gmail:</label>
                                        <input type="gmail" id="gmail" class="form-control" style="width: 400px">
                                        <label for="location">Location:</label>
                                        <input class="form-control" style="width: 500px" id = "location">
                                        <label for="number">Number:</label>
                                        <input class="form-control" type = "number" style="width: 200px" id = "number">
                                        <label for="number">Sex:</label><br>
                                        <select name="sex" id="sex" class = "btn btn-warning">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                </div>

                                <div class = "btns" style = "margin-left: -10px;">
                                    <label class="btn btn-primary" style="margin-left: 10px; margin-top: 20px;" for="selectProfilePicture" id = "chooseBtnForPic">Choose Profile Pic</label>
                                    <input type="file" id="selectProfilePicture" hidden onchange="displaySelectedImage(event)">
                                    <button class="btn btn-success" style="margin-left: 10px; margin-top: 20px;" onclick = "EditDataFromTheProfile()">Save Edit</button>
                                </div>

                             </div>
                    </div>
                

                    
                 
            </div>
            <div class="footer">
                <p>I am Brenda Taghoy - Researvation Management System  @ 2024 / Slsu 2nd Year</p>
            </div>

    </article>



                    <!-- modal -->
                    <div class="modal" tabindex="-1" id = "SuccesfullEdit" style = "margin-top: 150px;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Notice!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Edited Successfully!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick = "refreshIfClose()">Close</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
        window.onload = function() {  
      DisplayAllDataOfTheSaidAccount();

            setTimeout(function() {
                location.reload();
            }, 1000000); // Refresh the page every 60 seconds
        };

        function refreshIfClose() {
            $(document).ready(function() {
                location.reload();
            });
        }

        function displaySelectedImage(event) {
            var selectedFile = event.target.files[0];
            var reader = new FileReader();
            
            reader.onload = function(event) {
                var imgElement = document.getElementById('profileImage');
                imgElement.src = event.target.result;
            };
            
            reader.readAsDataURL(selectedFile);
        }


        function DisplayAllDataOfTheSaidAccount() {
        var id = '<?php echo $_SESSION['id']; ?>';
      
        $.post("ajax.php", { EditInformationOfTheSaidProfileAccount: id }, function(data, status) {
            console.log(data); // Log the raw response to the console

            var SelectedProfileDatas = JSON.parse(data);

            $('#fullname').val(SelectedProfileDatas.fullname);
            $('#age').val(SelectedProfileDatas.age);
            $('#gmail').val(SelectedProfileDatas.gmail);
            $('#location').val(SelectedProfileDatas.location);
            $('#number').val(SelectedProfileDatas.number);
            $('#sex').val(SelectedProfileDatas.sex);
        });
    }

    function EditDataFromTheProfile(){
                var EditClicked = true;
                var fullname = $('#fullname').val();
                var age = $('#age').val();
                var number = $('#number').val();
                var location = $('#location').val();
                var gmail = $('#gmail').val();
                var id = '<?php echo $_SESSION['id']; ?>';
                var SelectedProfilePicture = $('#selectProfilePicture').val();
                var pic = SelectedProfilePicture.replace(/C:\\fakepath\\/i, '');
                var sex = $('#sex').val();
        

                          $.ajax({
                                        url: "ajax.php",
                                        type: 'post',
                                        data: {
                                           
                                          fullname: fullname,
                                          age: age,
                                          number:number,
                                          location: location,
                                          gmail:gmail,
                                          pic:pic,
                                            EditClicked:EditClicked,
                                            SelectedIdToBeEdited:id,
                                            sex:sex
                                        },
                                        success: function (data, status) {
                                                        
                                            $('#SuccesfullEdit').modal('show');
                                        }
                                    });
                      
                }
</script>
</body>
</html>