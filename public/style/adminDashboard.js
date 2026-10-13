function updateClock() {
            const now = new Date();
            
            // تنظیم ساعت
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;

            // تنظیم تاریخ (به صورت ساده برای آفلاین)
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('current-date').textContent = now.toLocaleDateString('fa-IR', options);
        }

        setInterval(updateClock, 1000);
        updateClock(); // اجرای اولیه