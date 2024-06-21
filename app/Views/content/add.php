<!--MASTER PAGE-->
<?=$this->extend('content/layout/main')?>
<!--LOADING THE CONTENT-->
<?=$this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php if (isset($validation)): ?>
    <?=$validation->listErrors() ?>
<?php endif; ?>

<div class="container">
    <form action="<?=base_url()?>content/add" method="POST">
            <div class="form-group row">
                <label for="date" class="col-4 col-form-label">Date</label> 
                <div class="col-8">
                <input id="targetdate" name="targetdate" value="<?=set_value('targetdate')?>" placeholder="YYYY-DD-MM" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="achieve" class="col-4 col-form-label">Achieve</label> 
                <div class="col-8">
                    <select id="achieve" name="achieve" value="<?=set_value('achieve')?>" class="form-control" required="required">
                        <option value="Academic Excellence">Academic Excellence</option>
                        <option value="Creative relevant, and innovative research programs">Creative relevant, and innovative research programs</option>
                        <option value="High impact and transformative extension and outreach programs">High impact and transformative extension and outreach programs</option>
                        <option value="Improved revenue generation and resource management.">Improved revenue generation and resource management.</option>
                        <option value="Vibrant and engaging,  Culturally-focused university campus">Vibrant and engaging,  Culturally-focused university campus</option>
                        <option value="Effective and efficient management">Effective and efficient management</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="targetoutcome" class="col-4 col-form-label">Target Outcome</label> 
                <div class="col-8">
                    <textarea id="targetoutcome" name="targetoutcome" cols="40" rows="5" class="form-control"><?=set_value('targetoutcome')?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="activities" class="col-4 col-form-label">Actvities</label> 
                <div class="col-8">
                    <textarea id="activities" name="activities" cols="40" rows="5" class="form-control"><?=set_value('activities')?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="accomplished" class="col-4 col-form-label">Accomplished</label> 
                <div class="col-8">
                    <input id="accomplished" name="accomplished" value="<?=set_value('accomplished')?>" type="text" class="form-control">
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

