<!DOCTYPE html>
<html>
<head>
    <title>Clothes</title>
</head>
<body>

<h1>Clothes Available in Shop</h1>

<ul>
    @foreach($cloths as $id => $cloth)
        <li>
            <a href="{{ route('cloths.detail', $id) }}">
                {{ $cloth['name'] }} - {{ $cloth['price'] }}
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>
