function getCurrentDate($databaseName) {
    if ($databaseName == "MariaDB") {
        $returnData = date("Y-m-d H:i:s");
    }
    return $returnData;
}
