<!-- Top bar (mobile menu button lives here) -->
    <div class="sticky top-0 z-30 flex h-16 items-center gap-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:px-6 lg:px-8">
      <button type="button" onclick="toggleSidebar()" class="-m-2 p-2 text-gray-700 lg:hidden" aria-label="Open sidebar">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
      </button>
      <div class="h-6 w-px bg-gray-200 lg:hidden"></div>

      <div class="flex flex-1 items-center justify-between gap-4">
        <input type="search" placeholder="Search"
               class="block w-full max-w-xs rounded-md border-0 bg-gray-100 px-3 py-1.5 text-sm text-gray-900 placeholder:text-gray-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-600">
        <button type="button" class="rounded-full p-1.5 text-gray-400 hover:text-gray-600" aria-label="Notifications">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"/></svg>
        </button>
      </div>
    </div>