@include('frontend.partials.header')

<!-- Main Content -->
<main class="container mx-auto px-6 py-8">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">
            <i class="fas fa-book mr-3"></i>Dictionary Words
        </h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">
            {{$page->meta_desc}}
        </p>
    </div>

    <!-- Search and Filter Section -->
    <div class="glassmorphism p-6 mb-8">
        <form method="GET" action="{{ isset($letter) ? route('words.letter', ['letter' => $letter]) : route('words') }}" id="filterForm">
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <!-- Search Input -->
                <div class="flex-1 relative">
                    <input type="text" name="search" id="searchInput" placeholder="Search for words..."
                        value="{{ request('search') }}"
                        class="w-full px-4 py-3 pl-12 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                </div>


                <!-- Sort Options -->
                {{-- <div class="relative">
                    <select name="sort" id="sortFilter"
                        class="px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white"
                        onchange="window.location.href=this.value">
                        <option value="{{ route('words') }}" {{ !isset($letter) ? 'selected' : '' }}>A-Z (All)</option>
                        @foreach (range('A', 'Z') as $alpha)
                            <option value="{{ route('words.letter', ['letter' => $alpha]) }}" {{ isset($letter) && $letter == $alpha ? 'selected' : '' }}>
                                {{ $alpha }} @if($alphabetCounts[$alpha] > 0)({{ $alphabetCounts[$alpha] }})@endif
                            </option>
                        @endforeach
                    </select>
                </div> --}}

                <!-- Filter Button -->
                <button type="submit"
                    class="bg-primary-500 text-white px-6 py-3 rounded-lg hover:bg-primary-600 transition-colors font-medium">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
            </div>
        </form>
    </div>

    <!-- Browse by Alphabet -->
    <div class="glassmorphism p-6 mb-8">
        <h3 class="text-lg font-semibold dark-text mb-4 text-center">Browse by Alphabet</h3>
        <div class="flex flex-wrap justify-center gap-2">
            @foreach (range('A', 'Z') as $alpha)
                <a href="{{ route('words.letter', ['letter' => $alpha]) }}"
                   class="px-4 py-2 rounded-lg font-medium transition-all duration-200
                          {{ isset($letter) && $letter == $alpha
                              ? 'bg-primary-500 text-white shadow-lg transform scale-105'
                              : ($alphabetCounts[$alpha] > 0
                                  ? 'bg-slate-100 text-slate-700 hover:bg-primary-100 hover:text-primary-700'
                                  : 'bg-slate-50 text-slate-400 cursor-not-allowed') }}">
                    {{ $alpha }}
                    @if($alphabetCounts[$alpha] > 0)
                        <span class="text-xs ml-1 opacity-70">({{ $alphabetCounts[$alpha] }})</span>
                    @endif
                </a>
            @endforeach

            <!-- Show All option -->
            <a href="{{ route('words') }}"
               class="px-4 py-2 rounded-lg font-medium transition-all duration-200
                      {{ !isset($letter)
                          ? 'bg-primary-500 text-white shadow-lg transform scale-105'
                          : 'bg-slate-100 text-slate-700 hover:bg-primary-100 hover:text-primary-700' }}">
                All
                <span class="text-xs ml-1 opacity-70">({{ $totalCount }})</span>
            </a>
        </div>

        @if(isset($letter))
            <div class="mt-4 text-center">
                <p class="text-sm text-slate-600">
                    Showing words starting with <strong class="text-primary-600">{{ $letter }}</strong>
                    ({{ $words->count() }} of {{ $alphabetCounts[$letter] }} words)
                </p>
            </div>
        @endif
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold gradient-text mb-2">{{ $totalCount }}</div>
            <div class="text-slate-600">Total Words</div>
        </div>
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold gradient-text mb-2">{{ $words->count() }}</div>
            <div class="text-slate-600">Showing</div>
        </div>
    </div>

    <!-- Words Grid -->
    <div id="wordsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($words as $word)
            <div class="word-card glassmorphism p-6 rounded-lg hover:shadow-xl transition-all duration-300"
                data-word="{{ strtolower($word->english_phrase) }}">

                <!-- Audio Button -->
                <div class="flex justify-end items-start mb-4">
                    <button class="text-slate-400 hover:text-primary-500 transition-colors volume-btn"
                        data-word="{{ $word->english_phrase }}">
                        <i class="fas fa-volume-up"></i>
                    </button>
                </div>

                <!-- English Word -->
                <div class="mb-3">
                    <h3 class="text-xl font-bold text-slate-800 mb-1">
                        <p class="text-sm text-slate-500">English</p>
                        <a href="{{ route('worddetail', ['english_phrase' => !empty($word->english_phrase) ? $word->english_phrase : 'admin']) }}" class="hover:underline">
                            {{ $word->english_phrase }}
                        </a>
                    </h3>
                </div>

                <!-- Hindi Translation -->
                <div class="mb-3">
                    <p class="text-sm text-slate-500">Hindi Translation</p>
                    <h4 class="text-2xl font-bold hindi-font text-primary-600 mb-1">{{ $word->hindi_script }}</h4>
                </div>

                <!-- Roman Transliteration -->
                <div class="mb-4">
                    <p class="text-sm text-slate-500">Roman Transliteration</p>
                    <p class="text-lg font-medium text-accent-600 mb-1">{{ $word->hindi_meaning }}</p>
                </div>

                <!-- Action Buttons -->
                {{-- <div class="flex gap-2">

                    <button
                        class="bg-slate-100 text-slate-600 px-4 py-2 rounded-lg hover:bg-slate-200 transition-colors text-sm font-medium">
                        <i class="fas fa-share-alt"></i>
                    </button>
                </div> --}}
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-search text-6xl text-slate-300 mb-4"></i>
                <h3 class="text-2xl font-bold text-slate-600 mb-2">No words found</h3>
                <p class="text-slate-500">Try adjusting your search or filter criteria</p>
            </div>
        @endforelse
    </div>

    @if ($words->hasPages())
        <div class="mt-12 flex justify-center">
            <div class="glassmorphism p-4 rounded-xl shadow-lg flex space-x-2">

                {{-- Previous Page Link --}}
                @if ($words->onFirstPage())
                    <span class="px-3 py-1 rounded-lg text-gray-400">‹</span>
                @else
                    <a href="{{ $words->previousPageUrl() }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">‹</a>
                @endif

                {{-- Pagination Elements --}}
                @php
                    $start = max($words->currentPage() - 2, 1);
                    $end = min($words->currentPage() + 2, $words->lastPage());
                @endphp

                {{-- Always show first page --}}
                @if ($start > 1)
                    <a href="{{ $words->url(1) }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">1</a>
                    @if ($start > 2)
                        <span class="px-2">…</span>
                    @endif
                @endif

                {{-- Show range around current page --}}
                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $words->currentPage())
                        <span class="px-3 py-1 rounded-lg bg-primary-500 text-white">{{ $i }}</span>
                    @else
                        <a href="{{ $words->url($i) }}"
                            class="px-3 py-1 rounded-lg hover:bg-primary-100">{{ $i }}</a>
                    @endif
                @endfor

                {{-- Always show last page --}}
                @if ($end < $words->lastPage())
                    @if ($end < $words->lastPage() - 1)
                        <span class="px-2">…</span>
                    @endif
                    <a href="{{ $words->url($words->lastPage()) }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">
                        {{ $words->lastPage() }}
                    </a>
                @endif

                {{-- Next Page Link --}}
                @if ($words->hasMorePages())
                    <a href="{{ $words->nextPageUrl() }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">›</a>
                @else
                    <span class="px-3 py-1 rounded-lg text-gray-400">›</span>
                @endif

            </div>
        </div>
    @endif




