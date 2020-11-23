<h2>스터디 - 덤프</h2>

<?php
var_dump($study);
?>

<p><label>연설자</label><span style="margin-left: 30px"><?= $study->speech_man ?></span></p>
<p><label>스터디 일자</label><span style="margin-left: 30px"><?= $study->study_date->format('Y-m-i') ?></span></p>
<p><label>스터디 명</label><span style="margin-left: 30px"><?= $study->title ?></span></p>