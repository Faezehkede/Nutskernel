
  function validateForm() {
    const filled = $('input[name="firstName"]').val() &&
                   $('input[name="lastName"]').val() &&
                   $('input[name="company"]').val() &&
                   $('input[name="phone"]').val() &&
                   $('input[name="role"]:checked').val();

    if (filled) {
      $('.submit-btn').addClass('active').prop('disabled', false);
    } else {
      $('.submit-btn').removeClass('active').prop('disabled', true);
    }
  }

  $(document).ready(function () {
    $('input, select').on('input change', validateForm);

    $('#accountForm').submit(function (e) {
      e.preventDefault();
      alert("Account Created!");
      // You can redirect or save data here
    });
  });

  $(document).ready(function() {
    // When the country code is changed
    $('#countryCode').change(function() {
      // Get the selected option and its data-code
      var countryCode = $(this).find(':selected').data('code');
      
      // Set the value of the phone input to the country code + any existing phone number
      var currentPhone = $('#phone').val().replace(/\D/g, ''); // Remove any non-digit characters from the current input
      if (currentPhone.startsWith(countryCode.replace('+', ''))) {
        $('#phone').val(countryCode + currentPhone.slice(countryCode.length));
      } else {
        $('#phone').val(countryCode); // Set to the new country code if the number doesn't match
      }
    });

    // Trigger change event on page load to set the initial value
    $('#countryCode').trigger('change');
  });

  $(document).ready(function() {
    // When the submit button is clicked
    $('#submitRole').click(function() {
      // Get the selected role
      var selectedRole = $("input[name='role']:checked").val();

      if (selectedRole) {
        // Redirect based on the selected role
        if (selectedRole === 'supplier') {
          window.location.href = 'supplier-dashboard.html';  // Supplier dashboard URL
        } else if (selectedRole === 'buyer') {
          window.location.href = 'buyer-dashboard.html';  // Buyer dashboard URL
        }
      } else {
        alert('Please select a role');
      }
    });
  });

