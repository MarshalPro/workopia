<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new job posting</title>
</head>
<body>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="Job Title">
        <input type="text" name="description" id="description" placeholder="Description">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
