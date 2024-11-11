<!-- resources/views/quote.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote of the Day</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    {{--    custom css file --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">



</head>
<body style='background: url("{{ asset('img/bg.jpg') }}"); background-size: cover; background-repeat: no-repeat'>
<div class="container mt-5" >
    <div class="row justify-content-center align-items-center ">

        <h1 class="display-4">Quote of the Day</h1>
        <div class="col-md-8 text-center bg-primary quote-container text-white font-weight-bold mx-2">
            @if(isset($quote) && isset($author))
                <blockquote class="blockquote">
                   <q class="mb-4 font-italic">
                       {{ $quote }}
                   </q>
                    <footer class="blockquote-footer font-weight-bold text-white mt-5">{{ $author }}</footer>
                    <img src="https://loremflickr.com/320/240/user" alt="" class="profile mt-3">
                </blockquote>
            @elseif(isset($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @else
                <p class="text-muted">Loading...</p>
            @endif
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies (optional for interactive components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
