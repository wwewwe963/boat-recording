<script>
    function validateForm() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      if (username === '' || password === '') {
        document.getElementById('errorMessage').innerHTML = 'Please enter both username and password.';
        return false;
      }

      return true;
    }
  </script>