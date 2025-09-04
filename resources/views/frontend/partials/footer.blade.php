    <!-- Footer -->
    <footer class="bg-slate-100 mt-16 p-8 text-slate-700">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold gradient-text mb-4 flex items-center">
                    <i class="fas fa-book-open mr-2"></i>HindiLingo
                </h3>
                <p class="mb-4">The most comprehensive English to Hindi dictionary with advanced features for learners.</p>
                <div class="flex space-x-3">
                    <div class="bg-white p-2 rounded-lg shadow-sm">
                        <i class="fab fa-apple text-2xl"></i>
                    </div>
                    <div class="bg-white p-2 rounded-lg shadow-sm">
                        <i class="fab fa-google-play text-xl"></i>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{route('home')}}" class="hover:text-primary-600 transition-colors duration-200">Home</a></li>
                    <li><a href="#" class="hover:text-primary-600 transition-colors duration-200">Browse Words</a></li>
                    <li><a href="#" class="hover:text-primary-600 transition-colors duration-200">Word of the Day</a></li>
                    <li><a href="#" class="hover:text-primary-600 transition-colors duration-200">Grammar Guide</a></li>
                    <li><a href="{{route('bloglist')}}" class="hover:text-primary-600 transition-colors duration-200">Blog</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Help & Support</h4>
                <ul class="space-y-2">
                    <li><a href="{{route('about-us')}}" class="hover:text-primary-600 transition-colors duration-200">About Us</a></li>
                    <li><a href="{{route('contact-us')}}" class="hover:text-primary-600 transition-colors duration-200">Contact Us</a></li>
                    <li><a href="{{route('faqs')}}" class="hover:text-primary-600 transition-colors duration-200">FAQs</a></li>
                    <li><a href="{{route('privacy-policy')}}" class="hover:text-primary-600 transition-colors duration-200">Privacy Policy</a></li>
                    <li><a href="{{route('terms-and-conditions')}}" class="hover:text-primary-600 transition-colors duration-200">Terms of Service</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4">Connect With Us</h4>
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-primary-50 transition-all duration-200 shadow-sm">
                        <i class="fab fa-facebook-f text-primary-600"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-primary-50 transition-all duration-200 shadow-sm">
                        <i class="fab fa-twitter text-primary-600"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-primary-50 transition-all duration-200 shadow-sm">
                        <i class="fab fa-instagram text-primary-600"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-primary-50 transition-all duration-200 shadow-sm">
                        <i class="fab fa-youtube text-primary-600"></i>
                    </a>
                </div>

                <div class="mt-6">
                    <p class="mb-2">Subscribe to our newsletter</p>
                    <div class="flex mt-2">
                        <input type="email" placeholder="Your email" class="bg-white px-4 py-2 rounded-l-lg focus:outline-none w-full border border-r-0 border-slate-200">
                        <button class="bg-primary-500 px-4 py-2 rounded-r-lg font-semibold text-white hover:bg-primary-600 transition-colors duration-200">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-200 mt-8 pt-6 text-center text-sm">
            <p>© 2023 HindiLingo. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Language tabs
            const languageTabs = document.querySelectorAll('.language-tab');
            languageTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    languageTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Alphabet buttons
            const alphabetButtons = document.querySelectorAll('.grid button');
            alphabetButtons.forEach(button => {
                button.addEventListener('click', function() {
                    alphabetButtons.forEach(b => {
                        b.classList.remove('bg-primary-100', 'text-primary-600', 'border-primary-300', 'scale-110');
                        b.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
                    });
                    this.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
                    this.classList.add('bg-primary-100', 'text-primary-600', 'border-primary-300', 'scale-110');
                });
            });

            // Voice recognition button
            const voiceBtn = document.querySelector('.voice-recognition-btn');
            if (voiceBtn) {
                voiceBtn.addEventListener('click', function() {
                    this.classList.toggle('listening');
                    if (this.classList.contains('listening')) {
                        this.innerHTML = '<i class="fas fa-stop mr-2"></i> Stop Listening';
                    } else {
                        this.innerHTML = '<i class="fas fa-microphone mr-2"></i> Practice Pronunciation';
                    }
                });
            }

            // Quiz options
            const quizOptions = document.querySelectorAll('.quiz-option');
            quizOptions.forEach(option => {
                option.addEventListener('click', function() {
                    quizOptions.forEach(o => o.classList.remove('bg-primary-100', 'border-primary-300'));
                    this.classList.add('bg-primary-100', 'border-primary-300');
                });
            });
        });
    </script>
