@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-star text-accent-500 mr-2"></i>
                <span class="dark-text">Trusted by over 500,000 language learners</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6">Find Any English Word's <span class="accent-gradient-text">Hindi Meaning</span> Instantly</h1>
            <p class="text-xl light-text mb-10 max-w-2xl">The most accurate and comprehensive English to Hindi dictionary with pronunciation, examples, and more.</p>

            <div class="flex mb-6 rounded-xl overflow-hidden shadow-md">
                <div class="language-tab active py-3 px-6 bg-white font-semibold">English to Hindi</div>
                <div class="language-tab py-3 px-6 bg-slate-100 font-semibold">Hindi to English</div>
            </div>

            <div class="relative w-full max-w-2xl mb-12">
                <div class="flex">
                    <input type="text" placeholder="Search for any English word..." class="w-full px-6 py-4 rounded-l-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300 search-input border border-r-0 border-slate-200">
                    <button class="bg-primary-500 text-white px-6 py-4 rounded-r-2xl font-semibold hover:bg-primary-600 transition-all duration-300 flex items-center">
                        <i class="fas fa-search mr-2"></i>Search
                    </button>
                </div>

                <div class="search-suggestions absolute w-full mt-2 bg-white rounded-xl shadow-xl overflow-hidden z-10 border border-slate-200">
                    <div class="p-3 hover:bg-slate-50 cursor-pointer transition-all duration-200 flex justify-between">
                        <div>
                            <span class="font-semibold dark-text">Hello</span> - <span class="hindi-font">नमस्ते</span>
                        </div>
                        <div class="text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </div>
                    </div>
                    <div class="p-3 hover:bg-slate-50 cursor-pointer transition-all duration-200 flex justify-between">
                        <div>
                            <span class="font-semibold dark-text">Beautiful</span> - <span class="hindi-font">सुंदर</span>
                        </div>
                        <div class="text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </div>
                    </div>
                    <div class="p-3 hover:bg-slate-50 cursor-pointer transition-all duration-200 flex justify-between">
                        <div>
                            <span class="font-semibold dark-text">Thank you</span> - <span class="hindi-font">धन्यवाद</span>
                        </div>
                        <div class="text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </div>
                    </div>
                    <div class="p-3 hover:bg-slate-50 cursor-pointer transition-all duration-200 flex justify-between">
                        <div>
                            <span class="font-semibold dark-text">Water</span> - <span class="hindi-font">पानी</span>
                        </div>
                        <div class="text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                    <i class="fas fa-bolt mr-2 text-accent-500"></i>
                    <span>Fast Results</span>
                </div>
                <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                    <i class="fas fa-microphone mr-2 text-accent-500"></i>
                    <span>Pronunciation</span>
                </div>
                <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                    <i class="fas fa-book-open mr-2 text-accent-500"></i>
                    <span>Examples</span>
                </div>
                <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                    <i class="fas fa-history mr-2 text-accent-500"></i>
                    <span>Word History</span>
                </div>
                <div class="px-4 py-2 glassmorphism rounded-full dark-text flex items-center shadow-sm">
                    <i class="fas fa-voice mr-2 text-accent-500"></i>
                    <span>Voice Search</span>
                </div>
            </div>
        </section>

        <!-- Word of the Day Section -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Word of the Day</h2>

            <div class="glassmorphism p-6 rounded-2xl max-w-2xl mx-auto word-card shadow-md">
                <div class="flex justify-between items-start">
                    <div>
                        <div class="flex items-center">
                            <h3 class="text-2xl font-bold dark-text">Serendipity</h3>
                            <span class="ml-3 text-accent-600 bg-accent-100 px-2 py-1 rounded text-sm">Noun</span>
                        </div>
                        <p class="hindi-font text-primary-600 text-xl mt-1">संयोग से अच्छी वस्तु का आविष्कार</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="text-slate-600 hover:text-primary-600 transition-colors duration-200 bg-slate-100 p-2 rounded-full">
                            <i class="fas fa-volume-up text-xl"></i>
                        </button>
                        <button class="text-slate-600 hover:text-accent-600 transition-colors duration-200 bg-slate-100 p-2 rounded-full">
                            <i class="fas fa-heart text-xl"></i>
                        </button>
                    </div>
                </div>

                <div class="my-4">
                    <p class="dark-text"><span class="font-semibold">Meaning:</span> The occurrence and development of events by chance in a happy or beneficial way.</p>
                    <p class="dark-text mt-2"><span class="font-semibold">Example:</span> Finding this beautiful spot was pure serendipity - we weren't even looking for it.</p>
                    <p class="dark-text mt-2"><span class="font-semibold">Synonyms:</span> chance, fortune, luck, fluke</p>
                </div>

                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">/ˌser.ənˈdɪp.ə.ti/</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm">Luck</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm">Fortune</span>
                    <span class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm">Accident</span>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-200 flex justify-between items-center">
                    <div class="light-text">
                        <i class="far fa-clock mr-1"></i> Updated daily
                    </div>
                    <div class="flex space-x-3">
                        <button class="light-text hover:text-primary-600 transition-colors duration-200 flex items-center">
                            <i class="far fa-bookmark mr-1"></i> Save
                        </button>
                        <button class="light-text hover:text-primary-600 transition-colors duration-200 flex items-center">
                            <i class="fas fa-share-alt mr-1"></i> Share
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Features Section -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Enhanced Learning Tools</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Flashcard Feature -->
                <div class="glassmorphism p-6 rounded-2xl word-card shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center text-white mr-3">
                            <i class="fas fa-clone"></i>
                        </div>
                        <h3 class="text-xl font-bold dark-text">Interactive Flashcards</h3>
                    </div>
                    <p class="light-text mb-4">Practice vocabulary with our smart flashcard system that uses spaced repetition.</p>
                    <div class="flashcard h-48 cursor-pointer" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner h-full">
                            <div class="flashcard-front glassmorphism flex items-center justify-center rounded-xl h-full">
                                <div class="text-center">
                                    <h4 class="text-2xl font-bold dark-text">Courage</h4>
                                    <p class="light-text">Click to flip</p>
                                </div>
                            </div>
                            <div class="flashcard-back glassmorphism flex items-center justify-center rounded-xl h-full">
                                <div class="text-center">
                                    <p class="hindi-font text-2xl text-primary-600">साहस</p>
                                    <p class="light-text mt-2">The ability to do something that frightens one</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between">
                        <button class="px-4 py-2 bg-slate-100 rounded-lg text-slate-700 hover:bg-slate-200">
                            <i class="fas fa-redo mr-1"></i> Again
                        </button>
                        <button class="px-4 py-2 bg-primary-100 rounded-lg text-primary-700 hover:bg-primary-200">
                            <i class="fas fa-check mr-1"></i> Know
                        </button>
                    </div>
                </div>

                <!-- Quiz Feature -->
                <div class="glassmorphism p-6 rounded-2xl word-card shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-accent-500 flex items-center justify-center text-white mr-3">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3 class="text-xl font-bold dark-text">Vocabulary Quiz</h3>
                    </div>
                    <p class="light-text mb-4">Test your knowledge with our adaptive quiz system.</p>

                    <div class="quiz-container">
                        <p class="font-medium dark-text mb-3">What is the Hindi word for "Water"?</p>
                        <div class="space-y-2">
                            <div class="quiz-option p-3 bg-slate-100 rounded-lg hover:bg-slate-200 cursor-pointer">
                                <span class="hindi-font">पानी</span>
                            </div>
                            <div class="quiz-option p-3 bg-slate-100 rounded-lg hover:bg-slate-200 cursor-pointer">
                                <span class="hindi-font">आग</span>
                            </div>
                            <div class="quiz-option p-3 bg-slate-100 rounded-lg hover:bg-slate-200 cursor-pointer">
                                <span class="hindi-font">हवा</span>
                            </div>
                            <div class="quiz-option p-3 bg-slate-100 rounded-lg hover:bg-slate-200 cursor-pointer">
                                <span class="hindi-font">मिट्टी</span>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex">
                                <span class="bg-primary-500 text-white px-2 py-1 rounded text-sm">Question 3/10</span>
                            </div>
                            <button class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600">
                                Next <i class="fas fa-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Word Lists Feature -->
                <div class="glassmorphism p-6 rounded-2xl word-card shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-primary-500 flex items-center justify-center text-white mr-3">
                            <i class="fas fa-list"></i>
                        </div>
                        <h3 class="text-xl font-bold dark-text">Custom Word Lists</h3>
                    </div>
                    <p class="light-text mb-4">Create and organize your vocabulary lists for efficient learning.</p>

                    <div class="space-y-3">
                        <div class="flex justify-between items-center p-3 bg-slate-50 rounded-lg">
                            <div>
                                <h4 class="font-medium dark-text">Basic Greetings</h4>
                                <p class="text-sm light-text">12 words</p>
                            </div>
                            <button class="text-primary-600">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>

                        <div class="flex justify-between items-center p-3 bg-slate-50 rounded-lg">
                            <div>
                                <h4 class="font-medium dark-text">Food Vocabulary</h4>
                                <p class="text-sm light-text">24 words</p>
                            </div>
                            <button class="text-primary-600">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>

                        <div class="flex justify-between items-center p-3 bg-slate-50 rounded-lg">
                            <div>
                                <h4 class="font-medium dark-text">Business Terms</h4>
                                <p class="text-sm light-text">18 words</p>
                            </div>
                            <button class="text-primary-600">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <button class="w-full mt-4 py-2 bg-white border border-primary-500 text-primary-500 rounded-lg hover:bg-primary-50">
                        <i class="fas fa-plus mr-1"></i> Create New List
                    </button>
                </div>

                <!-- Pronunciation Practice -->
                <div class="glassmorphism p-6 rounded-2xl word-card shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-accent-500 flex items-center justify-center text-white mr-3">
                            <i class="fas fa-microphone-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold dark-text">Pronunciation Practice</h3>
                    </div>
                    <p class="light-text mb-4">Improve your speaking skills with our voice recognition technology.</p>

                    <div class="p-4 bg-slate-50 rounded-lg text-center mb-4">
                        <p class="hindi-font text-2xl mb-2">नमस्ते</p>
                        <p class="light-text">Click to hear pronunciation</p>
                        <button class="mt-2 text-primary-600">
                            <i class="fas fa-volume-up text-xl"></i>
                        </button>
                    </div>

                    <div class="text-center">
                        <button class="voice-recognition-btn px-4 py-3 bg-primary-500 text-white rounded-full hover:bg-primary-600">
                            <i class="fas fa-microphone mr-2"></i> Practice Pronunciation
                        </button>
                        <p class="text-sm light-text mt-2">Click and speak to test your pronunciation</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Word Categories -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-8 section-title">Word Categories</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-utensils text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Food & Dining</h3>
                    <p class="text-sm light-text">120 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-briefcase text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Business</h3>
                    <p class="text-sm light-text">95 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-heartbeat text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Health</h3>
                    <p class="text-sm light-text">78 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-graduation-cap text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Education</h3>
                    <p class="text-sm light-text">112 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-plane text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Travel</h3>
                    <p class="text-sm light-text">135 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-shopping-cart text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Shopping</h3>
                    <p class="text-sm light-text">88 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-theater-masks text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Entertainment</h3>
                    <p class="text-sm light-text">67 words</p>
                </div>

                <div class="category-badge glassmorphism p-4 rounded-xl text-center shadow-md">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-wrench text-primary-600"></i>
                    </div>
                    <h3 class="font-semibold dark-text">Technology</h3>
                    <p class="text-sm light-text">102 words</p>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="px-6 py-3 bg-primary-500 text-white rounded-lg hover:bg-primary-600 shadow-md">
                    Explore All Categories <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </section>

        <!-- Browse Names by Alphabet -->
        <section class="my-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold dark-text mb-4 section-title">Browse Names by Alphabet</h2>
                <p class="light-text text-lg">Find names starting with your favorite letters</p>
            </div>

            <div class="glassmorphism p-8 rounded-2xl shadow-md max-w-4xl mx-auto">
                <div class="grid grid-cols-6 md:grid-cols-9 lg:grid-cols-13 gap-3 mb-8">
                    <!-- First Row: A-M -->
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">A</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">B</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">C</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">D</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">E</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">F</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">G</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">H</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">I</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">J</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">K</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">L</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">M</button>
                </div>

                <div class="grid grid-cols-6 md:grid-cols-9 lg:grid-cols-13 gap-3">
                    <!-- Second Row: N-Z -->
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">N</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">O</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">P</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">Q</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">R</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">S</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">T</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">U</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">V</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">W</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">X</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">Y</button>
                    <button class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">Z</button>
                </div>
            </div>
        </section>

        <!-- Alphabet Filter -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-8 section-title">Browse Alphabetically</h2>

            <div class="glassmorphism p-6 rounded-2xl shadow-md">
                <div class="grid grid-cols-6 md:grid-cols-13 gap-2">
                    <!-- Generate A-Z buttons -->
                    <template x-for="i in 26">
                        <button class="aspect-square rounded-lg bg-white text-slate-700 font-semibold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200"
                                :class="i === 1 ? 'bg-primary-100 text-primary-600 border-primary-300 scale-110' : ''">
                            <span x-text="String.fromCharCode(64 + i)"></span>
                        </button>
                    </template>
                </div>

                <div class="mt-6">
                    <h3 class="font-semibold dark-text mb-3">Words starting with 'A'</h3>
                    <div class="dictionary-table overflow-x-auto">
                        <table class="w-full">
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 font-medium dark-text">Apple</td>
                                    <td class="py-2 hindi-font">सेब</td>
                                    <td class="py-2 text-right">
                                        <button class="text-primary-600">
                                            <i class="fas fa-volume-up"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 font-medium dark-text">Animal</td>
                                    <td class="py-2 hindi-font">जानवर</td>
                                    <td class="py-2 text-right">
                                        <button class="text-primary-600">
                                            <i class="fas fa-volume-up"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 font-medium dark-text">Answer</td>
                                    <td class="py-2 hindi-font">उत्तर</td>
                                    <td class="py-2 text-right">
                                        <button class="text-primary-600">
                                            <i class="fas fa-volume-up"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 font-medium dark-text">Ask</td>
                                    <td class="py-2 hindi-font">पूछना</td>
                                    <td class="py-2 text-right">
                                        <button class="text-primary-600">
                                            <i class="fas fa-volume-up"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Searches -->
        <section class="my-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold dark-text section-title">Popular Searches</h2>
                <a href="#" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 flex items-center">
                    View all <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Word Card -->
                <div class="glassmorphism p-5 rounded-2xl word-card shadow-md">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold dark-text">Love</h3>
                            <p class="hindi-font text-primary-600 text-lg">प्यार</p>
                        </div>
                        <button class="text-slate-600 hover:text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>
                    <p class="dark-text mt-3 text-sm">An intense feeling of deep affection.</p>
                    <div class="mt-4 pt-3 border-t border-slate-200 flex justify-between items-center">
                        <span class="text-slate-600 text-sm">
                            <i class="fas fa-fire text-accent-500"></i> 12,540 searches
                        </span>
                        <button class="text-slate-600 hover:text-accent-600">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>

                <!-- Word Card -->
                <div class="glassmorphism p-5 rounded-2xl word-card shadow-md">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold dark-text">Courage</h3>
                            <p class="hindi-font text-primary-600 text-lg">साहस</p>
                        </div>
                        <button class="text-slate-600 hover:text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>
                    <p class="dark-text mt-3 text-sm">The ability to do something that frightens one.</p>
                    <div class="mt-4 pt-3 border-t border-slate-200 flex justify-between items-center">
                        <span class="text-slate-600 text-sm">
                            <i class="fas fa-fire text-accent-500"></i> 8,321 searches
                        </span>
                        <button class="text-slate-600 hover:text-accent-600">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>

                <!-- Word Card -->
                <div class="glassmorphism p-5 rounded-2xl word-card shadow-md">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold dark-text">Peace</h3>
                            <p class="hindi-font text-primary-600 text-lg">शांति</p>
                        </div>
                        <button class="text-slate-600 hover:text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>
                    <p class="dark-text mt-3 text-sm">Freedom from disturbance; tranquility.</p>
                    <div class="mt-4 pt-3 border-t border-slate-200 flex justify-between items-center">
                        <span class="text-slate-600 text-sm">
                            <i class="fas fa-fire text-accent-500"></i> 7,895 searches
                        </span>
                        <button class="text-slate-600 hover:text-accent-600">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>

                <!-- Word Card -->
                <div class="glassmorphism p-5 rounded-2xl word-card shadow-md">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold dark-text">Wisdom</h3>
                            <p class="hindi-font text-primary-600 text-lg">ज्ञान</p>
                        </div>
                        <button class="text-slate-600 hover:text-primary-600">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>
                    <p class="dark-text mt-3 text-sm">The quality of having experience and good judgment.</p>
                    <div class="mt-4 pt-3 border-t border-slate-200 flex justify-between items-center">
                        <span class="text-slate-600 text-sm">
                            <i class="fas fa-fire text-accent-500"></i> 6,742 searches
                        </span>
                        <button class="text-slate-600 hover:text-accent-600">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Learning Progress Section -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-8 section-title">Your Learning Progress</h2>

            <div class="glassmorphism p-6 rounded-2xl max-w-2xl mx-auto shadow-md">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center mr-4">
                        <span class="text-primary-600 text-2xl font-bold">12</span>
                    </div>
                    <div>
                        <h3 class="dark-text font-semibold">Words learned this week</h3>
                        <p class="light-text">Keep going! You're doing great.</p>
                    </div>
                </div>

                <div class="mb-4 flex justify-between items-center">
                    <span class="dark-text">Daily goal</span>
                    <span class="dark-text">80%</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-accent-500 h-2.5 rounded-full progress-bar" style="width: 80%"></div>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="bg-slate-100 p-4 rounded-xl text-center">
                        <div class="text-2xl font-bold text-primary-600">42</div>
                        <div class="light-text text-sm">Words learned</div>
                    </div>
                    <div class="bg-slate-100 p-4 rounded-xl text-center">
                        <div class="text-2xl font-bold text-primary-600">7</div>
                        <div class="light-text text-sm">Streak days</div>
                    </div>
                    <div class="bg-slate-100 p-4 rounded-xl text-center">
                        <div class="text-2xl font-bold text-primary-600">86%</div>
                        <div class="light-text text-sm">Accuracy</div>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-200">
                    <h4 class="font-semibold dark-text mb-3">Weekly Progress</h4>
                    <div class="flex items-end justify-between h-8">
                        <div class="flex-1 mx-1 bg-primary-200 rounded-t" style="height: 20%"></div>
                        <div class="flex-1 mx-1 bg-primary-300 rounded-t" style="height: 40%"></div>
                        <div class="flex-1 mx-1 bg-primary-400 rounded-t" style="height: 60%"></div>
                        <div class="flex-1 mx-1 bg-primary-500 rounded-t" style="height: 80%"></div>
                        <div class="flex-1 mx-1 bg-primary-600 rounded-t" style="height: 70%"></div>
                        <div class="flex-1 mx-1 bg-primary-500 rounded-t" style="height: 90%"></div>
                        <div class="flex-1 mx-1 bg-primary-700 rounded-t" style="height: 100%"></div>
                    </div>
                    <div class="flex justify-between text-xs light-text mt-1">
                        <span>Mon</span>
                        <span>Tue</span>
                        <span>Wed</span>
                        <span>Thu</span>
                        <span>Fri</span>
                        <span>Sat</span>
                        <span>Sun</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-8 section-title">Why Choose HindiLingo</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature Card -->
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-bolt text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Fast & Accurate</h3>
                    <p class="light-text">Get instant and precise translations with our advanced database of over 200,000 words.</p>
                </div>

                <!-- Feature Card -->
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-microphone text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Pronunciation Guide</h3>
                    <p class="light-text">Listen to accurate pronunciation in both English and Hindi by native speakers.</p>
                </div>

                <!-- Feature Card -->
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-book-open text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Examples & Usage</h3>
                    <p class="light-text">Understand context with multiple example sentences for each word.</p>
                </div>

                <!-- Feature Card -->
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-history text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Word History</h3>
                    <p class="light-text">Learn the origin and etymology of words to better understand their meaning.</p>
                </div>

                <!-- Feature Card -->
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-sync-alt text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Word Lists & Revision</h3>
                    <p class="light-text">Create custom word lists and practice with spaced repetition system.</p>
                </div>

                <!-- Feature Card -->
                <div class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                        <i class="fas fa-mobile-alt text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold dark-text mb-3">Mobile App</h3>
                    <p class="light-text">Access our dictionary on the go with our iOS and Android applications.</p>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-8 section-title">What Our Users Say</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimonial Card -->
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-800 font-bold mr-3">RS</div>
                        <div>
                            <h4 class="dark-text font-semibold">Rahul Singh</h4>
                            <div class="flex text-accent-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="light-text">"This is by far the best English to Hindi dictionary I've used. The pronunciation feature has helped me improve my speaking skills significantly."</p>
                </div>

                <!-- Testimonial Card -->
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-800 font-bold mr-3">PK</div>
                        <div>
                            <h4 class="dark-text font-semibold">Priya Kumar</h4>
                            <div class="flex text-accent-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="light-text">"I love the word of the day feature! It's helped me expand my vocabulary consistently. The examples provided make it easy to understand usage."</p>
                </div>

                <!-- Testimonial Card -->
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-800 font-bold mr-3">AS</div>
                        <div>
                            <h4 class="dark-text font-semibold">Amit Sharma</h4>
                            <div class="flex text-accent-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="light-text">"The interface is beautiful and easy to use. Being able to save words and track my progress has made my language learning journey much more effective."</p>
                </div>
            </div>
        </section>
    </main>
@include('frontend.partials.footer')
