<?php
/* Template Name: Register Step Two */

get_header();
?>

<div class="login-register">
    <div class="form-container">
        <h2>Welcome!</h2>
        <p>Let’s start by getting to know you</p>

        <form id="accountForm">
            <div class="inline-group">
                <div class="field-group">
                    <label>First name<span style="color: red">*</span></label>
                    <input type="text" name="firstName" required>
                </div>
                <div class="field-group">
                    <label>Last name<span style="color: red">*</span></label>
                    <input type="text" name="lastName" required>
                </div>
            </div>

            <div class="field-group">
                <label>Company name<span style="color: red">*</span></label>
                <input type="text" name="company" required>
            </div>

            <div class="field-group">
                <label>Phone Number<span style="color: red">*</span></label>
                <div class="phone-group">
                    <select name="countryCode" id="countryCode">
                        <option value="CA" data-code="+1">CA</option>
                        <option value="US" data-code="+1">US</option>
                        <option value="UK" data-code="+44">UK</option>
                        <option value="IR" data-code="+98">IR</option>
                        <!-- Add more as needed -->
                    </select>
                    <input type="tel" name="phone" id="phone" value="+1" required="">
                </div>
            </div>

            <div class="field-group">
                <label>Trade role<span style="color: red">*</span></label>
                <small>You can change your role later.</small>
                <div class="radio-group">
                    <label><input type="radio" name="role" value="supplier" id="supplier"> Supplier</label>
                    <label><input type="radio" name="role" value="buyer" id="buyer"> Buyer</label>
                </div>
            </div>

            <button type="submit" class="submit-btn" disabled><a href="./supplier-dashboard.html">Create account</a></button>
            <small>By creating account, you agree to our <a href="#">Privacy Policy</a>.</small>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/login-form.js"></script>

</body>

</html>