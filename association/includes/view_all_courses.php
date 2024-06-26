

<!-- Blog Search Well -->
<div class="container">
  <div class="row">
    <div class="well col-md-8">
        <h4>My Association</h4>
        <small>Book a venue and view related information here information in the table below.</small>
        <h4>NOTE</h4>
            
                <dl>
                    <dt><strong>Free Venue link</strong></dt>
                    <dd>Please use <i>Free Venue</i> when you have completed
                      the purpose for which you booked the venue to allow it to be available
                  for others to also book the venue.</dd>
                </dl>
    </div>

  </div>

</div>




<table class="table table-bordered table-hover table-responsive">

  <thead>
    <tr>
      <th>Days</th>
      <th>Course Name</th>
      <th>Course Code</th>
      <th>Venue</th>
      <th>Time</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>

    <?php

    $query = "SELECT * FROM timetable WHERE user_id = '{$_SESSION['id']}'";
    $select_posts = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($select_posts)) {
      $course_id = $row['course_id'];
      $day_lect = $row['day_lect'];
      $course_name = $row['course_name'];
      $course_code = $row['course_code'];
      $venue_name = $row['venue_code'];
      $time_for_lecture = $row['time_of_lecture'];
      $user_id = $row['user_id'];

      echo "<tr>";
      echo "<td>{$day_lect}</td>";
      echo "<td>{$course_name}</td>";
      echo "<td>{$course_code} </td>";
      echo "<td>{$venue_name} </td>";
      echo "<td>{$time_for_lecture} </td>";
      echo "<td><a href='courses.php?deleteCourse={$course_id}'>Free Venue</a> </td>";
      echo "<td><a href='courses.php?source=edit_course&c_id={$course_id}'>Edit Booking</a> </td>";
      echo "</tr>";

}
     ?>


  </tbody>
</table>


<?php

  if(isset($_GET['deleteCourse'])) {
    $del_post_id = $_GET['deleteCourse'];

    $query = "DELETE FROM timetable WHERE course_id = {$del_post_id}";
    $del_query = mysqli_query($conn,$query);
    confirmQuery($del_query);
    header('location: ./courses.php');
    exit();
  }

 ?>
