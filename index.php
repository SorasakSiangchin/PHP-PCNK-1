<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-3.7.1.min.js" charset="utf-8"></script>
    <script >
      function kru (){
        $('#bever').val();
        alert('Ok bever');
        alert($('#in').val());
      }
    </script>
  </head>

  <body>
    <a id="bever" href="" onclick="kru()">on click</a><br/>
    <input type="text" id="in" /><br/>

     <?php
      include 'js/function_db.php'; //เรียกใช้ไฟล์อื่นมาใช้ในหน้านี้

      $sql = "SELECT * FROM users ";
      $sql .= " LEFT JOIN university ON use_uni_id = uni_id";
      // echo $sql;
      $result = selectSql($sql);

      // echo count($result);
      foreach ($result as $row) {
    ?>

 <div onclick="del('<?php echo $row['use_email']; ?>');">
   <?php echo $row['use_fname']; ?>
 </div>
    <?php  } ?>
      <br>
      <h4>ชื่อมหาวิทยาลัย</h4>
      <div id="showmain">
        แสดงข้อมูล
      </div>
    <script>
      function showUni() {
        $('#showmain').load('app/university/show.php'); //ดึงหน้าอื่นมาใช้ 
      }
      showUni();
    </script>

  </body>
</html>
