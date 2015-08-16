<?php

namespace Common;


interface IDatabase{

    function connect($host, $username, $password, $dbname);

    function query($sql);

    function close();

}