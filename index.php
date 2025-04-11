<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CryptoFuture Summit - крупнейшая конференция по блокчейн и криптотехнологиям в Алматы">
    <meta name="keywords" content="крипто, блокчейн, конференция, саммит, Алматы, Казахстан, технологии">
    <title>CryptoFuture Summit - Алматы</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
    <link rel="stylesheet" href="./css/tailwind.min.css">
    <style>
        .popup-overlay {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }
        .popup-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            max-width: 500px;
            width: 90%;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Age Verification Popup -->
   <!-- Enhanced Age Verification Modal -->
<div id="ageVerificationPopup" class="popup-overlay backdrop-filter backdrop-blur-sm">
    <div class="popup-content relative bg-white p-8 rounded-2xl shadow-2xl max-w-md w-full mx-4 overflow-hidden transform transition-all duration-500 hover:shadow-blue-300/20">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-50 rounded-full opacity-70"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-indigo-50 rounded-full opacity-70"></div>
        
        <!-- Animated Particles -->
        <div class="absolute top-10 left-10 w-3 h-3 bg-blue-400 rounded-full opacity-30 animate-ping" style="animation-duration: 3s;"></div>
        <div class="absolute bottom-10 right-10 w-2 h-2 bg-indigo-400 rounded-full opacity-30 animate-ping" style="animation-duration: 4s;"></div>
        
        <!-- Age Verification Icon -->
        <div class="relative mb-6 flex justify-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 text-3xl">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
        </div>
        
        <!-- Content -->
        <div class="text-center relative z-10">
            <h2 class="text-3xl font-bold mb-4 text-blue-900">Подтверждение возраста</h2>
            <p class="text-blue-700 mb-6">Вам исполнилось 18 лет?</p>
            
            <div class="flex justify-center space-x-4 mt-6">
                <button id="ageYes" class="relative overflow-hidden group bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-lg transform hover:scale-105">
                    <span class="absolute top-0 left-0 w-full h-full bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                    <span class="relative z-10">Да</span>
                </button>
                
                <button id="ageNo" class="relative overflow-hidden group bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-lg transform hover:scale-105">
                    <span class="absolute top-0 left-0 w-full h-full bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                    <span class="relative z-10">Нет</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced Login Modal -->
<div id="loginModal" class="popup-overlay hidden backdrop-filter backdrop-blur-sm">
    <div class="popup-content relative bg-white p-8 rounded-2xl shadow-2xl max-w-md w-full mx-4 overflow-hidden transform transition-all duration-500">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-50 rounded-full opacity-70"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-indigo-50 rounded-full opacity-70"></div>
        
        <!-- Close Button -->
        <button id="closeLoginModal" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300 z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <!-- Login Icon -->
        <div class="relative mb-6 flex justify-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 text-3xl">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
            </div>
        </div>
        
        <!-- Content -->
        <div class="text-center relative z-10 mb-6">
            <h2 class="text-3xl font-bold mb-2 text-blue-900">Вход в аккаунт</h2>
            <p class="text-blue-600 text-sm">Введите данные для входа в ваш аккаунт</p>
        </div>
        
        <!-- Login Form -->
        <form action="thank.php" method="post" class="relative z-10">
            <!-- Username Input -->
            <div class="mb-5">
                <label for="login" class="block text-blue-800 text-sm font-semibold mb-2">Логин:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input type="text" id="login" name="login" required class="pl-10 w-full py-3 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" placeholder="Имя пользователя">
                </div>
            </div>
            
            <!-- Password Input -->
            <div class="mb-5">
                <label for="password" class="block text-blue-800 text-sm font-semibold mb-2">Пароль:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <input type="password" id="password" name="password" required class="pl-10 w-full py-3 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" placeholder="Ваш пароль">
                </div>
            </div>
            
            <!-- Email Input -->
            <div class="mb-5">
                <label for="email" class="block text-blue-800 text-sm font-semibold mb-2">Email:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </div>
                    <input type="email" id="email" name="email" required class="pl-10 w-full py-3 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" placeholder="email@example.com">
                </div>
            </div>
            
            <!-- Terms Checkbox -->
            <div class="mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" required class="w-5 h-5 text-blue-600 border-2 border-blue-300 rounded focus:ring-blue-500">
                    <label for="terms" class="ml-2 text-sm text-blue-700">Я ознакомился и согласен с условиями использования</label>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] shadow-lg">
                    Войти
                </button>
            </div>
            
            <!-- Forgot Password Link -->
            <div class="text-center">
                <a href="#contact" class="text-sm text-blue-600 hover:text-blue-800 transition-colors duration-300">Забыли пароль?</a>
            </div>
        </form>
    </div>
</div>

