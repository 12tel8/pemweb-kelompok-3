<div class="mt-10 mb-10">
    <form action={{ route('register') }} method="POST" class="flex justify-center items-center">
    @csrf
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
          <h2 class="card-title flex justify-center">Sign Up</h2>
          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="label-text">Username</span>
            </label>
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" class="input input-bordered w-full max-w-xs" />
          </div>
          @error('username')
                <label class="label">
                    <span class="label-text-alt text-red-500">{{ $message }}</span>
                </label>
          @enderror
          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered w-full max-w-xs" />
          </div>
          @error('email')
                <label class="label">
                    <span class="label-text-alt text-red-500">{{ $message }}</span>
                </label>
          @enderror
          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" class="input input-bordered w-full max-w-xs" />
            @error('password')
                <label class="label">
                    <span class="label-text-alt text-red-500">{{ $message }}</span>
                </label>
            @enderror
          </div>
          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="label-text">Password Confirm</span>
            </label>
            <input type="password" name="password_confirm" placeholder="Password Confirm" value="{{ old('password_confirm') }}" class="input input-bordered w-full max-w-xs" />
            @error('password_confirm')
                <label class="label">
                    <span class="label-text-alt text-red-500">{{ $message }}</span>
                </label>
            @enderror
          </div>
          @error('error')
                <label class="label">
                    <span class="label-text-alt text-red-500">{{ $message }}</span>
                </label>
          @enderror
          <div class="form-control">
            <label class="label cursor-pointer">
              <input type="checkbox" name="remember_me" class="toggle" checked />
              <span class="label-text">Remember me</span> 
            </label>
          </div>
          <a href={{ route("login") }}>Already have an account?</a>
          <input type="submit" class="btn">
        </div>
    </div>
    </form>
    <div class="flex sm:flex-row flex-col justify-center items-center mt-10 ">
        <a href={{route('facebook/redirect')}} class="btn sm:mx-5 mt-5 sm:w-[250px] w-full">
            <p class="mr-2">Start With Facebook</p>
            <i class="fab fa-facebook-f text-lg text-white"></i>
        </a>
        <a href={{route('google/redirect')}} class="btn sm:mx-5 mt-5 sm:w-[250px] w-full">
            <p class="mr-2">Start With Google</p>
            <i class="fab fa-google text-lg text-white"></i>
        </a>
    </div>
</div>