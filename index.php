 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
         #error {
             color: red;
         }
     </style>
 </head>

 <body>
     <?php
        //---------------------------------------------
        // NGÀY VÀ GIỜ
        echo "Hôm nay là ngày" . date("d/m/Y");
        echo "Bây giờ là mấy giờ" . date("H:i:sa");
        //--------------------------------------------
        $messageError = "";
        if (isset($_POST["luu"])) {
            if (empty($_POST['name'])) {
                $messageError = "Không được để trống";
            } else {
                echo  $_POST['name'];
            }
        }
        ?>
     <form action="index.php" method="post">
         Name: <input type="text" name="name" id="">
         <br>
         <span id="error">
             <?php echo $messageError ?>

         </span>
         <br>
         <input type="submit" name="luu">
     </form>
 </body>

 </html>

 //ĐỌC FILE

 echo readfile("file.txt"); //Đọc file

 $myFile = fopen("file.txt", "r") or die("Lỗi"); // Mở file
 echo fread($myFile, filesize("file.txt")); //Đọc file
 fclose($myFile); //Đóng file
 //--------------------------------------------------
 //VÒNG LĂPJ FILE
 $myFile = fopen("file.txt", "r") or die("Lỗi");

 while (!feof($myFile)) {

 echo fgetc($myFile);
 }

 ?>