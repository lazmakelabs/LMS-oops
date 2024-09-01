</main>
<!-- JavaScript for profile functionality -->
<script>
    document.getElementById('profile-btn').addEventListener('click', function() {
        document.getElementById('profile').classList.toggle('hidden');
    });
</script>

<!-- JavaScript for toggle functionality -->
<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
    // intership scripts 
    function limitPhoneNumber(input) {
        // Remove any non-digit characters (if any) and limit to 10 digits
        input.value = input.value.replace(/\D/g, '').slice(0, 10);
    }
    // Toggle password visibility for both password and confirm password fields
    document.getElementById('toggle-password').addEventListener('click', function() {
        const passwordField = document.getElementById('password');
        const toggleButton = document.getElementById('toggle-password');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleButton.textContent = 'Hide';
        } else {
            passwordField.type = 'password';
            toggleButton.textContent = 'Show';
        }
    });

    document.getElementById('toggle-confirm-password').addEventListener('click', function() {
        const confirmPasswordField = document.getElementById('confirm_password');
        const toggleButton = document.getElementById('toggle-confirm-password');

        if (confirmPasswordField.type === 'password') {
            confirmPasswordField.type = 'text';
            toggleButton.textContent = 'Hide';
        } else {
            confirmPasswordField.type = 'password';
            toggleButton.textContent = 'Show';
        }
    });

    // Check if passwords match in real-time
    function checkPasswordMatch() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;
        const errorMessage = document.getElementById('error-message');

        if (password !== confirmPassword) {
            errorMessage.classList.remove('hidden');
        } else {
            errorMessage.classList.add('hidden');
        }
    }

    // work assign page js
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.complete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const form = this.closest('form');
                form.querySelector('.report-field').style.display = 'none';
                form.querySelector('.file-field').style.display = 'none';
                form.querySelector('.status-message').classList.remove('hidden');
                form.querySelector('.status-message').innerText = 'Marked as Completed';
            });
        });

        document.querySelectorAll('.submit-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the form from submitting normally
                const form = this.closest('form');
                const formData = new FormData(form);

                fetch('submit_form.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        form.querySelector('.status-message').classList.remove('hidden');
                        form.querySelector('.status-message').innerText = 'Submitted successfully!';
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
   
</script>
</body>

</html>