<?php
	if (isset($_GET['result']) && !empty($_GET['result'])) {
?>
<meta property="og:title" content="А какой типаж подходит тебе?"/>
<meta property="og:image" content="http://iq.intel.ru/refresh/img/sharing/<?php echo $_GET['result'];?>.jpg"/>
<meta property="og:site_name" content="iq.intel.ru/refresh"/>
<meta property="og:description" content="IQ.INTEL.RU"/>
<?php
	}
?>
<meta http-equiv="refresh" content="0; url=http://iq.intel.ru/refresh">
