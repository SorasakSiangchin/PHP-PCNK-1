<?php
include "../../js/function_db.php";
// CRUD เป็น RCUD

if($_POST['status']  == "r"){
  $sql = "SELECT * FROM university WHERE uni_id<>0"; //<> คือเครื่องหมายไม่เท่ากับใน php


  if($_POST['search'] != ""){
    $sql .= " AND uni_name LIKE '%".$_POST['search']."%'";
  };

  echo $sql;
  $result = selectSql($sql);

  foreach ($result as $row){ ?>
    <div class="">
      <?php echo $row['uni_name']; ?>
      <button type="button" onclick="showEdit('<?php echo $row['uni_id']; ?>')">
        edit
      </button>
      <button type="button" onclick="del('<?php echo $row['uni_id']; ?>' , '<?php echo $row['uni_name']; ?>');">
        delete
      </button>
    </div>
  <?php }
  }
  elseif($_POST['status'] == 'c'){
    $sql = "INSERT INTO university(uni_name) VALUES ('".$_POST['uni_name']."')";
    in_up_delSql($sql);
    echo "ok";
  }

  elseif($_POST['status'] == 'u'){
    $sql = "UPDATE university SET uni_name = '".$_POST['uni_name']."' WHERE uni_id = '".$_POST['id']."'";
    in_up_delSql($sql);
    echo "ok";
  }

  elseif($_POST['status'] == 'd'){
    $sql = "DELETE FROM `university` WHERE uni_id = '".$_POST['id']."'";
    in_up_delSql($sql);
    echo "ok";
  }
  
?>






