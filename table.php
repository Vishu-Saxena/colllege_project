<?php
include('show.php');

// $st = $_POST['st'];
// if($st==NULL){
//    echo"mansi";
// }
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     $st = $_POST['st'];
// }
// else{
//     $st = NULL;
// }
// if($st!=NULL){
//     if($st == "processing"){
//         $sql = "SELECT * FROM `collegetable2` WHERE `status`= 'processing' ORDER BY `collegetable2`.`sno` DESC";
//         $result = mysqli_query($conn, $sql);
//     }
//     elseif($st == "alloted"){
//         $sql = "SELECT * FROM `collegetable2` WHERE `status`= 'alloted' ORDER BY `collegetable2`.`sno` DESC ";
//         $result = mysqli_query($conn, $sql);
//     }
//     elseif($st == "cancelled"){
//         $sql = "SELECT * FROM `collegetable2` WHERE `status`= 'cancelled' ORDER BY `collegetable2`.`sno` DESC ";
//         $result = mysqli_query($conn, $sql);
//     }
//     else{
//         $sql = "SELECT * FROM `collegetable2` ";
//         $result = mysqli_query($conn, $sql);  
//     }
// }
// else{
//     $sql = "SELECT * FROM `studentoffice` ORDER BY `studentoffice`.`sno` DESC ";
//     $result = mysqli_query($conn, $sql);
// }

session_start();
if(isset($_SESSION['loggedin'])){
    $sql = "SELECT * FROM `college3` ORDER BY `college3`.`id` DESC ";
    $result = mysqli_query($conn, $sql);
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="table.js" defer></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>data from db</title>
    <style>
        body{
            background:rgba(6, 56, 255, 0.7);
            padding:0;
            margin:0;
            height:100vh;
        }
        .main{
            width:95%;
            margin :auto;
            border:10px red blue;
            overflow:scroll;
            height: 85vh;
            background : white;
            margin-top:2%;
        }
        table{
            margin : auto;
            text-align : center;            
            padding-bottom : 1rem;
            background-color: rgb(68, 68, 255);
            overflow : scroll;
            background : white;
        }
        th{
            width:10%;
            font-weight : 900;
            font-size : 1.4rem;
            background-color:rgba(6, 56, 255, 0.7);
            color :white;
            padding : 1rem 1rem;
            font-size: 1rem;
            text-transform: capitalize;
        }
        tr{
            background : white;
        }
        tr:hover{
            background: #e4e4e4;
        }
        td{
            width:13%;
            font-weight : 700; 
            text-transform: capitalize;
            padding : 0.3rem 1rem;
        }
        #em{
            text-transform: none;
        }
        ::-webkit-scrollbar{
            width: 10px;
        }
        ::-webkit-scrollbar-thumb{
            background: gray;
            border-radius: 4px;
        }
        h1{
            text-align:center;
            text-transform: capitalize;
            color:white;
        }
       img{
           width:25px;
           border-radius:50%;
       }
       #search{
           position:absolute;
           top:4%;
           left:80%;
           background:#fff;
           padding: 0.5rem 1.5rem;
           border-radius:5px;
           font-weight:bolder;
       }
       #fbtn a{
           text-decoration:none;
           color:blue;
           font-weight:bolder;
       }
       .cer3 details{
           float:right;
       }
       .cer1 details{
           float:right;
       }
       .cer2 details{
           float:right;
       }
       .cer{
           color:black;
       }
       a{
           color:#fff;
           font-weight:bolder;
           text-decoration:none;
       }
       a:hover{
           text-decoration: underline #fff 1px;
       }
       .apr{
        display:flex;
       }
       .logout{
            text-align : right;
            color : white;
            text-decoration : none;
            position: absolute;
            left: 1rem;
            top : 2rem;
       }
    </style>
