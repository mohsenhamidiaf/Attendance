<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <title>Classes</title>
</head>
<body>
    {{-- <div class="header"> --}}
        @include('partials.notifications')

        <h1>Classes List</h1>

        <button class="button">Create Class</button>
    </div>
    <div class="classes-container">
        @forelse ($classes as $class)
        <div class="class-card">
            <h3>{{ $class->name }}</h3>
            <p>
                Section: {{ $class->section ?? 'Not specified' }}
            </p>
        </div>
        @empty 
        <div class="empty-state">No classes found.</div>
        @endforelse
    </div>


    <script src="{{ asset('js/notifications.js') }}" defer></script>
</body>
</html>