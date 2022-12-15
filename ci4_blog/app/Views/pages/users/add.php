<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card rounded-0">
    <div class="card-header">
        <div class="d-flex w-100 justify-content-between">
            <div class="col-auto">
                <div class="card-title h4 mb-0 fw-bolder">Add New User</div>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('Main/users') ?>" class="btn btn btn-light bg-gradient border rounded-0"><i class="fa fa-angle-left"></i> Back to List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('Main/user_add/') ?>" method="POST">
                <?php if($session->getFlashdata('error')): ?>
                    <div class="alert alert-danger rounded-0">
                        <?= $session->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <?php if($session->getFlashdata('success')): ?>
                    <div class="alert alert-success rounded-0">
                        <?= $session->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="email" class="control-label">Name</label>
                    <div class="input-group rounded-0">
                        <input type="text" class="form-control rounded-0" id="name" name="name" autofocus placeholder="John Smith" value="<?= !empty($request->getPost('name')) ? $request->getPost('name') : '' ?>" required="required">
                        <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-user"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="control-label">Email</label>
                    <div class="input-group rounded-0">
                        <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="jsmith@mail.com" value="<?= !empty($request->getPost('email')) ? $request->getPost('email') : '' ?>" required="required">
                        <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-at"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">Password</label>
                    <div class="input-group rounded-0">
                        <input type="password" class="form-control rounded-0" id="password" name="password" placeholder="**********" required>
                        <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="control-label">Confirm Password</label>
                    <div class="input-group rounded-0">
                        <input type="password" class="form-control rounded-0" id="cpassword" name="cpassword" placeholder="**********" required>
                        <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-key"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="type" class="control-label">Type</label>
                    <select class="form-select rounded-0" id="type" name="type" required>
                        <option value="1">Administrator</option>
                        <option value="2">Author</option>
                    </select>
                </div>
                <div class="d-grid gap-1">
                    <button class="btn rounded-0 btn-primary bg-gradient">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>