<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <h1 class="text-center my-5">I nostri prodotti</h1>
    <main class="container">
        <section class="row">
            @foreach ($products as $product)
            <article class="col-12 col-md-3 my-5">
               
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="lead">{{$product->description}}</p>
                        <p class="lead">{{$product->price}} €</p>
                        <p>Autore:{{$product->user->name}}</p>
                        <a href="{{route("product_show", compact("product"))}}" class="btn btn-info">Dettaglio</a>
                        @auth
                            @if(Auth::user()->id == $product->user->id)
                            <form action="{{route("product_destroy", compact("product"))}}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger" type="submit">Elimina Prodotto</button>
                            </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </article>
            @endforeach
        </section>
    </main>
    
</x-layout>