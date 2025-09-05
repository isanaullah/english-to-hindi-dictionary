@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-users text-accent-500 mr-2"></i>
                <span class="dark-text">Learn more about our mission</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6">About <span class="accent-gradient-text">HindiLingo</span></h1>
            <p class="text-xl light-text mb-10 max-w-3xl">We're passionate about breaking language barriers and making Hindi learning accessible to everyone around the world.</p>
        </section>

        <!-- Mission Section -->
        <section class="my-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold dark-text mb-6 section-title">Our Mission</h2>
                    <p class="light-text mb-6 text-lg">{!!$page->page_desc!!}</p>
                    <div class="flex flex-wrap gap-4">
                        <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                            <i class="fas fa-heart mr-2 text-accent-500"></i>
                            <span>Passionate</span>
                        </div>
                        <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                            <i class="fas fa-lightbulb mr-2 text-accent-500"></i>
                            <span>Innovative</span>
                        </div>
                        <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                            <i class="fas fa-globe mr-2 text-accent-500"></i>
                            <span>Global</span>
                        </div>
                    </div>
                </div>
                <div class="glassmorphism p-8 rounded-2xl shadow-md">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-rocket text-3xl text-primary-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold dark-text mb-4">500,000+</h3>
                        <p class="light-text">Happy learners worldwide</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">What Makes Us Different</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-database text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Comprehensive Database</h3>
                    <p class="light-text">Over 200,000 words with detailed meanings, pronunciations, and usage examples.</p>
                </div>

                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-brain text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Smart Learning</h3>
                    <p class="light-text">AI-powered suggestions and personalized learning paths based on your progress.</p>
                </div>

                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-users text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Community Driven</h3>
                    <p class="light-text">Built with feedback from our amazing community of learners and educators.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Meet Our Team</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glassmorphism p-6 rounded-2xl text-center shadow-md">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 text-2xl font-bold">AK</span>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-2">Arjun Kumar</h3>
                    <p class="text-primary-600 mb-3">Founder & CEO</p>
                    <p class="light-text text-sm">Passionate about making language learning accessible to everyone.</p>
                </div>

                <div class="glassmorphism p-6 rounded-2xl text-center shadow-md">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 text-2xl font-bold">PS</span>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-2">Priya Sharma</h3>
                    <p class="text-primary-600 mb-3">Lead Developer</p>
                    <p class="light-text text-sm">Expert in creating intuitive and responsive user experiences.</p>
                </div>

                <div class="glassmorphism p-6 rounded-2xl text-center shadow-md">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 text-2xl font-bold">RG</span>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-2">Raj Gupta</h3>
                    <p class="text-primary-600 mb-3">Content Specialist</p>
                    <p class="light-text text-sm">Linguistics expert ensuring accuracy and cultural context.</p>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="my-16">
            <div class="glassmorphism p-8 rounded-2xl shadow-md">
                <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Our Impact</h2>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">500K+</div>
                        <div class="light-text">Active Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">200K+</div>
                        <div class="light-text">Words in Database</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">50+</div>
                        <div class="light-text">Countries</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">99.9%</div>
                        <div class="light-text">Uptime</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="my-16 text-center">
            <div class="glassmorphism p-8 rounded-2xl max-w-2xl mx-auto shadow-md">
                <h2 class="text-3xl font-bold dark-text mb-4">Get In Touch</h2>
                <p class="light-text mb-6">Have questions or suggestions? We'd love to hear from you!</p>
                <a href="/contact-us" class="bg-primary-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 shadow-md inline-flex items-center">
                    <i class="fas fa-envelope mr-2"></i>Contact Us
                </a>
            </div>
        </section>
    </main>
@include('frontend.partials.footer')
