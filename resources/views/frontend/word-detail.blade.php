@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-sm light-text">
                <a href="/" class="hover:text-primary-600 transition-colors duration-200">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a href="#" class="hover:text-primary-600 transition-colors duration-200">Dictionary</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="dark-text">Beautiful</span>
            </div>
        </nav>

        <!-- Word Header -->
        <section class="mb-12">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl shadow-md">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                        <div class="flex-1">
                            <div class="flex items-center gap-4 mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold dark-text">Beautiful</h1>
                                <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200 p-2 rounded-lg hover:bg-primary-50">
                                    <i class="fas fa-volume-up text-2xl"></i>
                                </button>
                            </div>
                            
                            <div class="flex flex-wrap items-center gap-4 mb-6">
                                <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">Adjective</span>
                                <span class="text-primary-600 font-medium">/ˈbjuːtɪfʊl/</span>
                                <div class="flex items-center text-accent-600">
                                    <i class="fas fa-star text-sm mr-1"></i>
                                    <span class="text-sm font-medium">4.8 (1,234 ratings)</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-lg font-semibold dark-text mb-3">Hindi Translation</h3>
                                    <div class="space-y-2">
                                        <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                            <div>
                                                <span class="text-2xl font-bold text-primary-600 hindi-font">सुंदर</span>
                                                <span class="text-sm text-slate-600 ml-2">(sundar)</span>
                                            </div>
                                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                                <i class="fas fa-volume-up"></i>
                                            </button>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                            <div>
                                                <span class="text-2xl font-bold text-primary-600 hindi-font">खूबसूरत</span>
                                                <span class="text-sm text-slate-600 ml-2">(khubsurat)</span>
                                            </div>
                                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                                <i class="fas fa-volume-up"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold dark-text mb-3">Quick Actions</h3>
                                    <div class="grid grid-cols-2 gap-3">
                                        <button class="flex items-center justify-center p-3 bg-primary-50 text-primary-700 rounded-lg hover:bg-primary-100 transition-colors duration-200">
                                            <i class="far fa-heart mr-2"></i>
                                            <span class="text-sm font-medium">Save</span>
                                        </button>
                                        <button class="flex items-center justify-center p-3 bg-accent-50 text-accent-700 rounded-lg hover:bg-accent-100 transition-colors duration-200">
                                            <i class="fas fa-share-alt mr-2"></i>
                                            <span class="text-sm font-medium">Share</span>
                                        </button>
                                        <button class="flex items-center justify-center p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition-colors duration-200">
                                            <i class="fas fa-plus mr-2"></i>
                                            <span class="text-sm font-medium">Flashcard</span>
                                        </button>
                                        <button class="flex items-center justify-center p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition-colors duration-200">
                                            <i class="fas fa-copy mr-2"></i>
                                            <span class="text-sm font-medium">Copy</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Word Details -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-2 space-y-8">
                        
                        <!-- Definitions -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h2 class="text-2xl font-bold dark-text mb-6 section-title">Definitions</h2>
                            
                            <div class="space-y-6">
                                <div class="border-l-4 border-primary-500 pl-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="bg-primary-100 text-primary-800 px-2 py-1 rounded text-sm font-medium">1</span>
                                        <span class="text-slate-600 text-sm">Adjective</span>
                                    </div>
                                    <p class="dark-text font-medium mb-2">Having qualities that give pleasure to the senses or mind; attractive.</p>
                                    <p class="light-text text-sm mb-3"><strong>Hindi:</strong> <span class="hindi-font">सुंदर, आकर्षक, मनोहर</span></p>
                                    <div class="bg-slate-50 p-4 rounded-lg">
                                        <p class="text-sm light-text mb-1"><strong>Example:</strong></p>
                                        <p class="dark-text">"She has a beautiful smile."</p>
                                        <p class="text-primary-600 hindi-font mt-1">"उसकी मुस्कान सुंदर है।"</p>
                                    </div>
                                </div>

                                <div class="border-l-4 border-accent-500 pl-6">
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="bg-accent-100 text-accent-800 px-2 py-1 rounded text-sm font-medium">2</span>
                                        <span class="text-slate-600 text-sm">Adjective</span>
                                    </div>
                                    <p class="dark-text font-medium mb-2">Excellent; wonderful (used as a general term of approval).</p>
                                    <p class="light-text text-sm mb-3"><strong>Hindi:</strong> <span class="hindi-font">बेहतरीन, शानदार, उत्कृष्ट</span></p>
                                    <div class="bg-slate-50 p-4 rounded-lg">
                                        <p class="text-sm light-text mb-1"><strong>Example:</strong></p>
                                        <p class="dark-text">"That's a beautiful idea!"</p>
                                        <p class="text-primary-600 hindi-font mt-1">"यह एक शानदार विचार है!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Synonyms & Antonyms -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h2 class="text-2xl font-bold dark-text mb-6 section-title">Synonyms & Antonyms</h2>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-lg font-semibold text-green-700 mb-4 flex items-center">
                                        <i class="fas fa-plus-circle mr-2"></i>Synonyms
                                    </h3>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm hover:bg-green-100 cursor-pointer transition-colors duration-200">attractive</span>
                                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm hover:bg-green-100 cursor-pointer transition-colors duration-200">lovely</span>
                                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm hover:bg-green-100 cursor-pointer transition-colors duration-200">gorgeous</span>
                                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm hover:bg-green-100 cursor-pointer transition-colors duration-200">stunning</span>
                                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm hover:bg-green-100 cursor-pointer transition-colors duration-200">pretty</span>
                                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm hover:bg-green-100 cursor-pointer transition-colors duration-200">handsome</span>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-red-700 mb-4 flex items-center">
                                        <i class="fas fa-minus-circle mr-2"></i>Antonyms
                                    </h3>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm hover:bg-red-100 cursor-pointer transition-colors duration-200">ugly</span>
                                        <span class="bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm hover:bg-red-100 cursor-pointer transition-colors duration-200">unattractive</span>
                                        <span class="bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm hover:bg-red-100 cursor-pointer transition-colors duration-200">hideous</span>
                                        <span class="bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm hover:bg-red-100 cursor-pointer transition-colors duration-200">repulsive</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Usage Examples -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h2 class="text-2xl font-bold dark-text mb-6 section-title">Usage Examples</h2>
                            
                            <div class="space-y-4">
                                <div class="p-4 bg-slate-50 rounded-lg border-l-4 border-primary-500">
                                    <p class="dark-text mb-2">"The sunset was absolutely beautiful."</p>
                                    <p class="text-primary-600 hindi-font text-sm">"सूर्यास्त बिल्कुल सुंदर था।"</p>
                                    <span class="text-xs text-slate-500 mt-2 block">Context: Nature/Scenery</span>
                                </div>

                                <div class="p-4 bg-slate-50 rounded-lg border-l-4 border-accent-500">
                                    <p class="dark-text mb-2">"She wore a beautiful dress to the party."</p>
                                    <p class="text-primary-600 hindi-font text-sm">"उसने पार्टी में एक सुंदर पोशाक पहनी।"</p>
                                    <span class="text-xs text-slate-500 mt-2 block">Context: Fashion/Clothing</span>
                                </div>

                                <div class="p-4 bg-slate-50 rounded-lg border-l-4 border-green-500">
                                    <p class="dark-text mb-2">"Thank you for the beautiful flowers."</p>
                                    <p class="text-primary-600 hindi-font text-sm">"सुंदर फूलों के लिए धन्यवाद।"</p>
                                    <span class="text-xs text-slate-500 mt-2 block">Context: Gifts/Appreciation</span>
                                </div>
                            </div>
                        </div>

                        <!-- Etymology -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h2 class="text-2xl font-bold dark-text mb-6 section-title">Etymology</h2>
                            <div class="bg-primary-50 p-4 rounded-lg border-l-4 border-primary-500">
                                <p class="light-text leading-relaxed">
                                    <strong>Origin:</strong> Middle English (in the sense 'having beauty of a moral or spiritual kind'): from Old French <em>bel</em> 'beautiful' (see <strong>beauty</strong>) + <em>-ful</em>. The word originally meant 'full of beauty' and has evolved to describe anything pleasing to the senses or mind.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        
                        <!-- Word Stats -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h3 class="text-lg font-semibold dark-text mb-4">Word Statistics</h3>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="light-text">Difficulty Level</span>
                                    <div class="flex items-center">
                                        <div class="flex space-x-1">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            <div class="w-2 h-2 bg-slate-300 rounded-full"></div>
                                            <div class="w-2 h-2 bg-slate-300 rounded-full"></div>
                                            <div class="w-2 h-2 bg-slate-300 rounded-full"></div>
                                        </div>
                                        <span class="text-sm text-green-600 ml-2">Easy</span>
                                    </div>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <span class="light-text">Frequency</span>
                                    <span class="text-sm font-medium text-primary-600">Very Common</span>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <span class="light-text">Word Length</span>
                                    <span class="text-sm font-medium dark-text">9 letters</span>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <span class="light-text">Syllables</span>
                                    <span class="text-sm font-medium dark-text">3 (beau-ti-ful)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Related Words -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h3 class="text-lg font-semibold dark-text mb-4">Related Words</h3>
                            <div class="space-y-3">
                                <a href="#" class="block p-3 bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors duration-200">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium dark-text">Beauty</span>
                                        <span class="text-sm text-slate-600">Noun</span>
                                    </div>
                                    <span class="text-sm text-primary-600 hindi-font">सुंदरता</span>
                                </a>
                                
                                <a href="#" class="block p-3 bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors duration-200">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium dark-text">Beautify</span>
                                        <span class="text-sm text-slate-600">Verb</span>
                                    </div>
                                    <span class="text-sm text-primary-600 hindi-font">सुंदर बनाना</span>
                                </a>
                                
                                <a href="#" class="block p-3 bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors duration-200">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium dark-text">Beautifully</span>
                                        <span class="text-sm text-slate-600">Adverb</span>
                                    </div>
                                    <span class="text-sm text-primary-600 hindi-font">सुंदरता से</span>
                                </a>
                            </div>
                        </div>

                        <!-- Learning Tools -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h3 class="text-lg font-semibold dark-text mb-4">Learning Tools</h3>
                            <div class="space-y-3">
                                <button class="w-full p-3 bg-primary-50 text-primary-700 rounded-lg hover:bg-primary-100 transition-colors duration-200 flex items-center">
                                    <i class="fas fa-brain mr-3"></i>
                                    <span class="font-medium">Practice Quiz</span>
                                </button>
                                
                                <button class="w-full p-3 bg-accent-50 text-accent-700 rounded-lg hover:bg-accent-100 transition-colors duration-200 flex items-center">
                                    <i class="fas fa-cards-blank mr-3"></i>
                                    <span class="font-medium">Flashcards</span>
                                </button>
                                
                                <button class="w-full p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition-colors duration-200 flex items-center">
                                    <i class="fas fa-microphone mr-3"></i>
                                    <span class="font-medium">Pronunciation</span>
                                </button>
                                
                                <button class="w-full p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition-colors duration-200 flex items-center">
                                    <i class="fas fa-pen mr-3"></i>
                                    <span class="font-medium">Writing Practice</span>
                                </button>
                            </div>
                        </div>

                        <!-- Word of the Day -->
                        <div class="glassmorphism p-6 rounded-2xl shadow-md">
                            <h3 class="text-lg font-semibold dark-text mb-4">Word of the Day</h3>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-calendar-day text-2xl text-accent-600"></i>
                                </div>
                                <h4 class="font-bold dark-text mb-1">Magnificent</h4>
                                <p class="text-primary-600 hindi-font mb-2">शानदार</p>
                                <p class="text-sm light-text">Extremely beautiful, elaborate, or impressive</p>
                                <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium mt-2 inline-block">
                                    Learn More <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Similar Words -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Similar Words</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold dark-text">Gorgeous</h3>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up"></i>
                            </button>
                        </div>
                        <p class="text-primary-600 hindi-font mb-2">भव्य, शानदार</p>
                        <p class="light-text text-sm mb-4">Very beautiful or attractive</p>
                        <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 text-sm font-medium">
                            View Details <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold dark-text">Stunning</h3>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up"></i>
                            </button>
                        </div>
                        <p class="text-primary-600 hindi-font mb-2">आश्चर्यजनक</p>
                        <p class="light-text text-sm mb-4">Extremely impressive or attractive</p>
                        <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 text-sm font-medium">
                            View Details <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold dark-text">Lovely</h3>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                <i class="fas fa-volume-up"></i>
                            </button>
                        </div>
                        <p class="text-primary-600 hindi-font mb-2">प्यारा, मनोहर</p>
                        <p class="light-text text-sm mb-4">Beautiful or attractive</p>
                        <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 text-sm font-medium">
                            View Details <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Back to Search -->
        <section class="text-center">
            <a href="/" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 shadow-md inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>Back to Dictionary
            </a>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Audio pronunciation buttons
            const audioButtons = document.querySelectorAll('button[class*="fa-volume-up"]');
            audioButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Add audio pronunciation functionality here
                    console.log('Playing pronunciation...');
                    
                    // Visual feedback
                    const icon = this.querySelector('i');
                    icon.classList.add('text-accent-600');
                    setTimeout(() => {
                        icon.classList.remove('text-accent-600');
                    }, 1000);
                });
            });

            // Copy functionality
            const copyButton = document.querySelector('button:has(.fa-copy)');
            if (copyButton) {
                copyButton.addEventListener('click', function() {
                    const wordText = document.querySelector('h1').textContent;
                    navigator.clipboard.writeText(wordText).then(() => {
                        // Visual feedback
                        const originalText = this.querySelector('span').textContent;
                        this.querySelector('span').textContent = 'Copied!';
                        setTimeout(() => {
                            this.querySelector('span').textContent = originalText;
                        }, 2000);
                    });
                });
            }

            // Save to favorites
            const saveButton = document.querySelector('button:has(.fa-heart)');
            if (saveButton) {
                saveButton.addEventListener('click', function() {
                    const icon = this.querySelector('i');
                    const text = this.querySelector('span');
                    
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        text.textContent = 'Saved';
                        this.classList.add('bg-primary-100');
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.add('far');
                        text.textContent = 'Save';
                        this.classList.remove('bg-primary-100');
                    }
                });
            }

            // Synonym/Antonym click handlers
            const synonyms = document.querySelectorAll('.bg-green-50');
            const antonyms = document.querySelectorAll('.bg-red-50');
            
            [...synonyms, ...antonyms].forEach(word => {
                word.addEventListener('click', function() {
                    // Navigate to the clicked word's detail page
                    const wordText = this.textContent.trim();
                    console.log(`Navigating to: ${wordText}`);
                    // Add navigation logic here
                });
            });
        });
    </script>

@include('frontend.partials.footer')
