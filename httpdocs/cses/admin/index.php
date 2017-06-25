<?php 
include '../connect.php';
include '../functions.php';
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:../index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="../stylesheets/touchTouch.css" />
<link href="../css/custom.css" rel="stylesheet" media="screen">
<link href="../css/datepicker.css" rel="stylesheet" media="screen">
<link href="../css/scroller.css" rel="stylesheet" media="screen">
<link href="../css/font-awesome.css" rel="stylesheet" media="screen">
</head>

<body>

<div style="width:1200px;margin-right:auto;margin-left:auto">
	<div class="alert alert-info nav-header">Admin Panel</div>

	<div style="width:200px;float:left">
    	<div class="panel-group" id="accordion">
          <div class="panel panel-info">
            <div class="panel-heading nav-header">
              
                <a  href="index.php?tab=1">
                  Accounts
                </a>
              
            </div>
            
          </div>
          <div class="panel panel-info">
            <div class="panel-heading nav-header">
              
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Students&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i>
                </a>
              
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <a href="index.php?tab=2">Status</a>
              </div>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading nav-header" >
              
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Events &nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i>
                </a>
              
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
              	<a href="#">Add Event</a><br />
                <a href="#">View Events</a>
                
              </div>
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading nav-header" >
              
                <a  href="../logout.php" class="red">
                  Log Out
                </a>
            </div>
            
          </div>
        </div>

    
    </div>
    <div style="width:980px;float:left;margin-left:20px;" class="alert ">
    <?php 
	$tab=0;
	if(isset($_REQUEST['tab'])) $tab=$_REQUEST['tab'];
	if($tab==0){?>
    	<div class="alert alert-info text-center font20">
        	Welcome to Admin Panel
        </div>
    
    <?php
	}
	if($tab==1){?>
    	<div>
        <span class="font18">Total Balance : <i class="fa fa-inr"></i> 4000.00</span> <div class="pull-right"><a href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Expenditure</a></div>
        </div>
        <table class="table table-condensed table-hover" style="margin-top:50px;">
        	<tr>
            	<td><strong>SI No.</strong></td>
                <td><strong>Expenditure Description</strong></td>
                <td><strong>Expenditure Cost</strong></td>
                <td><strong>Date</strong></td>
            </tr>
            <tr>
            	<td>1</td>
                <td>Teacher's Day</td>
                <td>500</td>
                <td>23/4/2014</td>
            </tr>
        </table>
    <?php 
	}
	if($tab==2)
	{
	?>
    	<div>
        	<form class="form-horizontal">
            	<div>
                <label class="control-label pull-left">Check Status&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="form-control input-sm width200 pull-left" placeholder="Enter Admission No."/>
                <input type="submit"  class="btn btn-info pull-left" value="Check"/>
                </div>
                <br />
                <br />
                <div>
                <label class="control-label pull-left">Enter Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="form-control input-sm width200 pull-left" placeholder="Enter Admission No."/>
                <input type="submit"  class="btn btn-info pull-left " value="Add"/>
                </div>
            </form>
        </div>
        <br /><br /><br />
        <div>
        	<legend>Generate List</legend>
        	<form class="form-horizontal">
            	<div>
                <label class="control-label pull-left width100">List Of&nbsp;&nbsp;&nbsp;</label>
                	<select class="form-control width200">
                    	<option>1st Years</option>
                        <option>2nd Years</option>
                        <option>3rd Years</option>
                        <option>4th Years</option>
                        <option>All Years</option>
                    </select>
                </div>
                <br />
                <div>
                <label class="control-label pull-left width100">Show&nbsp;&nbsp;&nbsp;</label>
                	<select class="form-control width200">
                    	<option>Paid</option>
                        <option>UnPaid</option>
                        <option>Both</option>
                        
                    </select>
                </div>
                <br />
                <div>
                <label class="control-label pull-left width100"></label>
                	<input type="submit" class="btn btn-info input-sm" value="Generate"/>
                </div>
            </form>
        </div>
	<?php 
	}
	?>
    </div>
</div>

</body>
<script src="../js/jquery-1.9.0.min.js" ></script>
<script src="../js/bootstrap.js"></script>
</html>