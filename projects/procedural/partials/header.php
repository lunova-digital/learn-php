<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Landing Page</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',
            secondary: '#0f172a',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- HEADER -->
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-primary">MyHome</h1>
      <nav class="hidden md:flex gap-6 text-sm font-medium">
        <a href="?page=Home" class="hover:text-primary">Home</a>
        <a href="?page=about" class="hover:text-primary">About</a>
        <a href="?page=contact" class="hover:text-primary">Contact</a>
      </nav>
      <a href="?page=contact" class="bg-primary text-white px-4 py-2 rounded-lg text-sm">
        Get Started
      </a>
    </div>
  </header>

