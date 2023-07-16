<h3><?= $headingTitle ?></h3>

<div class="container">
    <form action="<?= $actionUrl ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="family_name" class="col-sm-3 col-form-label">Family name</label>
            <input type="text" id="family_name" name="family_name" value="<?= $family->family_name ?? null ?>" class="form-control" placeholder="" />
            <?= $errorMessage['family_name'] ?? null ?>
        </div>

        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <input type="text" id="address" name="address" value="<?= $family->address ?? null ?>" class="form-control" placeholder="Address" />
        </div>

        <div class="form-group row">
           <button type="submit" name="btn-save">Save Family</button>
        </div>
    </form>
</div>