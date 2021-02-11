<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!-- <div class="row">
    <div class="col-lg-8">
        
        <form class="row g-3">
            <div class="col-md-4">
              <label for="date-start" class="form-label">Date start</label>
              <input type="text" class="form-control is-valid" id="date-start" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationServer02" class="form-label">Last name</label>
              <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationServerUsername" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationServer03" class="form-label">City</label>
              <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
              <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationServer04" class="form-label">State</label>
              <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div id="validationServer04Feedback" class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationServer05" class="form-label">Zip</label>
              <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
              <div id="validationServer05Feedback" class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="invalidCheck3">
                  Agree to terms and conditions
                </label>
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="mb-3">
            <label for="date-start" class="form-label">Inizio della ricerca</label>
            <input type="date" class="form-control" id="date-start" placeholder="">
          </div>
        <div class="mb-3">
            <label for="date-end" class="form-label">Fino della ricerca</label>
            <input type="date" class="form-control" id="date-end" placeholder="">
          </div>
        <div class="mb-3">
            <label for="date-start" class="form-label">Inizio della ricerca</label>
            <input type="date" class="form-control" id="date-start" placeholder="">
          </div>
    </div>
</div> -->

<div class="row">
    <div class="col-lg-8">
        <div class="input-group mb-3">
            <span class="input-group-text">Dal</span>
            <input type="date" class="form-control">
            <span class="input-group-text">al</span>
            <input type="date" class="form-control">
            <span class="input-group-text">da</span>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <optgroup label="Aziende"></optgroup>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
              </select>
            <span class="input-group-text">vai</span>
            <input type="submit" class="btn btn-primary" value="Ricerca">
          </div>
    </div>
</div>
