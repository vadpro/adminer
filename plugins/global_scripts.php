<?php

class AdminerScripts {

    function __construct($scripts = array()) {
        $this->scripts = $scripts;
    }

    function head() {
//         echo "<meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src * data:; object-src 'none'">";
        foreach ($this->scripts as $script) {
            echo "<script type='text/javascript' src='" . h($script) . "'></script>\n";
        }
    }
}