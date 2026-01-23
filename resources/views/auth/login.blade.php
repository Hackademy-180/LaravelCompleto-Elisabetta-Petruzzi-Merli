<x-layout>
    <h1 class="text-center my-5">Pagina di login</h1>
       <main class="container">
        <section class="row justify-content-center align-items-center">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route("login")}}">
                    @csrf
                   
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>