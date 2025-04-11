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
  <strong>Last updated:</strong> November 14, 2024
</p>
<p class="mb-4">
  <strong><?php echo $siteName; ?></strong> (hereinafter referred to as "we", "our" or "the website") respects and is committed to protecting the privacy of our users. This Privacy Policy explains how we collect, use, store, and protect the personal data you provide to us.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">1. Data We Collect</h2>
<h3 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1.1 Personal Data</h3>
<p class="mb-4">
  We may collect data voluntarily provided through registration forms, newsletter subscriptions, contact forms, and other means. This data may include:
</p>
<ul class="list-disc list-inside mb-4">
  <li>Full name</li>
  <li>Email address</li>
  <li>Phone number</li>
  <li>Residential address</li>
  <li>Payment information (if required to purchase a product or service)</li>
  <li>Any other information you provide</li>
</ul>

<h3 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1.2 Usage and Advertising Data</h3>
<p class="mb-4">
  We collect information about your interaction with our website using tools like Google Ads and Google Analytics. This data may include:
</p>
<ul class="list-disc list-inside mb-4">
  <li>IP address</li>
  <li>Browser type and version</li>
  <li>Pages visited</li>
  <li>Date and time of access</li>
  <li>Time spent on pages</li>
  <li>Ad clicks and conversions</li>
  <li>Other statistical data</li>
</ul>

<p class="mb-4">
  For more information on how Google uses data, please refer to the <a href="https://policies.google.com/technologies/ads" class="text-blue-600 hover:text-blue-800">Google Privacy Policy</a>.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">2. Consent and Privacy Settings</h2>
<p class="mb-4">
  When visiting our site, you will be given the option to consent to or reject the use of cookies and data collection for advertising purposes. You can change your cookie settings at any time.
</p>

<p class="mb-4">
  You can disable personalized ads via the following link: <a href="https://adssettings.google.com/authenticated" class="text-blue-600 hover:text-blue-800">Google Ad Settings</a>.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">3. Children's Privacy</h2>
<p class="mb-4">
  This website is not intended for children under the age of 16 without the consent of a parent or guardian. We do not knowingly collect personal data from children under this age. If you are a parent or guardian and you believe your child has provided us with personal information, please contact us and we will delete it.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">4. Changes to This Policy</h2>
<p class="mb-4">
  We reserve the right to update this Privacy Policy at any time. We encourage you to review this page periodically to stay informed about any changes.
</p>
</div>
</main>

<?php echo extractFooter($targetFile); ?>
</body>
</html>
