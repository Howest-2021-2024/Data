                <form method="POST" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="firstname">Voornaam:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Achternaam:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">Registreer</button>
                </form>