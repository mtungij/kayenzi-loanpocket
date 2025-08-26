<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angalizo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <!-- Modal -->
  <div x-data="{ open: true }" x-show="open" 
       class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
       x-transition>
    
    <div class="bg-white rounded-2xl shadow-xl max-w-lg w-full p-6 relative">
      
      <!-- Close button -->
      <button @click="open=false" 
              class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
        ✖
      </button>

      <!-- Icon -->
      <div class="flex justify-center mb-4">
        <?php if ($type == 'penalty'): ?>
          <div class="bg-red-100 text-red-600 rounded-full p-4">⚠️</div>
        <?php elseif ($type == 'loan'): ?>
          <div class="bg-yellow-100 text-yellow-600 rounded-full p-4">⏳</div>
        <?php else: ?>
          <div class="bg-blue-100 text-blue-600 rounded-full p-4">ℹ️</div>
        <?php endif; ?>
      </div>

      <!-- Title -->
      <h2 class="text-xl sm:text-2xl font-bold text-center mb-2 text-gray-800">
        <?php if ($type == 'penalty'): ?>
          Angalizo la Faini
        <?php elseif ($type == 'loan'): ?>
          Angalizo la Mkopo
        <?php else: ?>
          Taarifa
        <?php endif; ?>
      </h2>

      <!-- Message -->
      <p class="text-gray-700 text-center text-base leading-relaxed mb-6">
        <?= $message ?>
      </p>

      <!-- Button -->
      <div class="flex justify-center">
        <a href="<?= base_url('oficer/loan_application'); ?>"
           class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow transition duration-200">
          Rudi
        </a>
      </div>
    </div>
  </div>

</body>
</html>
