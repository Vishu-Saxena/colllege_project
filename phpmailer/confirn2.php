<?php
include('../show.php');
$sn = $_GET['id'];
$sql = "SELECT * FROM `collegeOfficial` WHERE `ExamRollno`= $sn";
$sql2 = "SELECT * FROM `college3` WHERE `ExaminationNo`= $sn";
$query = mysqli_query($conn,$sql);
$query2 = mysqli_query($conn,$sql2);
$rows = mysqli_fetch_assoc($query);
$rows2 = mysqli_fetch_assoc($query2);
$date = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cerificate</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto Slab', serif;
        }
        body{
            width: 100%;
            height: 100vh;
            background:rgba(6, 56, 255, 0.5);
        }
        h2{
            text-align:center;
            margin:1rem 0;
            color:rgb(6, 56, 255);
            text-transform:capitalize;
        }
        .wrapper{
            display: flex;
            justify-content: space-evenly;
        }
        .main{
            width: 32%;
            height: auto;
            margin-top: 5%;
            background:#fff;
            border-radius:10px;
            box-shadow: 0 0 10px 0 rgb(0, 0, 0);
            padding:0 0.3rem;
            padding-bottom:1rem;
        }
        .w1{
            display:flex;
            justify-content : space-evenly;
        }
        .ww1{
            margin-top:3%;
            width:47%;
        }
        label{
            margin-left:3%;
        }
        input{
            padding:0.4rem;
            border-radius:7px;
            width:95%;
            font-size:14px;
            font-weight:550;
            text-transform:capitalize;
            border:1px black solid;
            text-align:center;
        }
        #email{
            text-transform:none;
        }
        #btn{
            display:flex;
            justify-content:center;
        }
        #btn button{
            padding:0.8rem 1.4rem;
            color:#fff;
            border-radius:5px;
            background:green;
            margin:3% 0;
            font-weight: bolder;
        }
        #done{
            padding:0.7rem 1.6rem;
            color:blue;
            border-radius:5px;
            background:#fff;
            margin:auto;
            margin-left:1%;
            margin-top:3%;
        }
        #done a{
            text-decoration:none;
            color:blue;
            text-transform:capitalize;
            font-weight: bolder;
        }
        #btn1,#btn2{
            padding:0.3rem 1.2rem;
            margin:auto;
            color:#fff;
            background:green;
            border-radius:5px;
            margin-left:5%;
        }
        select{
            padding:0.5rem 1rem;
            border-radius:10px;
        }
        @media screen and (max-width:930px){
            .wrapper{
                flex-direction:column;
            }
            .main{
                margin-left:25%;
                width:55%;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper"> 
        <div class="main" id="tc">
            <!-------------------TRANSFER_CERTIFICATE STARTS---------------------- -->
            <form action="rejectac.php"  method="post"  enctype ="multipart/form-data">
                <div class="content">
                    <div class="row">
                        <div class="heading">
                            <h2>Provisional_Certificate</h2>
                        </div>
                        <div>
                        <div class="w1">
                                <div class="ww1">

                                    <label for="name">Name</label><br>
                                    <input type="text" value="<?php echo $rows['Name'];?>" name="name" id="name" placeholder="name" required><br>
                                </div>
                                <div class="ww1">
                                    <label for="father">Father's Name</label><br>
                                    <input type="text" value="<?php echo $rows['FatherName']?>" name="father" id="father" placeholder="father" required> <br>
                                </div>

                            </div>

                            <div class="w1">
                                <div class="ww1">
                                    <label for="email">Email</label><br>
                                    <input type="text" value="<?php echo $rows2['email']?>" name="email" id="email" placeholder="email" required> <br>
                                </div>
                                <div class="ww1">
                                    <label for="">ExaminationNumber</label><br>
                                    <input type="number" value="<?php echo $rows['ExamRollno']?>" name="num" placeholder="num" required> <br>
                                </div>
                            </div>
                            
                            <div class="w1">
                                <div class="ww1">
                                    <label for="">DOB</label><br>
                                    <input type="text" value="<?php echo $rows['DOB']?>" name="dob" id="pc" placeholder="DOB" required> <br>
                                </div>
                                <div class="ww1">
                                    <label for="">EnrollmentNo</label><br>
                                    <input type="text" value="<?php echo $rows['EnrolmentNO']?>" name="en" id="en" placeholder="EnrollmentNo" required> <br>
                                </div>
                            </div>

                            <div class="w1">
                                <div class="ww1">
                                    <label for="">Rollno</label><br>
                                    <input type="number" value="<?php echo $rows['CollegeRollno']?>" name="rn" id="rn" placeholder="RollNo" required> <br>
                                </div>
                                <div class="ww1">
                                    <label for="">Course</label><br>
                                    <input type="text" value="<?php echo $rows['Course']?>" name="co" id="co" placeholder="Course" required><br>
                                </div>
                            </div>

                            <div class="w1">
                                <!-- <div class="ww1">
                                    <label for="">Course</label><br>
                                    <input type="text" value="<?php echo $rows['Course']?>" name="co" id="co" placeholder="Course" required><br>
                                </div> -->
                                <div class="ww1">
                                    
                                    <label for="">Academic Years </label><br>
                                    <select name="date2" id="yearSelect">
                                        
                                    </select>
                                    <select name="date" id="yearSelect2" style="margin-left: 20px;">
                                        
                                    </select>
                                    <br>

                                </div>
                            </div>
                            <div class="w1">
           
                                <div class="ww1" id="btn">
                                    <button type="submit"><a style="color:white;" href="rejectac.php?id=<?php echo $sn;?>">Reject</a></button>
                                </div>

                            </div>
                           

                        </div>
                    </div>
                </div>
            </form>
            <!-- ---------------------------------------provisional certificate---------- -->
        </div>
    </div>
    <!-- <button id="done"><a href="../table.php?id=<?php echo $rows['sno']; ?>">Back</a></button> -->
</body>
<script>
    function populateYears(){
        let yearSelect = document.getElementById('yearSelect');
        let yearSelect2 = document.getElementById('yearSelect2');
        let year = new Date().getFullYear();
        const option2 = document.createElement("option");
        option2.textContent = year -3;
        yearSelect.appendChild(option2);
        for (let i = 0; i < 101; i++) {
            const option1 = document.createElement("option");
            const option2 = document.createElement("option");
            option1.textContent = year-i;
            option2.textContent = year-i;
            yearSelect2.appendChild(option2);
            yearSelect.appendChild(option1);
        }
        
    }
    populateYears();
</script>
</html>
