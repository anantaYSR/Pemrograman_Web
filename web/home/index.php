<?php

session_start();
?>

<?php  require_once('../../layouts/web/header.php') ?>
<!-- MAIN -->
<main class="min-h-screen">
  <section class="hero min-h-[60vh] bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Berkarya, Berbagi</h1>
        <p class="py-6">Temukan jurnal, penelitian, dan karya ilmiah berbagai subjek dari mereka yang penuh rasa penasaran.</p>
        <div class="form-control">
          <div class="input-group justify-center">
            <input type="text" placeholder="Machine Learning..." class="input input-bordered" />
            <button class="btn btn-square">
              <div class="fa-solid fa-search"></div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="trending" class="lg:px-48 px-8 py-8">
    <h1 class="text-xl text-bold">
      <i class="fa-regular fa-star mr-3"></i>
      <span>Paling Banyak Dicari</span>
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="card bg-base-100 shadow-md h-[130px]">
        <div class="card-body pr-5 py-7 pl-0">
          <div class="flex">
            <div class="pr-4 pl-4 flex align-center">
              <h2 class="text-3xl text-base-300 font-bold"><span>01</span></h2>
            </div>
            <div class="card-content">
              <div class="avatar flex align-center justify-center">
                <div class="w-5 rounded-full">
                  <img src="https://placeimg.com/192/192/people" alt="Tailwind-CSS-Avatar-component" />
                </div>
                <p class="text-sm ml-2"><span>Bayu Setiawan</span></p>
              </div>
              <h3 class="card-title mt-2 text-base">Image Generation Announcement!</h3>
              <div class="alt-info-container"
                <span class="text-xs">Okt 1</span>
                <span class="ml-3 badge p-2">Machine Learning</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md h-[130px]">
        <div class="card-body pr-5 py-7 pl-0">
          <div class="flex">
            <div class="pr-4 pl-4 flex align-center">
              <h2 class="text-3xl text-base-300 font-bold"><span>01</span></h2>
            </div>
            <div class="card-content">
              <div class="avatar flex align-center justify-center">
                <div class="w-5 rounded-full">
                  <img src="https://placeimg.com/192/192/people" alt="Tailwind-CSS-Avatar-component" />
                </div>
                <p class="text-sm ml-2"><span>Bayu Setiawan</span></p>
              </div>
              <h3 class="card-title mt-2 text-base">Image Generation Announcement!</h3>
              <div class="alt-info-container"
                <span class="text-xs">Okt 1</span>
                <span class="ml-3 badge p-2">Machine Learning</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-base-100 shadow-md h-[130px]">
        <div class="card-body pr-5 py-7 pl-0">
          <div class="flex">
            <div class="pr-4 pl-4 flex align-center">
              <h2 class="text-3xl text-base-300 font-bold"><span>01</span></h2>
            </div>
            <div class="card-content">
              <div class="avatar flex align-center justify-center">
                <div class="w-5 rounded-full">
                  <img src="https://placeimg.com/192/192/people" alt="Tailwind-CSS-Avatar-component" />
                </div>
                <p class="text-sm ml-2"><span>Bayu Setiawan</span></p>
              </div>
              <h3 class="card-title mt-2 text-base">Image Generation Announcement!</h3>
              <div class="alt-info-container"
                <span class="text-xs">Okt 1</span>
                <span class="ml-3 badge p-2">Machine Learning</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="hero min-h-[60vh] bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Berkarya, Berbagi</h1>
        <p class="py-6">Temukan jurnal, penelitian, dan karya ilmiah berbagai subjek dari mereka yang penuh rasa penasaran.</p>
        <div class="form-control">
          <div class="input-group justify-center">
            <input type="text" placeholder="Machine Learning..." class="input input-bordered" />
            <button class="btn btn-square">
              <div class="fa-solid fa-search"></div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php  require_once('../../layouts/web/footer.php') ?>