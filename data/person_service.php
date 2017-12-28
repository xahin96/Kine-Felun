<?php include("dbora.php"); ?>
<?php
	function searchAll()
    {
        $sql = "SELECT * FROM product";
        return $sql;
    }
    function searchAllTshirt()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='1'";
        return $sql;
    }
    function searchAllJeans()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='2'";
        return $sql;
    }
    function searchAllFshirt()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='3'";
        return $sql;
    }
    function searchAllFpant()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='4'";
        return $sql;
    }
    function searchAllMWatch()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='5'";
        return $sql;
    }
    function searchAllMShoe()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='6'";
        return $sql;
    }
    function searchAllWDress()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='8'";
        return $sql;
    }
 function searchAllSports()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='7'";
        return $sql;
    }
    function searchAllCosmetics()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='9'";
        return $sql;
    }
    function searchAllWshoes()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='10'";
        return $sql;
    }
    function searchAllWJewelleries()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='11'";
        return $sql;
    }
    function searchAllSmartPhone()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='12'";
        return $sql;
    }
    function searchAllSmartWatch()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='13'";
        return $sql;
    }
    function searchAllAccesories()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='14'";
        return $sql;
    }
    function searchAllLighting()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='15'";
        return $sql;
    }
    function searchAllBedding()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='16'";
        return $sql;
    }
    function searchAllFurniture()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='17'";
        return $sql;
    }
    function searchAllLaptop()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='18'";
        return $sql;
    }
    function searchAllStorage()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='19'";
        return $sql;
    }
    function searchAllMonitor()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='20'";
        return $sql;
    }
    function searchAllComOthers()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='21'";
        return $sql;
    }
    function searchAllAuto()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='22'";
        return $sql;
    }
    function searchAllKid()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='23'";
        return $sql;
    }
    function searchAllPet()
    {
        $sql = "SELECT * FROM product WHERE CATEGORY_ID='24'";
        return $sql;
    }
    function insertItem()
    {
        //query for inserting information
    }
?>