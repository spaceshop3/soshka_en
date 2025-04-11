<?php
    include './template_loader.php';
    include './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $targetFile = file_exists('w.php') ? 'w.php' : 'index.php';
    echo extractHeadSection($targetFile); // replaced
?>
<body>
<?php echo extractHeader($targetFile); ?>

<main>
    <div class="max-w-3xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Cookie Policy</h1>
        <p class="text-sm text-gray-600 mb-6">
            <strong>Last Updated:</strong> November 14, 2024
        </p>

        <p class="mb-4">
            On <strong><?php echo $tel; ?></strong>, we use cookies and similar technologies to enhance user experience, personalize content and ads, provide social media features, and analyze traffic to our site. This policy explains what cookies are, how we use them, and how you can manage them.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">1. Consent and Settings</h2>
        <p class="mb-4">
            When you first visit our website, you will be asked to consent to the use of cookies. You can change your cookie preferences at any time through the relevant section on our site.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">2. Third-Party Cookies</h2>
        <p class="mb-4">
            We use third-party cookies such as Google Analytics and Google Ads. These help us analyze website performance and deliver personalized ads. Such cookies may also track your activity on other websites.
        </p>

        <p class="mb-4">
            To learn more about what data Google collects and how it is used, visit: 
            <a href="https://policies.google.com/technologies/ads" class="text-blue-600 hover:text-blue-800" target="_blank" rel="noopener noreferrer">Google Ads and Privacy</a>.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">3. Managing or Disabling Cookies</h2>
        <p class="mb-4">
            You can block some or all cookies via your browser settings. Additionally, you can disable personalized advertising using this link: 
            <a href="https://adssettings.google.com/authenticated" class="text-blue-600 hover:text-blue-800" target="_blank" rel="noopener noreferrer">Google Ad Settings</a>.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">4. Changes to This Policy</h2>
        <p class="mb-4">
            We reserve the right to update this cookie policy at any time. Users are encouraged to review this page periodically.
        </p>
    </div>
</main>

<?php echo extractFooter($targetFile); ?>
</body>
</html>
