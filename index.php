
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="-">

    <title>Test</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link rel="stylesheet" href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css"> -->

    <!-- Custom styles for this template -->
    <!-- <link rel="stylesheet" href="https://getbootstrap.com/docs/3.3/examples/starter-template/starter-template.css"> -->
    <style media="screen">
      body {
      padding-top: 50px;
      }
      .starter-template {
      padding: 40px 15px;
      /*text-align: center;*/
      }
    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200|Kanit:600" rel="stylesheet">
    <!-- Bootstrap3 Data Table-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <!-- Smoke -->
    <link rel="stylesheet" href="assets/css/smoke.min.css">

    <style>

      /* Definded font in each tag*/
      h1 {font-family: 'Kanit', sans-serif;}
      h2 {font-family: 'Kanit', sans-serif;}
      h3 {font-family: 'Kanit', sans-serif;}
      h4 {font-family: 'Kanit', sans-serif;}
      h5 {font-family: 'Kanit', sans-serif;}
      h6 {font-family: 'Kanit', sans-serif;}
      p {font-family: 'Kanit', sans-serif;}
      div {font-family: 'Kanit', sans-serif;}
      small {font-family: 'Kanit', sans-serif;}
      a {font-family: 'Kanit', sans-serif;}
      button {font-family: 'Kanit', sans-serif;}
      ul {font-family: 'Kanit', sans-serif;}
      li {font-family: 'Kanit', sans-serif;}
      i {font-family: 'Kanit', sans-serif;}
      footer {font-family: 'Kanit', sans-serif;}
      img {font-family: 'Kanit', sans-serif;}
      span {font-family: 'Kanit', sans-serif;}
      input {font-family: 'Kanit', sans-serif;}
      textarea {font-family: 'Kanit', sans-serif;}
      
    </style>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#">
            <img class="" src="#" alt="Logo" style="height:40px; margin:10px;">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="#">
                <i class="glyphicon glyphicon glyphicon-home"></i>
                &nbsp;
                <span>หน้าแรก</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: 'Kanit', sans-serif;">
                <?php
                  echo "ยินดีต้อนรับ: ";
                ?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> ออกจากระบบ</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Starter Template -->
      <div class="starter-template">

        <ul class="breadcrumb">
          <li><a href="#">หน้าแรก</a></li>
          <li><a href="#">-</a></li>
          <li class="active">-</li>
        </ul>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3><i class="glyphicon glyphicon-search"></i> ค้นหาข้อมูล</h3>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <h5 class="">กรุณากอรอกข้อมูล. </h5>

            <form id="form1" class="" action="" method="post" novalidate>

              <div class="form-group">
                <label for="username" ><span class="text-danger">*</span> <i class="glyphicon glyphicon-user"></i> บัญชีผู้ใช้งาน</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="บัญชีผู้ใช้งาน" data-smk-msg="กรุณากรอกบัญชีผู้ใช้งาน" required>

              </div>
              
              <button id="btnSubmit" type="submit" class="btn btn-info" name="button">
                <span ><i class="glyphicon glyphicon-search"></i> ค้นหาข้อมูล</span>
              </button>
            </form>


          </div>

        
        </div>
        <!-- End of row -->


        <div  class="row" id="tableUserDetailRow">

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h5>รายละเอียด, ในตารางข้อมูลจะแสดงรายละเอียดต่างๆ</h5>

            <div class="table-responsive">
              <table class="table table-bordered table-striped table-responsive">
                  <thead>

                    <tr>
                      <th class="bg-primary" colspan="1"><i class="glyphicon glyphicon-log-in"></i> รายการข้อมูล</th>

                      <th class="bg-primary" colspan="1">

                        <a href="#" class="btn btn-danger btn-sm pull-right"><i class="glyphicon glyphicon-trash"></i> ลบ</a>

                        <a href="#" class="btn btn-warning btn-sm pull-right"><i class="glyphicon glyphicon-edit"></i> แก้ไข</a>

                        <a href="#" class="btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-save-file"></i> ออกรายงาน</a>

                      </th>

                    </tr>

                  </thead>
                  <tbody>

                    <tr>
                      <td>username</td>
                      <td id="resultUsername"></td>
                    </tr>

                    <tr>
                      <td>useEmail</td>
                      <td id="resultUserEmail"></td>
                    </tr>

                    <tr>
                      <td>freq.</td>
                      <td><span style="font-size:4em;" class="text-success">-</span> -</td>
                    </tr>

                </tbody>
              </table>
            </div>
            <!-- Table Responsive -->

          </div>

        </div>
        <!-- End of table user detail row -->
          
      </div>
      <!-- End of Starter Template -->

    </div>
    <!-- End of Container -->

    <footer class="footer">
      <div class="container">
          <p class="text-muted" style="text-align:center;">
          2020 &copy; -
          <br />
          หากพบปัญหาในการใช้งานโปรดติดต่อ -
          </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <!-- Smoke -->
    <script src="assets/js/smoke.min.js"></script>

    <script>

      $(document).ready(function(){

        //Hide user detail table.
        $("#tableUserDetailRow").hide();

        //Auto focus on input box.
        $("#username").focus();
        
        //Set on click submit button.
        $("#btnSubmit").click(function (e){

          //Hide user detail table.
          $("#tableUserDetailRow").hide();

          //Get value from input.
          let username = $("#username").val();

          //Check null to show custom validation with smoke validator (External API).
          if(!$("#form1").smkValidate()){

            $.smkAlert({text: "กรุณากรอกข้อมูลบัญชีผู้ใช้งาน", type: "danger"});

          }else{

            $.ajax({
            method: "POST",
            url: "json/user.php",
            data: { "username": username},
            dataType: 'json'
            })
            .done(function( data ) {

              if (data.status === "success") {
                
                //Show response status message from json. (success)
                $.smkAlert({text: data.message, type: data.status});

                //Append data to table
                $("#resultUsername").append(data.username)
                $("#resultUserEmail").append(data.userEmail)

                //Show user detail table.
                $("#tableUserDetailRow").show();
                

              } else {

                //Show response status message from json. (Error)
                $.smkAlert({text: data.message, type: data.status});

                //Hide user detail table.
                $("#tableUserDetailRow").hide();

              }
            });

          } //Else

          //Prevent to go another pages.
          e.preventDefault();

        }); //#btnSubmit
        

      }); //End of ready func()


    </script>

  
  </body>
</html>