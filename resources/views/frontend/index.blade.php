@include('frontend.partials.header')
<main class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <section class="flex flex-col items-center justify-center text-center py-16">
        <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
            <i class="fas fa-star text-accent-500 mr-2"></i>
            <span class="dark-text">Trusted by over 500,000 language learners</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6">Find Any English Word's <span
                class="accent-gradient-text">Hindi Meaning</span> Instantly</h1>
        <p class="text-xl light-text mb-10 max-w-2xl">{{$page->meta_desc}}</p>

        <div class="flex mb-6 rounded-xl overflow-hidden shadow-md">
            <div class="language-tab active py-3 px-6 bg-white font-semibold">English to Hindi</div>
            <div class="language-tab py-3 px-6 bg-slate-100 font-semibold">Hindi to English</div>
        </div>

        <div class="relative w-full max-w-2xl mb-12">
            <form action="{{ route('words') }}" method="GET" class="w-full">
                <div class="flex">
                    <input type="text" name="search" placeholder="Search for any English word..."
                        class="w-full px-6 py-4 rounded-l-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300 search-input border border-r-0 border-slate-200"
                        value="{{ request('search', '') }}">
                    <button type="submit"
                        class="bg-primary-500 text-white px-6 py-4 rounded-r-2xl font-semibold hover:bg-primary-600 transition-all duration-300 flex items-center">
                        <i class="fas fa-search mr-2"></i>Search
                    </button>
                </div>
            </form>

            <div
                class="search-suggestions absolute w-full mt-2 bg-white rounded-xl shadow-xl overflow-hidden z-10 border border-slate-200">
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

        @if ($wordOfTheDay)
            <div class="glassmorphism p-6 rounded-2xl max-w-2xl mx-auto word-card shadow-md">
                <div class="flex justify-between items-start">
                    <div>
                        <div class="flex items-center">
                            <h3 class="text-2xl font-bold dark-text"><a
                                    href="">{{ $wordOfTheDay->english_phrase }}</a>
                            </h3>
                            {{--@if ($wordOfTheDay->hindi_meaning)
                                <span class="ml-3 text-accent-600 bg-accent-100 px-2 py-1 rounded text-sm">
                                    {{ $wordOfTheDay->hindi_meaning }}
                                </span>
                            @endif--}}
                        </div>
                        @if ($wordOfTheDay->hindi_script)
                            <p class="hindi-font text-primary-600 text-xl mt-1">
                                {{ $wordOfTheDay->hindi_script }}
                            </p>
                        @endif
                    </div>
                    <div class="flex space-x-2">
                        <!-- Your button -->
                         <button onclick="playPronunciation('{{ $wordOfTheDay->english_phrase }}')"
                            class="text-primary-600 hover:text-primary-700 transition-colors duration-200 p-2 rounded-lg hover:bg-primary-50">
                            <i class="fas fa-volume-up text-2xl"></i>
                        </button>


                    </div>
                </div>

                <div class="my-4">
                    @if ($wordOfTheDay->english_definition)
                        <p class="dark-text"><span class="font-semibold">Meaning:</span> {{ $wordOfTheDay->english_definition }}
                        </p>
                    @endif

                    @if ($wordOfTheDay->hindi_meaning)
                        <p class="dark-text mt-2"><span class="font-semibold">Roman English:</span>
                            {{ $wordOfTheDay->hindi_meaning }}</p>
                    @endif

                    @if ($wordOfTheDay->synonyms)
                        <p class="dark-text mt-2"><span class="font-semibold">Synonyms:</span>
                            {{ $wordOfTheDay->synonyms }}</p>
                    @endif
                </div>

                <div class="flex flex-wrap gap-2 mt-4">
                    @if ($wordOfTheDay->pronunciation)
                        <span class="px-3 py-1 bg-primary-100 text-primary-800 rounded-full text-sm">
                            {{ $wordOfTheDay->pronunciation }}
                        </span>
                    @endif
                    {{-- You can loop synonyms into tags if stored as array --}}
                </div>

                <div class="mt-6 pt-4 border-t border-slate-200 flex justify-between items-center">
                    <div class="light-text">
                        <i class="far fa-clock mr-1"></i> Updated daily
                    </div>
                </div>
            </div>
        @else
            <p class="text-center text-slate-500">No word available for today.</p>
        @endif
    </section>

    <!-- Browse Words by Alphabet -->
    <section class="my-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold dark-text mb-4 section-title">Browse Words by Alphabet</h2>
            <p class="light-text text-lg">Find Words starting with your favorite letters</p>
        </div>

        <div class="glassmorphism p-8 rounded-2xl shadow-md max-w-4xl mx-auto">
            <div class="grid grid-cols-6 md:grid-cols-9 lg:grid-cols-13 gap-3 mb-8">
                <!-- First Row: A-M -->
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">A</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">B</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">C</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">D</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">E</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">F</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">G</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">H</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">I</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">J</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">K</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">L</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">M</button>
            </div>

            <div class="grid grid-cols-6 md:grid-cols-9 lg:grid-cols-13 gap-3">
                <!-- Second Row: N-Z -->
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">N</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">O</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">P</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">Q</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">R</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">S</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">T</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">U</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">V</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">W</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">X</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">Y</button>
                <button
                    class="alphabet-btn aspect-square rounded-lg bg-white text-slate-700 font-bold text-lg hover:bg-primary-50 hover:text-primary-600 transition-all duration-300 transform hover:scale-110 border border-slate-200 shadow-sm">Z</button>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle alphabet button clicks
            document.querySelectorAll('.alphabet-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const letter = this.textContent.trim().toLowerCase();
                    // Redirect to words page with the letter filter
                    window.location.href = "{{ route('words') }}?starts_with=" + letter;
                });
            });
        });
    </script>

    <!-- Alphabet Filter -->


    <!-- Popular Searches -->
    <section class="my-16">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold dark-text section-title">Popular Searches</h2>
            <a href="{{ route('words') }}"
                class="text-primary-600 hover:text-primary-700 transition-colors duration-200 flex items-center">
                View all <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($popularWords as $word)
                <div class="glassmorphism p-5 rounded-2xl word-card shadow-md">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold dark-text">
                                <a href="{{ route('worddetail', $word->slug) }}">{{ $word->english_phrase }}</a>
                            </h3>
                            <p class="hindi-font text-primary-600 text-lg">{{ $word->hindi_script ?? '' }}</p>
                        </div>
                        <button onclick="playPronunciation('{{ $word->english_phrase }}')"
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
                                utterance.pitch = 1;
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
                    <p class="dark-text mt-3 text-sm">{{ $word->hindi_script ?? 'No description available.' }}</p>
                    <div class="mt-4 pt-3 border-t border-slate-200 flex justify-between items-center">
                        <span class="text-slate-600 text-sm">
                            <i class="fas fa-fire text-accent-500"></i> Popular
                        </span>

                    </div>
                </div>
            @endforeach
        </div>
    </section>



    <!-- Why Choose Us -->
    <section class="my-16">
        <h2 class="text-3xl font-bold dark-text text-center mb-8 section-title">Why Choose HindiLingo</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature Card -->
            <div
                class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                <div
                    class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                    <i class="fas fa-bolt text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-xl font-bold dark-text mb-3">Fast & Accurate</h3>
                <p class="light-text">Get instant and precise translations with our advanced database of over 200,000
                    words.</p>
            </div>

            <!-- Feature Card -->
            <div
                class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                <div
                    class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                    <i class="fas fa-microphone text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-xl font-bold dark-text mb-3">Pronunciation Guide</h3>
                <p class="light-text">Listen to accurate pronunciation in both English and Hindi by native speakers.
                </p>
            </div>

            <!-- Feature Card -->
            <div
                class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                <div
                    class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                    <i class="fas fa-book-open text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-xl font-bold dark-text mb-3">Examples & Usage</h3>
                <p class="light-text">Understand context with multiple example sentences for each word.</p>
            </div>

            <!-- Feature Card -->
            <div
                class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                <div
                    class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                    <i class="fas fa-history text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-xl font-bold dark-text mb-3">Word History</h3>
                <p class="light-text">Learn the origin and etymology of words to better understand their meaning.</p>
            </div>

            <!-- Feature Card -->
            <div
                class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                <div
                    class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                    <i class="fas fa-sync-alt text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-xl font-bold dark-text mb-3">Word Lists & Revision</h3>
                <p class="light-text">Create custom word lists and practice with spaced repetition system.</p>
            </div>

            <!-- Feature Card -->
            <div
                class="glassmorphism p-6 rounded-2xl text-center group hover:bg-primary-50 transition-all duration-300 shadow-md">
                <div
                    class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:animate-float">
                    <i class="fas fa-mobile-alt text-2xl text-primary-600"></i>
                </div>
                <h3 class="text-xl font-bold dark-text mb-3">Mobile App</h3>
                <p class="light-text">Access our dictionary on the go with our iOS and Android applications.</p>
            </div>
        </div>
    </section>

</main>
@include('frontend.partials.footer')
