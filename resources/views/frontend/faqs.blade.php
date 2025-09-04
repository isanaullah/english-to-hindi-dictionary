@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-sm light-text">
                <a href="/" class="hover:text-primary-600 transition-colors duration-200">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="dark-text">FAQs</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="text-center mb-16">
            <div class="max-w-3xl mx-auto">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-question-circle text-3xl text-primary-600"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold dark-text mb-6">Frequently Asked Questions</h1>
                <p class="text-xl light-text leading-relaxed">Find answers to common questions about our English-to-Hindi dictionary, learning features, and how to make the most of your language learning journey.</p>
            </div>
        </section>

        <!-- Search FAQs -->
        <section class="mb-12">
            <div class="max-w-2xl mx-auto">
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="relative">
                        <input type="text" placeholder="Search FAQs..." class="w-full px-6 py-4 pl-12 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:border-transparent">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Categories -->
        <section class="mb-12">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button class="faq-category-btn active bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300" data-category="all">
                    All Questions
                </button>
                <button class="faq-category-btn bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300" data-category="general">
                    General
                </button>
                <button class="faq-category-btn bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300" data-category="dictionary">
                    Dictionary
                </button>
                <button class="faq-category-btn bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300" data-category="learning">
                    Learning
                </button>
                <button class="faq-category-btn bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300" data-category="technical">
                    Technical
                </button>
            </div>
        </section>

        <!-- FAQ Items -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto space-y-6">
                
                <!-- General FAQs -->
                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="general">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">What is HindiLingo and how does it work?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">HindiLingo is a comprehensive English-to-Hindi dictionary and learning platform designed to help you master Hindi vocabulary, pronunciation, and grammar. Our platform offers word translations, audio pronunciations, example sentences, and interactive learning tools to make your Hindi learning journey effective and enjoyable.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="general">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">Is HindiLingo free to use?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Yes! HindiLingo offers a comprehensive free tier that includes basic dictionary lookups, word meanings, and pronunciation guides. We also offer premium features for advanced learners who want access to detailed grammar explanations, personalized learning paths, and offline access.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="general">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">Do I need to create an account to use the dictionary?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">No account is required for basic dictionary searches. However, creating a free account allows you to save favorite words, track your learning progress, access personalized recommendations, and sync your data across devices.</p>
                    </div>
                </div>

                <!-- Dictionary FAQs -->
                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="dictionary">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">How accurate are the translations?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Our translations are curated by native Hindi speakers and language experts. We provide multiple meanings for words with different contexts, along with example sentences to help you understand proper usage. Our database is continuously updated to ensure accuracy and relevance.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="dictionary">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">Can I search for Hindi words to get English meanings?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Yes! Our dictionary works both ways. You can search for English words to get Hindi translations, or search for Hindi words (in Devanagari script or Roman transliteration) to get English meanings and explanations.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="dictionary">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">How many words are in your dictionary?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Our dictionary contains over 50,000 English words with their Hindi translations, including common words, technical terms, idioms, and phrases. We regularly add new words and update existing entries based on user feedback and language evolution.</p>
                    </div>
                </div>

                <!-- Learning FAQs -->
                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="learning">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">How can I improve my Hindi pronunciation?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Each word in our dictionary includes audio pronunciation by native speakers. We also provide phonetic transcriptions and pronunciation guides. Practice regularly with our audio features, and consider using our pronunciation exercises and speaking practice tools.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="learning">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">What learning resources do you provide besides the dictionary?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">We offer grammar guides, daily vocabulary lessons, interactive quizzes, flashcards, phrase collections, cultural insights through our blog, and personalized learning paths. Our "Word of the Day" feature helps you learn new vocabulary consistently.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="learning">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">How long does it take to learn Hindi using your platform?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Learning time varies based on your dedication, prior language experience, and learning goals. With consistent daily practice (15-30 minutes), most users can build a basic vocabulary and start having simple conversations within 3-6 months. Our platform adapts to your pace and provides progress tracking to keep you motivated.</p>
                    </div>
                </div>

                <!-- Technical FAQs -->
                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="technical">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">Is there a mobile app available?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Currently, HindiLingo is available as a responsive web application that works perfectly on mobile devices. We're developing dedicated iOS and Android apps that will be available soon with additional offline features and enhanced mobile experience.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="technical">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">Can I use HindiLingo offline?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">Basic offline functionality is available for premium users, allowing you to access previously searched words and downloaded content. Full offline access will be available with our upcoming mobile apps, including the complete dictionary and learning materials.</p>
                    </div>
                </div>

                <div class="faq-item glassmorphism p-6 rounded-2xl shadow-md" data-category="technical">
                    <button class="faq-question w-full text-left flex items-center justify-between py-2">
                        <h3 class="text-lg font-semibold dark-text">How do I type in Hindi on my device?</h3>
                        <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                    </button>
                    <div class="faq-answer hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text leading-relaxed">You can enable Hindi keyboard on your device through system settings. We also provide an on-screen Hindi keyboard and support Roman transliteration (typing Hindi words using English letters). Our help section includes detailed guides for setting up Hindi input on different devices.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Still Have Questions -->
        <section class="mb-16">
            <div class="max-w-2xl mx-auto text-center">
                <div class="glassmorphism p-8 rounded-2xl shadow-md">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-2xl text-accent-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold dark-text mb-4">Still Have Questions?</h2>
                    <p class="light-text mb-6">Can't find what you're looking for? Our support team is here to help you with any questions about HindiLingo.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{route('contact-us')}}" class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 inline-flex items-center justify-center">
                            <i class="fas fa-envelope mr-2"></i>Contact Support
                        </a>
                        <a href="#" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 inline-flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>WhatsApp Chat
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Resources -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Popular Resources</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="glassmorphism p-6 rounded-2xl shadow-md text-center word-card">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book text-primary-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold dark-text mb-3">Grammar Guide</h3>
                        <p class="light-text text-sm mb-4">Learn Hindi grammar rules and sentence structures with easy examples.</p>
                        <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 font-medium">
                            Explore Guide <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md text-center word-card">
                        <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-accent-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold dark-text mb-3">Learning Path</h3>
                        <p class="light-text text-sm mb-4">Follow structured lessons from beginner to advanced level.</p>
                        <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 font-medium">
                            Start Learning <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md text-center word-card">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-comments text-green-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold dark-text mb-3">Practice Conversations</h3>
                        <p class="light-text text-sm mb-4">Practice real-world Hindi conversations and dialogues.</p>
                        <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 font-medium">
                            Start Practicing <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Toggle functionality
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    if (answer.classList.contains('hidden')) {
                        answer.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        answer.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                });
            });

            // Category filtering
            const categoryBtns = document.querySelectorAll('.faq-category-btn');
            const faqItems = document.querySelectorAll('.faq-item');

            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Update active button
                    categoryBtns.forEach(b => {
                        b.classList.remove('active', 'bg-primary-500', 'text-white');
                        b.classList.add('bg-slate-100', 'text-slate-700');
                    });
                    this.classList.add('active', 'bg-primary-500', 'text-white');
                    this.classList.remove('bg-slate-100', 'text-slate-700');
                    
                    // Filter FAQ items
                    faqItems.forEach(item => {
                        if (category === 'all' || item.getAttribute('data-category') === category) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Search functionality
            const searchInput = document.querySelector('input[placeholder="Search FAQs..."]');
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>

@include('frontend.partials.footer')
