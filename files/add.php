<?php

include '../config.php';

include 'validate.php';
   
$title=$_POST['InterviewTitle'];
$ListOfPeople1=$_POST['ListOfPeopleC'];
$ListOfPeople = implode(", ", $ListOfPeople1);
$start=$_POST['StartDateTime'];
$end=$_POST['EndDateTime'];
freetable();

if(validate($ListOfPeople,$start,$end)){
$file_name = $_FILES['file']['name']+rand(0,100000);
$file_tmp = $_FILES['file']['tmp_name'];
$upload_folder = "resume/";
$movefile = move_uploaded_file($file_tmp, $upload_folder.$file_name);

if($movefile){
	//echo "Uploaded";
}

$query="Insert into interview_schedule(InterviewTitle, ListOfPeople, StartTime, EndTime, resume_loc) values('$title','$ListOfPeople','$start','$end','$file_name') ";
$res=mysqli_query($con,$query);
if(!$res)
	echo 'Error '.mysqli_error($con);
else
	//echo '<script>alert("Interview Created")</script>';
	//header( "refresh:0;url=../index.php" );	
    //echo 'Sucessfully Inserted';
changetable($ListOfPeople,$start,$end);

$qu='Select * from interview_schedule';
$res=mysqli_query($con,$qu);
$id=-1;
if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_array($res))
		$id=$row['id'];
}
echo "<script>window.location.href='mail.php?id=$id';</script>";
}
?>	
