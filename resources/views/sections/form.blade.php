<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Asmens informacija</h4>
    <form class="needs-validation" novalidate method="post" action="{{ route('person.create') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Asmens kodas</label>
                <input type="number" class="form-control" id="personalCode" name="personalCode" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Įveskite teisingą asmens kodą
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="firstName">Informacijos ištraukimas iš asmens kodo</label>
                <button id="getData" type="button" class="btn btn-primary">Gauti informaciją</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="country">Lytis</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="" value="" disabled>
                <div class="invalid-feedback">
                    Nurodyta neegzistuojanti lytis
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="country">Gimimo data</label>
                <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="" value="" disabled>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">Amžius</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="" disabled>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="zip">Asmens kodo logikos patikrinimo rezultatas</label>
                <input type="text" class="form-control" id="personalCodeCheckResult" name="personalCodeCheckResult" placeholder="" disabled>
                <div class="invalid-feedback">
                    Zip code required.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="zip">Kontrolinio skaičiaus patikrinimo rezultatas</label>
                <input type="text" class="form-control" id="personalCodeHasCorrectControlSum" name="personalCodeHasCorrectControlSum" placeholder="" disabled>
                <div class="invalid-feedback">
                    Zip code required.
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit" disabled id="submitForm">Išsaugoti</button>
    </form>
</div>
