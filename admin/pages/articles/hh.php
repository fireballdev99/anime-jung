<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  </head>
  <body>
      
  
<section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Create Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="insert_form" id="insert_form" action="" method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="name">ชื่อเรื่อง</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อเรื่อง">
            </div>

            <div class="form-group">
              <label for="sub_title">เรื่องย่อ</label>
              <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="เรื่องย่อ">
            </div>

            <div class="form-group">
              <label>Upload Image Poster</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile">
                  <label class="custom-file-label" for="customFile">Anime Poster</label>
              </div>
              <figure class="figure text-center d-none mt-2">
                  <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  SEO
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <textarea id="detail" name="detail" style="width: 100%">This is my Contents </textarea>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Select a Category</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
                <option value="ซับไทย">ซับไทย</option>
                <option value="พากย์ไทย">พากย์ไทย</option>
                <option value="เดอะมูฟวี่">เดอะมูฟวี่</option>
                <option value="เดอะมูฟวี่">ยังไม่จบ</option>
                <option value="เดอะมูฟวี่">จบแล้ว</option>
              </select>
            </div>

            <div class="form-group">
              <label>Select a Genre</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select a Genre" style="width: 100%;">
                <option value="Action">Action (ต่อสู้)</option>
                <option value="Adventure">Adventure (ผจญภัย)</option>
                <option value="Comedy">Comedy (ตลก)</option>
                <option value="Demons">Demons (ปีศาจ)</option>
                <option value="Drama">Drama (ดราม่า)</option>
                <option value="Ecchi">Ecchi (ทะลึ่ง)</option>
                <option value="Fantasy">Fantasy (แฟนตาซี)</option>
                <option value="Game">Game (เกม)</option>
                <option value="Harem">Harem (ฮาเร็ม)</option>
                <option value="Historical">Historical (ประวัติศาสตร์)</option>
                <option value="Horror">Horror (สยองขวัญ)</option>
                <option value="Josei">Josei (เด็กผู้หญิง)</option>
                <option value="Magic">Magic (เวทย์มนต์)</option>
                <option value="Martial Arts">Martial Arts (ศิลปะการต่อสู้)</option>
                <option value="Mecha">Mecha (หุ่นยนต์)</option>
                <option value="Military">Military (ทหาร)</option>
                <option value="Music">Music (เพลง)</option>
                <option value="Mystery">Mystery (ลึกลับ)</option>
                <option value="Parody">Parody (ล้อเลียน)</option>
                <option value="Police">Police (ตำรวจ)</option>
                <option value="Psychological">Psychological (จิตวิทยา)</option>
                <option value="Romance">Romance (โรแมนติก)</option>
                <option value="Samurai">Samurai (ซามูไร)</option>
                <option value="School">School (โรงเรียน)</option>
                <option value="Sci-Fi">Sci-Fi (ไซ-ไฟ)</option>
                <option value="Seinen">Seinen (วัยรุ่น)</option>
                <option value="Shoujo">Shoujo (สาวน้อย)</option>
                <option value="Shoujo Ai">Shoujo Ai (ยูริ)</option>
                <option value="Shounen">Shounen (หนุ่มน้อย)</option>
                <option value="Shounen Ai">Shounen Ai (ยาโอย)</option>
                <option value="Slice of Life">Slice of Life (ชีวิตประจำวัน)</option>
                <option value="Space">Space (อวกาศ)</option>
                <option value="Sports">Sports (กีฬา)</option>
                <option value="Super Power">Super Power (พลังพิเศษ)</option>
                <option value="Supernatural">Supernatural (เหนือธรรมชาติ)</option>
                <option value="Thriller">Thriller (ตื่นเต้น)</option>
                <option value="Vampire">Vampire (แวมไพร์)</option>
              </select>
            </div>
          

           <form class="insert-form" id="insert_form" method="post" action="">
           <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  Add Episode
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                
             <div class="input-field">
               <table class="table table-bordered" id="table_field">
                  <tr>
                    <th>Episode Name</th>
                    <th>Link Player</th>
                  </tr>
                  <?php
                    $conn = mysqli_connect("localhost","root","","animejung");
                    if(isset($_POST['save'])){
                      $episode_name = $_POST['episode_name'];
                      $linkplayer = $_POST['linkplayer'];
                      
                      foreach ($episode_name as $key => $value){
                        $save = "INSERT INTO `test`(`episode_name`,`linkplayer`)VALUES('".$value."','".$linkplayer[$key]."')";
                        $query = mysqli_query($conn,$save);
                      }
                    }
                  
                  ?>
                  <tr>
                    <td><input class="form-control" type="text" name="episode_name[]"></td>
                    <td><input class="form-control" type="text" name="linkplayer[]"></td>
                    <td><input class="btn btn-success" type="button" name="add" id="add" value="Add"></td>
                  </tr>
               </table>
               <center>
                 <input class="btn btn-warning "type="submit" name="save" id="save" value="save data">
               </center>
             </div>
                </div>
              </div>
            </div>
                  </form>
          </div>
    
        </form>
      </div>    
    </section>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>

<script>

  // Add input form
  $(document).ready(function(){
    var html = '<tr><td><input class="form-control" type="text" name="episode_name[]" required></td><td><input class="form-control" type="text" name="linkplayer[]" required></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="X"></td></tr>';
    var max = 999;
    var x = 1;

    $("#add").click(function(){
           if(x<=max){
            $("#table_field").append(html);
            x++;
           }
        });
    $("#table_field").on('click','#remove',function(){
            $(this).closest('tr').remove();
            x--;
        });    
  });


  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

    $('.custom-file-input').on('change', function(){
        var fileName = $(this).val().split('\\').pop()
        $(this).siblings('.custom-file-label').html(fileName)
        if (this.files[0]) {
            var reader = new FileReader()
            $('.figure').addClass('d-block')
            reader.onload = function (e) {
                $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0])
        }
    })

    ClassicEditor
      .create(document.querySelector('#detail'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    //Initialize Select2 Elements
    $('.select2').select2()

  });
  
  
</script>
    </body>
    </html>