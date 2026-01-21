<x-layout>
    <h1>I nostri prodotti</h1>
    <main class="container">
        <section class="row">
            @foreach ($products as $product)
            <article class="col-12 col-md-3">
               
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
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