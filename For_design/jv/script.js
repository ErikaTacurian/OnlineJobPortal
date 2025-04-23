
 
    let navbar = document.querySelector('.header .flex .navbar');

    document.querySelector('#menu-btn').onclick = () => {
        navbar.classList.toggle('active');
    }
    window.onscroll = () =>{
        navbar.classList.remove('active');
    }

    // Login form validation
    const loginForm = document.querySelector('.account-form form');
    if(loginForm) {
        loginForm.addEventListener('submit', (e) => {
            const email = loginForm.querySelector('input[name="email"]');
            const password = loginForm.querySelector('input[name="pass"]');
            const errorDiv = loginForm.querySelector('.error-message') || document.createElement('div');
            
            errorDiv.className = 'error-message';
            errorDiv.style.color = 'red';
            errorDiv.style.marginBottom = '10px';

            // Clear previous errors
            errorDiv.textContent = '';
            
            // Validate email
            if(!email.value) {
                errorDiv.textContent = 'Email is required';
                if(!loginForm.contains(errorDiv)) {
                    loginForm.insertBefore(errorDiv, email.parentNode.nextSibling);
                }
                e.preventDefault();
                return;
            }

            // Validate password
            if(!password.value) {
                errorDiv.textContent = 'Password is required';
                if(!loginForm.contains(errorDiv)) {
                    loginForm.insertBefore(errorDiv, password.parentNode.nextSibling);
                }
                e.preventDefault();
                return;
            }

            // Validate email format
            if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                errorDiv.textContent = 'Please enter a valid email address';
                if(!loginForm.contains(errorDiv)) {
                    loginForm.insertBefore(errorDiv, email.parentNode.nextSibling);
                }
                e.preventDefault();
                return;
            }
        });
    }

    document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
    inputNumber.oninput = () =>{
        if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value
        = inputNumber.value.slice(0, inputNumber.maxLength); 
    };
});

// Check if user is logged in (simplified version - would need server-side validation)
function checkLoginStatus() {
    // In a real implementation, this would check a session cookie or make an AJAX call
    // to the server to verify login status
    return localStorage.getItem('isLoggedIn') === 'true';
}

// Function to set login status (would be called after successful login)
function setLoginStatus(loggedIn) {
    localStorage.setItem('isLoggedIn', loggedIn);
}