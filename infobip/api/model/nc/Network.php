<?php
namespace infobip\api\model\nc;
use JsonSerializable;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class Network implements JsonSerializable
{
    private $countryPrefix;
    private $networkName;
    private $countryName;
    private $networkPrefix;

    public function setCountryPrefix($countryPrefix)
    {
        $this->countryPrefix = $countryPrefix;
    }

    public function getCountryPrefix()
    {
        return $this->countryPrefix;
    }

    public function setNetworkName($networkName)
    {
        $this->networkName = $networkName;
    }

    public function getNetworkName()
    {
        return $this->networkName;
    }

    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    public function getCountryName()
    {
        return $this->countryName;
    }

    public function setNetworkPrefix($networkPrefix)
    {
        $this->networkPrefix = $networkPrefix;
    }

    public function getNetworkPrefix()
    {
        return $this->networkPrefix;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

?>