<!-- Header file -->
<?php require_once 'includes/adminheader.php'; ?>

<!-- Navbar file -->
<?php require_once 'includes/adminnavbar.php'; ?>

<!--DB Include -->



 <!--Main Content goes here-->
 <main>

         <div class="container-fluid ven text-center" style="overflow:auto;">
                  <h1 class="text-center" style="margin-top:50px; color:white">
                    <?php
                     $venue_names =$_GET['venue_code'];
                      echo $venue_names;
                   ?>
                  </h1>
                  <p class="text-center" style="color:white;">AVAILABLE AND BOOKED TIME SLOTS</p>
                         <br>
                         <div class="card card-table">
                           <div class="card-body">
                                 <table class="table table-striped table-bordered table-hover" style="background:white;">
                                         <thead style="color:black;">
                                           <tr>
                                               <th></th>
                                             <th>Monday</th>
                                             <th>Tuesday</th>
                                             <th>Wednesday</th>
                                             <th>Thursday</th>
                                             <th>Friday</th>
                                           </tr>
                                         </thead>
                                         <tbody style="color:black;">
                                           <tr>
                                             <td>6:30-7:30am</td>
                                             <?php

                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='6:30-7:30am' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0 ){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>

                                           </tr>
                                           <tr>
                                             <td>7:30-8:30am</td>
                                             <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='7:30-8:30am' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0 ){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span><br></td>";
                                             }
                                           }
                                           }
                                             ?>
                                           </tr>
                                           <tr>
                                             <td>8:30-9:30am</td>
                                             <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='8:30-9:30am' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                              if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                            }
                                            }
                                             ?>
                                           </tr>
                                           <tr>
                                             <td>9:30-10:30am</td>
                                             <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='9:30-10:30am' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                           </tr>
                                          <tr>
                                            <td>10:30-11:30am</td>
                                            <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='10:30-11:30am' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                          <tr>
                                            <td>11:30-12:30pm</td>
                                            <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='11:30-12:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                          </tr>
                                         <tr>
                                            <td>12:30-1:30pm</td>
                                            <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='12:30-13:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                          </tr>
                                          <tr>
                                            <td>1:30-2:30pm</td>
                                            <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='13:30-14:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';
                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                         }
                                             ?>

                                          </tr>
                                          <tr>
                                             <td>2:30-3:30pm</td>
                                             <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='14:30-15:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                          </tr>
                                           <tr>
                                              <td>3:30-4:30pm</td>
                                              <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='15:30-16:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0 ){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               } echo "<td> $course_code <br> <span> $course_name </span></td>";

                                               }
                                             }
                                           }

                                             ?>
                                           </tr>
                                          <tr>
                                             <td>4:30-5:30pm</td>

                                             <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='16:30-17:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                         </tr>
                                          <tr>
                                            <td>5:30-6:30pm</td>
                                            <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='17:30-18:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                         </tr>
                                         <tr>
                                           <td>6:30-7:30pm</td>
                                           <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='18:30-19:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                          </tr>
                                         <tr>
                                           <td>7:30-8:30pm</td>
                                           <?php
                                              if(isset($_GET['venue_code'])) {
                                              $course_venue = $_GET['venue_code'];
                                              $approval = 'enabled';
                                              $sql = "SELECT * FROM timetable WHERE time_of_lecture ='19:30-10:30pm' AND venue_code='$course_venue' AND approval = '$approval' ";
                                              $result = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($result)) {
                                               $course_name = $row["course_name"];
                                               $course_code = $row["course_code"];
                                               $lecture_day = $row["day_lect"];



                                               if(mysqli_num_rows($result) > 0){
                                               switch($lecture_day){
                                                 case 'MONDAY':
                                                 echo "";
                                                 break;
                                                 case 'TUESDAY':
                                                 echo "<td></td>

                                                 ";
                                                 break;
                                                 case 'WEDNESDAY':
                                                 echo "<td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'THURSDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 case 'FRIDAY':
                                                 echo "<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                 ";
                                                 break;
                                                 default:
                                                 echo 'DDD';


                                               }
                                               echo " <td> $course_code <br> <span> $course_name </span></td>";
                                             }
                                           }
                                           }
                                             ?>
                                        </tr>
                                       </tbody>
                                       </table>

                       </div>
                     </div>
                       <!-- <div class="row"-->






      <!--Time Table -->

    </div>
  </main>

  <!-- Footer -->
  <?php include 'includes/adminfooter.php' ?>
