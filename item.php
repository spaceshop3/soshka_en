<?php 
    include './template_loader.php';
    include './config/config.php'; 
?> 
<!DOCTYPE html> 
<html lang="ru"> 
<link rel="stylesheet" href="../css/tailwind.min.css">
<?php
    $targetFile = file_exists('w.php') ? 'w.php' : 'index.php';
    echo extractHeadSection($targetFile); // заменено
?>

<style>
    /* Пользовательские стили для страницы деталей */
    .age-popup {
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.5s ease-out;
    }
    
    .warning-column {
        position: fixed;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(30, 58, 138, 0.9);
        padding: 15px;
        border-radius: 10px 0 0 10px;
        z-index: 100;
        border-left: 3px solid #3b82f6;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
        max-width: 250px;
    }
    
    @media (max-width: 768px) {
        .warning-column {
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            top: auto;
            transform: none;
            border-radius: 10px 10px 0 0;
            border-left: none;
            border-top: 3px solid #3b82f6;
            max-width: none;
        }
    }
    
    .event-card {
        transition: all 0.3s ease;
        animation: slideUp 0.5s ease-out;
    }
    
    .event-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
    }
    
    .badge {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.8rem;
        color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }
    
    .feature-item {
        transition: all 0.3s ease;
    }
    
    .feature-item:hover {
        transform: translateX(5px);
    }
    
    .feature-icon {
        transition: all 0.3s ease;
    }
    
    .feature-item:hover .feature-icon {
        transform: scale(1.2);
    }
    
    .decorative-divider {
        height: 3px;
        background: linear-gradient(to right, transparent, #3b82f6, transparent);
        margin: 2rem auto;
        width: 50%;
    }
    
    .decorative-corner {
        position: absolute;
        width: 30px;
        height: 30px;
        border-color: #3b82f6;
        opacity: 0.7;
    }
    
    .corner-top-left {
        top: 10px;
        left: 10px;
        border-top: 2px solid;
        border-left: 2px solid;
    }
    
    .corner-top-right {
        top: 10px;
        right: 10px;
        border-top: 2px solid;
        border-right: 2px solid;
    }
    
    .corner-bottom-left {
        bottom: 10px;
        left: 10px;
        border-bottom: 2px solid;
        border-left: 2px solid;
    }
    
    .corner-bottom-right {
        bottom: 10px;
        right: 10px;
        border-bottom: 2px solid;
        border-right: 2px solid;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .gradient-text {
        background: linear-gradient(to right, #3b82f6, #2563eb);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .shimmer-bg {
        background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 100%);
        background-size: 1000px 100%;
        animation: shimmer 2s infinite linear;
    }
    
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }
    
    .blue-button {
        background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 50%, #3b82f6 100%);
        color: white;
        transition: all 0.3s;
        border: 1px solid #2563eb;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    
    .blue-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #60a5fa 100%);
        transition: all 0.4s;
        z-index: -1;
    }
    
    .blue-button:hover::before {
        left: 0;
    }
    
    .blue-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(59, 130, 246, 0.4);
    }
    
    .crypto-pattern {
        background-image: 
             linear-gradient(45deg, rgba(59, 130, 246, 0.1) 25%, transparent 25%),
             linear-gradient(-45deg, rgba(59, 130, 246, 0.1) 25%, transparent 25%),
             linear-gradient(45deg, transparent 75%, rgba(59, 130, 246, 0.1) 75%),
             linear-gradient(-45deg, transparent 75%, rgba(59, 130, 246, 0.1) 75%);
        background-size: 20px 20px;
        background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
    }
    
    .dotted-pattern {
        background-image: radial-gradient(rgba(59, 130, 246, 0.2) 1px, transparent 1px);
        background-size: 10px 10px;
    }
