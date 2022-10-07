<div class="drawer drawer-end">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" /> 
    <div class="drawer-content flex flex-col">
      <!-- Navbar -->
      <div class="w-full navbar bg-base-300">
        {{-- navbarstart --}}
        <div class="navbar-start">
          <div class="flex-1 px-2 mx-2">Navbar Title</div>
        </div>
        {{-- endnavbarstart --}}

        {{-- navbarcenter --}}
        <div>
          <div class="navbar-center">
            <ul class="">
              <li><a href="" class="btn btn-ghost">products</a></li>
            </ul>
          </div>
        </div>
        {{-- endnavbarcenter --}}

        {{-- navbarend --}}
        <div class="navbar-end">
          <div class="flex-none hidden lg:block">
            <ul class="menu menu-horizontal">
              <!-- Navbar menu content here -->
              @auth
              {{-- profileDropDown  --}}
              <div class="dropdown dropdown-end ">
                <div class="flex items-center">
                  <h2 class="font-bold ">{{auth()->user()->username}}</h2>
                  <label tabindex="0" class="btn btn-ghost btn-circle avatar ml-2">
                    <div class="w-10 rounded-full">
                      <img src="https://placeimg.com/80/80/people" />
                    </div>
                  </label>
                </div>
                <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-full">
                  <li><a class="w-full">Profile</a></li>
                  <li><a class="w-full">Settings</a></li>
                  <li><a href={{ route('logout') }} class="w-full">Logout</a></li>
                </ul>
              </div>
              {{-- endprofileDropDown --}}
              @endauth
              @guest
              <li><a href={{route('login')}}>Get Started</a></li>    
              @endguest
            </ul>
        </div>
        {{-- endnavbarend --}}
        </div>
        <div class="flex-none lg:hidden">
            <label for="my-drawer-3" class="btn btn-square btn-ghost">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </label>
          </div> 
      </div>

      {{ $slot }}
      
      <x-footer></x-footer>
    </div> 
    <div class="drawer-side">
      <label for="my-drawer-3" class="drawer-overlay"></label> 
      <ul class="menu p-4 overflow-y-auto w-80 bg-base-100">
        <!-- Sidebar content here -->
        @auth
        {{-- profile --}}
        <div class="dropdown">
          <div class="flex items-center">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar mr-2">
              <div class="w-10 rounded-full">
                <img src="https://placeimg.com/80/80/people" />
              </div>
            </label>
            <h2 class="font-bold">{{auth()->user()->username}}</h2>
          </div>
          <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
            <li><a>Profile</a></li>
            <li><a>Settings</a></li>
            <li><a href={{ route('logout') }}>Logout</a></li>
          </ul>
        </div>
        {{-- endprofile --}}

        {{-- adminsection --}}
          
        {{-- endadminsection --}}

        {{-- usersection --}}
        <li><a>Sidebar Item 2</a></li>
        {{-- endusersection --}}
        @endauth

        {{-- guestsection --}}
        @guest
        <li><a href={{ route('login') }} class="btn text-white">Get Started</a></li>
        @endguest
        {{-- endguestsection --}}
      </ul>
    </div>
  </div>