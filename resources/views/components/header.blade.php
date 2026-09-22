<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-sm shadow-sm border-b border-indigo-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between h-16">
            <!-- Logo / School name -->
            <div class="flex items-center gap-2">
                <span class="text-2xl">🏫</span>
                <a href="/" class="text-xl font-bold text-indigo-700 tracking-tight">Bright Future</a>
            </div>
            <!-- Navigation Links -->
            <div class="flex space-x-1 sm:space-x-4">
                <a href="{{ route('home') }}"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-indigo-700 bg-indigo-50"
                    aria-current="page">Home</a>
                <a href="{{ route('about') }}"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-700 hover:bg-indigo-50">About</a>
                <a href="{{route('admission.index')}}"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-700 hover:bg-indigo-50">Admissions</a>
                <a href="/course/index"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-700 hover:bg-indigo-50">Course</a>
            </div>
        </nav>
    </div>
</header>
