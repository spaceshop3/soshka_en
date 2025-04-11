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

<body>
<?php echo extractHeader($targetFile); ?>

<main>
  <div class="max-w-3xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">Privacy Policy</h1>
    <p class="text-sm text-gray-600 mb-6">
      <strong>Last Updated:</strong> November 14, 2024
    </p>
    <p class="mb-4">
      <strong><?php echo $siteName; ?></strong> (hereinafter referred to as "we", "our", or "the site") respects the privacy of our users and is committed to protecting it. This Privacy Policy explains how your personal data is collected, used, stored, and protected.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">1. Data We Collect</h2>
    <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1.1 Personal Data</h3>
    <p class="mb-4">
      We may collect information you voluntarily provide through registration forms, newsletter subscriptions, contact forms, and other tools. This information may include:
    </p>
    <ul class="list-disc list-inside mb-4">
      <li>Full Name</li>
      <li>Email Address</li>
      <li>Phone Number</li>
      <li>Address</li>
      <li>Payment Information (when purchasing a product or service)</li>
      <li>Any other information you provide</li>
    </ul>

    <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1.2 Usage and Advertising Data</h3>
    <p class="mb-4">
      We use tools like Google Ads and Google Analytics that collect data on how you use our website. This data may include:
    </p>
    <ul class="list-disc list-inside mb-4">
      <li>IP Address</li>
      <li>Browser type and version</li>
      <li>Pages viewed</li>
      <li>Date and time of access</li>
      <li>Time spent on the site</li>
      <li>Ad clicks and conversions</li>
      <li>Other statistical data</li>
    </ul>

    <p class="mb-4">
      For more information about how Google uses the collected data, please visit:  
      <a href="https://policies.google.com/technologies/ads" class="text-blue-600 hover:text-blue-800">Google Privacy Policy</a>.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">2. Consent and Privacy Settings</h2>
    <p class="mb-4">
      Upon visiting our site, you will be asked to accept the use of cookies and data collection for advertising purposes. You may change your consent at any time through your cookie settings.
    </p>

    <p class="mb-4">
      You can also disable personalized ads using the following link:  
      <a href="https://adssettings.google.com/authenticated" class="text-blue-600 hover:text-blue-800">Google Ads Settings</a>.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">3. Children's Privacy</h2>
    <p class="mb-4">
      Our website is not intended for children under the age of 16 without parental or guardian consent. We do not knowingly collect personal information from children in this age group. If you are a parent or guardian and believe your child has provided personal information — please contact us and we will delete the data.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">4. Changes to This Policy</h2>
    <p class="mb-4">
      We reserve the right to update this Privacy Policy at any time to reflect changes in our practices. Users are encouraged to review this page regularly.
    </p>
  </div>
</main>

<?php echo extractFooter($targetFile); ?>

</body>
</html>
