<h3><?= $headingTitle ?></h3>

<div class="container">
    <form action="<?= $actionUrl ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $student->name ?? null ?>" placeholder="Name" />
            <span><?= $errorMessage['name'] ?? null ?></span>
        </div>

        <div class="form-group row">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $student->email ?? null ?>" placeholder="Email" />
            <span><?= $errorMessage['email'] ?></span>
        </div>

        <div class="form-group row">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $student->address ?? null ?>" placeholder="Address" />
            <span><?= $errorMessage['address'] ?></span>
        </div>

        <div class="form-group row">
            <label for="gender">Gender</label>
            <label for=""><input type="radio" id="gender" name="gender" value="1" <?=isset($user->gender) && $student->gender == 1 ? 'checked' : null ?>>Nam</label>
            <label for=""><input type="radio" name="gender" id="gender" value="2" <?=isset($user->gender) && $student->gender == 2 ? 'checked' : null ?>>Nữ</label>
            <span><?= $errorMessage['gender'] ?></span>
        </div>

        <div class="form-group row">
            <button type="submit" name="btn-submit">Save Student</button>
        </div>


    </form>
</div>