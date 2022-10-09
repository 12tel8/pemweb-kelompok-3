<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
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
    <x-navbar>
        <!-- The button to open modal -->
        
        <label for="flight-post" class="btn modal-button">open modal</label>
        <x-admin.flight-table :flights="$flights"></x-admin.flight-table>
        <x-admin.flight-form></x-admin.flight-form>
        <x-admin.flight-edit></x-admin.flight-edit>

    
        
    </x-navbar>
    
    @if(Session::has('success'))
        <script>
            Swal.fire({
            title: 'Success',
            text: 'Flight successfully created',
            icon: 'success',
            confirmButtonText: 'Close'
            })
        </script>
    @elseif(Session::has('error'))
        <script>
            Swal.fire({
            title: 'error',
            text: 'flight failed to create',
            icon: 'error',
            confirmButtonText: 'Close'
            })
        </script>
    @endif
</body>
</html>

