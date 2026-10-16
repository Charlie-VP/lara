  <!-- Sidebar -->
  <aside id="sidebar"
         class="fixed inset-y-0 left-0 z-50 flex w-64 -translate-x-full flex-col bg-gray-900 transition-transform duration-200 lg:translate-x-0">

    <!-- Logo -->
    <div class="flex h-16 shrink-0 items-center gap-3 px-6">
      <img class="h-8 w-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
      <span class="text-sm font-semibold text-white">Your Company</span>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 space-y-1 overflow-y-auto px-3 py-4">
      <!-- Active link: bg-gray-800 text-white. Inactive: text-gray-300 hover:bg-gray-800 hover:text-white -->
      <a href="/" aria-current="page"
         class="<?= isurl('/') ? 'bg-gray-800 text-white ' : 'text-gray-300 hover:bg-gray-800 hover:text-white ' ?> group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium">
        <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955a1.126 1.126 0 0 1 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
        Home
      </a>
      <a href="/about"
         class="<?= isurl('/about') ? 'bg-gray-800 text-white ' : 'text-gray-300 hover:bg-gray-800 hover:text-white ' ?> group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium">
        <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/></svg>
        About Us
      </a>
      <a href="/contact"
         class="<?= isurl('/contact') ? 'bg-gray-800 text-white ' : 'text-gray-300 hover:bg-gray-800 hover:text-white ' ?> group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium">
        <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
        Contact
      </a>
    </nav>

    <!-- User -->
    <div class="shrink-0 border-t border-gray-800 p-4">
      <div class="flex items-center gap-3">
        <img class="h-9 w-9 rounded-full bg-gray-700"
             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="min-w-0">
          <p class="truncate text-sm font-medium text-white">Tom Cook</p>
          <p class="truncate text-xs text-gray-400">tom@example.com</p>
        </div>
      </div>
    </div>
  </aside>