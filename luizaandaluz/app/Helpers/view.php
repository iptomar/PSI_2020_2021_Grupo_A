<?php
if (!function_exists('help_block')) {

    /**
     * Output error to form
     * @param string $id
     * @return string
     */
    function help_block($errors, $index)
    {
        if ($errors->has($index)) {
            echo "<p class='input-alert text-warning'>" . $errors->first($index) . "</p>";
        }
    }

}

