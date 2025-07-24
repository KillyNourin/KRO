<div class="auth-popup-wrapper hidden">
  <div class="auth-popup">
    <span class="auth-close">&times;</span>

    <!-- Login Form -->
    <div class="form login-form active">
      <div class="form-content">
        <header>LOGIN</header>
        @if ($errors->has('login'))
          <div class="error-message" style="color:red; margin-bottom: 10px;">
          {{ $errors->first('login') }}
          </div>
        @endif
        <form method="POST" action="{{ route('login.custom') }}">
        @csrf
        <div class="field input-field">
        <input type="text" name="username" placeholder="Username" class="input" required>
        </div>
        <div class="field input-field">
        <input type="password" name="password" placeholder="Password" class="password" required>
        <i class='bx bx-hide eye-icon'></i>
        </div>
        <div class="field button-field">
        <button type="submit">Login</button>
        </div>
        <div class="form-link">
        <a href="#" class="forgot-pass">Forgot password?</a>
        </div>
        </form>
        <div class="form-link">
          <span>Don't have an account? <a href="#" class="link switch-to-register">Signup</a></span>
        </div>
      </div>
    </div>
@if (session('success'))
  <script>
    alert("{{ session('success') }}");
  </script>
@endif
    <!-- Register Form -->
    <div class="form register-form">
      <div class="form-content">
        <header>SIGN UP</header>
        <form action="#">
          <div class="field input-field">
            <input type="email" placeholder="Email" class="input">
          </div>
          <div class="field input-field">
            <input type="password" placeholder="Create password" class="password">
          </div>
          <div class="field input-field">
            <input type="password" placeholder="Confirm password" class="password">
            <i class='bx bx-hide eye-icon'></i>
          </div>
          <div class="field button-field">
            <button type="submit">Signup</button>
          </div>
        </form>
        <div class="form-link">
          <span>Already have an account? <a href="#" class="link switch-to-login">Login</a></span>
        </div>
      </div>
    </div>
  </div>
</div>
