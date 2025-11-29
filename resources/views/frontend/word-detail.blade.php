@include('frontend.partials.header')
<main class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-8">
        <div class="flex items-center space-x-2 text-sm light-text">
            <a href="/" class="hover:text-primary-600 transition-colors duration-200">Home</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="#" class="hover:text-primary-600 transition-colors duration-200">Dictionary</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="dark-text">{{ $words->english_phrase }}</span>
        </div>
    </nav>

    <!-- Word Header -->
    <section class="mb-12">
        <div class="max-w-4xl mx-auto">
            <div class="glassmorphism p-8 rounded-2xl shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div class="flex-1">
                        <div class="flex items-center gap-4 mb-4">
                            <h1 id="word-text" class="text-4xl md:text-5xl font-bold dark-text">{{ $words->english_phrase }}</h1>
                            <button onclick="playPronunciation('{{ $words->english_phrase }}')"
                                class="text-primary-600 hover:text-primary-700 transition-colors duration-200 p-2 rounded-lg hover:bg-primary-50">
                                <i class="fas fa-volume-up text-2xl"></i>
                            </button>

                            <script>
                                function playPronunciation(word) {
                                    if (!word || word.trim() === '') {
                                        showToast('Word not found!', 'error');
                                        return;
                                    }

                                    if (!('speechSynthesis' in window)) {
                                        showToast('Speech synthesis not supported in this browser', 'error');
                                        return;
                                    }

                                    window.speechSynthesis.cancel();
                                    const utterance = new SpeechSynthesisUtterance(word);

                                    utterance.rate = 0.9;
                                    utterance.pitch = 0;
                                    utterance.volume = 1;

                                    const loadVoices = () => {
                                        const voices = window.speechSynthesis.getVoices();
                                        const preferredVoice = voices.find(v => v.lang.startsWith('en'));
                                        if (preferredVoice) {
                                            utterance.voice = preferredVoice;
                                        }
                                        window.speechSynthesis.speak(utterance);
                                    };

                                    if (window.speechSynthesis.getVoices().length === 0) {
                                        window.speechSynthesis.onvoiceschanged = loadVoices;
                                    } else {
                                        loadVoices();
                                    }

                                    utterance.onstart = () => console.log('🔊 Playing:', word);
                                    utterance.onend = () => console.log('✅ Finished');
                                    utterance.onerror = (event) => console.error('Speech error:', event);
                                }
                            </script>
                        </div>

                        {{-- <div class="flex flex-wrap items-center gap-4 mb-6">
                            <span
                                class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">Adjective</span>
                            <span class="text-primary-600 font-medium">/ˈbjuːtɪfʊl/</span>
                            <div class="flex items-center text-accent-600">
                                <i class="fas fa-star text-sm mr-1"></i>
                                <span class="text-sm font-medium">4.8 (1,234 ratings)</span>
                            </div>
                        </div> --}}

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-lg font-semibold dark-text mb-3">Hindi Translation</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                        <div>
                                            <span
                                                class="text-2xl font-bold text-primary-600 hindi-font">{{ $words->hindi_script }}</span>
                                            <span
                                                class="text-sm text-slate-600 ml-2">({{ $words->hindi_meaning }})</span>
                                        </div>
                                        <button onclick="playPronunciation2('{{ $words->hindi_script }}')"
                                            class="text-primary-600 hover:text-primary-700 transition-colors duration-200 p-2 rounded-lg hover:bg-primary-50">
                                            <i class="fas fa-volume-up text-2xl"></i>
                                        </button>

                                    </div>
                                    <script>
                                        function playPronunciation2(text) {
                                            if (!('speechSynthesis' in window)) {
                                                alert('Sorry, your browser does not support speech synthesis.');
                                                return;
                                            }

                                            // Stop any currently speaking
                                            window.speechSynthesis.cancel();

                                            const utterance = new SpeechSynthesisUtterance(text);

                                            // 🔹 Set Hindi language
                                            utterance.lang = 'hi-IN';
                                            utterance.rate = 1;
                                            utterance.pitch = 0; // Voice pitch (0 to 2)
                                            utterance.volume = 1; // Volume (0 to 1)

                                            window.speechSynthesis.speak(utterance);
                                        }
                                    </script>

                                    {{-- <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                            <div>
                                                <span class="text-2xl font-bold text-primary-600 hindi-font">खूबसूरत</span>
                                                <span class="text-sm text-slate-600 ml-2">(khubsurat)</span>
                                            </div>
                                            <button class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                                <i class="fas fa-volume-up"></i>
                                            </button>
                                        </div> --}}
                                </div>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold dark-text mb-3">Quick Actions</h3>
                                <div class="grid grid-cols-2 gap-3">
                                    {{-- <button
                                        class="flex items-center justify-center p-3 bg-primary-50 text-primary-700 rounded-lg hover:bg-primary-100 transition-colors duration-200">
                                        <i class="far fa-heart mr-2"></i>
                                        <span class="text-sm font-medium">Save</span>
                                    </button>
                                    <button
                                        class="flex items-center justify-center p-3 bg-accent-50 text-accent-700 rounded-lg hover:bg-accent-100 transition-colors duration-200">
                                        <i class="fas fa-share-alt mr-2"></i>
                                        <span class="text-sm font-medium">Share</span>
                                    </button>
                                    <button
                                        class="flex items-center justify-center p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition-colors duration-200">
                                        <i class="fas fa-plus mr-2"></i>
                                        <span class="text-sm font-medium">Flashcard</span>
                                    </button> --}}
                                    <button id="copy-btn"
                                        class="flex items-center justify-center p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition-colors duration-200">
                                        <i class="fas fa-copy mr-2"></i>
                                        <span class="text-sm font-medium">Copy</span>
                                    </button>

                                    <!-- Script -->
                                    <script>
                                        document.getElementById('copy-btn').addEventListener('click', function(e) {
                                            e.preventDefault();
                                            const text = document.getElementById('word-text').innerText.trim();

                                            navigator.clipboard.writeText(text).then(() => {
                                                // Optional: change button text temporarily
                                                const btnText = this.querySelector('span');
                                                const original = btnText.innerText;
                                                btnText.innerText = 'Copied!';
                                                setTimeout(() => btnText.innerText = original, 2000);
                                            }).catch(err => {
                                                console.error('Failed to copy: ', err);
                                            });
                                        });
                                    </script>
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

                        <div class="space-y-4">
                            <div class="border-l-4 border-primary-500 pl-6">
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="bg-primary-100 text-primary-800 px-2 py-1 rounded text-sm font-medium">Definition</span>
                                </div>
                                <p class="dark-text font-medium mb-2">{{ $words->english_definition }}</p>
                                <div class="bg-slate-50 p-4 rounded-lg">
                                    <p class="text-sm light-text mb-1"><strong>Hindi Translation:</strong></p>
                                    <p class="text-primary-600 hindi-font">{{ $words->hindi_script }}</p>
                                    <p class="text-sm text-slate-600 mt-1"><strong>Roman Transliteration:</strong> {{ $words->hindi_meaning }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Word Stats -->
                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <h3 class="text-lg font-semibold dark-text mb-4">Word Statistics</h3>
                        <div class="space-y-4">

                            <!-- Word Length -->
                            <div class="flex justify-between items-center">
                                <span class="light-text">Word Length</span>
                                <span class="text-sm font-medium dark-text">{{ strlen(str_replace(' ', '', $words->english_phrase)) }} letters</span>
                            </div>
                        </div>
                    </div>

                    <!-- Related Words -->
                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <h3 class="text-lg font-semibold dark-text mb-4">Related Words</h3>
                        <div class="space-y-3">
                            @foreach ($similarWords as $related)
                                <a href="#"
                                    class="block p-3 bg-slate-50 rounded-lg hover:bg-slate-100 transition-colors duration-200">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium dark-text">{{ $related->english_phrase }}</span>
                                    </div>
                                    <span
                                        class="text-sm text-primary-600 hindi-font">{{ $related->hindi_script ?? '' }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Word of the Day -->
                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <h3 class="text-lg font-semibold dark-text mb-4">Word of the Day</h3>
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-calendar-day text-2xl text-accent-600"></i>
                            </div>
                            <h4 class="font-bold dark-text mb-1">{{ $wordOfTheDay->english_phrase }}</h4>
                            <p class="text-primary-600 hindi-font mb-2">{{ $wordOfTheDay->hindi_script }}</p>
                            <p class="text-sm light-text">{{ $wordOfTheDay->hindi_meaning }}</p>
                            <a href="#"
                                class="text-primary-600 hover:text-primary-700 text-sm font-medium mt-2 inline-block">
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
                @foreach ($similarWords as $words)
                    <div class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <!-- Word and pronunciation button -->
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-bold dark-text">{{ $words->english_phrase }}</h3>
                            <button onclick="playPronunciation('{{ $words->english_phrase }}')"
                                class="flex items-center justify-center w-10 h-10 text-primary-600 hover:text-primary-700
                   bg-primary-50 hover:bg-primary-100 transition-colors duration-200 rounded-full shadow-sm">
                                <i class="fas fa-volume-up text-xl"></i>
                            </button>
                        </div>

                        <!-- Meaning with pronunciation button -->
                        <div class="flex justify-between items-center mb-2">
                            <p class="text-primary-600 hindi-font">{{ $words->hindi_script }}</p>
                            <button onclick="playPronunciation2('{{ $words->hindi_script }}')"
                                class="flex items-center justify-center w-8 h-8 text-primary-600 hover:text-primary-700
                   bg-primary-50 hover:bg-primary-100 transition-colors duration-200 rounded-full shadow-sm">
                                <i class="fas fa-volume-up text-lg"></i>
                            </button>
                        </div>

                        <!-- Roman Transliteration -->
                        <p class="light-text text-sm mb-4">{{ $words->hindi_meaning }}</p>

                        <!-- View details link -->
                        <a href="#"
                            class="text-primary-600 hover:text-primary-700 transition-colors duration-200 text-sm font-medium">
                            View Details <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Back to Search -->
    <section class="text-center">
        <a href="/"
            class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 shadow-md inline-flex items-center">
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