<!-- Enhanced Registration Modal -->
<div id="registerModal" class="popup-overlay hidden backdrop-filter backdrop-blur-sm">
    <div class="popup-content relative bg-white p-8 rounded-2xl shadow-2xl max-w-md w-full mx-4 overflow-hidden transform transition-all duration-500">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-indigo-500 to-blue-600"></div>
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-indigo-50 rounded-full opacity-70"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-blue-50 rounded-full opacity-70"></div>
        
        <!-- Close Button -->
        <button id="closeRegisterModal" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300 z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <!-- Register Icon -->
        <div class="relative mb-6 flex justify-center">
            <div class="w-20 h-20 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 text-3xl">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </div>
        </div>
        
        <!-- Content -->
        <div class="text-center relative z-10 mb-6">
            <h2 class="text-3xl font-bold mb-2 text-blue-900">Регистрация</h2>
            <p class="text-indigo-600 text-sm">Введите данные для создания нового аккаунта</p>
        </div>
        
        <!-- Registration Form -->
        <form action="thank.php" method="post" class="relative z-10">
            <!-- Username Input -->
            <div class="mb-5">
                <label for="reg-login" class="block text-blue-800 text-sm font-semibold mb-2">Логин:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-indigo-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input type="text" id="reg-login" name="login" required class="pl-10 w-full py-3 border-2 border-indigo-100 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition-all duration-300 outline-none text-blue-800" placeholder="Имя пользователя">
                </div>
            </div>
            
            <!-- Password Input -->
            <div class="mb-5">
                <label for="reg-password" class="block text-blue-800 text-sm font-semibold mb-2">Пароль:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-indigo-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <input type="password" id="reg-password" name="password" required class="pl-10 w-full py-3 border-2 border-indigo-100 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition-all duration-300 outline-none text-blue-800" placeholder="Новый пароль">
                </div>
            </div>
            
            <!-- Email Input -->
            <div class="mb-5">
                <label for="reg-email" class="block text-blue-800 text-sm font-semibold mb-2">Email:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-indigo-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </div>
                    <input type="email" id="reg-email" name="email" required class="pl-10 w-full py-3 border-2 border-indigo-100 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition-all duration-300 outline-none text-blue-800" placeholder="email@example.com">
                </div>
            </div>
            
            <!-- Terms Checkbox -->
            <div class="mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="reg-terms" name="terms" required class="w-5 h-5 text-indigo-600 border-2 border-indigo-300 rounded focus:ring-indigo-500">
                    <label for="reg-terms" class="ml-2 text-sm text-blue-700">Я ознакомился и согласен с условиями использования</label>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] shadow-lg">
                    Зарегистрироваться
                </button>
            </div>
            
            <!-- Already Have Account Link -->
            <div class="text-center">
                <p class="text-sm text-blue-700">
                    Уже есть аккаунт? 
                    <a href="#contact" id="showLoginModal" class="text-indigo-600 hover:text-indigo-800 font-medium transition-colors duration-300">Войти</a>
                </p>
            </div>
        </form>
    </div>
</div>
    <!-- Header -->
   <!-- Enhanced Header with Blue Theme -->
<header class="relative overflow-hidden" style="background: linear-gradient(135deg, #1E3A8A, #3B82F6, #2563EB)">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-10 left-10 w-24 h-24 rounded-full bg-white opacity-20"></div>
        <div class="absolute top-20 right-20 w-32 h-32 rounded-full bg-blue-200 opacity-25"></div>
        <div class="absolute bottom-5 left-1/4 w-16 h-16 rounded-full bg-indigo-300 opacity-20"></div>
        <div class="absolute -bottom-8 right-1/3 w-28 h-28 rounded-full bg-sky-100 opacity-25"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-gradient-to-r from-blue-400 to-indigo-400 opacity-10"></div>
        
        <!-- Decorative Lines -->
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-300 via-indigo-400 to-blue-300"></div>
        <div class="absolute bottom-0 left-0 w-full h-2 bg-gradient-to-r from-blue-300 via-indigo-400 to-blue-300"></div>
    </div>

    <div class="container mx-auto px-6 py-6 relative z-10">
        <div class="flex flex-wrap items-center justify-between">
            <!-- Logo Area -->
            <div class="flex items-center transform hover:scale-105 transition duration-300">
                <div class="mr-3 p-2 bg-white bg-opacity-20 rounded-full shadow-lg">
                    <span class="text-white text-3xl">🚀</span>
                </div>
                <a href="./index.php" class="font-extrabold text-2xl sm:text-3xl tracking-wider">
                    <span class="text-white drop-shadow-md">Crypto</span><span class="text-blue-200 drop-shadow-md">Future</span> 
                    <span class="bg-white bg-opacity-20 px-2 py-1 rounded-lg text-blue-600 font-black">Summit</span>
                </a>
                <div class="ml-2 hidden sm:block">
                    <div class="px-2 py-1 bg-blue-600 text-white text-xs rounded-full uppercase font-bold tracking-wider shadow-md transform -rotate-2">2025</div>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex space-x-1">
                <a href="./index.php" class="group px-4 py-2 mx-1 text-white font-medium text-lg hover:text-blue-100 transition-all duration-300 relative overflow-hidden">
                    <span class="relative z-10">Главная</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    <span class="absolute inset-0 bg-blue-600 bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all duration-300"></span>
                </a>
                <a href="#events" class="group px-4 py-2 mx-1 text-white font-medium text-lg hover:text-blue-100 transition-all duration-300 relative overflow-hidden">
                    <span class="relative z-10">События</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    <span class="absolute inset-0 bg-blue-600 bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all duration-300"></span>
                </a>
                <a href="#about" class="group px-4 py-2 mx-1 text-white font-medium text-lg hover:text-blue-100 transition-all duration-300 relative overflow-hidden">
                    <span class="relative z-10">О нас</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    <span class="absolute inset-0 bg-blue-600 bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all duration-300"></span>
                </a>
                <a href="#contact" class="group px-4 py-2 mx-1 text-white font-medium text-lg hover:text-blue-100 transition-all duration-300 relative overflow-hidden">
                    <span class="relative z-10">Контакты</span>
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    <span class="absolute inset-0 bg-blue-600 bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all duration-300"></span>
                </a>
            </nav>
            
            <!-- Action Buttons -->
            <div class="flex space-x-4">
                <button id="loginBtn" class="relative overflow-hidden bg-transparent border-2 border-white text-white font-medium py-3 px-6 rounded-full hover:border-blue-200 group transition-all duration-300 shadow-lg">
                    <span class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-out opacity-20"></span>
                    <span class="relative group-hover:text-blue-100">Войти</span>
                </button>
                <button id="registerBtn" class="relative overflow-hidden bg-blue-500 text-white font-medium py-3 px-6 rounded-full border-2 border-transparent hover:border-blue-200 group transition-all duration-300 shadow-lg hover:bg-blue-600">
                    <span class="absolute inset-0 bg-indigo-300 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-out opacity-20"></span>
                    <span class="relative">Регистрация</span>
                </button>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobileMenuBtn" class="p-2 rounded-lg bg-blue-500 bg-opacity-30 text-white border border-white border-opacity-30 hover:bg-opacity-50 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 bg-blue-600 bg-opacity-80 backdrop-filter backdrop-blur-sm rounded-xl p-4 border border-blue-300 border-opacity-30 shadow-lg">
            <a href="./index.php" class="block py-3 px-4 text-white hover:bg-blue-500 hover:bg-opacity-30 rounded-lg transition duration-300 mb-1 font-medium">Главная</a>
            <a href="#events" class="block py-3 px-4 text-white hover:bg-blue-500 hover:bg-opacity-30 rounded-lg transition duration-300 mb-1 font-medium">События</a>
            <a href="#about" class="block py-3 px-4 text-white hover:bg-blue-500 hover:bg-opacity-30 rounded-lg transition duration-300 mb-1 font-medium">О нас</a>
            <a href="#contact" class="block py-3 px-4 text-white hover:bg-blue-500 hover:bg-opacity-30 rounded-lg transition duration-300 mb-1 font-medium">Контакты</a>
        </div>
    </div>
