<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
  
  <!-- Login component -->
  <div class="flex shadow-md">
    <!-- Login form -->
    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
      <div class="w-72">
        <!-- Heading -->
        <h1 class="text-xl font-semibold"><?=lang('Auth.loginTitle')?></h1>

        <!-- Form -->
        <form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>

            
          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold"><?=lang('Auth.email')?></label>
            <input type="email"  name="login" placeholder="<?=lang('Auth.email')?>" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" />
              <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
          </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold"><?=lang('Auth.password')?></label>
            <input type="password" placeholder="<?=lang('Auth.password')?>" name="password"  class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" />
              <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
          </div>

          <div class="mb-3">
            <button type="submit" class="mb-1.5 block w-full text-center text-white bg-teal-500 hover:bg-purple-900 px-2 py-1.5 rounded-md"><?=lang('Auth.loginAction')?></button>
          </div>
        </form>

        <!-- Footer -->
        <div class="text-center">
          <a href="<?= url_to('register') ?>" class="text-xs font-semibold text-teal-400"><?=lang('Auth.needAnAccount')?></a> 
        </div>
        
      </div>
    </div>

    <!-- Login banner -->
    <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 32rem; height: 32rem;">
      <img class="w-full h-full bg-center bg-no-repeat r rounded-r-md" src="<?php echo base_url('images/restiqa.jpg'); ?>">
    </div>

  </div>
</div>
<?= $this->endSection(); ?>