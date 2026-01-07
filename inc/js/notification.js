var notification = document.getElementsByClassName('notification')[0];
var closeBtn = document.getElementsByClassName('notification-end')[0];

closeBtn.addEventListener('click', function() {
    notification.classList.add('notification-close');
});

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        notification.classList.add('notification-close');
    }, 3000);
});
