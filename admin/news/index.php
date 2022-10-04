<?php require_once('../../layouts/admin/header.php') ?>
  <main>
    <div class="flex justify-between align-center  mb-4">
      <h1 class="text-2xl font-bold">Berita</h1>
      <a href="./create.php" class="btn">
        <span>Berita Baru</span>
      </a>
    </div>
    <table class="datatable table w-full">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Job</th>
          <th>Favorite Color</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>Cy Ganderton</td>
          <td>Quality Control Specialist</td>
          <td>Blue</td>
        </tr>
        <tr>
          <th>2</th>
          <td>Hart Hagerty</td>
          <td>Desktop Support Technician</td>
          <td>Purple</td>
        </tr>
        <tr>
          <th>3</th>
          <td>Brice Swyre</td>
          <td>Tax Accountant</td>
          <td>Red</td>
        </tr>
      </tbody>
    </table>
  </main>
<?php  require_once('../../layouts/admin/footer.php') ?>