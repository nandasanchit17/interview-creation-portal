# Interview-Creation-Portal
Interview Creation Portal
<p>The webapp full fills the following requirements</p>
<h2>Basic Requirements</h2>
<p>1. An interview creation page where the admin can create an interview by selecting participants, start time and end time. Backend should throw error with proper error message if: </p>
<p>a. Any of the participants is not available during the scheduled time (i.e, has another interview scheduled) </p>
<p>b. No of participants is less than 2 </p>
<p>2. An interviews list page where admin can see all the upcoming interviews. </p>
<p>3. An interview edit page where admin can edit the created interview with the same validations as on the creation page.</p>
<hr>
<h2>Good to Have </h2>
<p>1. It also has an email sender, that sends email to the users, whenever their Interview is Scheduled or Updated.</p>
<p>2. It has a resume upload feature, from where you can upload the resumes and have a look at them in the home page.</p>

<p>The resume enetered is stored in the resume folder in the directory and the name of the file is stored in the database.</p>
<p> Even if the file name is same, the system renames the file and stores it in the database. The previous file is not over righted.</p>

# Errors

<img scr = "http://interview-creation-portal.000webhostapp.com/images/e1.PNG">
<h2> Following are the list of errors showed.</h2>
<p>1. Error when start date is before than the current date.</p>
<p>2. Error when Start Date is After the End Date.</p>
<p>3. Error when a participant already has a meeting scheduled.</p>
<p>4. Error when there are Less than 2 participants in a Meeting. </p>
<p>5. Error when required fields are not filled.</p>

# Home-Page
<img src ="http://interview-creation-portal.000webhostapp.com/images/home_page.png">
<br>
<p>This is the home page, where the admin can see the Scheduled Interviews, Modify them, Delete Them and even have a look at the Resume.</p>
<br>
# Schedule Interviews
<img src = "http://interview-creation-portal.000webhostapp.com/images/schedule_interview.png">
<br>
<p>This is the Interview Scheduling Page, where admin selects from the already added users. (There can me more than 2 users). The admin also selects the start and the end date and time and uploads the combined resume file.<p>
<br>
# Update Interviews
<img src = "http://interview-creation-portal.000webhostapp.com/images/update_page.png">
 <br>
<p>This is the update Page where the admin can update the participants, date and time and even the resume. After the Interview has been updated, the participants also get an email.</p>

  


