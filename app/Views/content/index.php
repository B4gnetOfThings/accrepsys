<!--MASTER PAGE-->
<?=$this->extend('content/layout/main')?>
<!--LOADING THE CONTENT-->
<?=$this->section('content') ?>
<div class="container">
    <h1> Accomplishment Report Maker </h>

    

    <table class="greenTable">
        <thead class="table-success">
        <tr class>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Achieve</th>
            <th scope="col">Target Outcome</th>
            <th scope="col">Activities</th>
            <th scope="col">Accomplished</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($content as $item) : ?>
                <tr>
                    <td><?=$item->id?></td>
                    <td><?=$item->targetdate?></td>
                    <td><?=$item->achieve?></td>
                    <td><?=$item->targetoutcome?></td>
                    <td><?=$item->activities?></td>
                    <td><?=$item->accomplished?></td>
                    <td>
                    <a class="btn btn-warning" href="<?=base_url()?>content/edit/<?=$item->id?>" role="button">Edit</a>
                    <a class="btn btn-danger" href="<?=base_url()?>content/delete/<?=$item->id?>" role="button">Delete</a>
                    </td>
                </tr>
        <?php endforeach;?>
        </tbody>
    </table>

</div>
<?=$this->endsection('content') ?>