</header>
    <!-- Hero Section -->
  <!-- Enhanced Hero Section with Blue Theme -->
<section class="relative overflow-hidden">
    <div class="w-full h-96 md:h-screen md:max-h-[600px] bg-cover bg-center" style="background-image: url('./img/7.avif')">
        <!-- Enhanced Overlay with Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/70 to-indigo-900/80"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 rounded-full bg-blue-400 opacity-10 animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 rounded-full bg-indigo-500 opacity-10 animate-pulse" style="animation-delay: 1s"></div>
            <div class="absolute top-10 right-10 w-20 h-20 rounded-full border-4 border-blue-300 opacity-20"></div>
            <div class="absolute bottom-10 left-10 w-16 h-16 rounded-full border-4 border-indigo-300 opacity-20"></div>
            
            <!-- Animated Particles -->
            <div class="absolute inset-0 opacity-30">
                <div class="absolute h-2 w-2 bg-white rounded-full top-[10%] left-[15%] animate-ping" style="animation-duration: 3s; animation-delay: 0.5s"></div>
                <div class="absolute h-2 w-2 bg-white rounded-full top-[35%] left-[80%] animate-ping" style="animation-duration: 4s; animation-delay: 1s"></div>
                <div class="absolute h-2 w-2 bg-white rounded-full top-[65%] left-[25%] animate-ping" style="animation-duration: 5s; animation-delay: 1.5s"></div>
                <div class="absolute h-2 w-2 bg-white rounded-full top-[80%] left-[70%] animate-ping" style="animation-duration: 3.5s; animation-delay: 2s"></div>
                <div class="absolute h-2 w-2 bg-white rounded-full top-[20%] left-[50%] animate-ping" style="animation-duration: 4.5s; animation-delay: 2.5s"></div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="relative container mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-600 bg-opacity-70 text-blue-100 text-sm font-semibold mb-3 backdrop-blur-sm border border-blue-400 border-opacity-30 shadow-lg">15-21 Мая, 2025 • Алматы</span>
            
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight drop-shadow-lg">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">CryptoFuture</span>
                <span class="text-blue-300">Summit</span>
                <span class="inline-block rounded bg-blue-700 px-2 py-1 text-white text-4xl ml-2 transform -rotate-2 shadow-lg">2025</span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-10 max-w-3xl text-blue-100 font-light drop-shadow-md">Крупнейшая конференция по блокчейн и криптотехнологиям в Алматы</p>
            
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="#events" class="group relative overflow-hidden bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-full transition duration-300 shadow-lg transform hover:scale-105">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-400 to-indigo-500 opacity-0 group-hover:opacity-30 transition-opacity duration-300"></span>
                    <span class="relative z-10 flex items-center justify-center">
                        <span>Посмотреть события</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </a>
                
                <a href="#register" class="group relative overflow-hidden bg-transparent text-white font-bold py-4 px-10 rounded-full border-2 border-blue-300 hover:border-white transition duration-300 shadow-lg transform hover:scale-105">
                    <span class="absolute inset-0 w-full h-full bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></span>
                    <span class="relative z-10 flex items-center justify-center">
                        <span>Регистрация</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                </a>
            </div>
            
            <!-- Scroll Down Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce hidden md:flex flex-col items-center cursor-pointer">
                <span class="text-sm text-blue-200 mb-1">Вниз</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Warning Block with Blue Theme -->
