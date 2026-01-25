<x-layout>
    <h1 class="text-center mt-5">Crea un nuovo Prodotto </h1>
    <main class="container">
        <section class="mt-5 row justify-content-center align-items-center">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route("product_submit")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                        
                    </div>
                    <div class="mb-3">
                            <label for="description" class="form-label">Descrizione Prodotto</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                   
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo Prodotto</label>
                        <input type="number" class="form-control" id="price" aria-describedby="emailHelp" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine Prodotto</label>
                        <input type="file" class="form-control" id="img" aria-describedby="emailHelp" name="img">
                    </div>
                    <div class="mb-3">
                        <p>Categorie:</p>
                        @foreach($categories as $category)
                        <input type="checkbox" class="form-check-input" id="{{$category->id}}" value="{{$category->id}}" name="categories[]">
                        <label class="form-check-label" for="{{$category->id}}">{{$category->name}}</label>
                        @endforeach
                    </div>
                
                     <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </article>
    </section>
</main>
</x-layout>