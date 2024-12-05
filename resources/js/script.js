document.getElementById('menu-toggle').addEventListener('click', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

const sidebarToggle = document.getElementById('sidebarToggle');
const sidebarContent = document.getElementById('sidebarContent');
const sidebar = document.getElementById('sidebar');
const sidebarTitle = document.getElementById('sidebarTitle');

if (sidebar) {


    sidebarToggle.addEventListener('click', () => {

        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-20');
        sidebar.classList.toggle('lg:w-64');

        sidebarTitle.classList.toggle('opacity-0')

        const sidebarItems = sidebarContent.querySelectorAll('li span');
        sidebarItems.forEach(item => {
            item.classList.toggle('hidden');
        });

        const sidebarLi = sidebarContent.querySelectorAll('li');
        sidebarLi.forEach(item => {
            item.classList.toggle('justify-center');
        });
    })

}