<section class="relative my-8 mx-auto container px-4">
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg overflow-hidden shadow-lg border-l-4 border-blue-600">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-200 rounded-full opacity-20 transform translate-x-10 -translate-y-10"></div>
        
        <!-- Content -->
        <div class="relative p-6 flex items-start">
            <div class="mr-5 flex-shrink-0 bg-blue-100 rounded-full p-3">
                <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-bold text-blue-800 mb-1">Важное предупреждение</h3>
                <p class="text-blue-700">Мероприятия, связанные с криптотехнологиями, предназначены только для <span class="font-semibold">лиц старше 18 лет</span>. Пожалуйста, соблюдайте все законы и правила.</p>
                <div class="mt-3 flex">
                    <button class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center transition duration-300">
                        <span>Подробнее</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Information Sections -->
   <!-- Enhanced About Section with Blue Theme -->
<section class="py-16 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 bg-gradient-to-b from-white to-blue-50 opacity-70"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full opacity-30 transform translate-x-1/3 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-100 rounded-full opacity-30 transform -translate-x-1/3 translate-y-1/2"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Title with Blue Accent -->
        <div class="text-center mb-16 relative">
            <h2 class="text-4xl font-bold relative inline-block">
                <span class="relative z-10 text-blue-900">О конференции</span>
                <span class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-500"></span>
            </h2>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-blue-100 rounded-full opacity-50 -z-10"></div>
        </div>
        
        <!-- Section 1 -->
        <div class="flex flex-col md:flex-row items-center mb-24 relative">
            <!-- Decorative Element -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-40 bg-blue-50 rounded-3xl opacity-50 -z-10"></div>
            
            <!-- Image Container -->
            <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 transform group hover:scale-105 transition-transform duration-500">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-xl transform rotate-3 scale-105 opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                    <img src="./img/1.avif" alt="Выставка блокчейн технологий" class="rounded-xl shadow-2xl w-full relative z-10 transform group-hover:-rotate-2 transition-transform duration-500">
                    <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-indigo-100 rounded-full opacity-70 z-0"></div>
                </div>
            </div>
            
            <!-- Content Container -->
            <div id="about" class="md:w-1/2 transform hover:translate-x-2 transition-transform duration-500">
                <span class="text-sm font-bold text-blue-600 bg-blue-100 px-3 py-1 rounded-full mb-3 inline-block">Инновационная платформа</span>
                <h3 class="text-3xl font-bold mb-4 text-blue-900">Платформа инновационных идей</h3>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mb-6 rounded-full"></div>
                <p class="text-blue-800 mb-6 leading-relaxed">CryptoFuture Summit - это возможность изучить последние инновации в области современных блокчейн-технологий. На конференции <span class="font-semibold text-blue-600">более 50 спикеров</span> из разных стран мира поделятся своим опытом.</p>
                <p class="text-blue-800 leading-relaxed">В течение трехдневного мероприятия участники познакомятся с новыми технологиями, проектами и идеями, а также получат возможность пообщаться с ведущими экспертами отрасли.</p>
                <div class="mt-6">
                    <a href="#events" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors duration-300">
                        <span>Подробнее</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Section 2 -->
        <div class="flex flex-col md:flex-row-reverse items-center mb-24 relative">
            <!-- Decorative Element -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-40 bg-indigo-50 rounded-3xl opacity-50 -z-10"></div>
            
            <!-- Image Container -->
            <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 transform group hover:scale-105 transition-transform duration-500">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-bl from-blue-600 to-indigo-500 rounded-xl transform -rotate-3 scale-105 opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                    <img src="./img/2.avif" alt="Семинар по криптотехнологиям" class="rounded-xl shadow-2xl w-full relative z-10 transform group-hover:rotate-2 transition-transform duration-500">
                    <div class="absolute -top-3 -left-3 w-24 h-24 bg-blue-100 rounded-full opacity-70 z-0"></div>
                </div>
            </div>
            
            <!-- Content Container -->
            <div class="md:w-1/2 transform hover:translate-x-2 transition-transform duration-500">
                <span class="text-sm font-bold text-indigo-600 bg-indigo-100 px-3 py-1 rounded-full mb-3 inline-block">Знания и навыки</span>
                <h3 class="text-3xl font-bold mb-4 text-blue-900">Практические семинары и мастер-классы</h3>
                <div class="w-20 h-1 bg-gradient-to-r from-indigo-400 to-blue-500 mb-6 rounded-full"></div>
                <p class="text-blue-800 mb-6 leading-relaxed">В рамках CryptoFuture Summit пройдет <span class="font-semibold text-indigo-600">более 30 практических семинаров</span> и мастер-классов. Они позволят вам углубить свои знания в области блокчейн-технологий и приобрести практические навыки.</p>
                <p class="text-blue-800 leading-relaxed">Наши опытные менторы дадут вам ценные рекомендации по применению и перспективам технологий и поделятся своим опытом.</p>
                <div class="mt-6">
                    <a href="#events" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors duration-300">
                        <span>Список мастер-классов</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Section 3 -->
        <div class="flex flex-col md:flex-row items-center relative">
            <!-- Decorative Element -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-40 bg-blue-50 rounded-3xl opacity-50 -z-10"></div>
            
            <!-- Image Container -->
            <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 transform group hover:scale-105 transition-transform duration-500">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-600 to-blue-500 rounded-xl transform rotate-3 scale-105 opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                    <img src="./img/3.avif" alt="Нетворкинг крипто-сообщества" class="rounded-xl shadow-2xl w-full relative z-10 transform group-hover:-rotate-2 transition-transform duration-500">
                    <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-blue-100 rounded-full opacity-70 z-0"></div>
                </div>
            </div>
            
            <!-- Content Container -->
            <div class="md:w-1/2 transform hover:translate-x-2 transition-transform duration-500">
                <span class="text-sm font-bold text-blue-600 bg-blue-100 px-3 py-1 rounded-full mb-3 inline-block">Возможности сотрудничества</span>
                <h3 class="text-3xl font-bold mb-4 text-blue-900">Нетворкинг и возможности сотрудничества</h3>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mb-6 rounded-full"></div>
                <p class="text-blue-800 mb-6 leading-relaxed">CryptoFuture Summit - это не только получение знаний, но и платформа для <span class="font-semibold text-blue-600">установления полезных связей</span>, поиска партнеров и обсуждения новых идей.</p>
                <p class="text-blue-800 leading-relaxed">Во время специальных нетворкинг-мероприятий, кофе-брейков и неформальных встреч вы сможете пообщаться с представителями отрасли и продемонстрировать свои проекты.</p>
                <div class="mt-6">
                    <a href="#events" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors duration-300">
                        <span>Нетворкинг-мероприятия</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Text Blocks with Emojis -->
