<x-layout>
    <h1 class="text-center">Pagina Modifica</h1>
    <main class="container">
        <section class="row">
            <article class="col-12">
               <form method="POST" action="{{route("product_update", compact("product"))}}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="name" class="form-label">Nuovo Nome Prodotto</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$product->name}}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Nuova Descrizione Prodotto</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Nuovo Prezzo Prodotto</label>
                        <input type="number" class="form-control" id="price" aria-describedby="emailHelp" name="price" value="{{$product->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Nuova Immagine Prodotto</label>
                        <input type="file" class="form-control" id="img" aria-describedby="emailHelp" name="img">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </article>
        </section>
    </main>
</x-layout>