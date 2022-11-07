<form action="index.php" method="post">
    <div style=" border: 5px groove red; margin-top: 10px;" class="container">
    <div class="row">
    <div class="col-sm-4">
    <label for="fullname"><b>Fullname:</b></label>
      <input type="text" name="fullname" value="" class="form-control" placeholder="Enter Your Fullname">
   <span class="error text-danger"><?php echo $fullnameErr;?></span>
</div>
    <div class="col-sm-4">
    <label for="email"><b>Email:</b></label>
     <input type="text" name="email" value="" class="form-control" placeholder="Enter Your Email">
     <span class="error text-danger"><?php echo $emailErr;?></span>
</div>
<div class="col-sm-4">
<label for="phone_no"><b>Phone_No:</b></label>
   <input type="number" name="phone_no" value="" class="form-control" placeholder="Enter Your Phone_No"> 
    <span class="error text-danger"><?php echo $phone_noErr  ?></span>
</div>
<div class="col-sm-4">
<label for="age"><b>Age:</b></label>
    <input type="text" name="age" value="" class="form-control" placeholder="Enter Your Age">
    <span class="error text-danger"><?php echo $ageErr;?></span>
</div>
<div class="col-sm-4">
<label for="country"><b>Country:</b></label> <br>
        <select name="country" value="" class="font-weight-bold">
          <option selected>Choose.....</option>
          <option value="Australia">Australia</option>
          <option value="Canada">Canada</option>
          <option value="Usa">USA</option>
          <option value="Nigeria">Nigeria</option>
          <option value="England">England</option>
          <option value="South african">South African</option>
                </select>         
</div>
<div class="col-sm-4">
<label for="state"><b>STATE:</b></label> <br>
    <select name="state"  value="" class="state-select-lg font-weight-bold">
    <option selected>Choose.....</option>
    <option value="Osun">Osun</option>
    <option value="Ondo">Ondo</option>
    <option value="Abia">Abia</option>
    <option value="River-side">River-Side</option>
    <option value="Kwara">Kwara</option>
    <option value="Imo">Imo</option>
  </select>
  </div>
    <div class="col-sm-4">
    <label for="lga"><b>LGA:</b></label> <br>
    <select name="lga" value="" class="lga-select-lg font-weight-bold">
    <option selected>Choose.....</option>
    <option value="Ifesowapo">Ifesowapo</option>
    <option value="Boripe">Boripe</option>
    <option value="Alatise">Alatise</option>
    <option value="Ifedolapo">Ifedolapo</option>
    <option value="Karowofisaye">Karowofisaye</option>
    <option value="Olorunda">Olorounda</option> 
   </select>
      </div>
     <div class="col-sm-4">
<label for="address"><b>Address:</b></label>
    <input type="text" name="address" value=""  class="form-control" placeholder="Enter Your Home Address">
    <span class="error text-danger"> <?php echo $addressErr;?></span>
</div>
<div class="col-sm-4 font-weight-bold">
<label for="gender"><b>Gender:</b></label> <br>
<input type="radio" name="gender" value="Female">Female <br>
<input type="radio" name="gender" value="Male">Male <br>
<input type="radio" name="gender" value="Other">Other  <br>
<span class="error text-danger"> <?php echo $genderErr;?></span>
</div>
  </div>
      <input type="submit" class="sub" value="Register" name="submit">
      </div> 
</form>