<?php

global $objSession;

// sidebar


?>

<p>Account balance: USD$ <?php echo number_format(DealFeedCommissionQuery::getCurrentCommissions($objSession->getUser()), 2); ?></p>