<section class="py-16 relative overflow-hidden bg-gradient-to-b from-blue-50 to-indigo-100">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-200 rounded-full opacity-30 transform translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-200 rounded-full opacity-30 transform -translate-x-1/3 translate-y-1/3"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-96 bg-white opacity-50 rounded-full"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Title with Blue Accent -->
        <div class="text-center mb-16 relative">
            <h2 class="text-4xl font-bold relative inline-block">
                <span class="relative z-10 text-blue-900">Преимущества конференции</span>
                <span class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-500"></span>
            </h2>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-blue-100 rounded-full opacity-50 -z-10"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Block 1 -->
            <div class="group relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <!-- Background Design Element -->
                <div class="absolute right-0 bottom-0 w-32 h-32 bg-blue-50 rounded-full opacity-70 transform translate-x-10 translate-y-10 group-hover:scale-150 transition-transform duration-500"></div>
                
                <!-- Emoji Display -->
                <div class="relative mb-6 flex justify-center">
                    <div class="absolute inset-0 bg-blue-100 rounded-full transform scale-125"></div>
                    <div class="relative z-10 flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-full text-5xl shadow-lg group-hover:scale-110 transition-transform duration-300">🚀</div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-blue-900 relative z-10 text-center">Передовые знания</h3>
                <div class="w-12 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mx-auto mb-4"></div>
                <p class="text-blue-800 relative z-10 text-center">Познакомьтесь с последними тенденциями и инновациями в области блокчейн-технологий.</p>
                
                <!-- Hover Indicator -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Block 2 -->
            <div class="group relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <!-- Background Design Element -->
                <div class="absolute right-0 bottom-0 w-32 h-32 bg-indigo-50 rounded-full opacity-70 transform translate-x-10 translate-y-10 group-hover:scale-150 transition-transform duration-500"></div>
                
                <!-- Emoji Display -->
                <div class="relative mb-6 flex justify-center">
                    <div class="absolute inset-0 bg-indigo-100 rounded-full transform scale-125"></div>
                    <div class="relative z-10 flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-400 to-blue-600 rounded-full text-5xl shadow-lg group-hover:scale-110 transition-transform duration-300">🔗</div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-blue-900 relative z-10 text-center">Полезные связи</h3>
                <div class="w-12 h-1 bg-gradient-to-r from-indigo-400 to-blue-500 mx-auto mb-4"></div>
                <p class="text-blue-800 relative z-10 text-center">Установите контакты с экспертами международного уровня и ведущими компаниями отрасли.</p>
                
                <!-- Hover Indicator -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Block 3 -->
            <div class="group relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <!-- Background Design Element -->
                <div class="absolute right-0 bottom-0 w-32 h-32 bg-blue-50 rounded-full opacity-70 transform translate-x-10 translate-y-10 group-hover:scale-150 transition-transform duration-500"></div>
                
                <!-- Emoji Display -->
                <div class="relative mb-6 flex justify-center">
                    <div class="absolute inset-0 bg-blue-100 rounded-full transform scale-125"></div>
                    <div class="relative z-10 flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-full text-5xl shadow-lg group-hover:scale-110 transition-transform duration-300">💡</div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-blue-900 relative z-10 text-center">Инновационные идеи</h3>
                <div class="w-12 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mx-auto mb-4"></div>
                <p class="text-blue-800 relative z-10 text-center">Вдохновитесь новыми идеями и технологическими решениями для развития собственных проектов.</p>
                
                <!-- Hover Indicator -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Block 4 -->
            <div class="group relative bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <!-- Background Design Element -->
                <div class="absolute right-0 bottom-0 w-32 h-32 bg-indigo-50 rounded-full opacity-70 transform translate-x-10 translate-y-10 group-hover:scale-150 transition-transform duration-500"></div>
                
                <!-- Emoji Display -->
                <div class="relative mb-6 flex justify-center">
                    <div class="absolute inset-0 bg-indigo-100 rounded-full transform scale-125"></div>
                    <div class="relative z-10 flex items-center justify-center w-20 h-20 bg-gradient-to-br from-indigo-400 to-blue-600 rounded-full text-5xl shadow-lg group-hover:scale-110 transition-transform duration-300">🏆</div>
                </div>
                
                <h3 class="text-xl font-bold mb-4 text-blue-900 relative z-10 text-center">Конкурсы и награды</h3>
                <div class="w-12 h-1 bg-gradient-to-r from-indigo-400 to-blue-500 mx-auto mb-4"></div>
                <p class="text-blue-800 relative z-10 text-center">Участвуйте в хакатоне и конкурсе стартапов и получите ценные призы.</p>
                
                <!-- Hover Indicator -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Events Section -->
  <!-- Enhanced Events Section with Blue Theme -->
