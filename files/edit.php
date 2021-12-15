<?php
include '../config.php';
$id=$_GET['id'];
$query = "SELECT * from interview_schedule where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<?php
$servername = "localhost";
$username = "id18130493_root";
$password = "RN(s]w9_RCKz<h0f";
$dbname = "id18130493_interview";
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>InterviewX - Update</title>
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    .form-group{
    margin-bottom: 10px;margin-top:100px;
    }
    .form-group label{
     font-size:18px;
     font-weight: 600;
    
    }
    .form-group select{
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-group input{
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn {
  background-color: #f04f1f;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
  border-radius: 20px;
}
    </style></head>

<body>
 <header>
        
            <img src="images/logo-without-bg.png" width="150px" class="logo">
            <nav>
            <ul class="nav-bar">
                             
                <li class = "nav-item">
                <a href=" ../index.php"  style="text-decoration:none">Home</a>
                </li>
                           
                <li class = "nav-item">
                <a href="  /files/insert.php"  style="text-decoration:none">Schedule an Interview</a>
                </li>
                
                
                
            </nav>
        </header>

	 <!-- form section start -->
	 <section class="list_home">
        <!-- /form -->
              <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1>Update an Interview</a></h1>
                   
                </div>
        <div class="workinghny-form-grid">
            <div class="wrapper">
            <div class="form-group">
            <form name="form" method="post" action="update.php" enctype='multipart/form-data'>
                <label for="interview Title" class="color-blue-dark font-12">Interview ID</label>
                <input type="text" name="id" required value="<?php echo $row['id'];?>" readonly style="cursor:no-drop;"/>
                <label for="interview Title" class="color-blue-dark font-12">Interview Title</label>
                <input type="text" name="InterviewTitle" required value="<?php echo $row['InterviewTitle'];?>" />
                <br>
                
                <label for="participant" class="color-blue-dark font-12">Previous Participants</label>
                <input type="text" name="oldpeople" required value="<?php echo $row['ListOfPeople'];?>" readonly style="cursor:no-drop;"/>
                <br>
                <label for="participant" class="color-blue-dark font-12">Change Participants</label>
                <select name="ListOfPeopleC[]" id="ListOfPeopleC" required value="" multiple class="multiple-select">
                    
                  <?php
                         // Using database connection file here
                       while($rows=$result->fetch_assoc())
                        {
                            echo "<option value='". $rows['email'] ."'>" .$rows['email'] ."</option>";  // displaying data in option menu
                        }	
                    ?>  
                </select>
                <br>
                <br>
                <label for="time_start" class="color-blue-dark font-12">New Starting Date and Time</label>
                <input type="datetime-local" name="StartTime" required value="<?php echo $row['StartTime'];?>" required />
                <br>
                               
                <label for="time_end" class="color-blue-dark font-12">New Ending Date and Time</label>
                <input type="datetime-local" name="EndTime" required value="<?php echo $row['EndTime'];?>" required/>
                <br>                 
                <label for="file" class="color-blue-dark font-12">Enter combined resumes</label>
                <input type='file' name='file' id='file' required>
                <br>
                <br>
                <center>
                <input name="submit" type="submit" value="Update Interview" style="background-color:#f04f1f; color:#fff; border:none; cursor: pointer;">
                </center>
                
            </form>
            
                
                </script>          
            </div>
                
            </div>
        </div>
    </section>
    
                    </div>
                    </div>
                    <br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="bottom">
        <img src="images/logo-without-bg.png" width="150px" class="logo">
        <p>Copyright &copy - Made by Sanchit Nanda <a href="mailto:sanchit17nanda@gmail.com" style="color:white;">(sanchit17nanda@gmail.com)</a>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>$(".multiple-select").select2({
  //maximumSelectionLength: 2
});</script>
</body>
</html>