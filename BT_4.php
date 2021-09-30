<html>
<head>
     <title> Thông tin người dùng</title>
     <style>
          *{
               font-size: 30px;
          }
          td{
               margin: 10px;
               padding: 10px;
          }
          input[type='radio'], input[type='checkbox']{
               width: 20px;
               height: 20px;
          }
     </style>
</head>
<body>
     <?php
          $ht='';
          $dc='';
          $sdt='';
          $gt='';
          $qt='';
          $m1='';
          $m2='';
          $m3='';
          $m4='';
          $gc='';
          if(isset($_POST['ht']))
               $ht=$_POST['ht'];
          if(isset($_POST['dc']))
               $dc=$_POST['dc'];
          if(isset($_POST['sdt']))
               $sdt=$_POST['sdt'];
          if(isset($_POST['gt']))
               $gt=$_POST['gt'];
          if(isset($_POST['qt']))
               $qt=$_POST['qt'];
          if(isset($_POST['m1']))
               $m1=$_POST['m1'];
          if(isset($_POST['m2']))
               $m2=$_POST['m2'];
          if(isset($_POST['m3']))
               $m3=$_POST['m3'];
          if(isset($_POST['m4']))
               $m4=$_POST['m4'];
          if(isset($_POST['gc']))
               $gc=$_POST['gc'];
               
     ?>
     <fieldset style='<?php if(isset($_POST['tinh'])) echo"border:0"; ?>'>
          <?php
          if(!isset($_POST['tinh']))
              echo "<legend>Enter your information</legend>";
          else
               echo "<h3>Bạn đã nhập thông tin thành công, dưới đây là những thông tin bạn nhập:</h3>" 
               ?>
          <form action="" method="post">
               <table>
                    
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo "<tr>
                                        <td>
                                             Họ tên
                                        </td>
                                        <td><input type='text' name='ht'></td>
                                        </tr>";
                                   else
                                        echo "<tr>
                                        <td>
                                             Họ tên: $ht
                                        </td></tr>";
                              ?>
                         
                    <tr>
                         
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo "<td>
                                        Địa chỉ:
                                   </td>
                                   <td><input type='text' name='dc'></td>
                                   </tr>";
                                   else
                                        echo "<td>
                                        Địa chỉ: $dc
                                   </td>
                                   <td>";
                              ?>
                              
                         
                    <tr>
                         
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo "<td>
                                        Số điện thoại:
                                   </td>
                                   <td><input type='text' name='sdt'></td>
                                   </tr>";
                                   else
                                        echo "<td>
                                        Số điện thoại: $sdt
                                   </td>
                                   <td>";
                              ?>
                         
                    <tr>
                         
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo "<td>
                                        Giới tính:
                                   </td>
                                   <td><input type='radio' value='Nam' name='gt' > Nam  <input type='radio' value='Nữ' name='gt' > Nữ </td>
                                   </tr>";
                                   else
                                        echo "<td>
                                        Giới tính: $gt
                                   </td>
                                   <td>";
                              ?>
                              
                        
                    <tr>
                         
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo "<td>
                                        Quốc tịch:
                                   </td>
                                   <td><select name='qt'>
                                        <option value='Việt Nam'>
                                             Việt Nam
                                        </option>
                                        <option value='Nhật'>
                                             Nhật
                                        </option>
                                   </select></td>
                                   </tr>";
                                   else
                                        echo "<td>
                                        Quốc tịch: $qt
                                   </td>
                                   <td>";
                              ?>
                              
                         
                    <tr>
                         
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo "<td>
                                        Các môn đã học:
                                   </td>
                                   <td><input type='checkbox' name='m1' value='PHP & MySQL'>
                                        PHP & MySQL
                                        <input type='checkbox' name='m2' value='C#'>
                                        C#
                                        <input type='checkbox' name='m3' value='XML'>
                                        XML
                                        <input type='checkbox' name='m4' value='Python'>
                                        Python </td>
                                        </tr>";
                                   else
                                       {
                                        $cmdh='';
                                        if($m1!='')
                                             $cmdh=$m1;
                                        if($m2!='')
                                             $cmdh=$cmdh.', '.$m2;
                                        if($m3!='')
                                             $cmdh=$cmdh.', '.$m3;
                                        if($m4!='')
                                             $cmdh=$cmdh.', '.$m4;
                                        echo "<td>
                                        Các môn đã học: $cmdh
                                   </td>
                                   <td>";
                                       }
                              ?>
                        
                    <tr>
                        
                              <?php
                                   if(!isset($_POST['tinh']))
                                        echo " <td>
                                        Ghi chú:
                                   </td>
                                   <td><Textarea name='gc' cols='40' rows='5'>
                                        </Textarea></td>
                                        </tr>";
                                   else
                                        echo " <td>
                                        Ghi chú: $gc
                                   </td>
                                   <td>";
                              ?>
                    <tr>
                         <?php
                         if(!isset($_POST['tinh']))
                              echo" <td colspan='2' align='center'>
                              <input type='submit' value='Gửi' name='tinh'>
                              <input type='Reset' value='Hủy'>
                              </td>";
                         else 
                              echo"<td><a href='javascript:window.history.back(-1);'>Trở lại trang trước</a></td>";
                         ?>
                    </tr>
               </table>
          </form>
     </fieldset>
</body>
</html>