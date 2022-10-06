<?php

foreach ($ACCEPTED_LANGUAGES as $lang) {
    echo '<a href="?lang=' . $lang . '"><img class="language" src="assets/img/lang/' . $lang . '.webp" width="24" height="24" alt="' . $lang . '"></a>';
}