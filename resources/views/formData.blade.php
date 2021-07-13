<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/data-handle/formData" method="post">
        @csrf
        <label>eventName</label><br>
        <input type="text" name="eventName"><br>
        <label>bandNames</label><br>
        <input type="text" name="bandNames"><br>
        <label>startDate</label><br>
        <input type="text" name="startDate"><br>
        <label>endDate</label><br>
        <input type="text" name="endDate"><br>
        <label>portfolio</label><br>
        <input type="text" name="portfolio"><br>
        <label>ticketPrice</label><br>
        <input type="text" name="ticketPrice"><br>
        <label>status</label><br>
        <input type="text" name="status"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
