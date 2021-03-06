<html>

<head>
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main-div">
        <h1>List Of Patient</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Name of Doctor</th>
                            <th>Symptoms</th>
                            <th>Reports</th>
                            <th>Prescription</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                       $servername="localhost";
                       $username="root";
                       $password="";
                       $dbname="hms";

                       $conn=new mysqli($servername,$username,$password,$dbname);

                       $selectquery = "SELECT * FROM dr_review";

                       $query = mysqli_query($conn,$selectquery);

                       $nums = mysqli_num_rows($query);


                       while($res = mysqli_fetch_array($query))
                       {   
                        ?>                   
                           <tr>
                            <td><?php echo $res['ID']; ?></td>
                            <td><?php echo $res['Name']; ?></td>
                            <td><?php echo $res['Symptoms']; ?></td>
                            <td><?php echo $res['Reports']; ?></td>
                            <td><?php echo $res['Prescription']; ?></td>
                            <td><?php echo $res['Date']; ?></td>
                        </tr>

                        <?php
                        
                        }      

                        ?>                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>