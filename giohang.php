<?php session_start(); ?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    </head>
    <body>

    <style>
        {box-sizing: border-box;}
            .topnav {
                overflow: hidden;  background-color: white; border-bottom: 1px solid green;
            }
            .topnav a {
                float: left; display: block; color: green; text-align: center; padding: 0px 50px; text-decoration: none; font-size: 30px;
            }
            .topnav a:hover {
                background-color: peachpuff; color: BLACK;
            }
            .topnav a.active {
                background-color: peachpuff; color: white;
            }           
            .topnav .search-container {
                float: right; padding-top: 20px;
            }
            .topnav input[type=text] { 
                padding: 5px; margin-top: 10px; font-size: 14px; border: none; 
            }
            .topnav .search-container button {
                float: right; padding: 8px ; margin-top: 10px; margin-right: 0px; background: #2196F3; font-size: 14px; border: none; cursor: pointer;
            }
            .topnav .search-container button:hover {
                background: #ccc;
            }
            .topnav .btn {
                float: right; padding-left: 50px; margin-top: 0px;
            } 
            
            th, td {
                border: 1px solid black;
                padding: 5px;
            }
            table {
                border-spacing: 50px;
            }
            /*Slogan */
#p1 {
    font-family: 'Dancing Script';
    font-size: 50px;
    font-weight: bold;
}

h3 {
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: center;
}

/* Container */
.container, .product-list {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 15px;
    border-radius: 10px;
    margin: 20px auto;
    width: 100%;
    max-width: 1200px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    justify-content: center;
}
.footer{
    background-color: rgba(255, 255, 255, 0.8);

    border-top: 1px solid;

    width: 1160.600px;
    max-width: 1200px;
    padding-top: 50px
  

}            

        @media screen and (max-width: 600px) {
            .topnav .search-container {
            float: none;
        }
            .topnav a, .topnav input[type=text], .topnav .btn, .topnav .search-container button  {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
            }
            .topnav input[type=text] {
            border: 1px solid #ccc;  
            }
        }

        
</style>
                    <div class="topnav" >  
                    <div class="container-fluid" style='padding:0px'>
                    <a class="navbar-brand" href="index.php" style='margin-left:15px;'>
                    <img src="Logomain.png" width="220px" height = "150px"/>
                    </a>
                    </div>
                   <div style="padding-top: 35px;">
                    <a href="aboutus.php?"><b>Về Chúng Tôi</b></a>  
                    <a href="index.php?cat=sp"><b>Sản phẩm</b></a>  
                    <a href="lienhe.php?"><b>Liên hệ</b></a>  
    </div>
                    <div class="btn">

                    <a href="giohang.php" >
                    <img src='https://cdn-icons-png.flaticon.com/128/2438/2438133.png' width = '25' height = '25'/>
                    </a>  
                    </div>  
                                                          
                </div>
                
    <center>
    <header>
        <h1>GIỎ HÀNG</h1>
        <form action='tt.php' method='post'><table border='1' style="border-collapse:collapse; width: 1160.000px;">
         <tr>
         <td></td>
         <td>STT</td>
         <td>Hình ảnh</td>
         <td >Tên Sản phẩm</td>
         <td >Đơn giá</td>
         </tr>
        <?php
        $dem0=0;
        if(isset($_GET["ma"])){
            $ma=$_GET["ma"];
            while($dem1=1){

             if($ma="sp_rb")
             $dem1=$dem0;
             $dem1=1;
             {?>
                <tr>
                    <td>
                <input type='checkbox' name='chon[]' value='$name' id=''>
             </td>
                    <td>
                    <img src="sp_rb" width='200px'/>
             </td>
             <td>
                Mì Mì Peta vị rong biển
             </td>
             <td>
                45.000 VNĐ
             </td>
             </tr>
             
        <?php
        $la=1;

        $dem0=0;
        if($la=1)
        {
            break;
        }
             }
             }
             while($dem2=1){
        if($ma="sp_mc")
        $dem2=$dem0;
        $dem2=1;
        {?>
           <tr>
           <td>
                <input type='checkbox' name='chon[]' value='$name' id=''>
             </td>
               <td>
               <img src="sp_mc" width='200px'/>
        </td>
        <td>
           Mì Mì Peta vị măng chua
        </td>
        <td>
           45.000 VNĐ
        </td>
        </tr>
   <?php

   $dem0=0;
   $la=1;
   if($la=1)
   {
       break;
   }
        }
    }
    while($dem3=1){
           if($ma="sp_ln")
           {
            $dem0=$dem3;
            $dem3=1;
            ?>

              <tr>
              <td>
                <input type='checkbox' name='chon[]' value='$name' id=''>
             </td>
                  <td>
                  <img src="sp_ln" width='200px'/>
           </td>
           <td>
              Mì Mì Peta vị lẩu nấm
           </td>
           <td>
              45.000 VNĐ
           </td>
           </tr>
      <?php
      $dem0=0;
      if($la=1)
      {
          break;
      }
           }
        }
        while($dem4=1){
              if($ma="sp_td")
              {
                $dem4=$dem0;
                $dem4=1;
                ?>
                 <tr>
                 <td>
                <input type='checkbox' name='chon[]' value='$name' id=''>
             </td>
                     <td>
                     <img src="sp_td" width='200px'/>
              </td>
              <td>
                 Mì Mì Peta vị tương đen - trộn
              </td>
              <td>
                 45.000 VNĐ
              </td>
              </tr>
         <?php
         $dem0=0;
         if($la=1)
         {
             break;
         }
              }
            }
            while($dem5=1){
                 if($ma="sp_vg")
                 {
                    $dem5=$dem0;
                    $dem5=1;
                    ?>
                    <tr>
                    <td>
                <input type='checkbox' name='chon[]' value='$name' id=''>
             </td>
                        <td>
                        <img src="sp_vg" width='200px'/>
                 </td>
                 <td>
                    Mì Mì Peta vị gừng
                 </td>
                 <td>
                    45.000 VNĐ
                 </td>
                 </tr>
            <?php
            $dem=0;
            if($la=1)
            {
                break;
            }
             }
            }
             
        }
        ?>
        </table>
        (vui lòng tích chọn sản phẩm)</br>
     <input type='submit'value= 'THANH TOÁN' size='10px'/></form>
     <section class="footer">
        <div style="float:left;font-size:20px ; color:black; padding-left:80px;">
        <h4 style="color:green">Contact PetaFresh Food</h4>
        <b>
        <p>Địa chỉ: 219 Điện Biên Phủ, Phường Võ Thị Sáu, Quận 3, TPHCM</p>
        <p>Điện thoại: 0797 676 789</p>
        <p>Email: petafreshfood.com</p></b>
    </div>
    <div style="float:right;font-size:20px ; color:green; padding-right:200px;">
    </br>
    <b>
    <p> <a href="aboutus.php"style=" text-decoration: none; color: green"> Về chúng tôi</a></p>
    <p> <a href="index.php" style=" text-decoration: none; color: green" > Sản phẩm</a></p>
    <p>  <a href="giohang.php" style=" text-decoration: none; color: green" >Về Liên hệ</a></p></b>
    </div>

    </section>
    </center>
    </body>
</html>