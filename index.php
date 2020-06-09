<?php
//$con=mysqli_connect("localhost","root","","vue-php"); #development
$con=mysqli_connect("remotemysql.com","wb7JdbWLVp","Joh2OV3HIn","wb7JdbWLVp");
$query="SELECT * FROM employee";
$result=mysqli_query($con,$query);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome to ThaiSummit Harness</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <h3 align="center">Welcome to ThaiSummit Harness</h3>
            <br />
            <div class="table-responsive"></div>
            <table id="userdata" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td align='center'>ชื่อ</td>
                  <td align='center'>ตำแหน่ง</td>
                  <td align='center'>เบอร์โทรศัพท์ภายใน</td>
                </tr>
              </thead>
              <?php
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $row['fname'];?></td>
                  <td><?php echo $row['position'];?></td>
                  <td><?php echo $row['num'];?></td>
                </tr>
                <?php
              }
              ?>
            </table>
        </div>
    </body>
    <script>
      $(document).ready(function(){
        $('#userdata').DataTable();
      })
    </script>
</html>