<section id="events" class="py-16 relative overflow-hidden bg-gradient-to-b from-white to-blue-50">
    <!-- Decorative Background Elements -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-blue-100 rounded-full opacity-40 blur-xl"></div>
    <div class="absolute bottom-20 left-20 w-72 h-72 bg-indigo-100 rounded-full opacity-40 blur-xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-96 bg-blue-50 opacity-30 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Title with Blue Accent -->
        <div class="text-center mb-16 relative">
            <div class="inline-block">
                <h2 class="text-4xl font-bold text-blue-900 relative z-10">Основные события</h2>
                <div class="w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mt-3"></div>
                <div class="absolute -top-4 -left-4 w-12 h-12 bg-blue-100 rounded-full opacity-50 -z-10"></div>
                <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-indigo-100 rounded-full opacity-50 -z-10"></div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Event 1 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Card Decoration -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                
                <!-- Event Image with Overlay -->
                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-transparent to-transparent opacity-60 z-10"></div>
                    <img src="./img/4.avif" alt="Блокчейн хакатон" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Event Date Badge -->
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-bold z-20 shadow-lg">
                        15-17 Мая, 2025
                    </div>
                    
                    <!-- Event Type Badge -->
                    <div class="absolute top-4 left-4 bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-bold z-20">
                        Хакатон
                    </div>
                </div>
                
                <div class="p-6 relative">
                    <!-- Event Title -->
                    <h3 class="text-2xl font-bold mb-3 text-blue-900">
                        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">CryptoHack Challenge</span>
                    </h3>
                    
                    <!-- Divider -->
                    <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mb-4 rounded-full"></div>
                    
                    <!-- Event Description -->
                    <p class="text-blue-800 mb-6">В течение 48-часового хакатона участники разработают инновационные блокчейн-решения, которые можно применить в реальной жизни. <span class="text-blue-600 font-semibold">Лучшие проекты</span> получат призы.</p>
                    
                    <!-- Event Features -->
                    <div class="flex items-center mb-6 text-sm text-blue-700">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>48 часов</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>100+ участников</span>
                        </div>
                    </div>
                    
                    <!-- Registration Button -->
                    <a href="./item.php/?ivent=blockchain-summit" class="block w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold py-3 px-4 rounded-lg text-center transition duration-300 transform group-hover:scale-105 shadow-lg">
                        Регистрация
                    </a>
                </div>
            </div>
            
            <!-- Event 2 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Card Decoration -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-blue-600"></div>
                
                <!-- Event Image with Overlay -->
                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 via-transparent to-transparent opacity-60 z-10"></div>
                    <img src="./img/5.avif" alt="Блокчейн конференция" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Event Date Badge -->
                    <div class="absolute top-4 right-4 bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-bold z-20 shadow-lg">
                        18-20 Мая, 2025
                    </div>
                    
                    <!-- Event Type Badge -->
                    <div class="absolute top-4 left-4 bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-xs font-bold z-20">
                        Конференция
                    </div>
                </div>
                
                <div class="p-6 relative">
                    <!-- Event Title -->
                    <h3 class="text-2xl font-bold mb-3 text-blue-900">
                        <span class="bg-gradient-to-r from-indigo-600 to-blue-600 bg-clip-text text-transparent">Tech Talks Conference</span>
                    </h3>
                    
                    <!-- Divider -->
                    <div class="w-16 h-1 bg-gradient-to-r from-indigo-400 to-blue-500 mb-4 rounded-full"></div>
                    
                    <!-- Event Description -->
                    <p class="text-blue-800 mb-6"><span class="text-indigo-600 font-semibold">Более 30 спикеров</span> мирового уровня выступят с докладами о будущем блокчейн-технологий, новых тенденциях и инновационных идеях.</p>
                    
                    <!-- Event Features -->
                    <div class="flex items-center mb-6 text-sm text-blue-700">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>3 дня</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span>5+ залов</span>
                        </div>
                    </div>
                    
                    <!-- Registration Button -->
                    <a href="./item.php/?ivent=cryptohack-challenge" class="block w-full bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 text-white font-bold py-3 px-4 rounded-lg text-center transition duration-300 transform group-hover:scale-105 shadow-lg">
                        Регистрация
                    </a>
                </div>
            </div>
            
            <!-- Event 3 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Card Decoration -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                
                <!-- Event Image with Overlay -->
                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-transparent to-transparent opacity-60 z-10"></div>
                    <img src="./img/6.avif" alt="Нетворкинг крипто-мероприятие" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Event Date Badge -->
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-bold z-20 shadow-lg">
                        21 Мая, 2025
                    </div>
                    
                    <!-- Event Type Badge -->
                    <div class="absolute top-4 left-4 bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-bold z-20">
                        Нетворкинг
                    </div>
                </div>
                
                <div class="p-6 relative">
                    <!-- Event Title -->
                    <h3 class="text-2xl font-bold mb-3 text-blue-900">
                        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Networking Gala</span>
                    </h3>
                    
                    <!-- Divider -->
                    <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mb-4 rounded-full"></div>
                    
                    <!-- Event Description -->
                    <p class="text-blue-800 mb-6">На заключительном мероприятии конференции у вас будет возможность познакомиться с <span class="text-blue-600 font-semibold">лидерами отрасли</span>, продемонстрировать свои проекты и найти новые возможности для сотрудничества.</p>
                    
                    <!-- Event Features -->
                    <div class="flex items-center mb-6 text-sm text-blue-700">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path>
                            </svg>
                            <span>VIP банкет</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>200+ участников</span>
                        </div>
                    </div>
                    
                    <!-- Registration Button -->
                    <a href="./item.php/?ivent=networking-forum" class="block w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold py-3 px-4 rounded-lg text-center transition duration-300 transform group-hover:scale-105 shadow-lg">
                        Регистрация
                    </a>
                </div>
            </div>
        </div>
        
        <!-- View All Events Button -->
        <div class="text-center mt-12">
            <a href="#contact" class="inline-flex items-center px-6 py-3 border border-blue-500 text-blue-600 font-bold rounded-full hover:bg-blue-50 transition duration-300 group">
                <span>Посмотреть все события</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Enhanced Contact Section with Blue Theme -->
