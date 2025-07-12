
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">وبلاگ من</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">خانه</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">پست‌ها</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">درباره ما</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">تماس با ما</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('create') }}">ساخت</a></li>

                </ul>
            </div>
        </div>
    </nav>
</body>