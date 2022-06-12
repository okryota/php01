<table width="100%" border="1">
		<tr>
			<td class="time">登録日時</td>
			<td class="name">お名前</td>
            <td class="mail">EMAIL</td>
            <td class="age">生年月日</td>
            <td class="sex">性別</td>
            <td class="tel">電話番号</td>
            <td class="adress">住所</td>            
		</tr>
	<?php $file = fopen('data/data.txt', 'r'); ?>
	<?php if($file !== FALSE ): ?>  
	    <?php while( ($data = fgetcsv($file)) !== FALSE ): ?>
	     <?php
	     	$time = $data[0];
	     	$name = $data[1];
	     	$mail = $data[2];
            $age = $data[3];
            $sex = $data[4];
            $tel = $data[5];
            $adress = $data[6];
	     ?>
	    	<tr>
	    		<td><?=$time ?></td>
	    		<td><?=$name ?></td>
                <td><?=$mail ?></td>
                <td><?=$age ?></td>
                <td><?=$sex ?></td>
                <td><?=$tel ?></td>
	    		<td><?=$adress ?></td>
	    	</tr>
	    <?php endwhile; ?>
	<?php endif; ?>
	<?php fclose ( $file ); ?>
	</table>
    //合計数
    <?php
      $arr = array($file);
      $cnt = count($file);
      echo $cnt;
    ?>
