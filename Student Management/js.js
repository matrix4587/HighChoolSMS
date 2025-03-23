
        // Function to toggle the dropdown
    function toggleDropdown() {
        const dropdown = document.querySelector('.dropdown');
        dropdown.classList.toggle('show');
    }


    window.onclick = function(event) {
        if (!event.target.matches('button')) {
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => dropdown.classList.remove('show'));
        }
    }