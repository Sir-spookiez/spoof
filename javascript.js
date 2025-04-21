function toggleTheme() {
    var isChecked = document.getElementById('contrast-toggle').checked;
    var themeLink = document.getElementById('theme-link');

    if (isChecked) {
        themeLink.setAttribute('href', 'styleHC.css'); // Switch to High Contrast Theme
    } else {
        themeLink.setAttribute('href', 'style.css'); // Switch back to Default Theme
    }
}