</main>

<!-- JavaScript for Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const filterForm = document.getElementById('filterForm');

        let searchTimeout;

        // Auto-submit form on search input with debounce
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                filterForm.submit();
            }, 500); // Wait 500ms after user stops typing
        });

        // Enhanced text-to-speech function for English
        window.speakWord = function(word) {
            console.log('speakWord called with:', word);

            if (!word || word.trim() === '') {
                console.log('Word not found!');
                return;
            }

            if (!('speechSynthesis' in window)) {
                console.log('Speech synthesis not supported in this browser');
                return;
            }

            console.log('Starting speech synthesis for:', word);
            window.speechSynthesis.cancel();
            const utterance = new SpeechSynthesisUtterance(word);

            utterance.rate = 0.9;
            utterance.pitch = 0;
            utterance.volume = 1;

            const loadVoices = () => {
                const voices = window.speechSynthesis.getVoices();
                console.log('Available voices:', voices.length);
                const preferredVoice = voices.find(v => v.lang.startsWith('en'));
                if (preferredVoice) {
                    utterance.voice = preferredVoice;
                    console.log('Using voice:', preferredVoice.name);
                }
                window.speechSynthesis.speak(utterance);
            };

            if (window.speechSynthesis.getVoices().length === 0) {
                console.log('Loading voices...');
                window.speechSynthesis.onvoiceschanged = loadVoices;
            } else {
                loadVoices();
            }

            utterance.onstart = () => console.log('🔊 Playing:', word);
            utterance.onend = () => console.log('✅ Finished');
            utterance.onerror = (event) => console.error('Speech error:', event);
        };

        // Audio pronunciation buttons with visual feedback
        const volumeButtons = document.querySelectorAll('.volume-btn');
        volumeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const word = this.getAttribute('data-word');
                speakWord(word);

                // Visual feedback
                const icon = this.querySelector('i');
                icon.classList.add('text-accent-600');
                setTimeout(() => {
                    icon.classList.remove('text-accent-600');
                }, 1000);
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    entry.target.style.transition = 'all 0.6s ease';

                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);

                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const wordCards = document.querySelectorAll('.word-card');
        wordCards.forEach(card => {
            observer.observe(card);
        });
    });
</script>

@include('frontend.partials.footer')
