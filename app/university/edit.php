<?php 
    include '../../js/function_db.php';
    $sql = "SELECT * FROM university WHERE uni_id = '".$_POST['id']."'";
    $result = selectSql($sql);
    foreach ($result as $row){};
 ?>

<h5>แก้ไขชื่อมหาวิทยาลัย</h5>
<input type="text" id="uni_name" value="<?php echo $row['uni_name'] ?>" placeholder="ชื่อมหาวิทยาลัย">
<br/>
<button type="button" name="button" onclick="Edit('<?php echo $_POST['id'] ?>');">
แก้ไข
</button>
<button type="button" name="button" onclick="showlist();">
ยกเลิก
</button>