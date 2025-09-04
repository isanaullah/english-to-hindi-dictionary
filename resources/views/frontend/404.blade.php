@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- 404 Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-20">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-exclamation-triangle text-accent-500 mr-2"></i>
                <span class="dark-text">Page not found</span>
            </div>

            <!-- Large 404 -->
            <div class="mb-8">
                <h1 class="text-8xl md:text-9xl font-bold accent-gradient-text mb-4">404</h1>
                <div class="w-32 h-1 bg-gradient-to-r from-primary-500 to-accent-500 mx-auto rounded-full"></div>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold dark-text mb-6">Oops! Page Not Found</h2>
            <p class="text-xl light-text mb-10 max-w-2xl">The page you're looking for seems to have wandered off. Don't worry, even the best dictionaries have missing pages sometimes!</p>

            <!-- Search Suggestion -->
            <div class="glassmorphism p-6 rounded-2xl mb-8 max-w-lg w-full shadow-md">
                <h3 class="text-lg font-semibold dark-text mb-4">Try searching for a word instead:</h3>
                <div class="flex">
                    <input type="text" placeholder="Search for any English word..." class="flex-1 px-4 py-3 rounded-l-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300">
                    <button class="bg-primary-500 text-white px-6 py-3 rounded-r-lg font-semibold hover:bg-primary-600 transition-all duration-300 flex items-center">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <a href="/" class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 shadow-md inline-flex items-center">
                    <i class="fas fa-home mr-2"></i>Go Home
                </a>
                <a href="/contact-us" class="bg-white text-primary-600 px-6 py-3 rounded-lg font-semibold border border-primary-300 hover:bg-primary-50 transition-all duration-300 shadow-md inline-flex items-center">
                    <i class="fas fa-envelope mr-2"></i>Contact Us
                </a>
                <button onclick="history.back()" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 shadow-md inline-flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>Go Back
                </button>
            </div>
        </section>

        <!-- Popular Pages -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Popular Pages</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="/" class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:animate-float">
                        <i class="fas fa-home text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-2">Home</h3>
                    <p class="light-text">Start your language learning journey</p>
                </a>

                <a href="/about-us" class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:animate-float">
                        <i class="fas fa-users text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-2">About Us</h3>
                    <p class="light-text">Learn more about our mission</p>
                </a>

                <a href="/contact-us" class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:animate-float">
                        <i class="fas fa-envelope text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-2">Contact</h3>
                    <p class="light-text">Get in touch with our team</p>
                </a>
            </div>
        </section>

        <!-- Fun Facts -->
        <section class="my-16">
            <div class="glassmorphism p-8 rounded-2xl max-w-3xl mx-auto text-center shadow-md">
                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-2xl text-accent-600"></i>
                </div>
                <h2 class="text-2xl font-bold dark-text mb-4">Did You Know?</h2>
                <p class="light-text mb-6">While you're here, here's an interesting fact about the Hindi language:</p>
                <div class="bg-primary-50 p-6 rounded-lg border border-primary-200">
                    <p class="dark-text text-lg mb-2"><strong>Hindi Fun Fact:</strong></p>
                    <p class="light-text">Hindi is written in the Devanagari script, which literally means "script of the gods" (deva = god, nagari = city script). It's used by over 600 million people worldwide!</p>
                </div>
                <div class="mt-6">
                    <span class="hindi-font text-2xl text-primary-600">नमस्ते</span>
                    <p class="light-text mt-2">Namaste - Hello in Hindi</p>
                </div>
            </div>
        </section>

        <!-- Word of the Day -->
        <section class="my-16">
            <div class="glassmorphism p-6 rounded-2xl max-w-2xl mx-auto shadow-md">
                <h2 class="text-2xl font-bold dark-text text-center mb-6 section-title">Word of the Day</h2>
                
                <div class="text-center">
                    <div class="flex justify-center items-center mb-4">
                        <h3 class="text-3xl font-bold dark-text mr-4">Journey</h3>
                        <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                            <i class="fas fa-volume-up text-xl"></i>
                        </button>
                    </div>
                    <p class="hindi-font text-primary-600 text-2xl mb-4">यात्रा</p>
                    <p class="light-text mb-4">The act of traveling from one place to another, especially over a long distance.</p>
                    <p class="dark-text"><strong>Example:</strong> "Every learning journey begins with a single step."</p>
                    
                    <div class="mt-6 pt-4 border-t border-slate-200">
                        <a href="/" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 inline-flex items-center">
                            <i class="fas fa-arrow-right mr-2"></i>Start your language journey
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Error Report -->
        <section class="my-16 text-center">
            <div class="glassmorphism p-6 rounded-2xl max-w-md mx-auto shadow-md">
                <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bug text-accent-600"></i>
                </div>
                <h3 class="font-semibold dark-text mb-2">Found a Broken Link?</h3>
                <p class="light-text mb-4 text-sm">Help us improve by reporting broken links or missing pages.</p>
                <a href="/contact-us" class="bg-accent-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-accent-600 transition-all duration-300 text-sm">
                    Report Issue
                </a>
            </div>
        </section>
    </main>

    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-focus search input
            const searchInput = document.querySelector('input[type="text"]');
            if (searchInput) {
                searchInput.focus();
            }

            // Add floating animation to 404 number
            const title = document.querySelector('h1');
            if (title) {
                title.classList.add('floating-icon');
            }
        });
    </script>
@include('frontend.partials.footer')