<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Course</title>
</head>

<body>
    <h1>Tambah Data Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>

        <label for="duration">Duration:</label><br>
        <input type="text" id="duration" name="duration"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
