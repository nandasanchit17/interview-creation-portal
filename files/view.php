
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>InterviewX - Home</title>
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    </style>
<style>
i{
    color:#fff;
    padding: 0 3px 0 0;
}   
</style>

</head>

<body>
 <header>
        
            <img src="images/logo-without-bg.png" width="150px" class="logo">
            <nav>
            <ul class="nav-bar">
                             
                <li class = "nav-item">
                <a href=" /ib/index.php"  style="text-decoration:none">Home</a>
                </li>
                           
                <li class = "nav-item">
                <a href=" /ib/insert.php"  style="text-decoration:none">Schedule an Interview</a>
                </li>
                
                
                
            </nav>
        </header>

    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

         
        </div>
	 <!-- form section start -->
	 <section class="list_home">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1>List of Scheduled Interviews</a></h1>
                   
                </div>
                <center>
            <table class = "table table-hover">
                <thead class ="thead-dark">
                <th><b>Interview Id</b></th>
                <th><b>Title</b></th>
                <th><b>Participant(s)</b></th>
                <th><b>Start Time</b></th>
                <th><b>End Time</b></th>
                <th><b></b></th>
                <th><b></b></th>
</thead>
                <br>
                <br>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php


            include '../config.php';
            $quer="Select * from interview_schedule";
            $res=mysqli_query($con,$quer);

            while($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['InterviewTitle'];?></td>
                <td><?php echo $row['ListOfPeople'];?></td>
                <td><?php echo $row['StartTime'];?></td>
                <td><?php echo $row['EndTime'];?></td>
                <td><a href="/files/edit.php?id=<?php echo $row['id']; ?>"><button style="background-color:#32cd32;  border:none; padding: 4px; color:#fff;"><i class="fa fa-pencil" aria-hidden="true"></i>Modify</button></a></td>
                <td><a href="/files/delete.php?id=<?php echo $row['id']; ?>"><button style="background-color:red; border:none;  padding: 4px; color:#fff;"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></a></td>
                
            </tr>
            <?php
                }
             ?>
             </table>
            </center>
                
            </div>
        </div>
    </section>
    <footer class="bottom">
        <img src="images/logo-without-bg.png" width="150px" class="logo">
        <p>Copyright &copy - Made by Sanchit Nanda <a href="mailto:sanchit17nanda@gmail.com" style="color:white;">(sanchit17nanda@gmail.com)</a>
    </footer>

</body>
</html>