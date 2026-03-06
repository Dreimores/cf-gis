<?php

class FarmInfoModel extends Connection
{
    public function readFarmInfo()
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM farmers_and_growers_info");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createFarmInfo()
    {
        
    }
}
