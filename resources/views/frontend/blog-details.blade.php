@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-sm light-text">
                <a href="/" class="hover:text-primary-600 transition-colors duration-200">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a href="/blog" class="hover:text-primary-600 transition-colors duration-200">Blog</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="dark-text">10 Essential Hindi Phrases Every Beginner Should Know</span>
            </div>
        </nav>

        <!-- Article Header -->
        <section class="mb-12">
            <div class="max-w-4xl mx-auto">
                <div class="flex items-center mb-6">
                    <span class="bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Featured</span>
                    <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">Learning Tips</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold dark-text mb-6">10 Essential Hindi Phrases Every Beginner Should Know</h1>
                <p class="text-xl light-text mb-8 leading-relaxed">Master these fundamental Hindi expressions to start meaningful conversations and build confidence in your language learning journey. From greetings to everyday expressions, these phrases will serve as your foundation.</p>
                
                <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-primary-600 font-bold">AK</span>
                        </div>
                        <div>
                            <p class="dark-text font-semibold">Arjun Kumar</p>
                            <p class="light-text text-sm">December 15, 2023 • 5 min read</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors duration-200">
                            <i class="far fa-heart"></i>
                            <span class="text-sm">124</span>
                        </button>
                        <button class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors duration-200">
                            <i class="fas fa-share-alt"></i>
                            <span class="text-sm">Share</span>
                        </button>
                        <button class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors duration-200">
                            <i class="far fa-bookmark"></i>
                            <span class="text-sm">Save</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Article Content -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl shadow-md prose prose-lg max-w-none">
                    <p class="text-lg light-text mb-8">Learning a new language can feel overwhelming, but starting with essential phrases makes the journey much more manageable. These 10 Hindi phrases will help you navigate basic conversations and show respect for the culture you're exploring.</p>

                    <h2 class="text-2xl font-bold dark-text mb-6 section-title">Why These Phrases Matter</h2>
                    <p class="light-text mb-6">Before diving into the phrases, it's important to understand that Hindi is more than just words—it's a reflection of Indian culture, values, and social etiquette. These expressions will not only help you communicate but also show your respect for the language and its speakers.</p>

                    <div class="bg-primary-50 p-6 rounded-lg border-l-4 border-primary-500 mb-8">
                        <p class="text-primary-800"><strong>Pro Tip:</strong> Practice these phrases daily and try to use them in context. The more you use them, the more natural they'll become!</p>
                    </div>

                    <h2 class="text-2xl font-bold dark-text mb-6 section-title">The Essential 10 Phrases</h2>

                    <!-- Phrase 1 -->
                    <div class="glassmorphism p-6 rounded-xl mb-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold dark-text">1. नमस्ते (Namaste)</h3>
                                <p class="text-primary-600 font-medium">na-mas-te</p>
                            </div>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up text-xl"></i>
                            </button>
                        </div>
                        <p class="light-text mb-3"><strong>Meaning:</strong> Hello/Goodbye (respectful greeting)</p>
                        <p class="light-text mb-3"><strong>When to use:</strong> This is your go-to greeting for any time of day. It's respectful and appropriate in all situations.</p>
                        <p class="dark-text"><strong>Example:</strong> "नमस्ते, आप कैसे हैं?" (Namaste, aap kaise hain?) - "Hello, how are you?"</p>
                    </div>

                    <!-- Phrase 2 -->
                    <div class="glassmorphism p-6 rounded-xl mb-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold dark-text">2. धन्यवाद (Dhanyawad)</h3>
                                <p class="text-primary-600 font-medium">dhan-ya-waad</p>
                            </div>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up text-xl"></i>
                            </button>
                        </div>
                        <p class="light-text mb-3"><strong>Meaning:</strong> Thank you</p>
                        <p class="light-text mb-3"><strong>When to use:</strong> Express gratitude in formal situations or when you want to be particularly polite.</p>
                        <p class="dark-text"><strong>Example:</strong> "आपकी मदद के लिए धन्यवाद" (Aapki madad ke liye dhanyawad) - "Thank you for your help"</p>
                    </div>

                    <!-- Phrase 3 -->
                    <div class="glassmorphism p-6 rounded-xl mb-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold dark-text">3. माफ़ करें (Maaf karen)</h3>
                                <p class="text-primary-600 font-medium">maaf ka-ren</p>
                            </div>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up text-xl"></i>
                            </button>
                        </div>
                        <p class="light-text mb-3"><strong>Meaning:</strong> Excuse me/Sorry</p>
                        <p class="light-text mb-3"><strong>When to use:</strong> To get someone's attention politely or to apologize.</p>
                        <p class="dark-text"><strong>Example:</strong> "माफ़ करें, क्या आप मेरी मदद कर सकते हैं?" (Maaf karen, kya aap meri madad kar sakte hain?) - "Excuse me, can you help me?"</p>
                    </div>

                    <!-- Phrase 4 -->
                    <div class="glassmorphism p-6 rounded-xl mb-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold dark-text">4. मेरा नाम... है (Mera naam... hai)</h3>
                                <p class="text-primary-600 font-medium">me-ra naam... hai</p>
                            </div>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up text-xl"></i>
                            </button>
                        </div>
                        <p class="light-text mb-3"><strong>Meaning:</strong> My name is...</p>
                        <p class="light-text mb-3"><strong>When to use:</strong> Essential for introductions and meeting new people.</p>
                        <p class="dark-text"><strong>Example:</strong> "मेरा नाम राहुल है" (Mera naam Rahul hai) - "My name is Rahul"</p>
                    </div>

                    <!-- Phrase 5 -->
                    <div class="glassmorphism p-6 rounded-xl mb-6 border border-slate-200">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold dark-text">5. आप कैसे हैं? (Aap kaise hain?)</h3>
                                <p class="text-primary-600 font-medium">aap kai-se hain</p>
                            </div>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up text-xl"></i>
                            </button>
                        </div>
                        <p class="light-text mb-3"><strong>Meaning:</strong> How are you?</p>
                        <p class="light-text mb-3"><strong>When to use:</strong> A polite way to inquire about someone's well-being.</p>
                        <p class="dark-text"><strong>Example:</strong> Response: "मैं ठीक हूँ, धन्यवाद" (Main theek hun, dhanyawad) - "I'm fine, thank you"</p>
                    </div>

                    <div class="bg-accent-50 p-6 rounded-lg border-l-4 border-accent-500 mb-8">
                        <h3 class="font-semibold text-accent-800 mb-2">Cultural Note</h3>
                        <p class="text-accent-700 text-sm">In Hindi culture, showing respect through language is very important. Using "आप" (aap) instead of "तुम" (tum) shows respect, especially when talking to elders or people you don't know well.</p>
                    </div>

                    <h2 class="text-2xl font-bold dark-text mb-6 section-title">Practice Makes Perfect</h2>
                    <p class="light-text mb-6">Now that you've learned these essential phrases, here are some tips to help you practice and remember them:</p>

                    <ul class="list-disc list-inside light-text space-y-2 mb-8 ml-4">
                        <li>Practice pronunciation using our audio features</li>
                        <li>Use flashcards to memorize the phrases</li>
                        <li>Try to use one new phrase each day in conversation</li>
                        <li>Watch Hindi movies or shows to hear these phrases in context</li>
                        <li>Join online Hindi learning communities for practice</li>
                    </ul>

                    <h2 class="text-2xl font-bold dark-text mb-6 section-title">What's Next?</h2>
                    <p class="light-text mb-6">Congratulations on taking your first step into Hindi! These phrases will serve as your foundation, but don't stop here. Continue building your vocabulary, learn basic grammar rules, and most importantly, practice speaking with native speakers whenever possible.</p>

                    <div class="bg-primary-50 p-6 rounded-lg border border-primary-200 text-center">
                        <h3 class="text-lg font-semibold dark-text mb-3">Ready for More?</h3>
                        <p class="light-text mb-4">Explore our comprehensive Hindi dictionary and interactive learning tools to continue your journey.</p>
                        <a href="/" class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 inline-flex items-center">
                            <i class="fas fa-search mr-2"></i>Explore Dictionary
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Author Bio -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex items-start space-x-4">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="text-primary-600 font-bold text-xl">AK</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold dark-text mb-2">Arjun Kumar</h3>
                            <p class="text-primary-600 mb-3">Founder & CEO, HindiLingo</p>
                            <p class="light-text mb-4">Arjun is passionate about making Hindi learning accessible to everyone. With over 10 years of experience in language education, he has helped thousands of students master Hindi through innovative teaching methods.</p>
                            <div class="flex space-x-3">
                                <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Articles -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Related Articles</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <article class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <div class="flex items-center mb-4">
                            <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">Grammar</span>
                            <span class="ml-auto light-text text-sm">Dec 12, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold dark-text mb-3">Understanding Hindi Verb Conjugations</h3>
                        <p class="light-text mb-4 text-sm">Learn the patterns and rules behind Hindi verb conjugations to speak more naturally and confidently.</p>
                        <a href="/blog/hindi-verb-conjugations" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 inline-flex items-center">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </article>

                    <article class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <div class="flex items-center mb-4">
                            <span class="bg-accent-100 text-accent-800 px-3 py-1 rounded-full text-sm font-medium">Pronunciation</span>
                            <span class="ml-auto light-text text-sm">Dec 8, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold dark-text mb-3">Mastering Hindi Pronunciation</h3>
                        <p class="light-text mb-4 text-sm">Tips and techniques to improve your Hindi pronunciation and sound more like a native speaker.</p>
                        <a href="/blog/mastering-hindi-pronunciation" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 inline-flex items-center">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!-- Newsletter Signup -->
        <section class="mb-16">
            <div class="max-w-2xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl text-center shadow-md">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-2xl text-accent-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold dark-text mb-4">Never Miss an Article</h2>
                    <p class="light-text mb-6">Get the latest Hindi learning tips and cultural insights delivered to your inbox weekly.</p>
                    <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300">
                        <button class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 whitespace-nowrap">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Back to Blog -->
        <section class="text-center">
            <a href="/blog" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 shadow-md inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>Back to Blog
            </a>
        </section>
    </main>
@include('frontend.partials.footer')