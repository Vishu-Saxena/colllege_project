<?php
include('../show.php');
$sn = $_GET['id'];
$sql = "SELECT * FROM `collegeOfficial` WHERE `ExamRollno`= $sn";
$sql2 = "SELECT * FROM `college3` WHERE `ExaminationNo`= $sn";
$query = mysqli_query($conn,$sql);
$query2 = mysqli_query($conn,$sql2);
$rows = mysqli_fetch_assoc($query);
$rows2 = mysqli_fetch_assoc($query2);
$date = date("d/m/Y") ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <title>cerificate</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto Slab', serif;
        }
        #container{
            overflow-x: scroll;
        }
        .border{
            border : "solid 2px black";
        }
        input{
            width : 100%;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
        }
        td div{
            width : 100px;
        }
        td div input{
            width : 100%;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
        }

        .ref{
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
        }
        
        .r3 div{
            display : flex ;
            justify-content: space-between;
        }
        .r3 div input{
            width : 200px;
        }
        
       
    </style>
</head>

<body>
    <div class="container border my-2" id = "container">
        <form action="../transcript.php" method="post" id="myform"  enctype ="multipart/form-data">
        <!-- header portion -->
        <div class="header row">
            <div class="col-12 text-center mt-4">
                <h2>BHASKARACHARYA COLLEGE OF APPLIED SCIENCES</h2>
                <h4>(UNIVERSITY OF DELHI)</h4>
                <p>Accredited by NAAC with Grade'A'</p>
            </div>
            <div class="col-sm-6 text-center"><p>STAR College Status by DBT,Govt. of India</p></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 text-center"><p>IGNOU-LSC 38042</p></div>
        </div>
        <hr>

        <div class="row ">
            <div class="col-5 text-center"> <div class="row"> <div class="col-md-4"> Ref.No :  </div> <div class="col-md-6"> <input type="text" name="refno" class="ref" id=""> </div> </div></div>
            <div class="col-3"></div>
            <div class="col-4 text-center">Date. : <?php echo $date ?></div>
        </div>

        <!-- statement of marks -->
        <div class="row r3 my-3">
            <h4 class="text-center">STATEMENT OF MARKS</h4>
            <div class="col-md-1"></div>
            <div class="col-md-4 "><p>Candidate Name : <input type="text" value="<?php echo $rows['Name'];?>" name="name" required></p> </div> 
            <div class="col-md-3"></div>
            <div class="col-md-4"><p class="text-right">Enrollment No. : <input type="text" value="<?php echo $rows['EnrolmentNO']?>" name="enrollNo" required></p></div>
            <div class="col-md-1"></div>
            <div class="col-md-4"> <P>Father's Name : <input type="text" value="<?php echo $rows['FatherName']?>" name="father" required></P></div>
            <div class="col-md-3"></div>
            <div class="col-md-4"><p>Date Of Admission : <input type="text" value="<?php echo $rows['Date of Admission']?>" name="DOA" required></p> </div>
            <div class="col-md-1"></div>
            <div class="col-md-4"><p>Course Pursuing : <input type="text" value="<?php echo $rows['Course']?>" name="co" required></p></div>
            <div class="col-md-3"></div>
            <div class="col-md-4"><p>Examination Roll No.: <input type="text" value="<?php echo $rows['ExamRollno']?>" name="exrollNo" required></p> </div>
            <div class="col-md-1"></div>
            <div class="col-md-4"><p>Medium : <input type="text" value="<?php echo $rows['medium']?>" name="medium" required></p> </div>
            <div class="col-md-3"></div>
            <div class="col-md-4"><p>Year of passing : <input type="text" class="ref" name="passingYear" required></p></div>
            <!-- using hidden input field to send email -->
            <input type="hidden"  name="email" id="email" value="<?php echo $rows2['email']?>">
        </div>

        <!-- first Semester marks -->

        <div class="row">
            <h4 class="text-center">I Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Paper Code</th>
                        <th scope="col">Paper Name</th>
                        <th scope="col">Paper Type</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Grade Letter</th>
                        <th scope="col">Grade Point</th>
                        <th scope="col">Credit Point</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope="row">1</th>
                        <td><div><input type="text" name = "s1pc1" ></div></td>
                        <td><div><input type="text" name = "s1pn1" ></div></td>
                        <td><div><input type="text" name = "s1pt1" ></div></td>
                        <td><div><input type="text" name = "s1cr1" ></div></td>
                        <td><div><input type="text" name = "s1gl1" ></div></td>
                        <td><div><input type="text" name = "s1gp1" ></div></td>
                        <td><div><input type="text" name = "s1cp1" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td><div><input type="text" name = "s1pc2" ></div></td>
                        <td><div><input type="text" name = "s1pn2" ></div></td>
                        <td><div><input type="text" name = "s1pt2" ></div></td>
                        <td><div><input type="text" name = "s1cr2" ></div></td>
                        <td><div><input type="text" name = "s1gl2" ></div></td>
                        <td><div><input type="text" name = "s1gp2" ></div></td>
                        <td><div><input type="text" name = "s1cp2" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td><div><input type="text" name = "s1pc3" ></div></td>
                        <td><div><input type="text" name = "s1pn3" ></div></td>
                        <td><div><input type="text" name = "s1pt3" ></div></td>
                        <td><div><input type="text" name = "s1cr3" ></div></td>
                        <td><div><input type="text" name = "s1gl3" ></div></td>
                        <td><div><input type="text" name = "s1gp3" ></div></td>
                        <td><div><input type="text" name = "s1cp3" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td><div><input type="text" name = "s1pc4" ></div></td>
                        <td><div><input type="text" name = "s1pn4" ></div></td>
                        <td><div><input type="text" name = "s1pt4" ></div></td>
                        <td><div><input type="text" name = "s1cr4" ></div></td>
                        <td><div><input type="text" name = "s1gl4" ></div></td>
                        <td><div><input type="text" name = "s1gp4" ></div></td>
                        <td><div><input type="text" name = "s1cp4" ></div></td>
                        </tr>
    
                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <br>

        <!-- second Semester marks -->

        <div class="row">
            <h4 class="text-center">II Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Paper Code</th>
                        <th scope="col">Paper Name</th>
                        <th scope="col">Paper Type</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Grade Letter</th>
                        <th scope="col">Grade Point</th>
                        <th scope="col">Credit Point</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope="row">1</th>
                        <td><div><input type="text" name = "s2pc1" ></div></td>
                        <td><div><input type="text" name = "s2pn1" ></div></td>
                        <td><div><input type="text" name = "s2pt1" ></div></td>
                        <td><div><input type="text" name = "s2cr1" ></div></td>
                        <td><div><input type="text" name = "s2gl1" ></div></td>
                        <td><div><input type="text" name = "s2gp1" ></div></td>
                        <td><div><input type="text" name = "s2cp1" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td><div><input type="text" name = "s2pc2" ></div></td>
                        <td><div><input type="text" name = "s2pn2" ></div></td>
                        <td><div><input type="text" name = "s2pt2" ></div></td>
                        <td><div><input type="text" name = "s2cr2" ></div></td>
                        <td><div><input type="text" name = "s2gl2" ></div></td>
                        <td><div><input type="text" name = "s2gp2" ></div></td>
                        <td><div><input type="text" name = "s2cp2" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td><div><input type="text" name = "s2pc3" ></div></td>
                        <td><div><input type="text" name = "s2pn3" ></div></td>
                        <td><div><input type="text" name = "s2pt3" ></div></td>
                        <td><div><input type="text" name = "s2cr3" ></div></td>
                        <td><div><input type="text" name = "s2gl3" ></div></td>
                        <td><div><input type="text" name = "s2gp3" ></div></td>
                        <td><div><input type="text" name = "s2cp3" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td><div><input type="text" name = "s2pc4" ></div></td>
                        <td><div><input type="text" name = "s2pn4" ></div></td>
                        <td><div><input type="text" name = "s2pt4" ></div></td>
                        <td><div><input type="text" name = "s2cr4" ></div></td>
                        <td><div><input type="text" name = "s2gl4" ></div></td>
                        <td><div><input type="text" name = "s2gp4" ></div></td>
                        <td><div><input type="text" name = "s2cp4" ></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>
        <!-- third Semester marks -->

        <div class="row">
            <h4 class="text-center">III Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Paper Code</th>
                        <th scope="col">Paper Name</th>
                        <th scope="col">Paper Type</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Grade Letter</th>
                        <th scope="col">Grade Point</th>
                        <th scope="col">Credit Point</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope="row">1</th>
                        <td><div><input type="text" name = "s3pc1" ></div></td>
                        <td><div><input type="text" name = "s3pn1" ></div></td>
                        <td><div><input type="text" name = "s3pt1" ></div></td>
                        <td><div><input type="text" name = "s3cr1" ></div></td>
                        <td><div><input type="text" name = "s3gl1" ></div></td>
                        <td><div><input type="text" name = "s3gp1" ></div></td>
                        <td><div><input type="text" name = "s3cp1" ></div></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td><div><input type="text" name = "s3pc2" ></div></td>
                        <td><div><input type="text" name = "s3pn2" ></div></td>
                        <td><div><input type="text" name = "s3pt2" ></div></td>
                        <td><div><input type="text" name = "s3cr2" ></div></td>
                        <td><div><input type="text" name = "s3gl2" ></div></td>
                        <td><div><input type="text" name = "s3gp2" ></div></td>
                        <td><div><input type="text" name = "s3cp2" ></div></td>
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td><div><input type="text" name = "s3pc3" ></div></td>
                        <td><div><input type="text" name = "s3pn3" ></div></td>
                        <td><div><input type="text" name = "s3pt3" ></div></td>
                        <td><div><input type="text" name = "s3cr3" ></div></td>
                        <td><div><input type="text" name = "s3gl3" ></div></td>
                        <td><div><input type="text" name = "s3gp3" ></div></td>
                        <td><div><input type="text" name = "s3cp3" ></div></td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td><div><input type="text" name = "s3pc4" ></div></td>
                        <td><div><input type="text" name = "s3pn4" ></div></td>
                        <td><div><input type="text" name = "s3pt4" ></div></td>
                        <td><div><input type="text" name = "s3cr4" ></div></td>
                        <td><div><input type="text" name = "s3gl4" ></div></td>
                        <td><div><input type="text" name = "s3gp4" ></div></td>
                        <td><div><input type="text" name = "s3cp4" ></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>

        <!-- fourth Semester marks -->
        <div class="row">
            <h4 class="text-center">IV Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Paper Code</th>
                        <th scope="col">Paper Name</th>
                        <th scope="col">Paper Type</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Grade Letter</th>
                        <th scope="col">Grade Point</th>
                        <th scope="col">Credit Point</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td><div><input type="text" name = "s4pc1" ></div></td>
                        <td><div><input type="text" name = "s4pn1" ></div></td>
                        <td><div><input type="text" name = "s4pt1" ></div></td>
                        <td><div><input type="text" name = "s4cr1" ></div></td>
                        <td><div><input type="text" name = "s4gl1" ></div></td>
                        <td><div><input type="text" name = "s4gp1" ></div></td>
                        <td><div><input type="text" name = "s4cp1" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td><div><input type="text" name = "s4pc2" ></div></td>
                        <td><div><input type="text" name = "s4pn2" ></div></td>
                        <td><div><input type="text" name = "s4pt2" ></div></td>
                        <td><div><input type="text" name = "s4cr2" ></div></td>
                        <td><div><input type="text" name = "s4gl2" ></div></td>
                        <td><div><input type="text" name = "s4gp2" ></div></td>
                        <td><div><input type="text" name = "s4cp2" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td><div><input type="text" name = "s4pc3" ></div></td>
                        <td><div><input type="text" name = "s4pn3" ></div></td>
                        <td><div><input type="text" name = "s4pt3" ></div></td>
                        <td><div><input type="text" name = "s4cr3" ></div></td>
                        <td><div><input type="text" name = "s4gl3" ></div></td>
                        <td><div><input type="text" name = "s4gp3" ></div></td>
                        <td><div><input type="text" name = "s4cp3" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td><div><input type="text" name = "s4pc4" ></div></td>
                        <td><div><input type="text" name = "s4pn4" ></div></td>
                        <td><div><input type="text" name = "s4pt4" ></div></td>
                        <td><div><input type="text" name = "s4cr4" ></div></td>
                        <td><div><input type="text" name = "s4gl4" ></div></td>
                        <td><div><input type="text" name = "s4gp4" ></div></td>
                        <td><div><input type="text" name = "s4cp4" ></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>
        <!-- fifth Semester marks -->
        <div class="row">
            <h4 class="text-center">V Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Paper Code</th>
                        <th scope="col">Paper Name</th>
                        <th scope="col">Paper Type</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Grade Letter</th>
                        <th scope="col">Grade Point</th>
                        <th scope="col">Credit Point</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td><div><input type="text" name = "s5pc1" ></div></td>
                        <td><div><input type="text" name = "s5pn1" ></div></td>
                        <td><div><input type="text" name = "s5pt1" ></div></td>
                        <td><div><input type="text" name = "s5cr1" ></div></td>
                        <td><div><input type="text" name = "s5gl1" ></div></td>
                        <td><div><input type="text" name = "s5gp1" ></div></td>
                        <td><div><input type="text" name = "s5cp1" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td><div><input type="text" name = "s5pc2" ></div></td>
                        <td><div><input type="text" name = "s5pn2" ></div></td>
                        <td><div><input type="text" name = "s5pt2" ></div></td>
                        <td><div><input type="text" name = "s5cr2" ></div></td>
                        <td><div><input type="text" name = "s5gl2" ></div></td>
                        <td><div><input type="text" name = "s5gp2" ></div></td>
                        <td><div><input type="text" name = "s5cp2" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td><div><input type="text" name = "s5pc3" ></div></td>
                        <td><div><input type="text" name = "s5pn3" ></div></td>
                        <td><div><input type="text" name = "s5pt3" ></div></td>
                        <td><div><input type="text" name = "s5cr3" ></div></td>
                        <td><div><input type="text" name = "s5gl3" ></div></td>
                        <td><div><input type="text" name = "s5gp3" ></div></td>
                        <td><div><input type="text" name = "s5cp3" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td><div><input type="text" name = "s5pc4" ></div></td>
                        <td><div><input type="text" name = "s5pn4" ></div></td>
                        <td><div><input type="text" name = "s5pt4" ></div></td>
                        <td><div><input type="text" name = "s5cr4" ></div></td>
                        <td><div><input type="text" name = "s5gl4" ></div></td>
                        <td><div><input type="text" name = "s5gp4" ></div></td>
                        <td><div><input type="text" name = "s5cp4" ></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br>

        <!-- sixth Semester marks -->
        <div class="row">
            <h4 class="text-center">VI Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Paper Code</th>
                        <th scope="col">Paper Name</th>
                        <th scope="col">Paper Type</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Grade Letter</th>
                        <th scope="col">Grade Point</th>
                        <th scope="col">Credit Point</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td><div><input type="text" name = "s6pc1" ></div></td>
                        <td><div><input type="text" name = "s6pn1" ></div></td>
                        <td><div><input type="text" name = "s6pt1" ></div></td>
                        <td><div><input type="text" name = "s6cr1" ></div></td>
                        <td><div><input type="text" name = "s6gl1" ></div></td>
                        <td><div><input type="text" name = "s6gp1" ></div></td>
                        <td><div><input type="text" name = "s6cp1" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td><div><input type="text" name = "s6pc2" ></div></td>
                        <td><div><input type="text" name = "s6pn2" ></div></td>
                        <td><div><input type="text" name = "s6pt2" ></div></td>
                        <td><div><input type="text" name = "s6cr2" ></div></td>
                        <td><div><input type="text" name = "s6gl2" ></div></td>
                        <td><div><input type="text" name = "s6gp2" ></div></td>
                        <td><div><input type="text" name = "s6cp2" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">3</th>
                        <td><div><input type="text" name = "s6pc3" ></div></td>
                        <td><div><input type="text" name = "s6pn3" ></div></td>
                        <td><div><input type="text" name = "s6pt3" ></div></td>
                        <td><div><input type="text" name = "s6cr3" ></div></td>
                        <td><div><input type="text" name = "s6gl3" ></div></td>
                        <td><div><input type="text" name = "s6gp3" ></div></td>
                        <td><div><input type="text" name = "s6cp3" ></div></td>
                        
                        </tr>

                        <tr>
                        <th scope="row">4</th>
                        <td><div><input type="text" name = "s6pc4" ></div></td>
                        <td><div><input type="text" name = "s6pn4" ></div></td>
                        <td><div><input type="text" name = "s6pt4" ></div></td>
                        <td><div><input type="text" name = "s6cr4" ></div></td>
                        <td><div><input type="text" name = "s6gl4" ></div></td>
                        <td><div><input type="text" name = "s6gp4" ></div></td>
                        <td><div><input type="text" name = "s6cp4" ></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- detailes upto VI Semester -->
        <br><br>
        <div class="row">
            <h4 class="text-center">Details Upto VI Semester</h4>
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">SEM</th>
                        <th scope="col">Total Credit</th>
                        <th scope="col">Total Credit Point</th>
                        <th scope="col">SGPA</th>
                        <th scope="col">Result</th>
                        <th scope="col">CGPA</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope="row">I</th>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td rowspan="2"><div><input type="text"></div></td>
                        <td rowspan="2"> <div><input type="text"></div></td>            
                        </tr>

                        <tr>
                        <th scope="row">II</th>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        </tr>

                        <tr>
                        <th scope="row">III</th>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td rowspan="2"><div><input type="text"></div></td>
                        <td rowspan="2"><div><input type="text"></div></td>
                        </tr>

                        <tr>
                        <th scope="row">IV</th>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        </tr>

                        <tr>
                        <th scope="row">V</th>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td rowspan="2"><div><input type="text"></div></td>
                        <td rowspan="2"><div><input type="text"></div></td>
                        </tr>

                        <tr>
                        <th scope="row">VI</th>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        <td><div><input type="text"></div></td>
                        </tr>

                    </tbody>
                </table>

            </div>
            <br><br> <br>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary  btn-lg">Proceed</button>
            </div>
        </div>
        </form>
    </div>
