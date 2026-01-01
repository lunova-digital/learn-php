  <section class="min-h-screen flex items-center justify-center px-6">
    <div class="text-center max-w-xl">

      <!-- ERROR CODE -->
      <h1 class="text-7xl md:text-9xl font-extrabold text-blue-600 mb-6">
        404
      </h1>

      <!-- MESSAGE -->
      <h2 class="text-2xl md:text-3xl font-bold mb-4">
        Page Not Found
      </h2>

      <p class="text-gray-600 mb-8 leading-relaxed">
        Sorry, the page you are looking for does not exist or has been moved.
        Please check the URL or return to a safe location.
      </p>

      <!-- ACTIONS -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a
          href="/"
          class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
        >
          Go to Home
        </a>

        <button
          onclick="history.back()"
          class="border border-gray-300 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition"
        >
          Go Back
        </button>
      </div>

    </div>
  </section>
