<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>DavidWang.com</title>
    <link rel='stylesheet' href="/css/bootstrap.min.css" type='text/css' media='all'/>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="container">
            <section class="content">
                <div class="pad group">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
        @yield('footer');
</body>
</html>