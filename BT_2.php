<html>
<head>
     <title>Tính tiền điện</title>
     <style>
          *{
               font-size: 20px;
               margin: 0px;
               padding: 0px;
          }
          table{
               font-size: 20px;
               background-color: #FFE4C4;
               border: 1px solid black;
               border-collapse: collapse;
          }
          td,th{
               margin: 10px;
               padding: 10px;
          }
     </style>
</head>
<body>
     <?php
          $tch = "";
          $csc = "";
          $csm = "";
          $dg  = "";
          $stt = "";
          if(isset($_POST['tch']))
               $tch = trim($_POST['tch']);
          if(isset($_POST['csc']))
               $csc = trim($_POST['csc']);
          if(isset($_POST['csm']))
               $csm = trim($_POST['csm']);
          if(isset($_POST['dg']))
               $dg = trim($_POST['dg']);
          if(isset($_POST['sttt']))
               $sttt = trim($_POST['sttt']);
          if (isset($_POST['tinh']))
               if (is_numeric($csc) && is_numeric($csm) && is_numeric($dg))
                    $sttt = $dg*($csm-$csc);
               else {
                    echo "<font color='red'>Vui lòng nhập vào số! </font>";
                    $sttt = "";
                    }
     ?>
     <form action="" method="post">
          <table>
               <thead>
                    <th colspan="3" align="center" style="color:red; background-color:#DAA520">
                         <h3>THANH TOÁN TIỀN ĐIỆN</h3>
                    </th>
               </thead>
               <tr>
                    <td>
                         Tên chủ hộ:
                    </td>
                    <td>
                         <input type="text" name="tch" value="<?php if(isset($tch)) echo $tch; ?>"">
                    </td>
               </tr>
               <tr>
                    <td>
                         Chỉ số cũ:
                    </td>
                    <td>
                         <input type="text" name="csc" value="<?php if(isset($csc)) echo $csc; ?>">
                    </td>
                    <td>
                         Kw
                    </td>
               </tr>
               <tr>
                    <td>
                         Chỉ số mới:
                    </td>
                    <td>
                         <input type="text" name="csm" value="<?php if(isset($csm)) echo $csm; ?>">
                    </td>
                     <td>
                         Kw
                    </td>
               </tr>
               <tr>
                    <td>
                         Đơn giá:
                    </td>
                    <td>
                         <input type="text" name="dg" value="<?php if(isset($dg)) echo $dg; ?>">
                    </td>
                     <td>
                         vnđ
                    </td>
               </tr>
               <tr>
                    <td >
                         Số tiền thanh toán:
                    </td>
                    <td >
                         <input type="text" name="sttt" disabled style="background-color:#F08080;" value="<?php if(isset($sttt)) echo $sttt; ?>">
                    </td>
                    <td>
                         vnđ
                    </td>
               </tr>
               <tr>
                    <td colspan="3" align="center">
                         <input type="submit" value="Tính" name="tinh">
                    </td>
               </tr>
          </table>
     </form>
</body>
</html>