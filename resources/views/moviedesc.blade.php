<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Description</title>

    <!-- Add CSS link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

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

      <h1 class="a d-flex justify-content-center align-items-center">{{$movie->movieTitle}}</h1>

      <div class="container">

        <div class="film-star">
          <div class="film">
            <img src="{{asset('images/movies/'. $movie->image)}}" alt="movies image {{$movie->id}}" style="width: 300px; height: auto;"> 
          </div>
            
          <div class="rate">
            <h5>
              <i class="fas fa-star" style="color: #FFC30B;"></i>
              {{$movie->overall}}/10
            </h5>
          </div>          
        </div>
  
        <div class="desc">
          <h4 style="font-weight: bold; color: white;">Description</h4>
          <p>{{$movie->movieDesc}}</p>
          <h4 style="font-weight: bold; color: white;">Directors</h4>
          <p>Anthony Russo, Joe Russo</p>
          <h4 style="font-weight: bold; color: white;">Writers</h4>
          <p>Christopher Markus, Stephen McFeely, Stan Lee</p>
          <h4 style="font-weight: bold; color: white;">Stars</h4>
          <p>Robert Downey Jr., Chris Evans, Mark Ruffalo</p>
        </div>

        <div class="komen">
          <div class="card" style="width: 30rem;">
            <div class="card-body">
              <h6 class="card-title">Hayabusa</h6>
              <p class="card-text">This film is an emotional rollercoaster with some of the coolest superhero plot lines ever drawn up. It's straight up the most epic Marvel film that will probably ever be created. I don't see how Marvel could ever top this, but getting to see these characters all together at least one last time was a reward all on its own.</p>
            </div>
          </div>
  
        <div class="card" style="width: 30rem;">
          <div class="card-body">
            <h6 class="card-title">Kagura</h6>
            <p class="card-text">The film has too many references to previous Marvel films, and is not friendly to those who are not Marvel fans. General audiences may easily get confused: what is this and why is that? The story is not original either. We have seen too many time-travel films, such as Back to the Future and Days of Future Past. This film does not offer anything new. Besides, the last thirty minutes are kind of redundant, and the overall running time is unnecessarily long.</p>
          </div>
        </div>
  
        <div class="card" style="width: 30rem;">
          <div class="card-body">
            <h6 class="card-title">Katarinablu</h6>
            <p class="card-text">This film is an emotional rollercoaster with some of the coolest superhero plot lines ever drawn up. It's straight up the most epic Marvel film that will probably ever be created. I don't see how Marvel could ever top this, but getting to see these characters all together at least one last time was a reward all on its own.</p>
          </div>
        </div> <br>
        
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Type your review here..." aria-label="Type your review here...">
        </form>
      </div>
      </div>
      
</body>
</html>