</head>
<body>
    <a href="logout.php" class="logout my-5 py-3 px-3">logout</a>
    <h1>list of students applied for certificates</h1>
    
    <input type="text" id="search" placeholder="search here..."  onkeyup = "searchfunc()">
    
    <div class="main">
        <table id="mytable" >
            <tbody>
                <tr>
                    <!-- <th>ID.</th> -->
                    <th>TransferCertificate</th>
                    <th>ProvisionalCertificate</th>
                    <th>Roll_Number</th>
                    <th>Student_Name</th>
                    <th>course</th>
                    <th>ExaminationNumber</th>
                    <th>EnrollmentNumber</th>
                    <th>Current Email</th>
                    <th>Current Contact</th>
                    <th>Email</th>
                    <th>ContactNumber</th>
                    <th>father's_name</th> 
                    <th>Date_Of_Birth</th>
                    <th>delete</th>
                </tr>

            <?php
                while($row = mysqli_fetch_assoc($result))
                {
                    $ex = $row['ExaminationNo'];
                    $sql2 = "SELECT * FROM `collegeOfficial` WHERE `ExamRollno`= '$ex' ";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_assoc($result2);
            ?>        
                    <tr>
                        <td class="cer3"> <p class="cer"> <?php echo $row['TC'];?></p> <details>
                            <summary></summary>
                            <a href="phpmailer\confirn.php?id=<?php echo $row2['ExamRollno']; ?>">reject</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <a href="phpmailer\tc.php?id=<?php echo $row2['ExamRollno'];?>">Approve</a>
                        </details> </td>
                        <td class="cer3"> <p class="cer"> <?php echo $row['provCert'];?></p> <details>
                            <summary></summary>
                            <a href="phpmailer\confirn2.php?id=<?php echo $row2['ExamRollno'];?>">reject</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="phpmailer\ac.php?id=<?php echo $row2['ExamRollno'];?>">Approve</a>
                        </details> </td>
                        <td> <?php echo $row2['CollegeRollno'];?> </td>

                        <td> <?php echo $row2['Name'];?> </td>
                        <td> <?php echo $row2['Course'];?> </td>
                        <td > <?php echo $row2['ExamRollno'];?> </td>
                        <td> <?php echo $row2['EnrolmentNO'];?> </td>

                        <td id="em"> <?php echo $row['email'];?> </td>
                        <td> <?php echo $row2['PhoneNo'];?> </td>
                        <td id="em"> <?php echo $row2['Email'];?> </td>
                        <td> <?php echo $row['contact'];?> </td>
                        <td> <?php echo $row2['FatherName'];?> </td>
                        <td> <?php echo $row2['DOB'];?> </td>
                        


                        <!-- <td class="cer1"> <p class="cera" ><?php echo $row['marksheet'];?></p> <details>
                            <summary></summary>
                            <a href="phpmailer\mark.php?id=<?php echo $row['sno'];?>">Approve</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="phpmailer\rejectmark.php?id=<?php echo $row['sno']; ?>">reject</a>
                        </details> </td>
                        <td class="cer2"> <p class = "cera"><?php echo $row['AchievmentCertificate'];?></p> <details>
                            <summary></summary>
                            <div class="apr">
                            <a href="phpmailer\ac.php?id=<?php echo $row['sno'];?>">Approve</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="phpmailer\rejectac.php?id=<?php echo $row['sno']; ?>">Reject</a>
                            </div>
  
                        </details> </td> -->
                        <!--<td class="status"><?php echo $row['status'];?> <a href="phpmailer\options.php?id=<?php echo $row['sno'];?>">change</a></td>-->
                        <td><a href="delete.php?id=<?php echo $row['ExaminationNo']; ?>"><img src="dust.jpg" alt=""></a></td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    
</body>

<script>
    let dat = document.getElementsByClassName("cer");
    for(i = 0; i<dat.length;i++){
        txt = dat[i].textContent;
        //console.log(txt);
        if(txt == ' applied'){
            dat[i].style.color = "white";
            dat[i].parentElement.style.background = "blue";
        }else if(txt == " "){
            dat[i].style.color= "white";
            dat[i].textContent= "not applied";
            dat[i].parentElement.style.background = "orange";
            dat[i].nextElementSibling.style.display = "none";

        }else if(txt == " rejected"){
            dat[i].style.color = "white";
            dat[i].parentElement.style.background = "red";
            dat[i].nextElementSibling.style.display = "none";
        }
        else{
            dat[i].style.color = "white";
            dat[i].parentElement.style.background = "green";
            dat[i].nextElementSibling.style.display = "none";
        }
    }
    let dat1 = document.getElementsByClassName("cera");

    for(i = 0; i<dat1.length;i++){
        txt = dat1[i].textContent;
        if(txt == 'applied'){
            dat1[i].style.color = "white";
            dat1[i].parentElement.style.background = "blue";
        }else if(txt == ""){
            dat1[i].style.color= "white";
            dat1[i].textContent= "not applied";
            dat1[i].parentElement.style.background = "orange";
            dat1[i].nextElementSibling.style.display = "none";
        }else if(txt == "rejected"){
            dat1[i].style.color = "#fff";
            dat1[i].parentElement.style.background = "red";
            dat1[i].nextElementSibling.style.display = "none";
        }else{
            dat1[i].style.color = "#fff";
            dat1[i].parentElement.style.background = "green";
            dat1[i].nextElementSibling.style.display = "none";
        }
    }
    let mytable = document.getElementById('mytable');
   // let filter =  document.getElementById('search').value.toUpperCase();
    //console.log(filter);
    //mytable.addEventListener("keyup" , searchfunc());
    const searchfunc = () => {
        let filter =  document.getElementById('search').value.toUpperCase();
        console.log(filter);
        let tr = document.getElementsByTagName('tr');
         for(var i = 1 ; i<tr.length ; i++){
            let name1 = tr[i].getElementsByTagName('td')[3];
            if(name1){
                let textvalue = name1.textContent;
                console.log("working");
                if(textvalue.toUpperCase().indexOf(filter)>-1){
                    tr[i].style.display = "";
                }
                else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</html>

<?php } else{
    echo "login first"; 
}?>


