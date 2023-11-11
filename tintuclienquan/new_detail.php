<?php
    include_once 'db.php';

	$sql_cateList = "select * from catenews";
    $result_cateList = $conn->query($sql_cateList);

    if ($_GET['news_id']) {
        $news_id = $_GET['news_id'];
        $sql_newsInfor = "select * from news join catenews on news.cate_id=catenews.cate_id where news_id=$news_id";
        $result_newsInfor = $conn->query($sql_newsInfor)->fetch();
    } else {
        echo "Không tìm thấy tin tức";
    }    
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
		<div class="boxtin">
			<p class="dmuc"><?php echo $result_newsInfor['cate_name']?></p>
			<div class="td"><?php echo $result_newsInfor['title']?></div>
			<p  id="anhtin"><img src="images/<?php echo $result_newsInfor['img']?>"/></p>
			<div class="nd">
				<p><?php echo $result_newsInfor['detail']?></p>

				<!-- <p>Tuy nhiên, sang tới vòng phân hạng, trời đổ mưa khiến tay đua của Ferrari mất đi lợi thế và chứng kiến bộ đôi Mercedes giành trọn hai vị trí xuất phát đầu. Vettel thậm chí chỉ xuất phát thứ tư, sau cả đồng đội Kimi Raikkonen. Do thời tiết nắng ráo tại cuộc đua chính thức chiều Chủ nhật, Mercedes phải tìm cách áp dụng chiến thuật hợp lý và cố gắng sử dụng Bottas chặn hậu hai chiếc SF71H để giữ chắc ngôi đầu cho Hamilton.</p> -->

				<!-- <p>Màn xuất phát diễn ra đúng như dự đoán của Mercedes, Raikkonen nhanh chóng bị đồng đội Vettel vượt qua, trong khi Bottas hoàn thành nhiệm vụ che chắn, giúp  Hamilton giữ vững ngôi đầu đoàn đua. Với bộ lốp xuất phát là lốp mềm trong khi bộ đôi Mercedes xuất phát với lốp cực mềm, Ferrari lộ rõ ý đồ cố gắng vào pit thay lốp càng muộn càng tốt để tấn công đối thủ ở cuối chặng nhờ ưu thế từ bộ lốp mới hơn.</p>

				<p>Tuy nhiên, sang tới vòng phân hạng, trời đổ mưa khiến tay đua của Ferrari mất đi lợi thế và chứng kiến bộ đôi Mercedes giành trọn hai vị trí xuất phát đầu. Vettel thậm chí chỉ xuất phát thứ tư, sau cả đồng đội Kimi Raikkonen. Do thời tiết nắng ráo tại cuộc đua chính thức chiều Chủ nhật, Mercedes phải tìm cách áp dụng chiến thuật hợp lý và cố gắng sử dụng Bottas chặn hậu hai chiếc SF71H để giữ chắc ngôi đầu cho Hamilton.</p>

				<p>Màn xuất phát diễn ra đúng như dự đoán của Mercedes, Raikkonen nhanh chóng bị đồng đội Vettel vượt qua, trong khi Bottas hoàn thành nhiệm vụ che chắn, giúp  Hamilton giữ vững ngôi đầu đoàn đua. Với bộ lốp xuất phát là lốp mềm trong khi bộ đôi Mercedes xuất phát với lốp cực mềm, Ferrari lộ rõ ý đồ cố gắng vào pit thay lốp càng muộn càng tốt để tấn công đối thủ ở cuối chặng nhờ ưu thế từ bộ lốp mới hơn.</p> -->
			</div>
		</div>
		<p class="lquan">TIN LIÊN QUAN</p>
		<div class="lquan">
			<ul>
				<li><a href="#">HLV Park Hang-seo chưa hài lòng dù đại thắng Pakistan</a></li>
				<li><a href="#">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></li>
				<li><a href="#">Chelsea cho mượn tiền vệ 52 triệu đôla tới Milan</a></li>
				<li><a href="#">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></li>
				<li><a href="#">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></li>
			</ul>
		</div>
	</div>
	<div id="footer">LAB TIN TỨC</div>
</div>
</body>
</html>