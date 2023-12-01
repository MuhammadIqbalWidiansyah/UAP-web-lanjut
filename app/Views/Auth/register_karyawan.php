<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
  
  <!-- Login component -->
  <div class="flex shadow-md">
    <!-- Login form -->
    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
      <div class="w-72">
        <!-- Heading -->
        <h1 class="text-xl font-semibold"><?=lang('Register Karyawan')?></h1>

        

        <!-- Form -->
        <form action="<?= url_to('register') ?>" method="post" class="user">
            <?= csrf_field() ?>
            <input type="hidden" name="role" value="karyawan">
            <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold"><?=lang('Auth.username')?></label>
            <!-- <input type="text" placeholder="<?=lang('Auth.username')?>" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>"/> -->
              <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">

            </div>
            
            <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold"><?=lang('Auth.email')?></label>
            <!-- <input type="email" placeholder="<?=lang('Auth.email')?>" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>"/> -->
              <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
            </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold"><?=lang('Auth.password')?></label>
            <!-- <input type="password" placeholder="<?=lang('Auth.password')?>" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="email" autocomplete="off"/> -->
              <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">

            </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold"><?=lang('Auth.repeatPassword')?></label>
            <!-- <input type="password" name="pass_confirm"  placeholder="<?=lang('Auth.repeatPassword')?>" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"  autocomplete="off"/> -->
              <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">

            </div>

          <div class="mb-3">
            <!-- <button type="submit" class="mb-1.5 block w-full text-center text-white bg-teal-400 hover:bg-purple-900 px-2 py-1.5 rounded-md"><?=lang('Auth.register')?></button> -->
            <button type="submit" class="mb-1.5 block w-full text-center text-white bg-teal-500 hover:bg-purple-900 px-2 py-1.5 rounded-md"><?=lang('Auth.register')?></button>

          </div>
        </form>

        <!-- Footer -->
        <div class="text-center">
          <p><a href="<?= url_to('login') ?>" class="text-xs font-semibold text-teal-400"><?=lang('Auth.alreadyRegistered')?><?=lang('Auth.signIn')?></a></a>
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