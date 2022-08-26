<?php
    session_start();
    include 'conn.php';
    include 'header.php';

    $sql_stu="select * from studentdeets";
    $result=mysqli_query($conn,$sql_stu);
?>
<div class="containerfluid" style="background-color: white;
    position: relative; margin:30px;margin-top: 200px; padding: 20px">
<table id="myTable">
        <thead>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>religion</th>
        <th>Action1</th>
        <th>Action2</th>
        </thead>
        <tbody>
<?php

    while($fetched_data=mysqli_fetch_row($result)){
        echo '<tr>';
        echo '<td>'.$fetched_data[2].'</td>';
        echo '<td>'.$fetched_data[3].'</td>';
        echo '<td>'.$fetched_data[4].'</td>';
        echo '<td>'.$fetched_data[5].'</td>';
        echo '<td>'.$fetched_data[6].'</td>';
        echo '<td>'.$fetched_data[7].'</td>';
        echo '<td>'.$fetched_data[9].'</td>';
        echo '<td><a href=empform.php?id='.$fetched_data[0].'&action=edit>Edit</a></td>';
        echo '<td><a href=empform.php?id='.$fetched_data[0].'&action=delete>Delete</a></td>';
        echo '</tr>';
    }
?>
        </tbody>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
</script>
</table>
        </div>