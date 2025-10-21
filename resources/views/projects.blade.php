<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>
    <section>
    <nav>
        <i><a href="contractors">Contractor</a></i>
        <i><a href="projects">Project</a></i>
    </nav>
    </section>
    <h1>Projects</h1>
    <table>
        @foreach ($project as $item)
        <tr>
            <td>{{ $item->project_code }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->status }}</td>
            <td>{{$item->start_date}}</td>
        </tr>
        @endforeach
        <a href="/project_create">Project toevoegen</a>
    </table>
</body>
</html>