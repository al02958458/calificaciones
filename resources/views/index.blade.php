<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Subjects</title>
</head>
<body>
    <h1>List of Subjects</h1>
    <ul>
        @foreach($subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>
</body>
</html>
