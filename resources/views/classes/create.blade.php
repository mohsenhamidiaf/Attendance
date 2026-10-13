<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
</head>
<body>
    @include('partials.notifications')
    <h1>Create New Class</h1>
    <div class="classes-container">
        <div class="class-card">
            <form action="{{ url('classes') }}" method="post">
                @csrf
                <label for="name">Class Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Enter class name" >

                <label for="section">Section</label>
                <input type="text" id="section" name="section" value="{{old('section')}}" placeholder="Enter section (optional)">

                <button type="submit">Create Class</button>

            </form>
        </div>
    </div>
    <script src="{{ asset('js/notifications.js') }}" defer></script>
</body>
</html>