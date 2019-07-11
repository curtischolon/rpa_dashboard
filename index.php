<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPA Dashboard</title>
</head>
<body>
    <form action="server.php" method="post">
        <label for="dept">Department:</label>
        <input type="text" name="dept" id="dept" require>
        <label for="task_name">Task Name</label>
        <input type="text" name="task_name" id="task_name" require>
        <label for="perct_cmplt">Percentage Complete</label>
        <input type="number" name="perct_cmplt" id="perct_cmplt" min="0" max="100" value="0">
        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" require>
        <label for="roi">ROI (hrs/week)</label>
        <input type="number" name="roi" id="roi" require>
        <label for="implemented">Date Implemented</label>
        <input type="date" name="implemented" id="implemented">
        <label for="completion">Target Completion Date</label>
        <input type="date" name="completion" id="completion">
        <button type="submit" name="save">Save</button>
    </form>
</body>
</html>