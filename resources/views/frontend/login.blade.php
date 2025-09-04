@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-sm light-text">
                <a href="/" class="hover:text-primary-600 transition-colors duration-200">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="dark-text">Login</span>
            </div>
        </nav>

        <!-- Login Section -->
        <section class="mb-16">
            <div class="max-w-md mx-auto">
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-circle text-3xl text-primary-600"></i>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold dark-text mb-4">Welcome Back!</h1>
                    <p class="light-text">Sign in to access your personalized Hindi learning experience</p>
                </div>

                <!-- Login Form -->
                <div class="glassmorphism p-8 rounded-2xl shadow-md">
                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Email Field -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-semibold dark-text mb-2">
                                <i class="fas fa-envelope mr-2 text-primary-600"></i>Email Address
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}"
                                   class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:border-transparent transition-all duration-200 @error('email') border-red-500 @enderror" 
                                   placeholder="Enter your email address"
                                   required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-6">
                            <label for="password" class="block text-sm font-semibold dark-text mb-2">
                                <i class="fas fa-lock mr-2 text-primary-600"></i>Password
                            </label>
                            <div class="relative">
                                <input type="password" 
                                       id="password" 
                                       name="password" 
                                       class="w-full px-4 py-3 pr-12 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:border-transparent transition-all duration-200 @error('password') border-red-500 @enderror" 
                                       placeholder="Enter your password"
                                       required>
                                <button type="button" 
                                        id="togglePassword" 
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors duration-200">
                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                            @error('password')
                                <p class="text-red-500 text-sm mt-2 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" 
                                       name="remember" 
                                       class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 focus:ring-2">
                                <span class="ml-2 text-sm light-text">Remember me</span>
                            </label>
                            <a href="{{ route('password.request') }}" class="text-sm text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                Forgot password?
                            </a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" 
                                class="w-full bg-primary-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98]">
                            <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                        </button>

                        <!-- Social Login -->
                        <div class="mt-6">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-slate-200"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-white light-text">Or continue with</span>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-2 gap-3">
                                <button type="button" 
                                        class="w-full inline-flex justify-center py-3 px-4 rounded-lg border border-slate-200 bg-white text-sm font-medium text-slate-700 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200">
                                    <i class="fab fa-google text-red-500 mr-2"></i>Google
                                </button>
                                <button type="button" 
                                        class="w-full inline-flex justify-center py-3 px-4 rounded-lg border border-slate-200 bg-white text-sm font-medium text-slate-700 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200">
                                    <i class="fab fa-facebook text-blue-600 mr-2"></i>Facebook
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Sign Up Link -->
                <div class="text-center mt-8">
                    <p class="light-text">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-primary-600 hover:text-primary-700 font-semibold transition-colors duration-200">
                            Create one here
                        </a>
                    </p>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold dark-text text-center mb-8">Why Create an Account?</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="glassmorphism p-6 rounded-2xl shadow-md text-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-heart text-primary-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold dark-text mb-3">Save Favorites</h3>
                        <p class="light-text text-sm">Bookmark words and phrases to build your personal vocabulary collection.</p>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md text-center">
                        <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-chart-line text-accent-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold dark-text mb-3">Track Progress</h3>
                        <p class="light-text text-sm">Monitor your learning journey with detailed progress analytics and achievements.</p>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md text-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-sync-alt text-green-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold dark-text mb-3">Sync Across Devices</h3>
                        <p class="light-text text-sm">Access your learning materials from any device, anywhere, anytime.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Security Notice -->
        <section class="mb-16">
            <div class="max-w-2xl mx-auto">
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shield-alt text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold dark-text mb-2">Your Privacy is Protected</h3>
                            <p class="light-text text-sm leading-relaxed">
                                We use industry-standard encryption to protect your personal information. Your data is never shared with third parties without your consent. 
                                <a href="{{ route('privacy-policy') }}" class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                    Read our Privacy Policy
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Back to Home -->
        <section class="text-center">
            <a href="/" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 shadow-md inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>Back to Home
            </a>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password visibility toggle
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });

            // Form validation
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput2 = document.getElementById('password');

            loginForm.addEventListener('submit', function(e) {
                let isValid = true;

                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    showError(emailInput, 'Please enter a valid email address');
                    isValid = false;
                } else {
                    clearError(emailInput);
                }

                // Password validation
                if (passwordInput2.value.length < 6) {
                    showError(passwordInput2, 'Password must be at least 6 characters long');
                    isValid = false;
                } else {
                    clearError(passwordInput2);
                }

                if (!isValid) {
                    e.preventDefault();
                }
            });

            function showError(input, message) {
                input.classList.add('border-red-500');
                
                // Remove existing error message
                const existingError = input.parentNode.querySelector('.error-message');
                if (existingError) {
                    existingError.remove();
                }

                // Add new error message
                const errorDiv = document.createElement('p');
                errorDiv.className = 'text-red-500 text-sm mt-2 flex items-center error-message';
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle mr-1"></i>${message}`;
                input.parentNode.appendChild(errorDiv);
            }

            function clearError(input) {
                input.classList.remove('border-red-500');
                const errorMessage = input.parentNode.querySelector('.error-message');
                if (errorMessage) {
                    errorMessage.remove();
                }
            }

            // Social login handlers
            const googleBtn = document.querySelector('button:has(.fa-google)');
            const facebookBtn = document.querySelector('button:has(.fa-facebook)');

            googleBtn.addEventListener('click', function() {
                // Add Google OAuth logic here
                console.log('Google login clicked');
            });

            facebookBtn.addEventListener('click', function() {
                // Add Facebook OAuth logic here
                console.log('Facebook login clicked');
            });

            // Auto-focus on email field
            emailInput.focus();

            // Add loading state to submit button
            loginForm.addEventListener('submit', function() {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Signing In...';
                submitBtn.disabled = true;

                // Re-enable button after 3 seconds (in case of error)
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 3000);
            });
        });
    </script>

@include('frontend.partials.footer')
