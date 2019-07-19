<?php
    session_start();
    $db = mysqli_connect('localhost',
    'root', 
    '',
    'db_rpa');

    $dept = '';
    $task_name = '';
    $perct_cmplt = 0;
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

        echo $dept;
        echo $task_name;
        echo $perct_cmplt;
        echo $priority;
        echo $description;
        echo $roi;
        echo $implemented;
        echo $completion;
        echo $notes;

        mysqli_query($db, "INSERT INTO tbl_rpa (department, 
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