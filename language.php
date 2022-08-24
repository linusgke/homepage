<?php

foreach ($ACCEPTED_LANGUAGES as $lang) {
    echo '<a href="?lang=' . $lang . '"><img src="assets/img/lang/' . $lang . '.webp" width="24" height="24" alt="" style="margin-right: 10px; float: right"></a>';
}