<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body>
    <h2>Pesan dari: {{ $data['name'] ?? 'Unknown' }} {{ $data['surname'] ?? 'unknown' }}</h2>
    <p>Email: {{ $data['email'] ?? 'No email provided' }}</p>
    <p>Pesan:</p>
    <p>{{ $data['message'] ?? 'No message provided' }}</p>
</body>
</html>
