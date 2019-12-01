<?php 
if (isset($_GET['action'])) {
	$action=$_GET['action'];
}
else{
	$action='';
}
switch ($action) {
	//danh mục sản phẩm 
	case 'show-danhmuc':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'add-danhmuc':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'sua-danhmuc':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'xoa-danhmuc':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	//món ăn
	case 'show-monan':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'add-monan':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'sua-monan':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'xoa-monan':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	// nhà hàng
	case 'show-nhahang':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'add-nhahang':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'sua-nhahang':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	case 'xoa-nhahang':
	require "view/back-end/nice-admin-lite-master/nice-html/ltr/index.php";
		break;
	//mặc định
	default:
	require_once "view/font-end/freshfood/index.html";
		break;
}

 ?>