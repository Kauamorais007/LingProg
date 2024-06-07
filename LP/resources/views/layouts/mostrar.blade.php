<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sla</title>
</head>
<body>
    @if (session('success'))
        <span style="color: #082;">
          {{ session('success') }}
        </span>
    @endif
</body>
</html>