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
    <div class="movienext">MOVIENEXT</div>

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
                                {{$mv->rating}}
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
