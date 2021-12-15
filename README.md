# Interview-Creation-Portal
Interview Creation Portal
<p>The webapp full fills the following requirements</p>
Basic Requirements
<p>1.An interview creation page where the admin can create an interview by selecting participants, start time and end time. Backend should throw error with proper error message if: </p>
<p>a.Any of the participants is not available during the scheduled time (i.e, has another interview scheduled) </p>
<p>b.No of participants is less than 2 </p>
<p>2.An interviews list page where admin can see all the upcoming interviews. </p>
<p>3.An interview edit page where admin can edit the created interview with the same validations as on the creation page.</p>


It also has an email sender, that sends email to the users, whenever their Interview is Scheduled or Updated.
It has a resume upload feature, from where you can upload the resumes and have a look at them in the home page.

<p>The resume enetered in stored in the resume folder in the directory and the name of the file is stored in the database.</p>

# Home-Page
![header image](https://raw.githubusercontent.com/nandasanchit17/interview-creation-portal/main/images/home_page.png)
<p>This is the home page, where the admin can see the Scheduled Interviews, Modify them, Delete Them and even have a look at the Resume.</p>
<br>
![header image](https://raw.githubusercontent.com/nandasanchit17/interview-creation-portal/main/images/schedule_interview.png)
<p>This is the Interview Scheduling Page, where admin selects from the already added users. (There can me more than 2 users). The admin also selects the start and the end date and time and uploads the combined resume file.<p>
<br>
![header image](https://raw.githubusercontent.com/nandasanchit17/interview-creation-portal/main/images/update_page.png)
<p>This is the update Page where the admin can update the participants, ddate and time and even the resume.</p>

  


