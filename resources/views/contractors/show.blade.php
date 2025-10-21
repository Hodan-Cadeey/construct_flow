<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aannemer: {{ $aannemers->legal_name }}</title>
</head>
<body>
    <h1>Details van Aannemer</h1>

    <ul>
        <li><strong>Legal Name:</strong> {{ $aannemers->legal_name }}</li>
        <li><strong>Trade:</strong> {{ $aannemers->trade }}</li>
        <li><strong>Country:</strong> {{ $aannemers->country }}</li>
        {{-- Voeg hier meer velden toe indien nodig --}}
    </ul>

    <a href="{{ route('contractors.index') }}">Terug naar overzicht</a>
    <a href="{{ route('contractors.edit', $aannemers->id) }}"> Bewerken</a>
    <form action="{{ route('contractors.destroy', $aannemers->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Weet je het zeker?')">Verwijderen</button>
    </form>
</body>
</html>
