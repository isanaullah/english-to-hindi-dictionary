<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HindiLingo - English to Hindi Dictionary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-soft': 'pulseSoft 2s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            },
                        },
                        pulseSoft: {
                            '0%, 100%': {
                                opacity: '1'
                            },
                            '50%': {
                                opacity: '0.8'
                            },
                        }
                    },
                    colors: {
                        primary: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                        },
                        accent: {
                            50: '#fef7ee',
                            100: '#fdeccd',
                            200: '#fbd89b',
                            300: '#f9bc69',
                            400: '#f79d43',
                            500: '#f5731d',
                            600: '#d65315',
                            700: '#a83c15',
                            800: '#822f16',
                            900: '#6a2915',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&display=swap');

        .glassmorphism {
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f0fdfa 0%, #ffffff 50%, #f8fafc 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #0d9488 0%, #2dd4bf 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .accent-gradient-text {
            background: linear-gradient(135deg, #f5731d 0%, #f9bc69 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #334155;
        }

        .nav-link {
            position: relative;
            color: #475569;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(90deg, #0d9488 0%, #2dd4bf 100%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .search-suggestions {
            display: none;
        }

        .search-input:focus+.search-suggestions,
        .search-suggestions:hover {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }

        .word-card {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .word-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(31, 38, 135, 0.15);
        }

        .floating-icon {
            animation: float 6s ease-in-out infinite;
        }

        .language-tab {
            transition: all 0.3s ease;
        }

        .language-tab.active {
            background: white;
            border-bottom: 3px solid #f5731d;
            color: #0f766e;
            font-weight: 600;
        }

        .progress-bar {
            transition: width 1s ease-in-out;
        }

        .hindi-font {
            font-family: 'Noto Sans Devanagari', sans-serif;
            font-size: 1.1em;
        }

        .dark-text {
            color: #1e293b;
        }

        .light-text {
            color: #64748b;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: linear-gradient(90deg, #0d9488 0%, #2dd4bf 100%);
            bottom: -10px;
            left: 25%;
            border-radius: 2px;
        }

        .category-badge {
            transition: all 0.3s ease;
        }

        .category-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(13, 148, 136, 0.2);
        }

        .flashcard {
            perspective: 1000px;
        }

        .flashcard-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flashcard.flipped .flashcard-inner {
            transform: rotateY(180deg);
        }

        .flashcard-front,
        .flashcard-back {
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .flashcard-back {
            transform: rotateY(180deg);
        }

        .quiz-option {
            transition: all 0.2s ease;
        }

        .quiz-option:hover {
            transform: translateX(5px);
        }

        .dictionary-table tr {
            transition: background-color 0.2s ease;
        }

        .dictionary-table tr:hover {
            background-color: #f8fafc;
        }

        .voice-recognition-btn.listening {
            animation: pulseSoft 1.5s infinite;
        }
    </style>
</head>

<body class="min-h-screen gradient-bg">
    <!-- Header/Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <nav class="mx-auto max-w-7xl px-6 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold gradient-text flex items-center">
                    <i class="fas fa-book-open mr-2"></i><a href="{{ route('home') }}">
                        HindiLingo
                </span>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="nav-link font-medium">Home</a>
                {{-- <a href="{{ route('words') }}" class="nav-link font-medium">Words</a> --}}
                <a href="{{ route('words') }}" class="nav-link font-medium">Browse</a>
                {{-- <a href="#" class="nav-link font-medium">Word of the Day</a>
                <a href="#" class="nav-link font-medium">Grammar</a> --}}
                <a href="{{ route('bloglist') }}" class="nav-link font-medium">Blog</a>
                <a href="{{ route('contact-us') }}" class="nav-link font-medium">Contact</a>
            </div>

            <div class="flex items-center space-x-4">
                {{-- <button class="bg-primary-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 shadow-lg hover:shadow-primary-500/30 flex items-center">
                    <i class="fas fa-user-circle mr-2"></i>
                      <a href="{{route('login1')}}" class="nav-link font-medium">Login</a>
                </button> --}}
                <button class="md:hidden text-slate-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>
    </header>
