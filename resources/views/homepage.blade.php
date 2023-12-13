<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieNext</title>

    <!-- Add CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
   
</head>
<body>
    

    <nav class="navbar navbar-expand-lg d-flex">
        <div class="movienext">MOVIENEXT</div>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" style="color: white;" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white;" href="#">Movie</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" style="color: white;" href="#">About Us</a>
              </li>
          </ul>
          <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
         
          <button type="button" class="btn">User</button>
          
        </div>
      </nav>

    <div class="card-group">
        <div class="flex-row"></div>
            @foreach ($movies as $mv)
                <div class="col-sm-3 col-md-2">
                    <div class="card m-2 custom-card">
                        <img class="card-img-top img-fluid" src="{{asset('images/movies/'. $mv->image)}}" alt="movies image {{$mv->id}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$mv->movieTitle}}</h5>
                            <p>
                                Rate: 
                                <i class="fas fa-star" style="color: #FFC30B;"></i>
                                {{$mv->overall}}
                            </p>
                            <div class="button-container">
                                <button class="btn check-button" onclick="window.location.href='/moviereview/{{$mv->id}}'">Check</button>
                            </div>
                        </div>  
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Add Bootstrap JS script (at the end of the body tag) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
