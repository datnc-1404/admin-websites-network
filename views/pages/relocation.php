<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header('Location: index.php?controller=pages&action=login');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản trị | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../websites/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../websites/assets/dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- datatable  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.semanticui.min.css">
</head>
<!-- Custom CSS for Dropdown Button -->
<style>
        /* Remove the arrow from the dropdown button */
        .dropdown-toggle::after {
            display: none;
        }
        
        /* Style the button with padding */
        .dropdown-toggle {
            padding: 0.375rem 0.75rem;
        }
    </style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Trang chủ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Liên hệ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../websites/assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../websites/assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../websites/assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?controller=pages&action=dashboard" class="brand-link">
      <img src="../websites/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Quản lý</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../websites/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <div class="row">
            <a href="#" class="d-block col"><?php echo $_SESSION['username'];?></a>
            <a href="#" class="d-block col">Đăng xuất</a>
            </div>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=pages&action=dashboard" class="nav-link ">
                <i class="manage bi bi-list"></i>
                  <p>Quản lý chung</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=employees&action=index" class="nav-link">
                <i class="staff bi bi-person-fill"></i>
                <p>
                  Danh sách nhân viên
                </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=customers&action=index" class="nav-link">
                <i class="guest bi bi-people-fill"></i>
                <p>
                  Danh sách khách hàng
                </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=contracts&action=index" class="nav-link">
                <i class="contract bi bi-journal"></i>
                <p>
                  Danh mục hợp đồng
                </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=install&action=index" class="nav-link">
                <i class="new bi bi-gear-wide-connected"></i>
                <p>
                  Hồ sơ lắp đặt mới
                </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=relocation&action=index" class="nav-link active">
                <i class="go bi bi-box-seam"></i>
                  <p>
                    Hồ sơ di dời
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?controller=repair&action=index" class="nav-link">
                <i class="tools bi bi-tools"></i>
                  <p>
                    Hồ sơ sửa chữa
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?controller=unuse&action=index" class="nav-link">
              <i class="cut bi bi-scissors"></i>
              <p>
                Ngưng sử dụng
              </p>
              </a>
            </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?controller=ggmap&action=index" class="nav-link">
              <i class="bi bi-geo-alt"></i>
              <p>
              Bản đồ phân bố lắp đặt
              </p>
              </a>
            </li>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Hồ sơ lắp đặt mới</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                  <li class="breadcrumb-item active">Hồ sơ lắp đặt mới</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="content">
        <table id="contractTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Mã di dời</th>
                    <th>Nơi di dời đến</th>
                    <th>Ngày lập hồ sơ</th>
                    <th>Ngày di dời</th>
                    <th>Mã hợp đồng</th>
                    <th>Mã khách hàng</th>
                    <th>Mã nhân viên</th>
                    <th>Duyệt</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu sẽ được load ở đây -->
            </tbody>
        </table>
        </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../websites/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../websites/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../websites/assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../websites/assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../websites/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../websites/assets/dist/js/pages/dashboard3.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
<script>

  var dataTable;
    $(document).ready(function () {
        dataTable= $('#contractTable').DataTable({
          ajax: 'index.php?controller=relocation&action=getRelocationList',
          columns: [ 
            { data: 'id' },
            { data: 'location' },
            { 
              data: 'date_founded',
              render: function(data, type, row) {
                    if (type === 'display') {//kiểm tra xem có phải loại thao tác hiển thị hay ko
                        // Chuyển định dạng ngày tháng
                        var parts = data.split('-');
                        return parts[2] + '-' + parts[1] + '-' + parts[0];
                    }
                    return data;
                }
            },
            { 
              data: 'date_relocation',
              render: function(data, type, row) {
                    if (type === 'display') {//kiểm tra xem có phải loại thao tác hiển thị hay ko
                        // Chuyển định dạng ngày tháng
                        var parts = data.split('-');
                        return parts[2] + '-' + parts[1] + '-' + parts[0];
                    }
                    return data;
                }
            },
            { data: 'id_contract'},
            { data: 'id_customer' },
            { data: 'id_employee' },
            { data: 'status' },
            { 
              data : null ,
              render: function(data, type, row) {
                    if (type === 'display') {
                        return `
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Cập nhật</a>
                                    <a class="dropdown-item btn-delete" data-id="`+ data.id +`" href="#">Xóa</a>
                                </div>
                            </div>
                        `;
                    }
                    return data;
                }
            }
        
          ]
        });
    });

    // Bắt sự kiện click trên các mục dropdown-item
    $(document).on('click', '.dropdown-item.btn-delete', function(e) {
        e.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

        // Lấy giá trị của thuộc tính data-id từ phần tử <a> được click
        var id = $(this).data('id');
    
        // Kiểm tra xem id đã được lấy chưa (để debug, có thể in ra console)
        console.log('ID của dữ liệu cần xóa:', id);

         // Hiển thị hộp thoại xác nhận xóa sử dụng SweetAlert2
        Swal.fire({
            title: 'Bạn chắc chắn muốn xóa?',
            text: "Hành động này sẽ xóa dữ liệu vĩnh viễn!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng xác nhận xóa, gọi hàm deleteData để xóa bằng AJAX
                deleteData(id);
            }
        });
    });

    // Hàm thực hiện xóa dữ liệu bằng AJAX
function deleteData(id) {
    // Gửi yêu cầu xóa bằng AJAX
    $.ajax({
        url: 'index.php?controller=relocation&action=deleteRelocationById',
        type: 'POST',
        data: { id: id },
        success: function(response) {
            // Phân tích kết quả trả về từ server
            var data = JSON.parse(response);
            if (data.success) {
                // Nếu xóa thành công, hiển thị thông báo thành công bằng SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: data.message,
                });
                // Tải lại dữ liệu DataTables sau khi xóa thành công
                dataTable.ajax.reload();
            } else {
                // Nếu xóa không thành công, hiển thị thông báo lỗi bằng SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: data.message,
                });
            }
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi
            console.error('Lỗi xóa:', error);
            // Hiển thị thông báo lỗi cho người dùng (nếu cần)
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: 'Đã xảy ra lỗi khi xóa nhân viên.',
            });
        }
    });
}
</script>
</body>
</html>