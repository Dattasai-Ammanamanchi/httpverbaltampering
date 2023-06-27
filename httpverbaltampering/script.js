// Handling logout functionality
const logoutLink = document.getElementById('logout-link');

if (logoutLink) {
  logoutLink.addEventListener('click', function(e) {
    e.preventDefault();
    
    // Clear the session and redirect to the login page
    fetch('logout.php')
      .then(function(response) {
        window.location.href = 'index.html';
      })
      .catch(function(error) {
        console.error('Logout failed:', error);
      });
  });
}
