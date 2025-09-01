<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Users Hub</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Raleway:wght@400;600&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/ispsc.png" type="image/x-icon" />

  <!-- Custom CSS -->
  <style>
    body { font-family: 'Raleway', sans-serif; overflow-x: hidden; }
    h1, h2, h3 { font-family: 'Playfair Display', serif; }

    /* Fade-up animation */
    @keyframes fadeUp { 
      from { opacity: 0; transform: translateY(30px); } 
      to { opacity: 1; transform: translateY(0); } 
    }
    .fade-up { animation: fadeUp 1s ease forwards; }
    .delay-1 { animation-delay: 0.3s; }
    .delay-2 { animation-delay: 0.6s; }
    .delay-3 { animation-delay: 0.9s; }

    /* Mobile menu */
    .mobile-menu { transform: translateX(100%); transition: transform 0.3s ease-in-out; }
    .mobile-menu.open { transform: translateX(0); }

    /* Animated gradient background */
    .animated-gradient {
      background: linear-gradient(270deg, #0f172a, #1e1b4b, #312e81, #4c1d95, #831843);
      background-size: 1000% 1000%;
      animation: gradientShift 15s ease infinite;
    }
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Floating circles */
    .floating-shapes { position: absolute; inset: 0; overflow: hidden; z-index: 0; pointer-events: none; }
    .circle { position: absolute; border-radius: 50%; background: rgba(255,255,255,0.07); animation: float 20s infinite linear; }
    .circle:nth-child(1) { width: 120px; height: 120px; left: 10%; animation-duration: 25s; }
    .circle:nth-child(2) { width: 200px; height: 200px; left: 70%; animation-duration: 30s; }
    .circle:nth-child(3) { width: 80px; height: 80px; left: 40%; animation-duration: 20s; }
    .circle:nth-child(4) { width: 160px; height: 160px; left: 85%; animation-duration: 35s; }
    .circle:nth-child(5) { width: 100px; height: 100px; left: 25%; animation-duration: 22s; }

    @keyframes float {
      from { transform: translateY(100vh) scale(1); }
      to { transform: translateY(-20vh) scale(1.5); }
    }
  </style>
</head>
<body class="antialiased text-gray-100">

  <!-- Navbar -->
  <nav class="fixed w-full bg-white/10 backdrop-blur-lg shadow-lg z-50 border-b border-white/20">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center gap-3">
        <img src="images/ispsc.png" alt="Users Hub Logo" class="w-10 h-10 rounded-lg shadow-md" />
        <a href="#home" class="text-2xl font-bold text-white">Users<span class="text-pink-500">Hub</span></a>
      </div>
      <div class="hidden md:flex space-x-10">
        <a href="#home" class="text-gray-200 hover:text-pink-400 transition">Home</a>
        <a href="#users" class="text-gray-200 hover:text-pink-400 transition">Users</a>
      </div>
      <button id="menu-btn" class="md:hidden flex flex-col space-y-1.5 focus:outline-none" aria-label="Open Menu">
        <span class="block w-6 h-0.5 bg-white"></span>
        <span class="block w-6 h-0.5 bg-white"></span>
        <span class="block w-6 h-0.5 bg-white"></span>
      </button>
    </div>
    <div id="menu" class="mobile-menu fixed top-0 right-0 w-64 h-full bg-black/95 text-white shadow-lg p-8 md:hidden z-40">
      <button id="close-btn" class="mb-6 text-gray-400 hover:text-white" aria-label="Close Menu">✕</button>
      <nav class="space-y-6 text-lg">
        <a href="#home" class="block hover:text-pink-400 transition">Home</a>
        <a href="#users" class="block hover:text-pink-400 transition">Users</a>
      </nav>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="min-h-screen flex items-center justify-center animated-gradient relative pt-20">
    <div class="floating-shapes">
      <div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div>
    </div>
    <div class="container mx-auto px-6 py-16 text-center fade-up relative z-10">
      <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white drop-shadow-lg">
        Welcome to <span class="text-pink-500">Users Hub</span>
      </h1>
      <p class="text-lg md:text-xl mb-10 text-gray-200 max-w-2xl mx-auto leading-relaxed">
        A community-driven platform to showcase, discover, and collaborate with brilliant developers worldwide.
      </p>
      <a href="#users" class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:scale-105 transform transition">
        Explore
      </a>
    </div>
  </section>

  <!-- Users Section -->
  <section id="users" class="py-24 bg-gray-50 text-gray-900 relative">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-14 fade-up">Our <span class="text-indigo-600">Community</span></h2>
      <div class="overflow-x-auto bg-white/80 backdrop-blur-xl rounded-xl shadow-2xl fade-up delay-1">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
              <th class="px-6 py-4">ID</th>
              <th class="px-6 py-4">Name</th>
              <th class="px-6 py-4">Email</th>
              <th class="px-6 py-4">Joined</th>
              <th class="px-6 py-4">GitHub</th>
            </tr>
          </thead>
          <tbody>
            @forelse($users as $user)
              <tr class="border-b hover:bg-indigo-50 transition duration-300">
                <td class="px-6 py-4">{{ $user->id }}</td>
                <td class="px-6 py-4 font-semibold">{{ $user->name }}</td>
                <td class="px-6 py-4">{{ $user->email }}</td>
                <td class="px-6 py-4">{{ $user->created_at->format('Y-m-d') }}</td>
                <td class="px-6 py-4">
                  <a href="{{ $user->github_link }}" target="_blank" rel="noopener" class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:opacity-90 shadow-md transition">View</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="px-6 py-8 text-center italic text-gray-500">No users found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gradient-to-br from-indigo-950 to-black text-white py-14 mt-16">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="fade-up delay-2">
          <h3 class="text-2xl font-bold mb-2">Users<span class="text-pink-500">Hub</span></h3>
          <p class="text-indigo-300">Where ideas meet collaboration</p>
        </div>
        <div class="flex space-x-8 fade-up delay-3">
          <a href="#home" class="hover:text-pink-400 transition">Home</a>
          <a href="#users" class="hover:text-pink-400 transition">Users</a>
        </div>
      </div>
      <div class="border-t border-indigo-800 mt-12 pt-6 text-center text-indigo-400 text-sm">
        © 2025. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- JS -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    const closeBtn = document.getElementById('close-btn');

    if (menuBtn && menu && closeBtn) {
      menuBtn.addEventListener('click', () => menu.classList.add('open'));
      closeBtn.addEventListener('click', () => menu.classList.remove('open'));
    }
  </script>
</body>
</html>
