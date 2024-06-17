<?php
include('show.php');

if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $exno = $_POST['ExaminationNo'];
    $dob = $_POST['dob'];
}

// formating DOB as per stored in college official database
$date = explode("-",$dob);
$y = $date[2];
$m = $date[1];
$d = $date[0];
$newdob = $d."-".$m."-".$y;

if($exno && $dob){
    $sqlcheck = "SELECT * FROM `collegeofficial` WHERE ExamRollno = '$exno' AND  DOB = '$newdob' ";  //fetching record from table of rollno entered by user if exists.
    $resultcheck = mysqli_query($conn, $sqlcheck);
    $rowcheck= mysqli_num_rows($resultcheck);
    $row = mysqli_fetch_assoc($resultcheck);
    // echo $rowcheck ;

    if($rowcheck>=1){
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form.bcas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style3.css">
        <!-- <script src="form.js" defer ></script> -->
        <style>
            .bx1{
                height: 85vh;
                overflow: scroll;
                overflow-x: hidden;
            }
            fieldset{
                border: 2px rgb(121, 121, 121) solid ;
                border-radius: 10px;
                padding: 10px;
                text-transform: capitalize;
                padding-left: 4px;
                width: 100%;
            }
            legend{
                text-transform: capitalize;
                font-size: 1.2rem;
            }
            label{
                font-size: 14px;
            }
            #PC,#TC{
                width: 15px;
                margin-left: 45%;
            }
            .bld{
                font-weight: 900;
            }
            @media screen and (max-width:780px){
                ::placeholder{
                    font-size: 0.8rem;
                    font-weight: 600;
                }
                fieldset{
                    width: 100%;
                }
                label{
                    font-size: 11px;
                }
                #PC,#TC{
                    width: 10px;
                }
            }
        
        </style>
    </head>
    <body>
        <div class="main">
            <form action="connect.php" method="post" id="formname" name="form_college">
            <!-- <form action="connect.php" method="post" id="formname" name="form_college"> -->
                <div class="bx1">
                    <div class="container"id="page1">
                        <div class="img">
                            <h1>Student details</h1>
                            <img src="logo.jpeg" alt="">
                        </div>
                        <hr>
                        <div><input type="number" name="ExaminationNo" readonly="readonly" value="<?php echo $row['ExamRollno'];?>" placeholder="Student Name"> </div>
                        
                        <div> <input type="text" name="name" readonly="readonly" value="<?php echo $row['Name'];?>" placeholder="Student Name"> </div>

                        <h3 class="alrt"></h3>
                        <div><input type="email" name="email" id="email" value="<?php echo $row['Email'];?>"  placeholder="Email"></div>
                        <h3 class="alrt"></h3>

                        <div ><input type="number" name="contact" value="<?php echo $row['PhoneNo'];?>" placeholder="Contact Number"  ></div>
                        <h3 class="alrt"></h3>

                        <div class="cert" style="width:100%;">
                            <fieldset style=" width: 80%; margin: auto;">
                                <legend>Certificate</legend>
                                <div class="check" style="width: 100%; display: flex; justify-content: space-evenly;">
                                    <div style="width:100%;">
                                        <label for="TC">Transfer / College leaving Certificate</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked value="Transfer/College leaving" name="TC" id="TC"><br>
                                    </div>
                                </div>
                                <div class="check" style="width: 100%; display: flex; justify-content: space-evenly;">
                                    <div style="width:100%;">
                                        <label for="PC">Provisional Certificate</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="PC" value="Provisional" id="PC";>
                                    </div>
                                </div>
                            
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <div class="form-check" style="width : 100%; margin-left:30px">
                                <input style = "padding : 5px" class="form-check-input checkbox" type="checkbox"  id="gridCheck">
                                <label class="form-check-label mx-2" for="gridCheck">
                                    <p style = "text-transform: none"><b style = "color : red">Undertaking: </b> I hereby undertake that I am aware of the rules of University of Delhi for re-appearing in the examination for improvement of grade and will not apply for the same in future.</p>
                                </label>
                            </div>
                        </div>
                        <div class="sub"><button type="submit" class="btn" disabled id="sub">submit</button></div>
                        <div class="sub d-none" ><button style="border:none;" type="submit" id="sub">submit</button></div>
                    </div>
                    
                </div>
            </form>
        </div>
        </body>
        <script>
            let checked = false;
            let btn = document.getElementsByClassName("sub");
            let check = document.getElementsByClassName("checkbox");
            check[0].addEventListener("click" , funcheck);
            console.log(check);
            function funcheck() {
                if(checked === false){
                    checked = true;
                    btn[1].classList.remove("d-none");
                    btn[0].classList.add("d-none");
                }else{
                    checked = false;
                    btn[0].classList.remove("d-none");
                    btn[1].classList.add("d-none");
                }
                console.log(checked);
            }
            
            // let cnum = document.form_college.contact;
            // let alrt = document.getElementsByClassName("alrt");
            // function check5(){
            //     let err;
            //     if(cnum.value.length==10){
            //         err = "** Looks Perfect";
            //         alrt[3].innerHTML = err;
            //         alrt[3].style.display = "block";
            //         alrt[3].style.color = "green";
            //         cnum.focus();
                    
            //     }else{
            //         err = "** should be of ten digits";
            //         alrt[3].innerHTML = err;
            //         alrt[3].style.color = "red";
            //         return false;
            //     }
            // }
            // cnum.addEventListener("keyup",check5);

            // let email = document.form_college.email;
            // function check55() {
            
            //     let evalue = email.value;
            //     if(evalue.charAt(evalue.length-4)!="." && evalue.charAt(evalue.length-3)!="."){
            //         let err = "**invalid email character after '.' ";
            //         alrt[2].innerHTML = err;
            //         alrt[2].style.display = "block";
            //         alrt[2].style.color = "red";
            //         document.form_college.email.focus();
            //         return false;
            //     }else{
            //         let err = "** Looks Perfect!";
            //         alrt[2].innerHTML = err;
            //         alrt[2].style.color = "green";
            //     }
            // }
            // email.addEventListener("keyup", check55);

        </script>
    </html>

    <?php } else{
        header("location:usernot.html");
    } }
    else{
        header("location:index.html");
    }?>

