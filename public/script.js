// Select all navigation links
const navItems = document.querySelectorAll('.nav-links a');

// Loop through them to add a click event listener
navItems.forEach(item => {
    item.addEventListener('click', function() {
        // 1. Remove the 'active' class from ALL links
        navItems.forEach(nav => nav.classList.remove('active'));

        // 2. Add the 'active' class to the CLICKED link
        this.classList.add('active');
    });
});