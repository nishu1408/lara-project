// Make the search title editable
const searchTitle = document.querySelector('.search-title');
searchTitle.addEventListener('click', () => {
    searchTitle.focus();
});

// Close button functionality
document.querySelector('.search-close').addEventListener('click', () => {
    window.history.back();
});

// Show results button
document.querySelector('.show-results').addEventListener('click', () => {
    const searchTerm = searchTitle.value;
    alert(`Searching for: ${searchTerm}`);
    // Implement actual search functionality here
});

// Suggested results click
document.querySelectorAll('.suggested-results li').forEach(item => {
    item.addEventListener('click', () => {
        searchTitle.value = item.textContent;
    });
});
// Remove any event listeners that might be blocking navigation
document.querySelector('.hf-btn').addEventListener('click', function(e) {
    e.preventDefault(); // Remove this if it exists
});