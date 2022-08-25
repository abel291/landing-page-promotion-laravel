<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promocion autos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @livewireStyles
</head>

<body class="flex flex-col h-screen">

    <!-- Section 1 -->
    <div>
        @include('partials.header')

    </div>
    
        
    
    <div class="flex flex-col justify-center flex-grow ">
        @if ($winner)
            @include('partials.winner')
        @else
            <div>
                <livewire:form />
            </div>
        @endif
    </div>
    @livewireScripts
</body>

</html>
