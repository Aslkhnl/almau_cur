<?php require_once('../../../private/initialize.php'); ?>

<?php
    
    $subject_set = find_all_subjects();
  //  $subjects = [
   // ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
   // ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
  //  ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    //['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
 //   ];
    ?>

<?php $page_title = 'Your Curriculum'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<div class="subjects listing">
<h1>Subjects</h1>

<div class="actions">
<a class="action" href="">Create New Subject</a>
</div>

<table class="list">
<tr>
<th>course_code</th>
<th>course_cycle</th>
<th>course_name</th>
<th>credit</th>
<th>exam</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>

<?php foreach($subjects as $sql) { ?>
<tr>
<td><?php echo $subject['course_code']; ?></td>
<td><?php echo $subject['course_cycle']; ?></td>
<td><?php echo $subject['course_name']; ?></td>
<td><?php echo $subject['credit']; ?></td>
<td><?php echo $subject['exam']  == 1 ? 'true' : 'false'; ?></td>
<td><a class="action" href="<?php echo
url_for('/staff/subjects/show.php?id=' . $subject['id']); ?>">View</a></td>
<td><a class="action" href="">Edit</a></td>
<td><a class="action" href="">Delete</a></td>
</tr>
<?php } ?>
</table>
<?php
    mysqli_free_result($result_set);
    
    ?>
</div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
