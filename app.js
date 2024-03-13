const searchInput = document.querySelector('.search-input input');
const searchDropdown = document.querySelector('.search-dropdown');

searchInput.addEventListener('focus', () => {
    searchDropdown.style.display = 'block';
});

searchInput.addEventListener('blur', () => {
    searchDropdown.style.display = 'none';
});