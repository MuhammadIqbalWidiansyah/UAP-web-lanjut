<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- component -->
<div style="background-color : #f4f4f0" class=" sm:mx-32 lg:mx-32 xl:mx-72 ">
<div class="flex justify-between container mx-auto">
<div class="w-full">
<div class="mt-3 px-3">
<h1 class="text-3xl font-semibold py-7 px-5">transaksi</h1>
</h1>

<form class="mx-5 my-5">
<label class="relative block p-3 border-2 border-black rounded" htmlFor="name">
  <span class="text-md font-semibold text-zinc-900" htmlFor="name">
    Id
  </span>
  <input class="w-full bg-transparent p-0 text-sm  text-gray-500 focus:outline-none" id="name" type="text" placeholder="A123" />
</label>

<label class="relative block p-3 border-2 mt-5 border-black rounded" htmlFor="name">
  <!-- component -->
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Produk
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Jumlah
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Harga
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                Night Cream
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                1
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Rp 151.500
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</label>


<label class="relative block p-3 border-2  mt-5 border-black rounded" htmlFor="name">
  <span class="text-md font-semibold  text-zinc-900" htmlFor="name">
    Total
  </span>

  <input class="w-full read-only:bg-zinc-800  p-0 text-sm bg-transparent text-gray-500 focus:outline-none" id="name" type="text" placeholder="Rp 151.500" />
</label>

<label class="relative block p-3 border-2 mt-5 border-black rounded" htmlFor="name">
  <span class="text-md font-semibold  text-zinc-900" htmlFor="name">
    Paypal Me
  </span>

  <input class="w-full read-only:bg-zinc-800  p-0 text-sm bg-transparent text-gray-500 focus:outline-none" id="name" type="text" placeholder="ie : paypal.me/yubashika" />
</label>


</div>
</div>
</div>

<?= $this->endSection() ?>