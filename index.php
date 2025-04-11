<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outer Plane - Epic Mobile Adventure</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(21, 14, 56, 0.85), rgba(10, 8, 40, 0.9)), url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
        }
        .section-bg-dark {
            background-color: #0a0827;
            position: relative;
            overflow: hidden;
        }
        .section-bg-light {
            background-color: #151439;
            position: relative;
            overflow: hidden;
        }
        .section-bg-dark:before, .section-bg-light:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('./img/4.webp');
            background-size: 500px;
            opacity: 0.03;
            pointer-events: none;
        }
        .glow-text {
            text-shadow: 0 0 10px #4fc3f7, 0 0 20px #4fc3f7, 0 0 30px #4fc3f7;
        }
        .card-effect {
            border: 1px solid rgba(79, 195, 247, 0.3);
            box-shadow: 0 0 15px rgba(79, 195, 247, 0.2);
            transition: all 0.3s ease;
        }
        .card-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 25px rgba(79, 195, 247, 0.4);
        }
        .decoration-top {
            height: 4px;
            background: linear-gradient(90deg, #151439, #4fc3f7, #151439);
        }
        .decoration-bottom {
            height: 4px;
            background: linear-gradient(90deg, #151439, #f44336, #151439);
        }
        .star-decoration {
            position: relative;
        }
        .star-decoration:before, .star-decoration:after {
            content: '✦';
            font-size: 20px;
            color: #ffd700;
            position: absolute;
            opacity: 0.7;
        }
        .star-decoration:before {
            top: 10px;
            left: -20px;
        }
        .star-decoration:after {
            top: 10px;
            right: -20px;
        }
    </style>
</head>
<body class="bg-indigo-900 text-white">
    <div class="decoration-top"></div>
    
    <!-- Hero Section -->
    <section class="hero-bg min-h-screen flex items-center justify-center text-center px-4">
        <div class="container mx-auto">
            <div class="mb-6 star-decoration">
                <h1 class="text-5xl md:text-7xl font-bold mb-2 text-blue-300 glow-text">OUTER PLANE</h1>
                <div class="h-1 w-40 bg-yellow-400 mx-auto"></div>
            </div>
            <h2 class="text-3xl font-bold mb-6 text-yellow-400">Master the Pinnacle of Turn-Based Strategy</h2>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto">Skill Chain and Burst System - A new dimension of tactical combat</p>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6">
                <a href="https://play.google.com/store/apps/details?id=com.smilegate.outerplane.stove.google&pcampaignid=merch_published_cluster_promotion_battlestar_collection_new_games" class="flex items-center bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-3 px-6 rounded-lg transition duration-300">
                    <svg class="w-8 h-8 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.609 1.814L13.792 12 3.609 22.186c-.181-.081-.35-.189-.496-.336-.3-.3-.45-.698-.45-1.096V3.246c0-.398.15-.796.45-1.096.146-.147.315-.255.496-.336z" fill="#000"/>
                        <path d="M13.792 12L3.609 1.814 17.438 9.6 13.792 12z" fill="#000"/>
                        <path d="M17.438 9.6l-3.646 2.4 3.646 2.4 2.953-1.715c.727-.424.727-1.946 0-2.37L17.438 9.6z" fill="#000"/>
                        <path d="M13.792 12l3.646 2.4L3.609 22.186 13.792 12z" fill="#000"/>
                    </svg>
                    DOWNLOAD NOW
                </a>
                <a href="#game-info" class="bg-transparent hover:bg-gray-700 text-white font-semibold py-3 px-6 border border-white rounded-lg transition duration-300">
                    LEARN MORE
                </a>
            </div>
        </div>
    </section>

    <!-- Game Info Section 1 (Right aligned) -->
    <section id="game-info" class="section-bg-dark py-20 px-4">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-10 mb-10 md:mb-0">
                    <div class="pl-4 border-l-4 border-blue-400 mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold mb-2 text-blue-300">CHAIN ORDER</h2>
                        <div class="h-1 w-20 bg-red-400"></div>
                    </div>
                    <p class="text-lg mb-6 text-blue-100">Master the strategic depth of our innovative Chain Order system. Arrange your characters in the perfect sequence to unleash devastating combo attacks and create synergies between your team members.</p>
                    <p class="text-lg text-blue-100">Tactical planning is key - each character's position in the chain affects their abilities and powers, creating endless strategic possibilities.</p>
                    <div class="mt-8 flex">
                        <div class="px-4 py-2 bg-blue-900 bg-opacity-50 rounded-lg mr-4 border border-blue-400">
                            <span class="text-blue-300 font-bold">✧ Strategic</span>
                        </div>
                        <div class="px-4 py-2 bg-blue-900 bg-opacity-50 rounded-lg border border-blue-400">
                            <span class="text-blue-300 font-bold">✧ Deep</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg blur opacity-20"></div>
                        <img src="./img/1.webp" alt="Chain Order System" class="relative rounded-lg shadow-2xl w-full card-effect">
                        <div class="absolute top-0 right-0 bg-blue-500 px-3 py-1 text-xs text-white font-bold rounded-bl-lg">FEATURE</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Info Section 2 (Left aligned) -->
    <section class="section-bg-light py-20 px-4">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row-reverse items-center">
                <div class="md:w-1/2 md:pl-10 mb-10 md:mb-0">
                    <div class="pl-4 border-l-4 border-red-400 mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold mb-2 text-red-300">CHAIN EFFECT</h2>
                        <div class="h-1 w-20 bg-blue-400"></div>
                    </div>
                    <p class="text-lg mb-6 text-blue-100">Experience the thrill of our Chain Effect system where each action creates powerful reactions. Build up combos to unleash devastating burst attacks that can turn the tide of battle in an instant.</p>
                    <p class="text-lg text-blue-100">Every character contributes unique chain effects - master their combinations to discover powerful synergies and unleash your team's full potential.</p>
                    <div class="mt-8 p-4 bg-red-900 bg-opacity-20 rounded-lg border border-red-400">
                        <p class="text-sm text-red-200">❯ Chain multiple character skills to unlock special Burst Skills</p>
                        <p class="text-sm text-red-200">❯ Strategic team building amplifies your Chain Effects</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-purple-500 rounded-lg blur opacity-20"></div>
                        <img src="./img/4.webp" alt="Chain Effect System" class="relative rounded-lg shadow-2xl w-full card-effect">
                        <div class="absolute -bottom-3 -left-3 h-16 w-16 rounded-full border-4 border-red-400 flex items-center justify-center bg-indigo-900 text-xl font-bold text-red-400">NEW</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Info Section 3 (Right aligned, no image) -->
    <section class="section-bg-dark py-20 px-4">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/3 md:pr-10">
                    <div class="pl-4 border-l-4 border-purple-400 mb-8 star-decoration">
                        <h2 class="text-3xl md:text-4xl font-bold mb-2 text-purple-300">COMPANIONS</h2>
                        <div class="h-1 w-20 bg-yellow-400"></div>
                    </div>
                    <p class="text-lg mb-6 text-blue-100">Collect and bond with unique anime-style characters, each with their own personalities, backstories, and special abilities. Build your dream team from a diverse roster of heroes and heroines.</p>
                    <p class="text-lg mb-6 text-blue-100">Every character fills a specialized role - Companion, Composition, or Finisher - creating endless strategic combinations for you to explore and master.</p>
                    <p class="text-lg text-blue-100">Strengthen your bonds with characters through the story to unlock their true potential and discover powerful hidden abilities.</p>
                    
                    <div class="grid grid-cols-3 gap-4 mt-10">
                        <div class="bg-purple-900 bg-opacity-30 p-3 rounded-lg border border-purple-400 text-center">
                            <div class="text-purple-300 font-bold mb-1">★ Companion</div>
                            <div class="text-xs text-purple-200">Support & Control</div>
                        </div>
                        <div class="bg-blue-900 bg-opacity-30 p-3 rounded-lg border border-blue-400 text-center">
                            <div class="text-blue-300 font-bold mb-1">★ Composition</div>
                            <div class="text-xs text-blue-200">Strategy & Combo</div>
                        </div>
                        <div class="bg-red-900 bg-opacity-30 p-3 rounded-lg border border-red-400 text-center">
                            <div class="text-red-300 font-bold mb-1">★ Finisher</div>
                            <div class="text-xs text-red-200">Damage & Burst</div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <div class="bg-gradient-to-br from-purple-900 to-indigo-900 p-6 rounded-lg border border-purple-400 card-effect">
                        <div class="flex items-center justify-center mb-4">
                            <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white">✦</div>
                            <div class="h-px w-20 bg-gradient-to-r from-purple-500 to-transparent mx-2"></div>
                        </div>
                        <p class="text-purple-100 text-xl font-bold">"A masterful blend of strategy and character-driven gameplay that keeps you coming back for more!"</p>
                        <div class="flex items-center justify-center mt-4">
                            <div class="h-px w-20 bg-gradient-to-l from-purple-500 to-transparent mx-2"></div>
                            <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white">✦</div>
                        </div>
                        <p class="text-purple-300 text-right mt-4 text-sm">- MobileGamePro</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Info Section 4 (Left aligned, no image) -->
    <section class="section-bg-light py-20 px-4">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row-reverse items-center">
                <div class="md:w-full">
                    <div class="text-center mb-10 star-decoration">
                        <div class="inline-block pl-4 border-b-4 border-yellow-400 mb-2">
                            <h2 class="text-3xl md:text-4xl font-bold mb-2 text-yellow-300">SKILL SYSTEM</h2>
                        </div>
                    </div>
                    <p class="text-lg mb-10 text-center max-w-4xl mx-auto text-blue-100">Master an extensive array of skills and abilities for each character. Customize your team's skill loadout to create the perfect strategy for every encounter.</p>
                    
                    <div class="relative mx-auto max-w-5xl mb-12">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-red-500 rounded-xl blur opacity-15"></div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-3 relative">
                            <div class="bg-gradient-to-b from-blue-900 to-blue-800 p-4 rounded-lg border border-blue-500 card-effect">
                                <div class="mb-4 flex justify-center">
                                    <div class="w-16 h-16 rounded-full bg-blue-700 flex items-center justify-center">
                                        <span class="text-blue-200 text-2xl">◆</span>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-blue-300 text-center">Support</h3>
                                <p class="text-sm text-blue-200 text-center">Enhance your allies with powerful buffs and healing abilities</p>
                            </div>
                            <div class="bg-gradient-to-b from-indigo-900 to-indigo-800 p-4 rounded-lg border border-indigo-500 card-effect">
                                <div class="mb-4 flex justify-center">
                                    <div class="w-16 h-16 rounded-full bg-indigo-700 flex items-center justify-center">
                                        <span class="text-indigo-200 text-2xl">❖</span>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-indigo-300 text-center">Tactical</h3>
                                <p class="text-sm text-indigo-200 text-center">Control the battlefield and manipulate enemy positions</p>
                            </div>
                            <div class="bg-gradient-to-b from-purple-900 to-purple-800 p-4 rounded-lg border border-purple-500 card-effect">
                                <div class="mb-4 flex justify-center">
                                    <div class="w-16 h-16 rounded-full bg-purple-700 flex items-center justify-center">
                                        <span class="text-purple-200 text-2xl">✧</span>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-purple-300 text-center">Combo</h3>
                                <p class="text-sm text-purple-200 text-center">Build skill chains for devastating combination attacks</p>
                            </div>
                            <div class="bg-gradient-to-b from-red-900 to-red-800 p-4 rounded-lg border border-red-500 card-effect">
                                <div class="mb-4 flex justify-center">
                                    <div class="w-16 h-16 rounded-full bg-red-700 flex items-center justify-center">
                                        <span class="text-red-200 text-2xl">✦</span>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-red-300 text-center">Burst</h3>
                                <p class="text-sm text-red-200 text-center">Unleash ultimate abilities to turn the tide of battle</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-center">
                        <div class="bg-yellow-900 bg-opacity-20 p-4 rounded-lg border border-yellow-400 max-w-2xl">
                            <div class="flex justify-between mb-2">
                                <span class="text-yellow-300 font-bold">★ GAME TIP</span>
                                <span class="text-yellow-300">✧✧✧</span>
                            </div>
                            <p class="text-sm text-yellow-200">Mix and match different skill types within your team to create powerful synergies! Support skills can amplify Burst damage, while Tactical skills can set up perfect opportunities for devastating Combo chains.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
 
<!-- Video Section -->
<section style="background-color: #0a0827;" class="py-20 px-4">
    <div class="container mx-auto text-center">
        <div class="mb-10">
            <h2 class="text-4xl md:text-5xl font-bold text-blue-300 glow-text inline-block relative px-10">
                <span class="text-yellow-400 absolute left-0 top-1/2 transform -translate-y-1/2">✦</span>
                GAMEPLAY SHOWCASE
                <span class="text-yellow-400 absolute right-0 top-1/2 transform -translate-y-1/2">✦</span>
            </h2>
            <div class="h-1 w-80 bg-gradient-to-r from-blue-500 via-purple-500 to-blue-500 mx-auto mt-4"></div>
            <div class="h-1 w-40 bg-gradient-to-r from-red-500 via-purple-500 to-red-500 mx-auto mt-1"></div>
        </div>
        
        <div class="max-w-4xl mx-auto mb-12">
            <div class="h-1 w-full bg-gradient-to-r from-blue-500 via-red-500 to-blue-500"></div>
            <div class="w-full relative" style="padding-top: 56.25%;">
                <iframe 
                    class="absolute inset-0 w-full h-full"
                    src="https://www.youtube.com/embed/gYFFWY3xaXA" 
                    title="Outer Plane Gameplay Video"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="h-1 w-full bg-gradient-to-r from-blue-500 via-red-500 to-blue-500"></div>
        </div>
        
        <p class="text-lg text-blue-100 mb-10 max-w-3xl mx-auto">
            Watch the gameplay trailer to experience the stunning anime visuals, strategic turn-based combat, and master the Skill Chain and Burst System!
        </p>
        
        <div class="flex flex-col md:flex-row gap-6 justify-center max-w-3xl mx-auto">
            <div class="flex-1 bg-blue-900 bg-opacity-20 py-3 px-5 rounded-lg border border-blue-500">
                <p class="text-blue-200">✧ Turn-Based Combat</p>
            </div>
            <div class="flex-1 bg-purple-900 bg-opacity-20 py-3 px-5 rounded-lg border border-purple-500">
                <p class="text-purple-200">✧ Chain Skills</p>
            </div>
            <div class="flex-1 bg-red-900 bg-opacity-20 py-3 px-5 rounded-lg border border-red-500">
                <p class="text-red-200">✧ Burst Attacks</p>
            </div>
        </div>
    </div>
</section>

    <!-- Reviews Section -->
    <section class="section-bg-light py-20 px-4">
        <div class="container mx-auto text-center">
            <div class="relative inline-block mb-10">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 blur opacity-30"></div>
                <h2 class="relative text-3xl md:text-4xl font-bold mb-2 text-yellow-300 star-decoration">PLAYER REVIEWS</h2>
                <div class="relative h-1 w-40 bg-gradient-to-r from-transparent via-yellow-400 to-transparent mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-b from-blue-900 to-indigo-900 p-1 rounded-lg card-effect">
                    <div class="bg-indigo-900 bg-opacity-50 p-6 rounded-lg h-full flex flex-col">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex">
                                <span class="text-yellow-400 text-lg">★★★★★</span>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center">
                                <span class="text-blue-200 font-bold">AT</span>
                            </div>
                        </div>
                        <p class="mb-4 text-blue-100 flex-grow">"The skill chain system is revolutionary! I love how each character has unique abilities that can be combined for devastating attacks. The anime art style is absolutely gorgeous!"</p>
                        <div class="border-t border-blue-700 pt-4">
                            <p class="font-semibold text-blue-300">- Alex Thompson</p>
                            <div class="text-xs text-blue-400 mt-1">Chain Master • 250+ hours</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-b from-purple-900 to-indigo-900 p-1 rounded-lg card-effect">
                    <div class="bg-indigo-900 bg-opacity-50 p-6 rounded-lg h-full flex flex-col">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex">
                                <span class="text-yellow-400 text-lg">★★★★★</span>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-purple-800 flex items-center justify-center">
                                <span class="text-purple-200 font-bold">SJ</span>
                            </div>
                        </div>
                        <p class="mb-4 text-purple-100 flex-grow">"As a strategy game fan, I'm blown away by the depth of the combat system. The chain and burst mechanics add layers of strategy that keep every battle fresh and exciting. Love the anime characters too!"</p>
                        <div class="border-t border-purple-700 pt-4">
                            <p class="font-semibold text-purple-300">- Sarah Johnson</p>
                            <div class="text-xs text-purple-400 mt-1">Tactical Genius • 180+ hours</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-b from-red-900 to-indigo-900 p-1 rounded-lg card-effect">
                    <div class="bg-indigo-900 bg-opacity-50 p-6 rounded-lg h-full flex flex-col">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex">
                                <span class="text-yellow-400 text-lg">★★★★★</span>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-red-800 flex items-center justify-center">
                                <span class="text-red-200 font-bold">MR</span>
                            </div>
                        </div>
                        <p class="mb-4 text-red-100 flex-grow">"I've played many turn-based games, but the Skill Chain and Burst System in Outer Plane is something special. The strategic combinations and gorgeous anime visuals make this a must-play for any RPG fan!"</p>
                        <div class="border-t border-red-700 pt-4">
                            <p class="font-semibold text-red-300">- Michael Rodriguez</p>
                            <div class="text-xs text-red-400 mt-1">Finisher Expert • 320+ hours</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 flex justify-center">
                <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-red-500 p-1 rounded-lg">
                    <div class="bg-indigo-900 px-8 py-4 rounded-lg">
                        <p class="text-lg text-white">Join over <span class="font-bold text-yellow-300">2 million</span> players worldwide!</p>
                        <div class="flex justify-center mt-4 space-x-4">
                            <div class="bg-blue-800 bg-opacity-50 px-4 py-2 rounded-lg">
                                <span class="text-blue-300 text-sm">4.9</span>
                                <span class="text-yellow-400 text-xs ml-1">★★★★★</span>
                            </div>
                            <div class="bg-green-800 bg-opacity-50 px-4 py-2 rounded-lg">
                                <span class="text-green-300 text-sm">Top 10</span>
                                <span class="text-green-200 text-xs ml-1">Strategy Games</span>
                            </div>
                            <div class="bg-purple-800 bg-opacity-50 px-4 py-2 rounded-lg">
                                <span class="text-purple-300 text-sm">Editor's</span>
                                <span class="text-purple-200 text-xs ml-1">Choice</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="section-bg-dark py-20 px-4">
        <div class="container mx-auto max-w-3xl">
            <div class="text-center mb-8 star-decoration">
                <h2 class="text-3xl md:text-4xl font-bold mb-2 text-blue-300 glow-text">JOIN OUR COMMUNITY</h2>
                <div class="h-1 w-32 bg-gradient-to-r from-transparent via-blue-400 to-transparent mx-auto"></div>
            </div>
            <p class="text-lg mb-8 text-center text-blue-100">Subscribe to our newsletter for the latest game updates, exclusive character releases, and special event invitations.</p>
            
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-red-500 rounded-lg blur opacity-20"></div>
                <form action="thank.php" method="post" class="relative bg-gradient-to-b from-indigo-900 to-indigo-800 p-1 rounded-lg">
                    <div class="bg-indigo-900 bg-opacity-50 p-8 rounded-lg">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="bg-blue-500 text-white px-4 py-1 rounded-full text-sm">
                                <span class="text-xs">✦</span> BETA TESTER ACCESS <span class="text-xs">✦</span>
                            </div>
                        </div>
                        
                        <div class="mb-6 mt-4">
                            <label for="name" class="block text-sm font-medium mb-2 text-blue-300">Your Name</label>
                            <div class="relative">
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 bg-indigo-800 border border-blue-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-white" required>
                                <div class="absolute top-0 right-0 h-full w-12 flex items-center justify-center text-blue-400">
                                    <span class="text-lg">✧</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium mb-2 text-blue-300">Your Email</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 bg-indigo-800 border border-blue-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-white" required>
                                <div class="absolute top-0 right-0 h-full w-12 flex items-center justify-center text-blue-400">
                                    <span class="text-lg">✉</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-8">
                            <label class="flex items-start">
                                <div class="relative">
                                    <input type="checkbox" name="geo_consent" class=" absolute h-6 w-6" required>
                                    <div class="bg-indigo-800 border border-blue-500 rounded w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-300">
                                        <span class="text-blue-400 checked:opacity-100">✓</span>
                                    </div>
                                </div>
                                <span class="text-sm text-blue-100">I consent to receive newsletters based on my location. This field is required.</span>
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold py-3 rounded-lg transition duration-300 transform hover:scale-105">
                            <span class="text-white text-lg">JOIN THE ADVENTURE</span>
                        </button>
                        
                        <div class="mt-4 text-center">
                            <p class="text-xs text-blue-200">Receive a free character when you subscribe!</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-indigo-900 via-purple-800 to-indigo-900 text-white">
        <div class="container mx-auto text-center relative">
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
                <div class="absolute top-10 left-10 w-20 h-20 bg-blue-500 rounded-full blur-3xl opacity-20"></div>
                <div class="absolute bottom-10 right-10 w-20 h-20 bg-purple-500 rounded-full blur-3xl opacity-20"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-red-500 rounded-full blur-3xl opacity-10"></div>
            </div>
            
            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold mb-2 text-blue-300 glow-text">READY TO MASTER THE CHAIN?</h2>
                <div class="h-1 w-40 bg-gradient-to-r from-transparent via-blue-400 to-transparent mx-auto mb-6"></div>
                <p class="text-xl mb-10 max-w-3xl mx-auto text-blue-100">Download Outer Plane now and experience the revolutionary Skill Chain and Burst System. Create your ultimate team and dominate turn-based combat!</p>
                
                <div class="relative inline-block">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-red-500 rounded-lg blur-sm opacity-50 transform -rotate-1"></div>
                    <a href="https://play.google.com/store/apps/details?id=com.smilegate.outerplane.stove.google&pcampaignid=merch_published_cluster_promotion_battlestar_collection_new_games" class="relative inline-flex items-center bg-indigo-900 border-2 border-blue-400 hover:bg-indigo-800 text-white font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <span class="mr-3 text-blue-300 text-2xl">▶</span>
                        <span class="flex flex-col items-start">
                            <span class="text-xs mb-1 text-blue-300">GET IT ON</span>
                            <span class="text-lg">GOOGLE PLAY</span>
                        </span>
                    </a>
                </div>
                
                <div class="mt-10 flex justify-center">
                    <div class="grid grid-cols-3 gap-4 max-w-lg">
                        <div class="bg-blue-900 bg-opacity-30 p-2 rounded-lg border border-blue-500">
                            <p class="text-xs text-blue-200">Free to Play</p>
                        </div>
                        <div class="bg-purple-900 bg-opacity-30 p-2 rounded-lg border border-purple-500">
                            <p class="text-xs text-purple-200">Online PvP</p>
                        </div>
                        <div class="bg-red-900 bg-opacity-30 p-2 rounded-lg border border-red-500">
                            <p class="text-xs text-red-200">Regular Updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-900 text-white py-10 px-4">
        <div class="decoration-top"></div>
        <div class="decoration-bottom"></div>
        
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white mr-2">
                            <span class="text-xs">✦</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-300 glow-text">OUTER PLANE</h3>
                    </div>
                    <p class="mb-4 text-blue-100">Experience the pinnacle of turn-based strategy with our innovative Skill Chain and Burst System. Collect anime characters and master strategic combat!</p>
                    <a href="https://play.google.com/store/apps/details?id=com.smilegate.outerplane.stove.google&pcampaignid=merch_published_cluster_promotion_battlestar_collection_new_games" class="inline-flex items-center text-blue-300 hover:text-blue-200 border-b border-blue-500">
                        <span class="mr-1">Download Now</span>
                        <span>→</span>
                    </a>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-purple-300">LEGAL</h3>
                    <ul class="space-y-3">
                        <li><a href="privacy_policy.php" class="text-blue-100 hover:text-blue-300 flex items-center">
                            <span class="text-purple-400 mr-2">❯</span>Privacy Policy
                        </a></li>
                        <li><a href="cookies_policy.php" class="text-blue-100 hover:text-blue-300 flex items-center">
                            <span class="text-purple-400 mr-2">❯</span>Cookies Policy
                        </a></li>
                        <li><a href="terms_of_service.php" class="text-blue-100 hover:text-blue-300 flex items-center">
                            <span class="text-purple-400 mr-2">❯</span>Terms of Service
                        </a></li>
                        <li><a href="refund_policy.php" class="text-blue-100 hover:text-blue-300 flex items-center">
                            <span class="text-purple-400 mr-2">❯</span>Refund Policy
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-red-300">CONTACT</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2 mt-1">✉</span>
                            <span class="text-blue-100">Email: goldtechsummit@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2 mt-1">☎</span>
                            <span class="text-blue-100">Phone: +61 7 5661 2233</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2 mt-1">⌂</span>
                            <span class="text-blue-100">Address: 10 Cavill Avenue, Gold Coast, QLD 4217, Australia</span>
                        </li>
                    </ul>
                </div>
              
            </div>
            
            <div class="mt-10 pt-6 border-t border-indigo-800 text-center relative">
                <div class="inline-block mb-4">
                    <div class="flex items-center justify-center space-x-4">
                        <div class="px-4 py-1 bg-blue-900 bg-opacity-50 rounded-lg text-xs border border-blue-500">
                            <span class="text-blue-300">FOLLOW</span>
                        </div>
                        <div class="px-4 py-1 bg-purple-900 bg-opacity-50 rounded-lg text-xs border border-purple-500">
                            <span class="text-purple-300">PLAY</span>
                        </div>
                        <div class="px-4 py-1 bg-red-900 bg-opacity-50 rounded-lg text-xs border border-red-500">
                            <span class="text-red-300">MASTER</span>
                        </div>
                    </div>
                </div>
                <p class="text-blue-200">&copy; 2025 Outer Plane. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <div class="decoration-bottom"></div>
</body>
</html>