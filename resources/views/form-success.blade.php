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
    <h1>Form success</h1>
    <ul>
        <li>eventName: {{$eventname}}</li>
        <li>bandNames: {{$bandnames}}</li>
        <li>startDate: {{$stardate}}</li>
        <li>endDate: {{$endData}}</li>
        <li>portfolio: {{$protfolio}}</li>
        <li>ticketPrice: {{$ticketprice}}</li>
        <li>status:
            @switch($status)
                @case(1)
                Đang diễn ra
                @break
                @case(2)
                @break
                Sắp diễn ra
                @break
                @case(3)
                Đã diễn ra
                @break
                @case(0)
                Tạm hoãn
                @break
            @endswitch
        </li>
    </ul>
</body>
</html>
