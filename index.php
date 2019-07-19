<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPA Dashboard</title>
    <link rel="stylesheet" href="/stylesheets/formStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Mitr:300,500,600|Roboto:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        Task Automation Submission Form
    </header>
    <section class="form">
        <form action="server.php" method="post">
            <div class="col-25">
                <label for="dept">Department</label>
            </div>
            <div class="col-75">
                <input type="text" name="dept" id="dept" require>
            </div>
            <div class="col-25">
                <label for="task_name">Task Name</label>
            </div>
            <div class="col-75">
                <input type="text" name="task_name" id="task_name" require>
            </div>
            <div class="col-25">
                <label for="perct_cmplt">Percentage Complete</label>
            </div>
            <div class="col-75">
                <input type="number" name="perct_cmplt" id="perct_cmplt" min="0" max="100" value="0">
            </div>
            <div class="col-25">
                <label for="priority">Priority</label>
            </div>
            <div class="col-75">
                <select name="priority" id="priority">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            <div class="col-25">
                <label for="description">Description</label>
            </div>
            <div class="col-75">
                <textarea type="text" name="description" id="description" require></textarea>
            </div>
            <div class="col-25">
                <label for="roi">ROI (hrs/week)</label>
            </div>
            <div class="col-75">
                <input type="number" name="roi" id="roi" require>
            </div>
            <div class="col-25">
                <label for="implemented">Date Implemented</label>
            </div>
            <div class="col-75">
                <input type="date" name="implemented" id="implemented">
            </div>
            <div class="col-25">
                <label for="completion">Target Completion Date</label>
            </div>
            <div class="col-75">
                <input type="date" name="completion" id="completion">
            </div>
            <div class="col-25">
                <label for="notes">Notes:</label>
            </div>
            <div class="col-75">
                <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" name="save">Save</button>
        </form>
    </section>

</body>
</html>