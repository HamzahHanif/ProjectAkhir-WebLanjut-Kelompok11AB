<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3"><?=lang('Auth.loginTitle')?></h3>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
                    
                  <?php if ($config->validFields === ['email']): ?>
                  <div class="form-group">
                  <label for="login"><?=lang('Auth.email')?></label>
                    <input type="email" class="form-control p_input <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                        name="login" placeholder="<?=lang('Auth.email')?>">
                    <div class="invalid-feedback">
						<?= session('errors.login') ?>
					</div>
                  </div>
                  <?php else: ?>
                  <div class="form-group">
                  <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                    <input type="email" class="form-control p_input <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                        name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                    <div class="invalid-feedback">
						<?= session('errors.login') ?>
					</div>
                  </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <label><?=lang('Auth.password')?></label>
                    <input type="password" class="form-control p_input <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                        name="password" placeholder="<?=lang('Auth.password')?>">
                        <div class="invalid-feedback">
							<?= session('errors.password') ?>
						</div>
                  </div>

                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn"><?=lang('Auth.loginAction')?></button>
                  </div>
                  
                  <p class="sign-up"><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <?= $this->endSection(); ?>