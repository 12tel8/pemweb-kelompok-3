<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"
    />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout>
        <div class="">
            <div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full " />
            </div>
            <div>
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
        
        <a href="flight/form" class="btn">create</a>
        <x-admin.flight-table :flights="$flights"></x-admin.flight-table>
        <x-admin.flight-delete></x-admin.flight-delete>
        

    
        
    </x-layout>
    
    @if($session = session('success'))
        <script>
            Swal.fire({
            title: 'Success',
            text: '{{$session}}',
            icon: 'success',
            confirmButtonText: 'Close'
            })
        </script>
    @elseif($session = session('success'))
        <script>
            Swal.fire({
            title: 'error',
            text: '{{$session}}',
            icon: 'error',
            confirmButtonText: 'Close'
            })
        </script>
    @endif
</body>
</html>

