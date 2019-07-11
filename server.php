<?php
    session_start();
    $db = mysqli_connect('10.0.245.18',
    'admin', 
    'password',
    'db_rpa');

    $dept = '';
    $task_name = '';
    $perct_complt = 0;
    $priority = '';
    $description = '';
    $roi = 0;
    $implemented = '';
    $completion = '';
    $notes = '';
    $update = false;

    if (isset($_POST['save'])) {
        $dept = $_POST['dept'];
        $task_name = $_POST['task_name'];
        $perct_cmplt = $_POST['perct_cmplt'];
        $priority = $_POST['priority'];
        $description = $_POST['description'];
        $roi = $_POST['roi'];
        $implemented = $_POST['implemented'];
        $completion = $_POST['completion'];
        $notes = $_POST['notes'];

        mysqli_query($db, "INSERT INTO tbl_rpa (dept, 
        task_name, 
        percentage_complete, 
        priority,
        description,
        roi,
        implemented,
        completion,
        notes) 
        VALUES
        ('$dept', 
        '$task_name', 
        '$perct_cmplt',
        '$priority',
        '$description',
        '$roi',
        '$implemented',
        '$completion',
        '$notes')");
        $_SESSION['message'] = "Item Saved";
        header('location: index.php');
    }
?>