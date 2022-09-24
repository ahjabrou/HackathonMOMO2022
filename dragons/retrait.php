<style>
  form{
    margin-left: 10px;
    margin-top: 10px;
    height: 70px;
    width: 750px;
    font-size: medium;
  }
  /* .card{
    height: 550px;

  } */
  .form-control{
   font-size: large;
   padding: 10px;
  }
#retrait{
  padding: 10px;
  width: 120px;
  height: 50px;
  font-size: large;
  border: 1px solid black;
  margin-left: 30px;
}
</style>

<form  action=""  method="$_POST">

  <div class="form-group row">
    <label for="inputNumber3" class="col-sm-2 col-form-label">Numéro MTN</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="+22505XXXXXXXX">
    </div>
  </div><br><br>
  <div class="form-group row">
    <label for="inputEmail3"   class="col-sm-2 col-form-label">Nombres de pièces</label>
    <div class="col-sm-10">
      <input type="number" name="retait" class="form-control" id="inputEmail3" placeholder="Exemple : 2000">
    </div>
  </div><br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="mot de passe">
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
        <br>
      <button type="submit"   name="submit" class="btn btn-warning" id="retrait">Retrait</button>
    </div>
  </div>
</form>