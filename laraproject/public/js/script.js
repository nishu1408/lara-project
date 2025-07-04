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
AOS.init();
// Placeholder for future JS functionality
console.log("Testimonial section ready");
// Currently no dynamic JS needed, but ready for future interactivity
console.log("Gallery Loaded");
document.addEventListener('DOMContentLoaded', function() {
    // Email submission functionality
    const emailSubmit = document.querySelector('.email-submit');
    if (emailSubmit) {
        emailSubmit.addEventListener('click', function(e) {
            e.preventDefault();
            const inputField = this.parentElement.querySelector('input');
            if (inputField.value) {
                alert('Thank you for subscribing with: ' + inputField.value);
                inputField.value = '';
            } else {
                alert('Please enter your email address');
            }
        });
    }

    console.log("Footer loaded successfully");
});
// Hot Holiday Collection
