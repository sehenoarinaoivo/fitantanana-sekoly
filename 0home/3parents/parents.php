<!DOCTYPE html>
<!-- saved from url=(0045)./admin/parents -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> parents </title>
    <link media="all" type="text/css" rel="stylesheet" href="./parents_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./parents_files/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <link media="all" type="text/css" rel="stylesheet" href="./parents_files/font-awesome.css">

    <script src="./parents_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./parents_files/style.css">
  
  </head>

<body>


  <div class="navbar navbar-default panel-nav">
      
        <div class="container-fluid">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>      
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>          
              </button> 
              <a href="."><img src="./parents_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">
                <li><a class="btn btn-danger btn-sm" href="./logout" style="font-size:12px;">logout <i class="fa fa-log-out"></i></a></li>
              </ul>

            </div>

        </div>

    </div>


<div class="clear"></div>

<div class="container-fluid">

<link media="all" type="text/css" rel="stylesheet" href="./parents_files/datatables.min.css">

<script src="./parents_files/datatables.min.js"></script>


  <script src="./parents_files/en.js"></script>


<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Home</a></li>
    <li class="active">parents</li>
  </ol>
  
<a href="Nouvelparents.php" class="btn btn-warning btn-lg"><i class="fa fa-user"></i> new parent</a>



<div class="clear"></div><hr>

<div class="table-responsive">
      <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example" class="table table table-striped table-bordered display dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
        <thead>
          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 126px;">#</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Full name: activate to sort column ascending" style="width: 305px;">Full name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="profile: activate to sort column ascending" style="width: 133px;">profile</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="childrens: activate to sort column ascending" style="width: 174px;">childrens</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="contact: activate to sort column ascending" style="width: 150px;">contact</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 166px;">#</th></tr>
        </thead>
        <tbody> 

        <tr class="tr-body odd" role="row">

            <td class="sorting_1">
            <img src="./parents_files/parent.png" class="img-circle" width="60px" height="60px" alt="">
            </td>

            <td>Ali Ahmed Qassem</td>

            <td><a href="./admin/parent/148/profile"><i class="fa fa-user large"></i></a></td>

            <td>
            -
            </td>

            <td><a href="./admin/messages/148/conversation"><i class="fa fa-envelope large"></i></a></td>
            
            <td><a class="btn btn-success" href="./admin/parent/148/edit"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="./admin/parent/148/delete"><i class="fa fa-trash"></i></a></td>

          </tr><tr class="tr-body even" role="row">

            <td class="sorting_1">
          <img src="./parents_files/1589594421_téléchargement_(3).jpg" class="img-circle" width="60px" height="60px" alt="">                        </td>

            <td>EL KHARROUBY ahmed</td>

            <td><a href="./admin/parent/106/profile"><i class="fa fa-user large"></i></a></td>

            <td>
            -
          </td>

            <td><a href="./admin/messages/106/conversation"><i class="fa fa-envelope large"></i></a></td>
            
            <td><a class="btn btn-success" href="./admin/parent/106/edit"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="./admin/parent/106/delete"><i class="fa fa-trash"></i></a></td>

          </tr><tr class="tr-body odd" role="row">

            <td class="sorting_1">
            <img src="./parents_files/1589594433_average-middle-aged-woman-smiling-260nw-250320580.jpg" class="img-circle" width="60px" height="60px" alt="">                        </td>

            <td>Mimouni Leila</td>

            <td><a href="./admin/parent/133/profile"><i class="fa fa-user large"></i></a></td>

            <td>
            -
            </td>

            <td><a href="./admin/messages/133/conversation"><i class="fa fa-envelope large"></i></a></td>
            
            <td><a class="btn btn-success" href="./admin/parent/133/edit"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="./admin/parent/133/delete"><i class="fa fa-trash"></i></a></td>

          </tr><tr class="tr-body even" role="row">

            <td class="sorting_1">
            <img src="./parents_files/parent.png" class="img-circle" width="60px" height="60px" alt="">
            </td>

            <td>Parent DEMO</td>

            <td><a href="./admin/parent/3/profile"><i class="fa fa-user large"></i></a></td>

            <td>
              <a href="./admin/parents/3/childrens"><span class="badge green-bg">1</span></a>

            </td>

            <td><a href="./admin/messages/3/conversation"><i class="fa fa-envelope large"></i></a></td>
            
            <td><a class="btn btn-success" href="./admin/parent/3/edit"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="./admin/parent/3/delete"><i class="fa fa-trash"></i></a></td>

          </tr><tr class="tr-body odd" role="row">

            <td class="sorting_1">
          <img src="./parents_files/1589594462_images_(2).jpg" class="img-circle" width="60px" height="60px" alt="">                        </td>

            <td>Zeidi Asma</td>

            <td><a href="./admin/parent/135/profile"><i class="fa fa-user large"></i></a></td>

            <td>

          -
            </td>

            <td><a href="./admin/messages/135/conversation"><i class="fa fa-envelope large"></i></a></td>
            
            <td><a class="btn btn-success" href="./admin/parent/135/edit"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="./admin/parent/135/delete"><i class="fa fa-trash"></i></a></td>

          </tr><tr class="tr-body even" role="row">

            <td class="sorting_1">
          <img src="./parents_files/1589594509_téléchargement_(4).jpg" class="img-circle" width="60px" height="60px" alt="">                        </td>

            <td>وائل درويش </td>

            <td><a href="./admin/parent/95/profile"><i class="fa fa-user large"></i></a></td>

            <td>

            -
            </td>

            <td><a href="./admin/messages/95/conversation"><i class="fa fa-envelope large"></i></a></td>
            
            <td><a class="btn btn-success" href="./admin/parent/95/edit"><i class="fa fa-edit"></i></a> <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="./admin/parent/95/delete"><i class="fa fa-trash"></i></a></td>

          </tr></tbody>
      </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example_previous"><a href="./admin/parents#" aria-controls="example" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="./admin/parents#" aria-controls="example" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="example_next"><a href="./admin/parents#" aria-controls="example" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
    </div>


  </div>
</div>


</div>
     
     <script src="./parents_files/bootstrap.min.js"></script>

     <script src="./parents_files/validator.js"></script>

     <script src="../fontawesome/js/all.js"></script>


</body>
</html>