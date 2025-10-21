<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project toevoegen</title>
</head>
<body>
    <h2>Nieuw Project Aanmaken</h2>

<form method="POST" action="/projects">
    @csrf

    <label>Project Code:</label><br>
    <input type="text" name="project_code"><br><br>

    <label>Naam:</label><br>
    <input type="text" name="name"><br><br>

    <label>Status:</label><br>
    <input type="text" name="status"><br><br>

    <label>Startdatum:</label><br>
    <input type="date" name="start_date"><br><br>

    <button type="submit">Opslaan</button>
</form>

</body>
</html>