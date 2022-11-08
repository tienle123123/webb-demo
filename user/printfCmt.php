<?php
 $servername = "localhost";
 $database = "dangnhap";
 $username = "root";
 $password = "";
 $conn = new mysqli($servername, $username, $password, $database);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql ="SELECT `name`,`comment`,`date`, `time` FROM `comment`";
 $result = mysqli_query($conn,$sql);
 $rowname=array();
 $rowcmt=array();
 $rowtime=array();
 $rowdate=array();
 $count=0;
 if(!$result){
     die('LỖI' .mysqli_error($conn) );
 }
 if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $rowname[$count]=$row['name'];
        $rowcmt[$count]=$row['comment'];
        $rowtime[$count]=$row['time'];
        $rowdate[$count]=$row['date'];
        $count++;
    }
}
    while($count>0){
            echo '<div id="comment-1" class="comment">';
            echo '<div class="d-flex">';
                echo '<div class="comment-img"><img src="https://images.pexels.com/photos/1472999/pexels-photo-1472999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""></div>';
                echo '<div>';
                echo '<h5><a href="">'.$rowname[$count-1].'</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>';
                echo '<time datetime="2020-01-01">'.$rowdate[$count-1].'<a> - </a>'.$rowtime[$count-1].'</time>';
                echo '<p>';
                    echo $rowcmt[$count-1];
                echo '</p>';
                echo '</div>';
            echo '</div>';
            echo '</div>';
            $count--;
    }
?>
