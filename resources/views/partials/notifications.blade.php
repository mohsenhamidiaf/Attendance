<div class="notification-container" id="notification-container">
    @if (session('success'))
    <div class="notification notification-success" role="status">
        <i class="notification-icon"></i>
        
        <div class="notification-content">
            <strong>Success</strong>
            <p>{{ session('success') }}</p>
        </div>

        <button type="button" class="notification-close" aria-label="Close notification">&times;</button>

        <div class="notification-progress"></div>
    </div>
    @endif

    @if($errors->any())
    <div class="notification notification-error" role="alert">
        <i class="norification-icon"></i>

        <div class="notification-content">
            <strong>Please check your input</strong>

            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="notification-close" aria-label="Close notification">&times;</button>

        <div class="notification-progress"></div>
    </div>
    @endif
</div>