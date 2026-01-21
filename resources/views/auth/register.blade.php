<x-layout>
    
    <main class="container">
        <section class="row vh-100 justify-content-center align-items-center">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route("register")}}">
                    @csrf
                      <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                       <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>