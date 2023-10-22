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
    <section class="slogan">
            <p id='p1' style="color: green">Năng lượng thiên nhiên, vạn niên hạnh phúc</p>
        </section>
    </header>

    <main>
            <div style="background-color:green">
                <section class="container">
                    <h2>Về chúng tôi</h2>
                    <p>PetaFresh Food là một thương hiệu sản xuất và chế biến thực phẩm với 100% là thành phần nguyên liệu hữu cơ, vừa mang lại những lợi ích cho sức khỏe người tiêu dùng vừa mang đậm dấu ấn đặc trưng và thân thiện với môi trường.</p>
                </section>
    
                <section class="container">
                    <h2>Câu chuyện thương hiệu</h2>
                    <p>Với sứ mênh cao cả, PetaFresh Food không chỉ là một thương hiệu thực phẩm tiện lợi, mà còn là một biểu tượng của sự kết hợp tinh tế với triết lý âm dương ngũ hành trong ẩm thực Việt Nam. Chúng tôi khao khát biến mỗi bữa ăn thành một trải nghiệm tương tác giữa hương vị và sự cân bằng trong triết lý âm dương ngũ hành đó bằng cách tạo ra những sản phẩm không chỉ mang đậm vị truyền thống mà còn bám sát vào tinh thần của nền ẩm thực độc đáo này, một nền văn hóa ẩm thực phong phú và đa dạng nhưng vẫn đảm bảo cung cấp đầy đủ dinh dưỡng, kết nối tâm hồn và nguồn năng lượng trong cơ thể. Chúng tôi mong muốn mang đến cho bạn trải nghiệm vượt qua sự tiện lợi, là một hành trình thực sự trong vị giác, sự cân bằng và sự kết nối với nền ẩm thực phong phú của đất nước. PetaFresh Food - nâng tầm vị ngon, gìn giữ văn hóa ẩm thực, và là sự lựa chọn đúng đắn cho sức khỏe và tinh thần của bạn.</p>
                </section>
    
                <section class="container">
                    <h2>Vì sao chọn chúng tôi</h2>
                    <ul>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Thành phần hữu cơ 100%</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Tốt cho sức khỏe người tiêu dùng</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Cung cấp đủ chất dinh dưỡng</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Tiện lợi nhanh chóng</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Thơm ngon tươi mát</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Nguyên liệu và bao bì thân thiện với môi trường</p>
                        </div>
                    </ul>
                </section>
    
                <section class="container">
                    <h2>Sứ mệnh</h2>
                    <p>Petafresh Food không chỉ là cung cấp thực phẩm tươi mát và ngon miệng, mang đến sự trải nghiệm hoàn hảo các nguyên liệu nông sản đa dạng, tươi ngon và thân thiện với thiên nhiên của mảnh đất hình chữ S, vừa góp phần bảo vệ môi trường, vừa an toàn lành tính cho người tiêu dùng mà còn là một hành trình đắm chìm trong vẻ đẹp của nền ẩm thực Việt Nam. Chúng tôi muốn mỗi bữa ăn trở thành một câu chuyện kỷ niệm, một trải nghiệm tận hưởng đa giác quan và cảm xúc. Điều này không chỉ thể hiện sự trân trọng với nền ẩm thực độc đáo của đất nước mà còn đem lại lợi ích cho sức khỏe cộng đồng và môi trường. Chúng tôi tin rằng mỗi bữa ăn có thể thay đổi cuộc sống và để lại dấu ấn đáng nhớ trong trái tim người tiêu dùng.</p>
                </section>
    
                <section class="container">
                    <h2>Giá trị cốt lõi</h2>
                    <ul>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Chất lượng tối ưu</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Sáng tạo vượt trội</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Trách nhiệm xã hội sâu rộng</p>
                        </div>
                        <div class="aligntick">
                            <span class="tick" style="display: inline;">&#10004;</span><p style="display: inline; align:right">Hạnh phúc</p>
                        </div>
                    
                    
                    </ul>
                </section>
    
                <section class="container">
                    <h2>Tầm nhìn</h2>
                    <p>Trở thành nguồn cảm hứng hàng đầu cho mỗi bữa ăn, nơi mà mọi người đều có thể nâng cao tinh thần và trải nghiệm hương vị tươi mát</p>
                    <p>Tạo ra một tương lai mà mọi bữa ăn đều đong đầy ý nghĩa, giúp thăng hoa tất cả ngũ giác, ngũ vị và Ngũ chí của bạn, và cùng nhau, chúng ta xây dựng một thế giới tươi đẹp và bền vững</p>
                </section>
    
                <section class="container">
                    <h2>Cam kết</h2>
                    <p>Sử dụng nguyên liệu tươi ngon và tự nhiên để đảm bảo rằng mỗi bữa ăn không chỉ ngon miệng mà còn bổ dưỡng và an toàn cho sức khỏe</p>
                    <p>Cam kết không chỉ mang lại sự tươi mát và ngon miệng mà còn bảo vệ môi trường, để các thế hệ sau có thể thừa hưởng vẻ đẹp của thiên nhiên</p>
                </section>
        
        </div>
        
    </main>
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