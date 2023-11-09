<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

    <!-- Container -->
<div class="flex flex-wrap  w-full content-center justify-center ">
  
  <!-- Login component -->
  <div class="flex shadow-2xl">
    <!-- Login form -->
    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
      <div class="w-72">
        <!-- Heading -->
        <h1 class="text-xl font-semibold">Sign Up</h1>

        <!-- Form -->
        <form class="mt-4">
          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold">Username</label>
            <input type="username" placeholder="Enter your username" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
          </div>

        <form class="mt-4">
          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold">Email</label>
            <input type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
          </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold">Password</label>
            <input type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
          </div>

          <div class="mb-3">
            <label class="mb-2 block text-xs font-semibold">Confirm Password</label>
            <input type="confirm password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
          </div>

          <div class="mb-3">
            <button class="mb-1.5 block w-full text-center text-white bg-teal-400 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
          </div>
        </form>

        <!-- Footer -->
        <div class="text-center">
          <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
          <a href="#" class="text-xs font-semibold text-teal-400">Sign In</a>
        </div>
      </div>
    </div>

    <!-- Login banner -->
    <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 32rem; height: 32rem;">
      <img class="w-full h-full bg-center bg-no-repeat r rounded-r-md" src="<?php echo base_url('images/restiqa.jpg'); ?>">
    </div>

  </div>
</div>

<?= $this->endSection() ?>