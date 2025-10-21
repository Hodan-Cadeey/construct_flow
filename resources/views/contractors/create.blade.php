<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create contractor</title>
</head>
<body>
    <h1>Voeg een contractor toe.</h1>
    <form action="{{ route('contractors.store') }}" method="POST">
     {{-- Laravel vereist dit voor beveiliging tegen Cross-Site Request Forgery. --}}
     @csrf

    <div>
        <label for="contractor_code">Contractor Code:</label>
        <input type="text" name="contractor_code" id="contractor_code" required>
    </div>

    <div>
        <label for="legal_name">Legal Name:</label>
        <input type="text" name="legal_name" id="legal_name" required>
    </div>

    <div>
        <label for="trade">Trade:</label>
        <select name="trade" id="trade" required>
            <option value="electrical">Electrical</option>
            <option value="plumbing">Plumbing</option>
            <option value="hvac">HVAC</option>
            <option value="carpentry">Carpentry</option>
            <option value="concrete">Concrete</option>
            <option value="roofing">Roofing</option>
            <option value="landscaping">Landscaping</option>
            <option value="other">Other</option>
        </select>
    </div>

    <div>
        <label for="country">Country Code (2 letters):</label>
        <input type="text" name="country" id="country" maxlength="2" required>
    </div>

    <button type="submit">Save Contractor</button>
</form>

</body>
</html>