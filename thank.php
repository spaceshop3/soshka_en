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
<body class="bg-blue-900 text-white">
<?php echo extractHeader($targetFile); ?>
<main>
<div class="max-w-3xl mx-auto px-4 py-16 sm:px-6 lg:px-8 text-center">
  <div class="bg-blue-800/80 backdrop-blur-sm p-8 rounded-xl border-2 border-blue-500 shadow-2xl relative">
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-indigo-500"></div>
    <div class="absolute -top-4 -left-4 w-12 h-12 bg-blue-100 rounded-full opacity-20"></div>
    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-indigo-100 rounded-full opacity-20"></div>

    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-3xl shadow-lg">
      🚀
    </div>
    <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400 mb-4">Thank you for registering!</h2>
    <p class="text-lg text-blue-300 mb-6">
      Your request has been successfully processed.
    </p>
    <p class="text-gray-300 mb-8">
      Thank you for choosing to participate in the CryptoFuture Summit. Registration details and event information have been sent to your email address. If you have any questions or need additional information, feel free to contact our support team.
    </p>
    <div class="bg-blue-700/80 p-4 rounded-lg mb-8">
      <p class="text-blue-300 font-semibold mb-2">Your registration details are ready!</p>
      <p class="text-gray-300">Check your email for more information about participating in the event.</p>
    </div>
    <a href="index.php" class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-semibold rounded-full hover:shadow-lg transition-all transform hover:scale-105">
      Return to Homepage
    </a>
  </div>
</div>
</main>

<?php echo extractFooter($targetFile); ?>
</body>
</html>