</body>

</html>


<!-- 
    <body>
    <div class="container-fluid border"> 
        <div class="row" id="tc">
            -----------------TRANSCRIPT FORM FOR ADMIN----------------------
            <form action="../transferac.php"  method="post"  enctype ="multipart/form-data">
                <div class="content">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>BHASKAR ACHARYA COLLEGE OF APPLIED SCIENCES</h2>
                            <h4>(UNIVERSITY OF DELHI)</h4>
                            <P>Accredited by NAAC with Grade 'A'</P>
                        </div>
                    </div>
                    <div class="row">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Paper Code</th>
                            <th scope="col">Paper Name</th>
                            <th scope="col">Paper Type</th>
                            <th scope="col">Credit</th>
                            <th scope="col">Grade Letter</th>
                            <th scope="col">Grade Point</th>
                            <th scope="col">Credit Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>  <input type="text"></td>
                            <td>  <input type="text"></td>
                            <td>  <input type="text"></td>
                            <td>  <input type="text"></td>
                            <td>  <input type="text"></td>
                            <td>  <input type="text"></td>
                            <td>  <input type="text"></td>
                            </tr>

                            <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>

                            <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>

                            <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>

                        </tbody>
                    </table>
                        
                    </div>
                </div>
            </form>
            -----------------TRANSFER_CERTIFICARTE ENDS----------------------
        </div>
    </div>
    <button id="done"><a href="../table.php?id=<?php echo $rows['sno']; ?>">Back</a></button>
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
</script> -->
