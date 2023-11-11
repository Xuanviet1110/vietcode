<?php
    include_once 'db.php';
    $sql_cateList = "select * from catenews";
    $result_cateList = $conn->query($sql_cateList);
	// $sql = "select * from product join category on product.cate_id=category.cate_id";
    $sql_newsList = "select * from news join catenews on news.cate_id=catenews.cate_id";
    $result_newsList = $conn->query($sql_newsList);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tin Tuc</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<div id="wp">
	<div id="header">
		<img src="images/logo.png">
	</div>
	<div id="menu">
		<ul>
			<li><a href="#">Trang chủ</a></li>
			<?php                           
				foreach($result_cateList as $row) {
					?>
						<li><a href="#"><?php echo $row['cate_name']?></a></li>
					<?php
				}
			?>
			<li><a href="#">Liên hệ</a></li>
		</ul>
	</div>
	<div id="content">
	<div id="qc">
		<img src="images/banner.jpg">
	</div>
		<div class="danhmuc">TIN NỔI BẬT</div>
		<?php                           
				foreach($result_newsList as $row) {
					?>
						<div class="tin">
							<a href="new_detail.php?news_id=<?php echo $row['news_id']?>"><img src="images/<?php echo $row['img']?>"/></a>
							<div class="td"><a href="new_detail.php?news_id=<?php echo $row['news_id']?>"><?php echo $row['title']?></a></div>
							<div class="dmuc"><?php echo $row['cate_name']?></div>
							<div class="nd"><?php echo $row['intro']?></div>
						</div>
					<?php
				}
			?>
		<!-- <div class="tin">
			<a href="new_detail.html"><img src="images/top1140x84.jpg"/></a>
			<div class="td"><a href="new_detail.html">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></div>
			<div class="dmuc">Thể thao</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/tin2.jpg"/></a>
			<div class="td"><a href="new_detail.html">Angelina Jolie - Brad Pitt: yêu bất chấp, chia ly ồn ào</a></div>
			<div class="dmuc">Xã hội</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/top1140x84.jpg"/></a>
			<div class="td"><a href="new_detail.html">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></div>
			<div class="dmuc">Thể thao</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/tin2.jpg"/></a>
			<div class="td"><a href="new_detail.html">Angelina Jolie - Brad Pitt: yêu bất chấp, chia ly ồn ào</a></div>
			<div class="dmuc">Xã hội</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/top1140x84.jpg"/></a>
			<div class="td"><a href="new_detail.html">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></div>
			<div class="dmuc">Thể thao</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/tin2.jpg"/></a>
			<div class="td"><a href="new_detail.html">Angelina Jolie - Brad Pitt: yêu bất chấp, chia ly ồn ào</a></div>
			<div class="dmuc">Xã hội</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div> -->
	</div>
	<div id="footer">LAB TIN TỨC</div>
</div>
</body>
</html>