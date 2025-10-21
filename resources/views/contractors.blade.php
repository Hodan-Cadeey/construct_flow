<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contractors</title>
</head>
<body>
<section>
    <nav>
        <i><a href="contractors">Contractor</a></i>
        <i><a href="projects">Project</a></i>
    </nav>
</section>
    <h1>contractors</h1>
    <table>
        <tbody>
             <thead>
        <tr>
            <th>Legal Name</th>
            <th>Trade</th>
            <th>Country</th>
        </tr>
    </thead>
    @foreach ($contractor as $item)
        <tr>
            <td>{{ $item->legal_name }}</td>
            <td>{{ $item->trade }}</td>
            <td>{{ $item->country }}</td>
            <td><a href="/contractors/{{ $item->id}}/edit">Edit</a><br></td>
            <td><a href="/contractors/{{ $item->id}}">Details</a><br></td>
            <td>
        <form action="{{ route('contractors.destroy', $item->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Weet je het zeker?')">Verwijderen</button>
    </form>
            </td>
        </tr >

        @endforeach
        </tbody>
        
    </table>
    <a href="{{ route('contractors.create') }}">Add</a>
    
</body>
</html>