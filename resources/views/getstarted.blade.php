<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>
<body>
    <div class="background" >
        <div class="containerbg">
            <img src="{{asset('images/decorations/getstartedimg.png')}}" alt="start bg">
        </div>
        
        <img src="{{asset('images/decorations/logo.png')}}" alt="Your Image" id="overlay-image">
        <img src="{{asset('images/decorations/btn.png')}}" alt="btn" id="overlay-image2">
        <a class="nav-link" href="{{ route('login') }}">
            <button id="myButton">Get Started</button>
        </a>
        
    </div> 
</body>
</html>