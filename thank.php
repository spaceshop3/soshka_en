<?php
    include './template_loader.php';
    include './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $targetFile = file_exists('w.php') ? 'w.php' : 'index.php';
    echo extractHeadSection($targetFile);
?>
<body style="background-color: #0a0827;" class="text-white">
<?php echo extractHeader($targetFile); ?>

<main>
  <div class="max-w-3xl mx-auto px-4 py-16 sm:px-6 lg:px-8 text-center">
    <div class="bg-indigo-900/80 backdrop-blur-sm p-8 rounded-xl border-2 border-blue-400 shadow-2xl relative">
      <!-- Decorative elements -->
      <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-red-500"></div>
      <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 via-purple-500 to-blue-500"></div>
      <div class="absolute -top-4 -left-4 w-12 h-12 bg-blue-400 rounded-full opacity-20 blur-lg"></div>
      <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-purple-400 rounded-full opacity-20 blur-lg"></div>
      
      <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-3xl shadow-lg border border-blue-300">
        <span class="text-blue-200 text-4xl">✦</span>
      </div>
      
      <h2 class="text-4xl font-bold text-blue-300 glow-text mb-4">Thank you for joining!</h2>
      
      <p class="text-lg text-blue-200 mb-6">
        Your subscription has been successfully processed.
      </p>
      
      <p class="text-gray-300 mb-8">
        Thank you for joining the Outer Plane community! Stay tuned for the latest updates, exclusive content, and special events. We'll keep you informed about new characters, gameplay features, and special in-game rewards for our subscribers.
      </p>
      
      <div class="bg-blue-900/80 p-6 rounded-lg mb-8 border border-blue-500">
        <div class="flex items-center justify-center mb-2">
          <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">✉</div>
          <div class="h-px w-20 bg-gradient-to-r from-blue-500 to-transparent mx-2"></div>
        </div>
        <p class="text-blue-300 font-semibold mb-2">Check your email inbox!</p>
        <p class="text-gray-300">We've sent you a confirmation email with more details about upcoming game features.</p>
        <div class="flex items-center justify-center mt-2">
          <div class="h-px w-20 bg-gradient-to-l from-blue-500 to-transparent mx-2"></div>
          <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">✦</div>
        </div>
      </div>
      
      <div class="relative inline-block">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-red-500 rounded-lg blur-sm opacity-50 transform -rotate-1"></div>
        <a href="index.php" class="relative inline-flex items-center bg-indigo-900 border-2 border-blue-400 hover:bg-indigo-800 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-xl">
          <span class="mr-2 text-blue-300">◀</span>
          Return to Homepage
        </a>
      </div>
    </div>
  </div>
</main>

<?php echo extractFooter($targetFile); ?>

<style>
  .glow-text {
    text-shadow: 0 0 10px #4fc3f7, 0 0 20px #4fc3f7, 0 0 30px #4fc3f7;
  }
</style>
</body>
</html>