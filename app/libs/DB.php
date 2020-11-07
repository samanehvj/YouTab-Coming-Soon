<?php

class DB
{

    public $debug = false;

    public function connect()
    {
        return mysqli_connect('localhost', 'root', 'root', 'youtab_coming');
    }

    static public function query($sql)
    {

        $oDB = new DB();

        if ($oDB->debug) {
            $oDB->debug($sql);
        }

        $results = mysqli_query($oDB->connect(), $sql);

        if ($results) {
            $data = null;
            while ($row = mysqli_fetch_assoc($results)) {
                $data[] = $row;
            }

            return $data;
        }
    }

    public static function insert($sql)
    {

        $oDB = new DB();

        if ($oDB->debug) {
            $oDB->debug($sql);
        }

        // if insert successfully, it will return true otherwise return false.
        $con = $oDB->connect();
        return mysqli_query($con, $sql);
    }

    public function debug($sql)
    {
        echo "<script>console.log('$sql')</script>";
    }
}