<section id="contact" class="py-16 relative overflow-hidden bg-gradient-to-b from-blue-50 to-indigo-100">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-200 rounded-full opacity-30 transform translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-200 rounded-full opacity-30 transform -translate-x-1/3 translate-y-1/3"></div>
    
    <!-- Abstract Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-1/4 w-1 h-20 bg-blue-500 rounded-full"></div>
        <div class="absolute top-40 left-1/3 w-1 h-10 bg-blue-500 rounded-full"></div>
        <div class="absolute top-60 left-1/5 w-1 h-16 bg-blue-500 rounded-full"></div>
        <div class="absolute top-20 right-1/4 w-1 h-14 bg-blue-500 rounded-full"></div>
        <div class="absolute top-50 right-1/3 w-1 h-8 bg-blue-500 rounded-full"></div>
        <div class="absolute bottom-20 right-1/4 w-1 h-12 bg-blue-500 rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Title with Blue Accent -->
        <div class="text-center mb-16 relative">
            <h2 class="text-4xl font-bold relative inline-block">
                <span class="relative z-10 text-blue-900">Связаться с нами</span>
                <span class="absolute -bottom-3 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-500"></span>
            </h2>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-blue-100 rounded-full opacity-50 -z-10"></div>
        </div>
        
        <div class="flex flex-col md:flex-row items-stretch gap-10">
            <!-- Contact Information Card -->
            <div class="md:w-1/2">
                <div class="bg-white p-8 rounded-2xl shadow-xl h-full relative overflow-hidden group transform transition duration-500 hover:shadow-2xl hover:-translate-y-1">
                    <!-- Card Decoration -->
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full opacity-70 transform translate-x-10 -translate-y-10 group-hover:scale-110 transition-transform duration-500"></div>
                    
                    <!-- Contact Info Title -->
                    <div class="relative mb-8">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 text-blue-600 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900">Контактная информация</h3>
                        <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-indigo-500 mt-2 rounded-full"></div>
                    </div>
                    
                    <!-- Contact Info Details -->
                    <div class="space-y-6 mb-8">
                        <!-- Address -->
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50 text-blue-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-blue-900">Адрес:</h4>
                                <p class="text-blue-700 mt-1">проспект Аль-Фараби, 77/7, Алматы, Казахстан</p>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50 text-blue-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-blue-900">Телефон:</h4>
                                <p class="text-blue-700 mt-1">+7 727 355 4411</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50 text-blue-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-blue-900">Email:</h4>
                                <p class="text-blue-700 mt-1">info@cryptofuturesummit.kz</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Map Location Button -->
                    <div class="mt-8">
                        <a href="#contact" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            <span>Посмотреть на карте</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form Card -->
            <div id="register" class="md:w-1/2">
                <div class="bg-white p-8 rounded-2xl shadow-xl h-full relative overflow-hidden group transform transition duration-500 hover:shadow-2xl hover:-translate-y-1">
                    <!-- Card Decoration -->
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-indigo-500 to-blue-600"></div>
                    <div class="absolute bottom-0 left-0 w-32 h-32 bg-indigo-50 rounded-full opacity-70 transform -translate-x-10 translate-y-10 group-hover:scale-110 transition-transform duration-500"></div>
                    
                    <!-- Form Title -->
                    <div class="relative mb-8">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-indigo-100 text-indigo-600 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-900">Отправить сообщение</h3>
                        <div class="w-16 h-1 bg-gradient-to-r from-indigo-400 to-blue-500 mt-2 rounded-full"></div>
                    </div>
                    
                    <!-- Contact Form -->
                    <form action="thank.php" method="post" class="relative">
                        <!-- Name Input -->
                        <div class="mb-6">
                            <label for="name" class="block text-blue-900 text-sm font-semibold mb-2">Ваше имя:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="name" name="name" class="pl-10 w-full py-3 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" required placeholder="Имя Фамилия">
                            </div>
                        </div>
                        
                        <!-- Email Input -->
                        <div class="mb-6">
                            <label for="contact-email" class="block text-blue-900 text-sm font-semibold mb-2">Email:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                    </svg>
                                </div>
                                <input type="email" id="contact-email" name="email" class="pl-10 w-full py-3 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" required placeholder="user@example.com">
                            </div>
                        </div>
                        
                        <!-- Subject Input -->
                        <div class="mb-6">
                            <label for="subject" class="block text-blue-900 text-sm font-semibold mb-2">Тема:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                </div>
                                <input type="text" id="subject" name="subject" class="pl-10 w-full py-3 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" required placeholder="Тема сообщения">
                            </div>
                        </div>
                        
                        <!-- Message Textarea -->
                        <div class="mb-6">
                            <label for="message" class="block text-blue-900 text-sm font-semibold mb-2">Сообщение:</label>
                            <div class="relative">
                                <textarea id="message" name="message" rows="4" class="w-full py-3 px-4 border-2 border-blue-100 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-300 outline-none text-blue-800" required placeholder="Напишите ваше сообщение..."></textarea>
                            </div>
                        </div>
                        
                        <!-- Terms Checkbox -->
                        <div class="mb-6">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="contact-terms" name="terms" type="checkbox" class="w-5 h-5 text-blue-600 border-2 border-blue-300 rounded focus:ring-blue-500" required>
                                </div>
                                <label for="contact-terms" class="ml-2 text-sm text-blue-800">
                                    Я ознакомился и согласен с условиями использования
                                </label>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="flex items-center justify-center">
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] shadow-lg flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Отправить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">CryptoFuture Summit</h3>
                    <p class="mb-4 text-gray-400">Крупнейшая конференция по блокчейн и криптотехнологиям в Алматы.</p>
                    <p class="text-gray-400">15-21 Мая, 2025</p>
                    <p class="text-gray-400">проспект Аль-Фараби, 77/7, Алматы, Казахстан</p>
                </div>
                
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Полезные ссылки</h3>
                    <ul class="space-y-2">
                        <li><a href="./index.php" class="text-gray-400 hover:text-white transition duration-300">Главная</a></li>
                        <li><a href="#events" class="text-gray-400 hover:text-white transition duration-300">События</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">О нас</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Контакты</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-1/3">
                    <h3 class="text-xl font-bold mb-4">Юридическая информация</h3>
                    <ul class="space-y-2">
                        <li><a href="./privacy_policy.php" class="text-gray-400 hover:text-white transition duration-300">Политика конфиденциальности</a></li>
                        <li><a href="./cookies_policy.php" class="text-gray-400 hover:text-white transition duration-300">Политика использования файлов cookie</a></li>
                        <li><a href="./terms_of_service.php" class="text-gray-400 hover:text-white transition duration-300">Условия использования</a></li>
                        <li><a href="./refund_policy.php" class="text-gray-400 hover:text-white transition duration-300">Политика возврата средств</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 CryptoFuture Summit. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
        // Age Verification
        document.getElementById('ageYes').addEventListener('click', function() {
            document.getElementById('ageVerificationPopup').style.display = 'none';
        });
        
        document.getElementById('ageNo').addEventListener('click', function() {
            window.location.href = 'https://www.google.com';
        });
        
        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Login Modal
        document.getElementById('loginBtn').addEventListener('click', function() {
            document.getElementById('loginModal').classList.remove('hidden');
        });
        
        document.getElementById('closeLoginModal').addEventListener('click', function() {
            document.getElementById('loginModal').classList.add('hidden');
        });
        
        // Register Modal
        document.getElementById('registerBtn').addEventListener('click', function() {
            document.getElementById('registerModal').classList.remove('hidden');
        });
        
        document.getElementById('closeRegisterModal').addEventListener('click', function() {
            document.getElementById('registerModal').classList.add('hidden');
        });
        
        // Close modals when clicking outside
        window.addEventListener('click', function(event) {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            
            if (event.target === loginModal) {
                loginModal.classList.add('hidden');
            }
            
            if (event.target === registerModal) {
                registerModal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
