<?php
require 'core/init.php';

if(!isset($_SESSION['user'])){
  header('Location: login');
}
    //pagination
    $perpage  = 8; //per halaman
    $page     = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $start    = ($page > 1) ? ($page * $perpage) - $perpage : 0;

    $query    = "SELECT * FROM siswa ORDER BY nama LIMIT $start, $perpage";
    $hasil    = mysqli_query($link, $query);

    $result   = mysqli_query($link, "SELECT * FROM siswa");
    $total    = mysqli_num_rows($result);

    $pages = ceil($total/$perpage);

    //query tampilkan data
    $siswa = query($query);

    if (isset($_GET['q'])) {
        $keyword = $_GET['q'];
        $siswa   = cari($_GET['q']);
    }
require 'view/header.php';
?>

<div class="container" id="margin2">
<?php if (isset($_SESSION['welcome'])): ?>
  <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?= $_SESSION['welcome'];?>
</div>
<?php unset($_SESSION['welcome']); ?>
<?php endif; ?>
</div>
   <div class="container" style="margin-top: -30px">
        <div class="page-header">
          <?php if (cek_status($_SESSION['user']) == 1): ?>
            <a href="tambah" class="btn btn-default" style="float: right;">
               <i class="fa fa-pencil" aria-hidden="true"></i> Tambah
             </a>
          
            <div class="dropdown" style="position: absolute;right: 213px">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="fa fa-user" aria-hidden="true"></i>
                <?= $_SESSION['user']; ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                <li><a href="/user">Edit Profil</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="logout">Logout</a></li>
              </ul>
            </div>
            <?php else: ?>
            <div class="dropdown" style="position: absolute;right: 100px">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="fa fa-user" aria-hidden="true"></i>
                <?= $_SESSION['user']; ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                <li><a href="/user">Edit Profil</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="logout">Logout</a></li>
              </ul>
            </div>
          <?php endif; ?>
                  <h2><i class="fa fa-fire"></i> Data Siswa Kelas XI TIA</h2>
        </div>
  <p><?= "Banyak data siswa kelas XI TIA " . "<b>$total</b>" . " orang"; ?></p>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" name="q" placeholder="Cari siswa disini.."           value="<?php echo (isset($keyword))?$keyword:'';?>">
     </div>
  </form>
  <br>
  <table class="table table-striped table-hover">
    <tr class="active">
        <th style="margin-left: 5px;">No</th>
        <th>Foto</th>
        <th>NIS<i class="fa fa-sort sort" aria-hidden="true"></i></th>
        <th>Nama<i class="fa fa-sort sort" aria-hidden="true"></i></th>
        <th>Email<i class="fa fa-sort sort" aria-hidden="true"></i></th>
        <th>Jurusan<i class="fa fa-sort sort" aria-hidden="true"></i></th>
        <?php if (cek_status($_SESSION['user']) == 1): ?>
        <th>Aksi</th>
        <?php endif; ?>
    </tr>
    <?php if (mysqli_num_rows($siswa) == 0){ ?>
      <tr>
        <td colspan="8" class="text-center"><strong>Hasil Pencarian untuk <i style="color: #2C4582;"><?= $keyword; ?></i> Tidak Ditemukan</strong></td>
      </tr>
    <?php }else{ ?>
    <?php $i = $start + 1; ?>
    <?php foreach ($siswa as $row) : ?>
        <tr>
        <td style="margin-left: 5px;"><?= $i; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>"></td>
        <td><?= $row["nis"]; ?></td>
        <td><a href="profile?name=<?php echo urlencode($row["nama"]); ?>"><?= $row["nama"]; ?></a></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <?php if (cek_status($_SESSION['user']) == 1): ?>
        <td>
            <a href="edit?name=<?php echo urlencode(strtolower($row["nama"])); ?>" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            <a href="hapus?name=<?php echo urlencode(strtolower($row["nama"])); ?>" title="Hapus Data" data-toggle="tooltip" class="btn btn-danger btn-sm" onclick="return confirm('Yakin gan mau hapus data <?= $row['nama']; ?>?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
        <?php endif; ?>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
  <?php } ?>
        </table>
    <?php if (!isset($_GET['q'])) { ?>
   <nav aria-label="Page navigation" style="margin-top: -20px">
      <ul class="pagination">
          <?php if ($page > 1): ?>
        <li>
             <a href="?halaman=<?= $page - 1; ?>">&laquo;</a>
        </li>
        <?php else: ?>
        <li class="disabled">
            <a href="#">&laquo;</a>
          <?php endif; ?>
        </li>
        <?php for ($i = 1; $i<=$pages; $i++) { ?>
        <?php $link_active = ($page == $i)? 'class="active"': ''; ?>
        <li <?php echo $link_active; ?>>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        </li>
        <?php } ?>
        <?php if ($page == $pages): ?>
        <li class="disabled">
           <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
           </a>
       </li>
        <?php else: ?>
       <li>
           <a href="?halaman=<?= $page + 1; ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
           </a>
       </li>
      <?php endif; ?>
     </ul>
  </nav>
  <?php } ?>
</div>
<?php require 'view/footer.php'; ?>