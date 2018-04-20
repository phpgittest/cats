<?php
/**
 * @package Cat
 * @author o.borodyuk
 */
class Cat
{
    public static $canFly = false;
    var $name;
    var $age;
    var $hairColors;
    var $isAlive;
    const month = "March";

    /**
     * Cat constructor.
     * @param $name
     * @param $age
     * @param array $hairColors
     */
    public function __construct($name, $age, array $hairColors)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hairColors = $hairColors;
        $this->isAlive = true;
    }

    /**
     * @return mixed
     */
    public function canFlyValue() {
        return self::$canFly;
    }

    /**
     *Cat destructor.
     */
    public function __destruct()
    {
        $this->isAlive = false;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function error()
    {
            throw new Exception("That\'s my error");
    }
}