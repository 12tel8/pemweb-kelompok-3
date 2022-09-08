<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex mt-20 justify-center">
    <div class="card w-[500px] ">
    <div class="card-header mx-4 -mt-6 ">
        <div class="shadow-blue pe-1 rounded-lg bg-blue-700 py-3">
        <h4 class="mt-2 mb-0 text-center font-bold text-white">Sign up</h4>
        <div class="mt-4 flex">
            <a class="button button-text ml-auto" href="#">
            <i class="fab fa-facebook-f text-lg text-white"></i>
            </a>
            <a class="button button-text" href="#">
            <i class="fab fa-github text-lg text-white"></i>
            </a>
            <a class="button button-text mr-auto" href="#">
            <i class="fab fa-google text-lg text-white"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('register') }}" method="post">
            @csrf
            
        <div class="input-group-outline input-group my-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" />
            @error('name')
                <div class="text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group-outline input-group my-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" />
            @error('email')
                <div class="text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group-outline input-group my-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control" />
            @error('password')
                <div class="text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <input
            class="absolute z-10 h-5 w-8 cursor-pointer opacity-0"
            data-attribute="toggle"
            id="remember"
        />
        <button type="submit" class="button button-blue !bg-blue-700 w-full">Create Account</button>       
    </form>
    </div>
</div>
</body>
</html>

<script src="node_modules/@material-tailwind/html@latest/scripts/ripple.js"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>