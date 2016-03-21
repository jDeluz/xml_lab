<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <style>
        aside, .h{
            background: aliceblue;
            border: 1px solid coral;
        }
        .h {
            height: 50vh;
            padding: 0;
            padding-top: 0 !important;
        }
        iframe {
            width: 100%;
            height: 100%;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type = 'text/javascript' src = "/js/script.js"></script>
</head>
<body class="container">

    <header>
        <h1 class="page-header text-center">My Schedule</h1>
    </header>

    <aside class="row">
        <div class="col-md-4 text-center">
            <h3>Days</h3>
            <nav class="well" style="text-align: left">
                <label for="days-day">Day</label>
                <select id="days-day"><option>{days_days}</option><option>other</option></select>
                <br>
                <label for="days-time">Time</label>
                <select id="days-time"><option>{days_times}</option></select>
                <button type="button" class="btn btn-success pull-right">Search</button>
            </nav>
        </div>
        <div class="col-md-4 text-center">
            <h3>Courses</h3>
            <nav class="well" style="text-align: left">
                <label for="courses-code">Course Code</label>
                <select id="courses-code"><option>{courses_codes}</option></select>
                <br>
                <label for="courses-type">Type</label>
                <select id="courses-type"><option>{courses_types}</option></select>
                <button type="button" class="btn btn-success pull-right">Search</button>
            </nav>
        </div>
        <div class="col-md-4 text-center">
            <h3>Periods</h3>
            <nav class="well" style="text-align: left">
                <label for="periods-time">Timeslot</label>
                <select id="periods-time"><option>{periods_times}</option></select>
                <br>
                <label for="periods-day">Day</label>
                <select id="periods-day"><option>{periods_days}</option></select>
                <button type="button" class="btn btn-success pull-right">Search</button>
            </nav>

        </div>
    </aside>
    <div class="row">
        <div class="col-md-4 h">
            <iframe id="days-frame" src="http://www.w3schools.com"></iframe>
        </div>
        <div class="col-md-4 h">
            <iframe id="courses-frame" src="http://www.w3schools.com"></iframe>
        </div>
        <div class="col-md-4 h">
            <iframe id="periods-frame" src="http://www.w3schools.com"></iframe>
        </div>
    </div>
</body>
</html>