<?php

    if(isset($_COOKIE['status']))
    {
        ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="all_designs/profile_design.css"> <link rel>
        <title>Profile</title>
    </head>
    <body>
        <header>
             <nav>
                 <select class="comboBox">
                     <option value="Course" selected disabled hidden>Cources</option>
                     <optgroup label="Science">
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Biology">Biology</option>
                            <option value="Mathematics">Mathematics</option>
                        
                     </optgroup>
                     <optgroup label="Computer Science">
                         <option value="Algorithm">Algorithm</option>
                         <option value="Data Structure">Data Structure</option>
                         <option value="Computer Fundamentals">Computer Fundamentals</option>
                         <option value="Introdouction to Programing Language">Introdouction to Programing Language</option>
                         <option value="Introduction to Database">Introduction to Database</option>
    
                     </optgroup>
                     <optgroup label="Programming Language">
                         <option value="C/C++">C/C++</option>
                         <option value="JAVA">JAVA</option>
                         <option value="PHYTHON">PHYTHON</option>
                         <option value="C#">C#</option>
                         <option value="PHP">PHP</option>
    
                     </optgroup>
                 </select>
                 <ul class="navigation">
                     <li class="searchBox"><input type="text" name="search" placeholder="Search.."></li>
                     <li class="logo"><a href="dashboard.php">MNP Academy</a></li>
                 </ul>
             </nav>
        </header>
    
        
        <section>
            <div class="verticleLine"></div>
            <h4 class="section-heading"><a href="dashboard.php">Sirajum Munira</a></h4>
            <div class="accountStuff">
                    <ul class="stuff">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="mycourse.php">Courses</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="blog.html">Blogs</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
            </div>
                <!--Profile Table-->
            <div class="profile_div">
                <form method="" action="">
                    <fieldset>
                    <legend class="mainLegend"><b>PROFILE</b></legend>
                        <table class="profile_table">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><?php echo $_COOKIE['name'];?></td>
                                <td rowspan="7">	
                                      <?php
                                        session_start();
                                        if(isset($_COOKIE['updated']))
                                        {
                                        ?>	
                                            <img width="128" src="<?php echo $_COOKIE['pic'];?>"/>
                                            
                                      <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <img width="128" src="images/profile.ico"/>
                                      <?php 
                                        }
                                        ?>	
                                        <br/>
                                        <a class="propic" href="changepicture.php">Change</a>
                                </td>
                                </tr>		
                                <tr><td colspan="3"><hr/></td></tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $_COOKIE['email'];?></td>
                                </tr>		
                                <tr><td colspan="3"><hr/></td></tr>			
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td><?php echo $_COOKIE['gender'];?>Female</td>
                                </tr>
                                <tr><td colspan="3"><hr/></td></tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td><?php echo $_COOKIE['date']."/".$_COOKIE['month']."/".$_COOKIE['year'];?></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr/></td>
                                </tr>
                        </table>
                    
                        <a href="profile-edit.php"> Edit Profile </a>	
                    </fieldset>	
                </form>       
            </div>
        </section>

        <footer>
       </footer>
    </body>
</html>
        <?php
    }
    else
    {
        header("location:login.php");
    }
?>