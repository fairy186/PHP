<html>
<head>
     <meta charset="utf-8">
     <title>01</title>
</head>
<style type="text/css">
     *{ 
          font-weight: bold;
          font-size: 36px;
          margin: 0px; padding: 0px;
     }
     a{
          margin-left: 100px;
          font-size: 24px;
          color: violet;
          font-style:italic
     }
     .content{
          width: 1280;
          border: blue 2px solid;
          margin: 10px auto;
     }
     .content h1{
          font-size: 72px;
          color: red;    
          text-align: center; 
     }
     .content div{
          margin:20px;
     }
     .content form div span{
          text-align: right;
          display: inline-block;
          width: 160px;
     }
     .content form div span:first-child{
          width: 300px;
     }
     input[type=text]{
          color: red;
          padding: 10px 100px;
          border: blue 1px solid;
     }
     input[type=submit]{
          display: block;
          margin: 20px auto;
          padding: 20px 20px;
     }
      input[type=radio]{
          display: inline-block;
          margin: 0px 20px;
          width: 24px;
          height: 24px;
     }
    
</style>
<body>
<?php
     $s1='';
     $s2='';
     $pt='';
     $dpt='';
     $kq='';
     if(isset($_POST['s1']))
          $s1=trim($_POST['s1']);
     if(isset($_POST['s2']))
          $s2=trim($_POST['s2']);
     if(isset($_POST['pt']))
          $pt=trim($_POST['pt']);
     if (isset($_POST['tinh']))
          if (is_numeric($s1) && is_numeric($s2))
               switch ($pt) {
                    case 'cong':
                         $kq = $s1+$s2;
                         $dpt='Cộng';
                         break;
                    case 'tru':
                         $kq = $s1-$s2;
                         $dpt='Trừ';
                         break;
                    case 'nhan':
                         $kq = $s1*$s2;
                         $dpt='Nhân';
                         break;
                    case 'chia':
                         $kq = $s1/$s2;
                         $dpt='Chia';
                         break;
                    }
          else {
               echo "<font color='red'>Vui lòng nhập vào số! </font>";
               $sttt = "";
               }
          
?>
     <div class="content">
          <h1>PHÉP TOÁN TRÊN HAI SỐ</h1>
          <form method="post" action="">
               <div>
                    <span>Phép toán</span>
                    <?php
                         if($dpt=='')
                              echo "<span><input type='radio' value='cong' name='pt'>Cộng</span>
                              <span><input type='radio' value='tru' name='pt'>Trừ</span>
                              <span><input type='radio' value='nhan' name='pt'>Nhân</span>
                              <span><input type='radio' value='chia' name='pt'>Chia</span>";
                         else
                              echo "<span style='color:red;''>$dpt</span>"
                    ?>
               </div>
               <div>
                    <span>Số thứ nhất</span>
                    <input type="text" name="s1" value="<?php echo $s1 ?>">     
               </div>
               <div >
                    <span>Số thứ hai</span>
                    <input type="text" name="s2" value="<?php echo $s2 ?>">
               </div>
               <?php
                    if($kq!='')
                         echo "<div>
                                   <span>Kết quả </span>
                                   <input type='text' value='$kq'>
                              </div>";
               ?>
               <div>
                    <span></span>
                    <?php
                    if($kq=='')
                         echo"<input type='submit' name='tinh' value='xem kết quả'>";
                    else
                         echo"<a href='javascript:window.history.back(-1);'>Trở về trang trước</a>";
                     ?>
               </div>
          </form>
     </div>
</body>