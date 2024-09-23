<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Library</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body class="lbody">

    {{-- <img src="Logo.png" alt="Background Image" class="background-image"> --}}



    <header class="header">
        @include('Components.navbar')
    </header>

    {{-- <img src="fitnessimages/fitnessmain.jpg" alt="Background Image" class="background-image"> --}}
    <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">

        <!-- Header Section -->
        <div class="my-5 text-center">
            <h1 class="display-4">EXERCISE LIBRARY</h1>
        </div>

        <!-- Category Buttons -->
=
        <div class="mb-4 text-center">
            @foreach($categories as $category)
                <a href="#{{ strtolower($category->name) }}" class="p-2 m-2 btn btn-outline-light">{{ strtoupper($category->name) }}</a>
            @endforeach
        </div>

{{-- Exercise cards --}}
        <div class="container">
            <!-- Loop through each category -->
            <!-- Exercise cards -->
            @foreach($categories as $category)
            <section id="{{ strtolower($category->name) }}" class="mt-5">
                <h3 class="text-center">{{ strtoupper($category->name) }}</h3>
                <div class="row">
                    @forelse($category->exercises as $exercise)
                    @if($exercise->category->name == $category->name)
                    <div class="mb-4 col-md-3">
                     <!-- Pass the exercise ID in the URL -->
                    <a href="{{ route('elibrarydetails', ['id' => $exercise->id]) }}">
                        <div class="card2">
                            <img src="{{ asset('storage/' . $exercise->image) }}" class="card-img-top" alt="{{ $exercise->name }}">
                                <div class="text-center card-body">
                                <h5 class="card-title2">{{ strtoupper($exercise->name) }}</h5>
                            </div>
                        </div></a>
                    </div>
                    @endif
                @empty
                <p class="text-center">No exercises available for {{ $category->name }}.</p>
                @endforelse
            </div>
            </section>
            @endforeach
        </div>



        <footer>
            @include('Components.footer')
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
