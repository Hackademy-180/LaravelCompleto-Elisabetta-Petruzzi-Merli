<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>Dettaglio del Prodotto</h1>
            </article>
            <article class="col-12">
                <p>Descrizione:{{$product->description}}</p>
                
                <p>{{$product->price}} €</p>
                <p>Categorie:</p>
                <ul>
                    @foreach($product->categories as $category)
                    <li>{{$category->name}}</li>
                    @endforeach   
                </ul>

                @auth
                    @if(Auth::user()->id == $product->user->id)
                    
                    <a href="{{route("product_edit", compact("product"))}}" class="btn btn-warning">Modifica</a>
                    @endif
                @endauth
                <a href="{{route("products_index")}}" class="btn btn-info">Torna a tutti i prodotti</a>
            </article>
        </section>
    </main>
</x-layout>