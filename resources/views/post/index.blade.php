<x-navbar />
<x-layout>


    <header class="blog-header py-5">
        <h1>Tutti i post </h1>
        <p>Questo è solo un esercizio in PHP su laravel e database.</p>
    </header>
    
    <x-display-error/>
    <x-display-message/>


    <!-- loop dei post -->
    <div class="container mt-05">
        <div class="row g-4">


            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->subtitle }}</p>
                            <a href="#" class="btn btn-secondary btn-sm">Leggi tutto</a>
                    
                        </div>
                    </div>  
    
                </div>
                
            @endforeach

        </div>
    </div>


</x-layout>