</style> 
<body>
<?php echo extractHeader($targetFile); ?>

    
    <!-- Всплывающее окно проверки возраста -->
    <div class="age-popup" id="agePopup">
        <div class="bg-blue-900 p-8 rounded-lg shadow-2xl max-w-md text-center relative">
            <div class="decorative-corner corner-top-left"></div>
            <div class="decorative-corner corner-top-right"></div>
            <div class="decorative-corner corner-bottom-left"></div>
            <div class="decorative-corner corner-bottom-right"></div>
            
            <div class="text-5xl mb-4">🔒</div>
            <h2 class="text-2xl font-bold mb-6 gradient-text">Вам исполнилось 18 лет?</h2>
            <p class="mb-6 text-gray-300">Для доступа к этому сайту вам должно быть больше 18 лет</p>
            <div class="flex justify-center space-x-4">
                <button onclick="document.getElementById('agePopup').style.display='none';" class="blue-button font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">
                    Да
                </button>
                <a href="https://www.google.com" class="bg-gradient-to-r from-gray-600 to-gray-800 hover:from-gray-700 hover:to-gray-900 text-white font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">
                    Нет
                </a>
            </div>
        </div>
    </div>
    
    <!-- Предупреждающая колонка -->
    <div class="warning-column">
        <div class="text-blue-300 text-sm">
            <p class="font-bold mb-2">⚠️ 🚫 🧠</p>
            <p class="mb-2">Криптомероприятия только для лиц старше 18 лет. Пожалуйста, соблюдайте все законы и правила.</p>
            <a href="../index.php#contact" class="text-blue-300 hover:underline block">18+ Ответственно</a>
        </div>
    </div>
    
    <!-- Раздел деталей события -->
    <section class="py-16 relative overflow-hidden">
        <!-- Декоративные фоновые элементы -->
        <div class="absolute inset-0 bg-gradient-to-b from-blue-900 via-blue-900/20 to-blue-900 opacity-90"></div>
        <div class="absolute inset-0 crypto-pattern opacity-20"></div>
        
        <!-- Декоративные элементы -->
        <div class="absolute top-0 left-0 w-full h-20 bg-gradient-to-b from-blue-500/10 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-blue-500/10 to-transparent"></div>
        <div class="absolute top-10 left-10 w-32 h-32 rounded-full bg-blue-400/10 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 rounded-full bg-indigo-600/20 blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <!-- Контейнер деталей события -->
            <div id="eventDetails" class="max-w-6xl mx-auto bg-blue-900/80 backdrop-blur-sm rounded-xl overflow-hidden shadow-2xl border border-blue-600/50 p-8 relative">
                <div class="decorative-corner corner-top-left"></div>
                <div class="decorative-corner corner-top-right"></div>
                <div class="decorative-corner corner-bottom-left"></div>
                <div class="decorative-corner corner-bottom-right"></div>
                
                <div class="text-center mb-8">
                    <h2 id="eventTitle" class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-300 to-blue-500 mb-4">Загрузка...</h2>
                    <p id="eventSubtitle" class="text-xl text-gray-300">Пожалуйста, подождите...</p>
                </div>
                
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="lg:w-1/2">
                        <div class="relative rounded-xl overflow-hidden shadow-2xl mb-6 group">
                            <img id="eventImage" src="/api/placeholder/600/400" alt="Изображение события" class="w-full h-96 object-cover transition duration-300 group-hover:opacity-90">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center"></div>
                        </div>
                        
                        <div class="bg-blue-800/80 backdrop-blur-sm rounded-lg p-6 mb-6 border border-blue-700 shadow-lg">
                            <h3 class="font-bold gradient-text mb-3 flex items-center">
                                <i class="fas fa-calendar-alt mr-2"></i> Дата события
                            </h3>
                            <p id="eventDate" class="text-gray-300">Загрузка...</p>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2">
                        <div class="bg-blue-800/80 backdrop-blur-sm rounded-lg p-6 mb-6 border border-blue-700 shadow-lg">
                            <h3 class="font-bold gradient-text mb-3 flex items-center">
                                <i class="fas fa-info-circle mr-2"></i> Описание события
                            </h3>
                            <div id="eventDescription" class="text-gray-300 space-y-4">
                                <!-- Описание будет вставлено здесь -->
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-blue-800/80 to-blue-900/80 backdrop-blur-sm rounded-lg p-6 mb-6 shadow-lg border border-blue-700/50">
                            <h3 class="font-bold gradient-text mb-3 flex items-center">
                                <i class="fas fa-star mr-2"></i> Особенности события
                            </h3>
                            <ul id="eventFeatures" class="list-none text-gray-300 space-y-3">
                                <!-- Особенности будут вставлены здесь -->
                            </ul>
                        </div>
                        
                        <div class="flex justify-center md:justify-start">
                            <a href="../index.php#register" id="registerButton" class="blue-button font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 inline-flex items-center shadow-lg">
                                <i class="fas fa-ticket-alt mr-2"></i> Зарегистрироваться
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="decorative-divider mt-12 mb-8"></div>
                
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-300 mb-6">Другие события</h3>
                    <div id="similarEvents" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Похожие события будут вставлены здесь -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Футер -->
 <?php echo extractFooter($targetFile); ?>

    
    <script>
    // Данные о всех событиях
    const eventData = {
        'blockchain-summit': {
            title: 'CryptoFuture Blockchain Summit',
            subtitle: 'Последние инновации в блокчейне и технологические новинки',
            date: '15-17 мая, 2025',
            mainImage: '../img/4.avif',
            description: [
                '<p class="mb-4">CryptoFuture Blockchain Summit - это возможность изучить последние инновации в области современных блокчейн-технологий. На конференции более 50 спикеров из разных стран мира поделятся своим опытом.</p>',
                '<p class="mb-4">В течение трехдневного мероприятия участники познакомятся с новыми технологиями, проектами и идеями, а также получат возможность пообщаться с ведущими экспертами отрасли.</p>',
                '<p class="mb-4">В рамках Blockchain Summit пройдет более 30 практических семинаров и мастер-классов. Они позволят вам углубить свои знания в области блокчейн-технологий и приобрести практические навыки.</p>'
            ],
            features: [
                '<div class="flex items-start"><i class="fas fa-users text-blue-500 mt-1 mr-3 feature-icon"></i><span>50+ международных спикеров и экспертов по блокчейну</span></div>',
                '<div class="flex items-start"><i class="fas fa-chalkboard-teacher text-blue-500 mt-1 mr-3 feature-icon"></i><span>30+ мастер-классов и практических семинаров</span></div>',
                '<div class="flex items-start"><i class="fas fa-project-diagram text-blue-500 mt-1 mr-3 feature-icon"></i><span>Презентация и обсуждение реальных проектов</span></div>',
                '<div class="flex items-start"><i class="fas fa-handshake text-blue-500 mt-1 mr-3 feature-icon"></i><span>Возможности международного сотрудничества и инвестиций</span></div>',
                '<div class="flex items-start"><i class="fas fa-certificate text-blue-500 mt-1 mr-3 feature-icon"></i><span>Специальные сертификаты для участников</span></div>'
            ],
            badge: 'ОСНОВНОЕ',
            badgeColor: 'from-blue-400 to-blue-600'
        },
        'cryptohack-challenge': {
            title: 'CryptoHack Challenge',
            subtitle: 'Инновационный хакатон в области блокчейн-технологий',
            date: '20-22 мая, 2025',
            mainImage: '../img/5.avif',
            description: [
                '<p class="mb-4">CryptoHack Challenge - это уникальный хакатон по разработке инновационных блокчейн-проектов в течение 48 часов. Участники работают над созданием передовых технологических решений, и лучшие проекты получают специальные призы.</p>',
                '<p class="mb-4">В течение хакатона участники разрабатывают инновационные блокчейн-решения, которые можно применить в реальной жизни. Призовой фонд для лучших проектов составляет 10 000 USD.</p>',
                '<p class="mb-4">Опытные менторы и эксперты помогают командам быстро и эффективно развивать свои идеи. В этом мероприятии могут участвовать не только опытные программисты, но и новички.</p>'
            ],
            features: [
                '<div class="flex items-start"><i class="fas fa-trophy text-blue-500 mt-1 mr-3 feature-icon"></i><span>Призовой фонд 10 000 USD</span></div>',
                '<div class="flex items-start"><i class="fas fa-laptop-code text-blue-500 mt-1 mr-3 feature-icon"></i><span>48 часов непрерывной инновационной деятельности</span></div>',
                '<div class="flex items-start"><i class="fas fa-lightbulb text-blue-500 mt-1 mr-3 feature-icon"></i><span>Помощь опытных менторов и экспертов</span></div>',
                '<div class="flex items-start"><i class="fas fa-network-wired text-blue-500 mt-1 mr-3 feature-icon"></i><span>Фокус на Web3 и блокчейн-технологиях</span></div>',
                '<div class="flex items-start"><i class="fas fa-rocket text-blue-500 mt-1 mr-3 feature-icon"></i><span>Акселераторская программа для проектов-победителей</span></div>'
            ],
            badge: 'НОВОЕ',
            badgeColor: 'from-green-500 to-green-700'
        },
        'networking-forum': {
            title: 'Crypto Networking Forum',
            subtitle: 'Идеальная возможность для сотрудничества и развития проектов',
            date: '24 мая, 2025',
            mainImage: '../img/6.avif',
            description: [
                '<p class="mb-4">Crypto Networking Forum - это специальное мероприятие, предназначенное для установления профессиональных связей в криптоиндустрии. Здесь вы сможете познакомиться с лидерами отрасли, найти новых партнеров и обсудить инновационные идеи.</p>',
                '<p class="mb-4">В рамках форума проводятся различные форматы нетворкинг-мероприятий: структурированные B2B-встречи, неформальные кофе-брейки, а также тематические обсуждения. Это создает множество возможностей для презентации вашего проекта и поиска новых партнеров.</p>',
                '<p class="mb-4">Во время мероприятия создаются специальные платформы для активного взаимодействия инвесторов и владельцев стартапов. Наши профессиональные модераторы помогут вам установить наиболее эффективные контакты.</p>'
            ],
            features: [
                '<div class="flex items-start"><i class="fas fa-comments text-blue-500 mt-1 mr-3 feature-icon"></i><span>Структурированные B2B-встречи</span></div>',
                '<div class="flex items-start"><i class="fas fa-user-tie text-blue-500 mt-1 mr-3 feature-icon"></i><span>Специальная платформа для инвесторов и стартапов</span></div>',
                '<div class="flex items-start"><i class="fas fa-glass-cheers text-blue-500 mt-1 mr-3 feature-icon"></i><span>Премиум-коктейли и нетворкинг-прием</span></div>',
                '<div class="flex items-start"><i class="fas fa-file-signature text-blue-500 mt-1 mr-3 feature-icon"></i><span>Оформление соглашений на партнерской платформе</span></div>',
                '<div class="flex items-start"><i class="fas fa-id-badge text-blue-500 mt-1 mr-3 feature-icon"></i><span>Система умного обмена контактами</span></div>'
            ],
            badge: 'ТОП',
            badgeColor: 'from-indigo-500 to-indigo-700'
        }
    };
    
    // Функция для получения параметров URL
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        const results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
    
    // Загрузка данных о событии на основе параметра URL
    document.addEventListener('DOMContentLoaded', function() {
        const eventId = getUrlParameter('event');
        
        // Если параметр события отсутствует или недействителен, перенаправить на событие по умолчанию
        if (!eventId || !eventData[eventId]) {
            // Для демонстрационных целей, по умолчанию используется blockchain-summit, если параметр отсутствует
            const defaultEvent = eventData['blockchain-summit'];
            loadEventData(defaultEvent);
            
            // Загрузка похожих событий
            loadSimilarEvents('blockchain-summit');
        } else {
            loadEventData(eventData[eventId]);
            
            // Загрузка похожих событий, исключая текущее событие
            loadSimilarEvents(eventId);
        }
    });
    
    // Функция для загрузки данных о событии на страницу
    function loadEventData(event) {
        // Установка основной информации
        document.getElementById('eventTitle').textContent = event.title;
        document.getElementById('eventSubtitle').textContent = event.subtitle;
        document.getElementById('eventImage').src = event.mainImage;
        document.getElementById('eventImage').alt = event.title;
        document.getElementById('eventDate').textContent = event.date;
        
        // Установка описания
        const descriptionEl = document.getElementById('eventDescription');
        descriptionEl.innerHTML = '';
        event.description.forEach(para => {
            descriptionEl.innerHTML += para;
        });
        
        // Установка особенностей
        const featuresEl = document.getElementById('eventFeatures');
        featuresEl.innerHTML = '';
        event.features.forEach(feature => {
            const li = document.createElement('li');
            li.className = 'feature-item';
            li.innerHTML = feature;
            featuresEl.appendChild(li);
        });
        
        // Обновление заголовка страницы
        document.title = "CryptoFuture Summit - " + event.title;
    }
    
    // Функция для загрузки похожих событий
    function loadSimilarEvents(currentEventId) {
        const similarEventsEl = document.getElementById('similarEvents');
        similarEventsEl.innerHTML = '';
        
        // Получение всех ID событий, кроме текущего
        const eventIds = Object.keys(eventData).filter(id => id !== currentEventId);
        
        // Создание карточки для каждого похожего события
        eventIds.forEach(eventId => {
            const event = eventData[eventId];
            const eventCard = document.createElement('div');
            eventCard.className = 'event-card bg-blue-800/80 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform transition hover:-translate-y-2 border border-blue-700';
            
            eventCard.innerHTML = `
                <div class="relative">
                    <img src="${event.mainImage}" alt="${event.title}" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-60"></div>
                    <div class="badge bg-gradient-to-r ${event.badgeColor}">
                        ${event.badge}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 gradient-text">${event.title}</h3>
                    <p class="text-gray-300 mb-4">${event.subtitle}</p>
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-400">${event.date}</span>
                    </div>
                    <a href="?event=${eventId}" class="inline-block blue-button px-4 py-2 rounded-lg transition-colors flex items-center justify-center">
                        Подробнее
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            `;
            similarEventsEl.appendChild(eventCard);
        });
    }
    </script>
</body>
</html>