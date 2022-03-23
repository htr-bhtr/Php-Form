<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Thiết kế giao diện PHP </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<?php 
      $name = $email = $phone = $comment = $gender = ""	;
      $nameErr = $emailErr = $phoneErr = $commentErr = $genderErr = "";
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
      	// code...
      	if (empty($_POST['name'])) {
      		// code...
      	    $nameErr = "Vui Lòng Nhập Họ Tên";
      	}
      	else{
      		$nameErr = $_POST['name'];
      		if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$/', $nameErr)) {
      			$nameErr = "Vui Lòng Nhập Chính Xác Họ tên";
      		}
      	 }
      }
    ?>
    <div class="panel panel-primary">
    	<div class="panel-heading">
    		<h1 align="center"> PHP Form Valication </h1>
    	</div>
    	<div class="panel-body">
    		<form method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    			<div class="form-group">
    				<label class="control-label col-sm-3"> Name </label>
    				<div class="col-sm-6">
    					<input type="text" name="name" placeholder="Bùi Hiếu Trung" class="form-control">
    				</div>
    				<label style="color: red;, font-width: font-italic" class="control-label">
    					<?php echo $nameErr; ?>
    				</label>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-sm-3"> Email </label>
    				<div class="col-sm-6">
    					<input type="text" name="name" placeholder="buihieutrung2001@gmail.com" class="form-control">
    				</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-sm-3"> Phone </label>
    				<div class="col-sm-6">
    					<input type="text" name="name"  class="form-control">
    				</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-sm-3"> Comment </label>
    				<div class="col-sm-6">
    					<textarea class="form-control" rows="3" name="name"></textarea>
    				</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-sm-3"> Gender </label>
    				<div class="col-sm-6">
    					<label class="radio-inline"> <input type="radio" name="gender" value="Female"> Female </label>
    					<label class="radio-inline"> <input type="radio" name="gender" value="Male"> Male </label>
    					<label class="radio-inline"> <input type="radio" name="gender" value="Other"> Other</label>
    				</div>
    			</div>
    			<div class="form-group" style="text-align:center">
    				<button type="submit" class="btn btn-success"> Submit </button>
    			</div>
    		</form>
    	</div>
    </div>
</body>
</html>