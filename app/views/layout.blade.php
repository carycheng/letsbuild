<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">
        <title>Landing Page &ndash; Layout Examples &ndash; Pure</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="/css/layouts/marketing.css">
        <!--<![endif]-->
    </head>
    <body>

        <!-- Main Nav -->
        <div class="header">
            <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href="">Your Site</a>
                <ul>
                    <li @if(Request::path() === '/') class="pure-menu-selected" @endif><a href="/">Home</a></li>
                    <li @if(Request::path() === 'search') class="pure-menu-selected" @endif><a href="/search">Search</a></li>
                    <li @if(Request::path() === 'post') class="pure-menu-selected" @endif><a href="/post">Post</a></li>
                </ul>
            </div>
        </div>


        @yield('content')


        
    </body>
</html>
