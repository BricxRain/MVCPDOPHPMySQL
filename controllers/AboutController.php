<?php

class AboutController extends Controller {

    public static function test() {
        print_r(self::query("SELECT * FROM users"));
    }

}

?>