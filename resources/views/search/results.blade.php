
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl">Hasil Pencarian</h2>
  </x-slot>

  <div class="py-6 max-w-7xl mx-auto">
    <p>Anda mencari: <strong>{{ $query }}</strong></p>
  </div>
</x-app-layout>
</body>
</html>


