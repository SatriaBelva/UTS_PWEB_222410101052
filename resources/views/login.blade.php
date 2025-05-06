<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-white">
      <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm relative overflow-hidden">
        <!-- Background decoration (opsional, bisa pakai SVG / gambar) -->
        <div class="absolute right-0 top-1/4 w-24 h-24 opacity-30 -z-10">
          <img src="../assets/decor.png" alt="Decoration" class="w-full h-full object-contain">
        </div>
    
        <!-- Form Login -->
        <form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
          @csrf
    
          @if ($errors->has('login'))
            <div class="bg-red-100 text-red-700 p-3 rounded-md text-sm">
              {{ $errors->first('login') }}
            </div>
          @endif
    
          <div>
            <label for="nim" class="block text-gray-700 font-medium mb-2">NIM</label>
            <input
              type="text"
              id="nim"
              name="nim"
              placeholder="Masukan NIM Disini"
              required
              class="w-full px-4 py-3 rounded-xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
    
          <div>
            <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
            <div class="relative">
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukan Password Disini"
                required
                class="w-full px-4 py-3 pr-12 rounded-xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
              <span class="absolute inset-y-0 right-4 flex items-center cursor-pointer text-gray-500 hover:text-gray-700"> <i class="fa fa-eye"></i></span>
            </div>
          </div>
    
          <div class="text-right">
            <a href="https://sister.unej.ac.id/site/lupapassword" class="text-blue-600 hover:underline text-sm font-medium">Lupa Password</a>
          </div>
    
          <button
            type="submit"
            class="w-full py-3 bg-blue-600 text-white font-semibold rounded-xl shadow-md hover:bg-blue-700 transition"
          >
            Log In
          </button>
        </form>
      </div>
    </div>    
  </body>
</html>