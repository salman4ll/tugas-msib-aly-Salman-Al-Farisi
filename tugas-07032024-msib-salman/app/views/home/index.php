
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Database Pasar Distribusi Jagung</h6>
    </div>
    <div class="d-grid gap-2 d-md-block ml-2 mt-2">
      <a class="btn btn-primary" href="form.php" role="button">Add Data</a>
    </div>
    <!-- Table -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pasar</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $number = 1;
            foreach ($data['peserta'] as $peserta) : ?>
              <tr>
                <td><?= $number ?></td>
                <td>
                  <?= $peserta['name_product'] ?>
                </td>
                <td>
                  <?= $peserta['description'] ?>
                </td>
                <td>
                  <?= $peserta['price'] ?>
                </td>
                <td>
                  <?= $peserta['stock'] ?>
                </td>
                <td>
                  <?= $peserta['name_category'] ?>
                </td>
                <td>
                  <a style="margin-bottom: 2px;" class="btn btn-success btn-sm py-1 px-2 halUpdate" href="<?= BASEURL; ?>/product/edit/<?= $peserta['id_product']; ?>" data-id="<?= $peserta['id_product'] ?>">Edit</a>
                  <a style="margin-bottom: 2px;" class="btn btn-danger btn-sm py-1 px-2" href="<?= BASEURL; ?>/product/delete/<?= $peserta['id_product']; ?>" onclick="return confirm('Apakah Kamu Yakin Menghapus Data <?= $peserta['name_product']; ?>')">Delete</a>
                </td>
              </tr>
            <?php $number++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding:40px;">
  <p>Just paste your google form URL into the action attribute and you will have a working custom form that you can style as you'd like!</p>
  <br/>
  <form action="https://docs.google.com/forms/d/e/1FAIpQLSfYzqGriJLvrcGl1fsyNiijTRZZsPOuFfR3miNNh_XYefuGeA/formResponse" method="post" id="application-form" target="_blank">
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <input type="text" name="entry.2005620554" value="" class="form-control name" id="entry_2005620554" dir="auto" aria-label="Name  " aria-required="true" placeholder="Name">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <input type="text" name="entry.1045781291" value="" class="form-control email" id="entry_1045781291" dir="auto" aria-label="Email  " aria-required="true" placeholder="Email">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <input type="text" name="entry.1166974658" value="" class="form-control phone" id="entry_1166974658" dir="auto" aria-label="Phone Number  " aria-required="true" placeholder="Phone">
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <input type="submit" id="submit" class="btn btn-custom" name="submit" value="Submit Test Form">
      </div>
    </div>
</form>
</div>