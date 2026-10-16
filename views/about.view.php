<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- Tailwind via the Play CDN: fine for learning/demos, not for production -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

    <?php require "views/partials/nav.php"; ?>

  <!-- Mobile sidebar overlay -->
  <div id="backdrop" class="fixed inset-0 z-40 hidden bg-gray-900/60 lg:hidden" onclick="toggleSidebar()"></div>

  <!-- Content area -->
  <div class="content-area lg:pl-64">

    <!-- Top bar (mobile menu button lives here) -->
     <?php require "views/partials/mobile-nav.php"; ?>
    <?php require "views/partials/header.php"; ?>
    <!-- Main -->
    <main>
      
    </main>
  </div>

  <script>
    // Mobile sidebar toggle
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('-translate-x-full');
      document.getElementById('backdrop').classList.toggle('hidden');
    }
  </script>
</body>
</html>