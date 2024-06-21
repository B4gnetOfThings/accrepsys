<!--MASTER PAGE-->
<?=$this->extend('content/layout/main')?>
<!--LOADING THE CONTENT-->
<?=$this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <form action="<?=base_url()?>content/delete/<?=$content->id?>" method="POST">
            <div class="form-group row">
                <label for="date" class="col-4 col-form-label">Date</label> 
                <div class="col-8">
                <input id="targetdate" name="targetdate" value="<?=$content->targetdate?>" placeholder="YYYY-DD-MM" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="achieve" class="col-4 col-form-label">Achieve</label> 
                <input id="achieve" name="achieve" value="<?=$content->achieve?>" type="text" required="required" class="form-control">
            </div>
            <div class="form-group row">
                <label for="targetoutcome" class="col-4 col-form-label">Target Outcome</label> 
                <div class="col-8">
                    <textarea id="targetoutcome" name="targetoutcome" cols="40" rows="5" class="form-control"><?=$content->targetoutcome?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="activities" class="col-4 col-form-label">Actvities</label> 
                <div class="col-8">
                    <textarea id="activities" name="activities" cols="40" rows="5" class="form-control"><?=$content->activities?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="accomplished" class="col-4 col-form-label">Accomplished</label> 
                <div class="col-8">
                    <input id="accomplished" name="accomplished" value="<?=$content->accomplished?>" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="accomplished" class="col-4 col-form-label">Are your sure to delete this content?</label> 
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Delete Content</button>
                    <a class="btn btn-primary" href="<?=base_url()?>content/index" role="button">Back</a>
                </div>
            </div>
        </form>
        
</div>
<?=$this->endsection('content') ?>