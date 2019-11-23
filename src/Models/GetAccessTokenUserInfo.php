<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetAccessTokenUserInfo implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @maps access_token
     * @var string $accessToken public property
     */
    public $accessToken;

    /**
     * @todo Write general description for this property
     * @required
     * @maps expires_in
     * @var string $expiresIn public property
     */
    public $expiresIn;

    /**
     * @todo Write general description for this property
     * @required
     * @maps refresh_token
     * @var string $refreshToken public property
     */
    public $refreshToken;

    /**
     * @todo Write general description for this property
     * @var string|null $error public property
     */
    public $error;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $userName public property
     */
    public $userName;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $insuranceCentreName public property
     */
    public $insuranceCentreName;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $insuranceCentreLogo public property
     */
    public $insuranceCentreLogo;

    /**
     * @todo Write general description for this property
     * @var string|null $insuranceCentreFavicon public property
     */
    public $insuranceCentreFavicon;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $licensed public property
     */
    public $licensed;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $insuranceCentreType public property
     */
    public $insuranceCentreType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $avatarUrl public property
     */
    public $avatarUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $aliasName public property
     */
    public $aliasName;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $userGroup public property
     */
    public $userGroup;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $userGroupTitle public property
     */
    public $userGroupTitle;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $roleIds public property
     */
    public $roleIds;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $roleTitles public property
     */
    public $roleTitles;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $unlimitedAccount public property
     */
    public $unlimitedAccount;

    /**
     * @todo Write general description for this property
     * @var string|null $rolePermissions public property
     */
    public $rolePermissions;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $id                     Initialization value for $this->id
     * @param string  $accessToken            Initialization value for $this->accessToken
     * @param string  $expiresIn              Initialization value for $this->expiresIn
     * @param string  $refreshToken           Initialization value for $this->refreshToken
     * @param string  $error                  Initialization value for $this->error
     * @param string  $userName               Initialization value for $this->userName
     * @param string  $insuranceCentreName    Initialization value for $this->insuranceCentreName
     * @param string  $insuranceCentreLogo    Initialization value for $this->insuranceCentreLogo
     * @param string  $insuranceCentreFavicon Initialization value for $this->insuranceCentreFavicon
     * @param bool    $licensed               Initialization value for $this->licensed
     * @param string  $email                  Initialization value for $this->email
     * @param integer $insuranceCentreType    Initialization value for $this->insuranceCentreType
     * @param string  $avatarUrl              Initialization value for $this->avatarUrl
     * @param string  $aliasName              Initialization value for $this->aliasName
     * @param integer $userGroup              Initialization value for $this->userGroup
     * @param string  $userGroupTitle         Initialization value for $this->userGroupTitle
     * @param array   $roleIds                Initialization value for $this->roleIds
     * @param string  $roleTitles             Initialization value for $this->roleTitles
     * @param bool    $unlimitedAccount       Initialization value for $this->unlimitedAccount
     * @param string  $rolePermissions        Initialization value for $this->rolePermissions
     */
    public function __construct()
    {
        if (20 == func_num_args()) {
            $this->id                     = func_get_arg(0);
            $this->accessToken            = func_get_arg(1);
            $this->expiresIn              = func_get_arg(2);
            $this->refreshToken           = func_get_arg(3);
            $this->error                  = func_get_arg(4);
            $this->userName               = func_get_arg(5);
            $this->insuranceCentreName    = func_get_arg(6);
            $this->insuranceCentreLogo    = func_get_arg(7);
            $this->insuranceCentreFavicon = func_get_arg(8);
            $this->licensed               = func_get_arg(9);
            $this->email                  = func_get_arg(10);
            $this->insuranceCentreType    = func_get_arg(11);
            $this->avatarUrl              = func_get_arg(12);
            $this->aliasName              = func_get_arg(13);
            $this->userGroup              = func_get_arg(14);
            $this->userGroupTitle         = func_get_arg(15);
            $this->roleIds                = func_get_arg(16);
            $this->roleTitles             = func_get_arg(17);
            $this->unlimitedAccount       = func_get_arg(18);
            $this->rolePermissions        = func_get_arg(19);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                     = $this->id;
        $json['access_token']           = $this->accessToken;
        $json['expires_in']             = $this->expiresIn;
        $json['refresh_token']          = $this->refreshToken;
        $json['error']                  = $this->error;
        $json['userName']               = $this->userName;
        $json['insuranceCentreName']    = $this->insuranceCentreName;
        $json['insuranceCentreLogo']    = $this->insuranceCentreLogo;
        $json['insuranceCentreFavicon'] = $this->insuranceCentreFavicon;
        $json['licensed']               = $this->licensed;
        $json['email']                  = $this->email;
        $json['insuranceCentreType']    = $this->insuranceCentreType;
        $json['avatarUrl']              = $this->avatarUrl;
        $json['aliasName']              = $this->aliasName;
        $json['userGroup']              = $this->userGroup;
        $json['userGroupTitle']         = $this->userGroupTitle;
        $json['roleIds']                = $this->roleIds;
        $json['roleTitles']             = $this->roleTitles;
        $json['unlimitedAccount']       = $this->unlimitedAccount;
        $json['rolePermissions']        = $this->rolePermissions;

        return $json;
    }
}
