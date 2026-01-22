<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <h1>I nostri prodotti</h1>
    <main class="container">
        <section class="row">
            @foreach ($products as $product)
            <article class="col-12 col-md-3">
               
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="lead">{{$product->description}}</p>
                        <p class="lead">{{$product->price}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </article>
            @endforeach
        </section>
    </main>
    
</x-layout>