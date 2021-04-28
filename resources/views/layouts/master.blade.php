<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Template for Bootsrap</title>
<!-- Boostrap Core CSS -->
    <link rel="stylesheet" href="/css/bootstrap_css/bootstrap.min.css">
<!-- Custom Styles for this template -->
    <link rel="stylesheet" href="/css/blog.css">  
</head>

<body>

    @include('layouts.nav')

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Computer Security Blog</h1>
            <p class="lead blog-description">Recognizing security threats and how to eliminate them</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

        @yield ('content')

        @include ('layouts.sidebar')
            
        </div> <!-- .row  -->
    </div> <!-- .container  -->

    @include('layouts.footer')
</body>
</html>