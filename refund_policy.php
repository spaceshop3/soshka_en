<?php
    include './template_loader.php';
    include './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $targetFile = file_exists('w.php') ? 'w.php' : 'index.php';
    echo extractHeadSection($targetFile); // modified
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
  <strong><?php echo $siteName; ?></strong> (hereinafter referred to as “we”, “our” or “the site”) respects and protects the privacy of its users. This privacy policy explains how we collect, store, and protect personal data collected from you.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">1. Data We Collect</h2>
<h3 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1.1 Personal Data</h3>
<p class="mb-4">
  We may collect the following information provided by you when registering, subscribing to newsletters, or using contact forms:
</p>
<ul class="list-disc list-inside mb-4">
  <li>Full name</li>
  <li>Email address</li>
  <li>Phone number</li>
  <li>Postal address</li>
  <li>Payment details (if a product or service is purchased)</li>
  <li>Any other voluntarily provided information</li>
</ul>

<h3 class="text-xl font-semibold text-gray-800 mt-6 mb-2">1.2 Usage and Advertising Data</h3>
<p class="mb-4">
  We use tools such as Google Ads and Google Analytics. These tools help us collect data about visitors to the site. This data may include:
</p>
<ul class="list-disc list-inside mb-4">
  <li>IP address</li>
  <li>Browser type and version</li>
  <li>Pages viewed</li>
  <li>Date and time of visit</li>
  <li>Time spent on the page</li>
  <li>Ad clicks and conversions</li>
  <li>Other statistical data</li>
</ul>

<p class="mb-4">
  To learn more about how Google uses data, visit the <a href="https://policies.google.com/technologies/ads" class="text-blue-600 hover:text-blue-800">Google Privacy Policy</a> page.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">2. Consent and Privacy Settings</h2>
<p class="mb-4">
  When you visit our site, you will be offered the option to consent to or decline the collection of cookies and advertising data. You can change your cookie settings at any time.
</p>

<p class="mb-4">
  You can disable personalized Google ads via this link:
  <a href="https://adssettings.google.com/authenticated" class="text-blue-600 hover:text-blue-800">Google Ads Settings</a>.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">3. Children’s Privacy</h2>
<p class="mb-4">
  Our site is not intended for children under the age of 16 without the consent of a parent or guardian. If you are a parent or guardian and you notice that your child has submitted personal data to us — please contact us and we will delete it.
</p>

<h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">4. Changes to the Policy</h2>
<p class="mb-4">
  We reserve the right to change this policy at any time. Any updates will be posted on this page. Users are encouraged to review this page regularly.
</p>
</div>
</main>

<?php echo extractFooter($targetFile); ?>

</body>
</html>
