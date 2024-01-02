<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- font awesome link --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>
<body>
    <div class="navbar bg-base-100">
        <div class="flex-1">
          <a class="btn btn-ghost hover:bg-transparent text-xl"><i class="fa-solid fa-newspaper text-3xl"></i></a>
          <div class="form-control">
            <input type="text" placeholder="&#xF002; Search"  style="font-family:Arial, FontAwesome" class="input input-bordered w-24 md:w-auto h-9" />
          </div>
        </div>
        <div class="flex-none gap-2 me-3">
            <button class="btn btn-ghost hover:bg-transparent"><i class="fa-regular fa-pen-to-square text-xl"></i>Write</button>
            <button class="btn btn-ghost hover:bg-transparent"><i class="fa-regular fa-bell text-xl"></i></button>
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
              </div>
            </div>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
              <li>
                <a class="justify-between">
                  Profile
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
    </div>

    <div class="notibar h-12 bg-slate-400"></div>
  @yield('content')
</body>
</html>
