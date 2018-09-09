<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/8/18
 * Time: 8:18 PM
 */

// autoload.php
spl_autoload_register(function ($class) {
    require_once "$class.php";
});

class AutoLoading extends ArrayFunctions
{
    public function getSomething()
    {
        var_dump(filter_var('joh\@example.com', FILTER_SANITIZE_EMAIL));
    }

}

$som = new AutoLoading();
$som->getSomething();
echo $som->add([1,2,3,4,5,6,7]);