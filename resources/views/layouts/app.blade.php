<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Dance Classes Plano TX">
        <meta property="og:description" content="Plano Dance classes taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels.">
        <meta property="og:image" content="https://studio3dance.com/images/prev/studio-3-head.JPG">
        <meta property="og:url" content="https://studio3dance.com">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description', 'Plano Dance classes taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels.')">

        <title>@yield('title', 'Studio 3 Dance | Dance Studio Plano TX')</title>

        <!-- Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        </style>
        
        <!-- Scripts -->
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="/js/script.js"></script>
        <script src="https://cdn.tiny.cloud/1/5kctqg5sa09fd8d1o32j7i9xpvwu1wzubt2thxu7k565blzw/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3CD9TVGTDQ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-3CD9TVGTDQ');
        </script>

    </head>
    <body>
        @include('_top')
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong> {{ session()->get('message') }}
            </div>
        @endif
        @yield('content')
        @include('_bottom')

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            tinymce.init({
                selector: '#tiny',
                plugins: [
                    // Core editing features
                    'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                    // Premium features
                    'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'permanentpen', 'advtable', 'advcode', 'editimage', 'advtemplate', 'mentions', 'tableofcontents', 'footnotes', 'mergetags', 'inlinecss', 'markdown',
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ],
            });
        </script>
    </body>
</html>
