<!--MASTER PAGE-->
<?=$this->extend('Item/layout/main')?>
<!--LOADING THE CONTENT-->
<?=$this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
<form>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <input id="name" name="name" value="<?=$items->name?>" placeholder="Enter a Name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-4 col-form-label">Description</label> 
    <div class="col-8">
      <textarea id="description" name="description" cols="40" rows="5" class="form-control">
      <?=$items->description?>
      </textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="price" class="col-4 col-form-label">Price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">PHP</div>
        </div> 
        <input id="price" name="price" value="<?=$items->name?>" placeholder="Enter a Price" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="created_at" class="col-4 col-form-label">Created At</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="date_created" name="date_created" value="<?=$items->created_at?>" placeholder="Created At" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
<?=$this->endsection('content') ?>