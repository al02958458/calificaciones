<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity: {{ $activity->name }}</title>
</head>
<body>
    <h1>Edit Activity: {{ $activity->name }}</h1>
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Activity Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $activity->name }}"><br>
        <label for="grade">Grade:</label><br>
        <input type="text" id="grade" name="grade" value="{{ $activity->grade }}"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
