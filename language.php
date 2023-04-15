<?php

foreach ($ACCEPTED_LANGUAGES as $lang) {
    echo '<a href="?lang=' . $lang . '"><img class="language" src="assets/img/lang/' . $lang . '.webp" alt="' . $lang . '"></a>';
}