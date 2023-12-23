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
    <!-- <nav class="navbar navbar-expand-lg d-flex">
        <div class="movienext">MOVIENEXT</div>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" style="color: white;" href="{{ route('homepage') }}">Home</a>
            </li>
          </ul>
          <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
         
          <button type="button" class="btn">User</button>
          
        </div>
      </nav> -->

      <nav class="navbar navbar-expand-lg d-flex">
        <div class="movienext">MOVIENEXT</div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active me-4">
              <a class="nav-link" style="color: white;" href="{{ route('homepage') }}">Home</a>
            </li>
        
            <li class="nav-item active me-4">
              <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
              <button type="button" class="btn">{{ Auth::user()->username }}</button>
            </li>

            @auth
              <li class="nav-item active me-2">
                  <a class="nav-link" style="color: white;" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                  </a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            @endauth
          </ul>
        </div>
      </nav>

      <h1 class="a d-flex justify-content-center align-items-center">{{$movie->movieTitle}}</h1>

      <div class="container">
        <div class="film-star">
          <div class="film">
            <img src="{{asset('images/movies/'. $movie->image)}}" alt="movies image {{$movie->id}}" style="width: 300px; height: auto;"> 
          </div>
            
          <div class="ratestar">
            <h5>
              <i class="fas fa-star" style="color: #FFC30B;"></i>
              {{$movie->overall}}/5
            </h5>
          </div>          
        </div>
  
        <div class="desc">
          <h4 style="font-weight: bold; color: white;">Description</h4>
          <p>{{$movie->movieDesc}}</p>
        </div>

        <div class="reviews">
          <div class="col-md-6 review-cards">
            @foreach ($reviews as $review)
              <div class="card" style="width: 300px; height: auto">
                <div class="card-body">
                  @php
                      $user = App\Models\User::find($review->user_id);
                  @endphp
                  @if ($user)
                    <h6 class="card-title">{{$user->username}}</h6>
                  @else
                    <h6 class="card-title">Unknown User</h6>
                  @endif
                  <p class="card-text">{{$review->review}}</p>
                  <br>
                </div>
              </div>
            @endforeach
          </div>

          <div class="md-6">
              <div class="review-container">
                  <div class="col mt-4">
                    <form class="py-2 px-4" action="{{ route('addReview', ['movie_id' => $movie->id]) }}" method="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                        <input type="hidden" name="rating" id="rating" value="">                       
                          <div class="rate">
                            
                            <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                            <label for="star5" title="text">5 stars</label>
                            
                            <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                            <label for="star4" title="text">4 stars</label>
                            
                            <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                            <label for="star3" title="text">3 stars</label>
                            
                            <input type="radio" id="star2" class="rate" name="rating" value="2">
                            <label for="star2" title="text">2 stars</label>
                            
                            <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                            <label for="star1" title="text">1 star</label>
                          </div>                       
                      </div>
                      <div class="form-group row mt-4">
                        <div class="col">
                          <textarea class="form-control @error('review') is-invalid @enderror" name="review" rows="6 " placeholder="Write your review here..." value="{{old('review')}}"></textarea>
                          @error('review')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="mt-3 text-right">
                        <button type="submit" class="btn submit-btn" onclick="submitReview()">Submit Review</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        function submitReview() {
            // Get selected rating
            let selectedRating = document.querySelector('input[name="rating"]:checked');

            if (selectedRating) {
                // Set the value of the hidden input field to the selected rating
                document.getElementById('rating').value = selectedRating.value;

                // Submit the form
                document.getElementById('reviewForm').submit();
            } else {
                alert('Please select a rating!');
            }
        }
    </script>
</body>
</html>