<section class="py-5">
    <div class="container px-1">
        <ul class="cards">
            @foreach ($movies as $movie)
                <li class="card">
                    <h3> {{ $movie->title }} </h3>
                    <h4> {{ $movie->original_title }} </h4>
                    <div class="info">
                        <p>Nationality: <span> {{ $movie->nationality }} </span> </p>
                        <p>Date: <span> {{ $movie->date }} </span> </p>
                        <p>Vote: <span> {{ $movie->vote }} </span> </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
