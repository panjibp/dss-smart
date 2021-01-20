<div class="container" style="margin-top: 110px;">
  
  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-4 mx-auto">
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 mb-4" style="color: grey">Halaman Login</h1>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <form class="user" method="post" action="<?= base_url('auth'); ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-fw fa-user"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-fw fa-lock"></span>
            </div>
          </div>
          <div class="input-group">
            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
          </div>
        </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <hr>

      <div class="text-center">
        <a href="<?= base_url('auth/registration'); ?>">Register</a>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->