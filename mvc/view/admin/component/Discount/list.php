<?php require_once('mvc/view/admin/index.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh Sách Tài Khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>code</th>
                      <th>name</th>
                      <th>discount_number	</th>
                      <th>quantity</th>
                      <th>begin</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $key => $value): ?>
                      <tr>
                        <td>1.</td>
                        <td><?= $value['code'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['discount_number'] ?></td>
                        <td><?= $value['quantity'] ?></td>
                        <td><?= $value['begin'] ?></td>
                        <td>
                          <span class="badge badge-success"><a href="eidt_discount?id=<?=$value['id']?>"><i class="fas fa-edit" style = "color: #ffff;"></i></a></span>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
    </div>
  </div>
  <script src="public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('mvc/view/admin/footer.php'); ?>