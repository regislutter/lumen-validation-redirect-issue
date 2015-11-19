<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Redirect</title>
</head>
<body>
<?php var_dump($errors); ?>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="{{ route('contact.form') }}">
        <input type="text" name="name" value="test" />
        <input type="text" name="email" value="" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>