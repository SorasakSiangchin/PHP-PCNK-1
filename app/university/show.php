<button type="button" name="button" onclick="showAdd();">
เพิ่ม
</button>

<input id="searchs" type="text" onkeyup="showlist();" placeholder="ค้นหา"><br> <!-- onkeyup เมื่อพิมพ์จะทำงานเลย  -->

<div id="show">
</div>

<script>
  const showlist = () => {
    $.post('app/university/pro.php',{
      status : "r" ,
      search : $('#searchs').val() ,
    }, data => {
      //alert(data);
      $('#show').html(data); //ส่งกลับมาทั้งหน้า
    });
  };
  showlist();

  const del = (id , name) => {
   if(confirm(`คุณต้องการลบ  ${name}  หรือไม่ !`)){
    $.post('app/university/pro.php',
    {
      status : "d" ,
      id : id ,

    },data => {
      if(data == 'ok'){
        alert('ลบข้อมูลสำเร็จ');
        showlist();
      }else{
        alert('ลบข้อมูลไม่สำเร็จ');
        alert(data);
      }
    });
   }
  };

  const showAdd = () => {
    $('#show').load('app/university/add.php');
  };

  const Add = () => {
    $.post('app/university/pro.php', {
      status : "c" ,
      uni_name : $("#uni_name").val(),
    } , data => {
      alert(data);
      showlist();
      alert('บันทึกข้อมูลสำเร็จ');
    });
  };

  const showEdit = (id) => {
    $('#show').load('app/university/edit.php' , {id});
  };

  const Edit = (id) => {
    $.post('app/university/pro.php', {
      status : "u" ,
      uni_name : $("#uni_name").val(),
      id : id
    } , data => {
      alert(data);
      showlist();
      alert('แก้ไขข้อมูลสำเร็จ');
    });
  };




</script>
