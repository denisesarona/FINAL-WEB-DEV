// Popover Toggle
document.addEventListener('DOMContentLoaded', function () {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [];

    popoverTriggerList.forEach(function (popoverTriggerEl) {
        const popover = new bootstrap.Popover(popoverTriggerEl, {
            trigger: 'manual',
            html: true,
            content: function () {
                return $('#popover-content').html();
            }
        });

        popoverTriggerEl.addEventListener('click', function () {
            if (popover._popper) {
                popover.dispose(); // Close the popover
            } else {
                popover.show(); // Show the popover
            }
        });

        popoverList.push(popover);
    });
});

