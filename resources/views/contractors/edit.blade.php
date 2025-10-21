<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <section>
{{-- <nav>
    <i><a href="{{ route('contractors') }}">Contractor</a></i>
    <i><a href="{{ route('projects') }}">Project</a></i>
</nav> --}}

</section>

      <h1>Edit contractor</h1>
    <form action="{{ route('contractors.update', $aannemers->id) }}" method="POST">
     {{-- Laravel vereist dit voor beveiliging tegen Cross-Site Request Forgery. --}}
     @csrf
     @method('PUT')
      {{-- HTML-formulieren ondersteunen alleen GET en POST. Laravel vereist een _method hidden field voor PUT of PATCH: --}}

    <div>
        <label for="contractor_code">Contractor Code:</label>
        <input type="text" name="contractor_code" id="contractor_code" value="{{ old('contractor_code', $aannemers->contractor_code) }}" required>

    </div>

    <div>
        <label for="legal_name">Legal Name:</label>
        <input type="text" name="legal_name" id="legal_name" value="{{ old('legal_name', $aannemers->legal_name) }}" required>

    </div>

    <div>
        <label for="trade">Trade:</label>
        <select name="trade" id="trade" required>
            @php
                $trades = ['electrical', 'plumbing', 'hvac', 'carpentry', 'concrete', 'roofing', 'landscaping', 'other'];
            @endphp
            @foreach($trades as $trade)
                <option value="{{ $trade }}" @if(old('trade', $aannemers->trade) === $trade) selected @endif>
                    {{ ucfirst($trade) }} 
                    {{-- ucfirst() maakt de eerste letter van een string een hoofdletter, en laat de rest van de string onaangetast. --}}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="country">Country Code (2 letters):</label>
        <input type="text" name="country" id="country" value="{{ old('country', $aannemers->country) }}" required>

    </div>
    <button type="submit">Save Contractor</button>
</form>
    
</body>
</html>