<h2>
    <?= $headingTitle ?>
</h2>
</style>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 class="display-5">User Information</h3>
    <a href="index.php?controller=user">Back</a>

</div>
<div class="container">
    <form action="index.php?controller=user&action=store" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="fullname" class="col-sm-3 col-form-label">Full name</label>
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Họ và tên" />
        </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label">Email</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="Email của bạn" />
</div>
</div>

<div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
    <input type="text" id="phone" name="phone" class="form-control" placeholder="phone của bạn" />
</div>
</div>

<div class="form-group row">
    <label for="address" class="col-sm-3 col-form-label">Address</label>

    <input type="text" id="address" name="address" class="form-control" placeholder="Địa chỉ của bạn" />
</div>
</div>

<div class="form-group row">
    <label for="gender" class="col-sm-3 col-form-label">Gender</label>

    <label><input type="radio" id="male" name="gender" value="1" /> Nam</label>
    <label><input type="radio" id="female" name="gender" value="2" /> Nữ</label>
</div>
</div>
<div class="form-group row">
    <label for="file" class="col-sm-3 col-form-label">Avatar</label>
    <input type="file" id="file" name="file" class="form-control" />
</div>
</div>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label"></label>

    <button type="submit" name="btn-submit" class="btn btn-primary">Save</button> &nbsp;
    <button type="reset" class="btn btn-danger">Cancel</button>
</div>
</div>
</form>
</div>