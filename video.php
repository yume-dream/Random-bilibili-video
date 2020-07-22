<?php

  // 存储数据的文件
$filename = "videos.txt";

// 读取整个数据文件
$data = file_get_contents($filename);
// 按换行符分割成数组
$data = explode(PHP_EOL, $data);
// 随机获取一行索引
$result = $data[array_rand($data)];
//输出
print <<<HTML

<div class="modal-mask">
		<div class="modal-wrapper modal-video"  >
			<div class="modal-container">
				<div title="关闭" class="modal-close-button">
			</div> 
			<div class="modal-content">
				<div class="modal-video-wrapper">
					<div class="modal-video-element">
					<iframe src="//player.bilibili.com/player.html?{$result}&amp;high_quality=1&amp;danmaku=1&amp;autoplay=0" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true" class="modal-video-element"> </iframe>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
HTML;



?>