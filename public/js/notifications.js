document.addEventListener('DOMContentLoaded', () => {
    const notifications = document.querySelectorAll('.notification');
    notifications.forEach((notification) => {
        const closeButton = notification.querySelector('.notification-close');
        const progress = notification.querySelector('.notification-progress');

        let timeout;

        const closeNotification = () => {
            clearTimeout(timeout);

            notification.classList.add('is-closing');
            notification.addEventListener('transitionend', () => {
                notification.remove();
            }, { once: true });
            setTimeout(() => notification.remove(), 400);
        };
        closeButton.addEventListener('click', closeNotification);
        progress.classList.add('is-running');
        timeout = setTimeout(closeNotification, 5000);
    });
});