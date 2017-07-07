<?php
    $announcement = $this->get('announcement');
?>

<p>Hier soll das Announcement stehen:</p>
<p><?php echo (($announcement == null) ? 'Kein Announcement vorhanden!' : $announcement->getContent()) ?></p>