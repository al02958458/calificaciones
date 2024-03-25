<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities of Subject: {{ $subject->name }}</title>
</head>
<body>
    <h1>Activities of Subject: {{ $subject->name }}</h1>
    <ul>
        @foreach($subject->activities as $activity)
            <li>{{ $activity->name }} - Grade: {{ $activity->grade }}</li>
        @endforeach
    </ul>
</body>
</html>
