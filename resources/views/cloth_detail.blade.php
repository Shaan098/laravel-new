<!DOCTYPE html>
<html>
<head>
    <title>Cloth Detail</title>
</head>
<body>

<h1>{{ $cloth['name'] }}</h1>

<p><strong>Price:</strong> {{ $cloth['price'] }}</p>
<p><strong>Description:</strong> {{ $cloth['desc'] }}</p>

<br>

<a href="{{ route('cloths.list') }}">Back to Clothes List</a>

</body>
</html>
