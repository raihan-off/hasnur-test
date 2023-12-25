<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Materials</title>
</head>
<body>
    <h1>Course Materials for "{{ $course->title }}"</h1>
    <ul>
        @foreach ($courseMaterials as $material)
            <li>
                <p>Title: {{ $material->title }}</p>
                <p>Description: {{ $material->description }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
