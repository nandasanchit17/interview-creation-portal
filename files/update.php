<?php


include '../config.php';
include 'validate.php';
function delete($id){


$con=mysqli_connect("localhost","id18130493_root","RN(s]w9_RCKz<h0f","id18130493_interview");


$query="Select ListOfPeople,StartTime,EndTime from interview_schedule where id='$id' ";
$res=mysqli_query($con,$query);
if($res)
{$row=mysqli_fetch_array($res);
	
//print_r( $row['ListOfPeople'] );

$arr = preg_split ("/\, /",$row['ListOfPeople'] );
//print_r($arr);
$st=$row['StartTime'];
$en=$row['EndTime'];
//echo $st." ".$en;
for($i=0;$i<sizeof($arr);$i++)
{
$query2="Delete from user_interview_details where email='$arr[$i]' and start='$st' and end='$en'";
$res1=mysqli_query($con,$query2);

}

}
else
{
	echo "None found";
}
}




$con=mysqli_connect("localhost","id18130493_root","RN(s]w9_RCKz<h0f","id18130493_interview");
if(!$con)
{
	die(mysqli_error());
}

$id=$_POST['id'];
$title=$_POST['InterviewTitle'];
$ListOfPeople1=$_POST['ListOfPeopleC'];
$ListOfPeople = implode(", ", $ListOfPeople1);
$start=$_POST['StartTime'];
$end=$_POST['EndTime'];
delete($id);
if(validate($ListOfPeople,$start,$end)){
$file_name = $_FILES['file']['name']+rand(0,100000);
$file_tmp = $_FILES['file']['tmp_name'];
$upload_folder = "resume/";
$movefile = move_uploaded_file($file_tmp, $upload_folder.$file_name);
if($movefile){
	;//echo "Uploaded";
}


$query="Update interview_schedule set InterviewTitle='$title',ListOfPeople='$ListOfPeople', StartTime='$start', EndTime='$end', resume_loc='$file_name' where id='$id'";
$res=mysqli_query($con,$query);
if(!$res)
	;//echo 'Error '.mysqli_error($con);
else{
	//echo '<script>alert("Interview Updated")</script>';
	echo "<script>window.location.href='mail.php?id=$id';</script>";
	
	
}
changetable($ListOfPeople,$start,$end);
echo "<script>window.location.href='mail.php?id=$id';</script>";
}




