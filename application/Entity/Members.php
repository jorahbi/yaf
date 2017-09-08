<?php

namespace Entity;

/**
 * Members
 */
class Members
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $nickName;

    /**
     * @var string
     */
    private $realName;

    /**
     * @var string
     */
    private $userPass;

    /**
     * @var string
     */
    private $dealPass;

    /**
     * @var string
     */
    private $appDealPass;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var string
     */
    private $userPhone;

    /**
     * @var boolean
     */
    private $userAge;

    /**
     * @var string
     */
    private $userIdcard;

    /**
     * @var boolean
     */
    private $userIdcardType;

    /**
     * @var integer
     */
    private $userGrowth;

    /**
     * @var integer
     */
    private $userIntegral;

    /**
     * @var boolean
     */
    private $userExperience;

    /**
     * @var boolean
     */
    private $userNovice;

    /**
     * @var boolean
     */
    private $userType;

    /**
     * @var string
     */
    private $userHead;

    /**
     * @var boolean
     */
    private $vipLevel;

    /**
     * @var integer
     */
    private $vipTime;

    /**
     * @var integer
     */
    private $bbsLevelId;

    /**
     * @var integer
     */
    private $bbsExp;

    /**
     * @var string
     */
    private $accountMoney;

    /**
     * @var string
     */
    private $receiveMoney;

    /**
     * @var string
     */
    private $recommend;

    /**
     * @var integer
     */
    private $friendId;

    /**
     * @var boolean
     */
    private $idStatus;

    /**
     * @var boolean
     */
    private $emailStatus;

    /**
     * @var boolean
     */
    private $accountStatus;

    /**
     * @var boolean
     */
    private $weixinStatus;

    /**
     * @var boolean
     */
    private $questionStatus;

    /**
     * @var integer
     */
    private $client;

    /**
     * @var integer
     */
    private $serviceId;

    /**
     * @var integer
     */
    private $investmentAdviserId;

    /**
     * @var string
     */
    private $qqId;

    /**
     * @var string
     */
    private $wxId;

    /**
     * @var boolean
     */
    private $loginProtect;

    /**
     * @var boolean
     */
    private $loginErrorNum;

    /**
     * @var integer
     */
    private $loginNum;

    /**
     * @var boolean
     */
    private $memberStatus;

    /**
     * @var integer
     */
    private $lastTime;

    /**
     * @var boolean
     */
    private $sinaPasswd;

    /**
     * @var integer
     */
    private $investNum;

    /**
     * @var string
     */
    private $gesture;

    /**
     * @var boolean
     */
    private $advertisement;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Members
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return Members
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return Members
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Set userPass
     *
     * @param string $userPass
     *
     * @return Members
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;

        return $this;
    }

    /**
     * Get userPass
     *
     * @return string
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * Set dealPass
     *
     * @param string $dealPass
     *
     * @return Members
     */
    public function setDealPass($dealPass)
    {
        $this->dealPass = $dealPass;

        return $this;
    }

    /**
     * Get dealPass
     *
     * @return string
     */
    public function getDealPass()
    {
        return $this->dealPass;
    }

    /**
     * Set appDealPass
     *
     * @param string $appDealPass
     *
     * @return Members
     */
    public function setAppDealPass($appDealPass)
    {
        $this->appDealPass = $appDealPass;

        return $this;
    }

    /**
     * Get appDealPass
     *
     * @return string
     */
    public function getAppDealPass()
    {
        return $this->appDealPass;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return Members
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return Members
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set userAge
     *
     * @param boolean $userAge
     *
     * @return Members
     */
    public function setUserAge($userAge)
    {
        $this->userAge = $userAge;

        return $this;
    }

    /**
     * Get userAge
     *
     * @return boolean
     */
    public function getUserAge()
    {
        return $this->userAge;
    }

    /**
     * Set userIdcard
     *
     * @param string $userIdcard
     *
     * @return Members
     */
    public function setUserIdcard($userIdcard)
    {
        $this->userIdcard = $userIdcard;

        return $this;
    }

    /**
     * Get userIdcard
     *
     * @return string
     */
    public function getUserIdcard()
    {
        return $this->userIdcard;
    }

    /**
     * Set userIdcardType
     *
     * @param boolean $userIdcardType
     *
     * @return Members
     */
    public function setUserIdcardType($userIdcardType)
    {
        $this->userIdcardType = $userIdcardType;

        return $this;
    }

    /**
     * Get userIdcardType
     *
     * @return boolean
     */
    public function getUserIdcardType()
    {
        return $this->userIdcardType;
    }

    /**
     * Set userGrowth
     *
     * @param integer $userGrowth
     *
     * @return Members
     */
    public function setUserGrowth($userGrowth)
    {
        $this->userGrowth = $userGrowth;

        return $this;
    }

    /**
     * Get userGrowth
     *
     * @return integer
     */
    public function getUserGrowth()
    {
        return $this->userGrowth;
    }

    /**
     * Set userIntegral
     *
     * @param integer $userIntegral
     *
     * @return Members
     */
    public function setUserIntegral($userIntegral)
    {
        $this->userIntegral = $userIntegral;

        return $this;
    }

    /**
     * Get userIntegral
     *
     * @return integer
     */
    public function getUserIntegral()
    {
        return $this->userIntegral;
    }

    /**
     * Set userExperience
     *
     * @param boolean $userExperience
     *
     * @return Members
     */
    public function setUserExperience($userExperience)
    {
        $this->userExperience = $userExperience;

        return $this;
    }

    /**
     * Get userExperience
     *
     * @return boolean
     */
    public function getUserExperience()
    {
        return $this->userExperience;
    }

    /**
     * Set userNovice
     *
     * @param boolean $userNovice
     *
     * @return Members
     */
    public function setUserNovice($userNovice)
    {
        $this->userNovice = $userNovice;

        return $this;
    }

    /**
     * Get userNovice
     *
     * @return boolean
     */
    public function getUserNovice()
    {
        return $this->userNovice;
    }

    /**
     * Set userType
     *
     * @param boolean $userType
     *
     * @return Members
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return boolean
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set userHead
     *
     * @param string $userHead
     *
     * @return Members
     */
    public function setUserHead($userHead)
    {
        $this->userHead = $userHead;

        return $this;
    }

    /**
     * Get userHead
     *
     * @return string
     */
    public function getUserHead()
    {
        return $this->userHead;
    }

    /**
     * Set vipLevel
     *
     * @param boolean $vipLevel
     *
     * @return Members
     */
    public function setVipLevel($vipLevel)
    {
        $this->vipLevel = $vipLevel;

        return $this;
    }

    /**
     * Get vipLevel
     *
     * @return boolean
     */
    public function getVipLevel()
    {
        return $this->vipLevel;
    }

    /**
     * Set vipTime
     *
     * @param integer $vipTime
     *
     * @return Members
     */
    public function setVipTime($vipTime)
    {
        $this->vipTime = $vipTime;

        return $this;
    }

    /**
     * Get vipTime
     *
     * @return integer
     */
    public function getVipTime()
    {
        return $this->vipTime;
    }

    /**
     * Set bbsLevelId
     *
     * @param integer $bbsLevelId
     *
     * @return Members
     */
    public function setBbsLevelId($bbsLevelId)
    {
        $this->bbsLevelId = $bbsLevelId;

        return $this;
    }

    /**
     * Get bbsLevelId
     *
     * @return integer
     */
    public function getBbsLevelId()
    {
        return $this->bbsLevelId;
    }

    /**
     * Set bbsExp
     *
     * @param integer $bbsExp
     *
     * @return Members
     */
    public function setBbsExp($bbsExp)
    {
        $this->bbsExp = $bbsExp;

        return $this;
    }

    /**
     * Get bbsExp
     *
     * @return integer
     */
    public function getBbsExp()
    {
        return $this->bbsExp;
    }

    /**
     * Set accountMoney
     *
     * @param string $accountMoney
     *
     * @return Members
     */
    public function setAccountMoney($accountMoney)
    {
        $this->accountMoney = $accountMoney;

        return $this;
    }

    /**
     * Get accountMoney
     *
     * @return string
     */
    public function getAccountMoney()
    {
        return $this->accountMoney;
    }

    /**
     * Set receiveMoney
     *
     * @param string $receiveMoney
     *
     * @return Members
     */
    public function setReceiveMoney($receiveMoney)
    {
        $this->receiveMoney = $receiveMoney;

        return $this;
    }

    /**
     * Get receiveMoney
     *
     * @return string
     */
    public function getReceiveMoney()
    {
        return $this->receiveMoney;
    }

    /**
     * Set recommend
     *
     * @param string $recommend
     *
     * @return Members
     */
    public function setRecommend($recommend)
    {
        $this->recommend = $recommend;

        return $this;
    }

    /**
     * Get recommend
     *
     * @return string
     */
    public function getRecommend()
    {
        return $this->recommend;
    }

    /**
     * Set friendId
     *
     * @param integer $friendId
     *
     * @return Members
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return integer
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * Set idStatus
     *
     * @param boolean $idStatus
     *
     * @return Members
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return boolean
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set emailStatus
     *
     * @param boolean $emailStatus
     *
     * @return Members
     */
    public function setEmailStatus($emailStatus)
    {
        $this->emailStatus = $emailStatus;

        return $this;
    }

    /**
     * Get emailStatus
     *
     * @return boolean
     */
    public function getEmailStatus()
    {
        return $this->emailStatus;
    }

    /**
     * Set accountStatus
     *
     * @param boolean $accountStatus
     *
     * @return Members
     */
    public function setAccountStatus($accountStatus)
    {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Get accountStatus
     *
     * @return boolean
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
     * Set weixinStatus
     *
     * @param boolean $weixinStatus
     *
     * @return Members
     */
    public function setWeixinStatus($weixinStatus)
    {
        $this->weixinStatus = $weixinStatus;

        return $this;
    }

    /**
     * Get weixinStatus
     *
     * @return boolean
     */
    public function getWeixinStatus()
    {
        return $this->weixinStatus;
    }

    /**
     * Set questionStatus
     *
     * @param boolean $questionStatus
     *
     * @return Members
     */
    public function setQuestionStatus($questionStatus)
    {
        $this->questionStatus = $questionStatus;

        return $this;
    }

    /**
     * Get questionStatus
     *
     * @return boolean
     */
    public function getQuestionStatus()
    {
        return $this->questionStatus;
    }

    /**
     * Set client
     *
     * @param integer $client
     *
     * @return Members
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return integer
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return Members
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return integer
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set investmentAdviserId
     *
     * @param integer $investmentAdviserId
     *
     * @return Members
     */
    public function setInvestmentAdviserId($investmentAdviserId)
    {
        $this->investmentAdviserId = $investmentAdviserId;

        return $this;
    }

    /**
     * Get investmentAdviserId
     *
     * @return integer
     */
    public function getInvestmentAdviserId()
    {
        return $this->investmentAdviserId;
    }

    /**
     * Set qqId
     *
     * @param string $qqId
     *
     * @return Members
     */
    public function setQqId($qqId)
    {
        $this->qqId = $qqId;

        return $this;
    }

    /**
     * Get qqId
     *
     * @return string
     */
    public function getQqId()
    {
        return $this->qqId;
    }

    /**
     * Set wxId
     *
     * @param string $wxId
     *
     * @return Members
     */
    public function setWxId($wxId)
    {
        $this->wxId = $wxId;

        return $this;
    }

    /**
     * Get wxId
     *
     * @return string
     */
    public function getWxId()
    {
        return $this->wxId;
    }

    /**
     * Set loginProtect
     *
     * @param boolean $loginProtect
     *
     * @return Members
     */
    public function setLoginProtect($loginProtect)
    {
        $this->loginProtect = $loginProtect;

        return $this;
    }

    /**
     * Get loginProtect
     *
     * @return boolean
     */
    public function getLoginProtect()
    {
        return $this->loginProtect;
    }

    /**
     * Set loginErrorNum
     *
     * @param boolean $loginErrorNum
     *
     * @return Members
     */
    public function setLoginErrorNum($loginErrorNum)
    {
        $this->loginErrorNum = $loginErrorNum;

        return $this;
    }

    /**
     * Get loginErrorNum
     *
     * @return boolean
     */
    public function getLoginErrorNum()
    {
        return $this->loginErrorNum;
    }

    /**
     * Set loginNum
     *
     * @param integer $loginNum
     *
     * @return Members
     */
    public function setLoginNum($loginNum)
    {
        $this->loginNum = $loginNum;

        return $this;
    }

    /**
     * Get loginNum
     *
     * @return integer
     */
    public function getLoginNum()
    {
        return $this->loginNum;
    }

    /**
     * Set memberStatus
     *
     * @param boolean $memberStatus
     *
     * @return Members
     */
    public function setMemberStatus($memberStatus)
    {
        $this->memberStatus = $memberStatus;

        return $this;
    }

    /**
     * Get memberStatus
     *
     * @return boolean
     */
    public function getMemberStatus()
    {
        return $this->memberStatus;
    }

    /**
     * Set lastTime
     *
     * @param integer $lastTime
     *
     * @return Members
     */
    public function setLastTime($lastTime)
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    /**
     * Get lastTime
     *
     * @return integer
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }

    /**
     * Set sinaPasswd
     *
     * @param boolean $sinaPasswd
     *
     * @return Members
     */
    public function setSinaPasswd($sinaPasswd)
    {
        $this->sinaPasswd = $sinaPasswd;

        return $this;
    }

    /**
     * Get sinaPasswd
     *
     * @return boolean
     */
    public function getSinaPasswd()
    {
        return $this->sinaPasswd;
    }

    /**
     * Set investNum
     *
     * @param integer $investNum
     *
     * @return Members
     */
    public function setInvestNum($investNum)
    {
        $this->investNum = $investNum;

        return $this;
    }

    /**
     * Get investNum
     *
     * @return integer
     */
    public function getInvestNum()
    {
        return $this->investNum;
    }

    /**
     * Set gesture
     *
     * @param string $gesture
     *
     * @return Members
     */
    public function setGesture($gesture)
    {
        $this->gesture = $gesture;

        return $this;
    }

    /**
     * Get gesture
     *
     * @return string
     */
    public function getGesture()
    {
        return $this->gesture;
    }

    /**
     * Set advertisement
     *
     * @param boolean $advertisement
     *
     * @return Members
     */
    public function setAdvertisement($advertisement)
    {
        $this->advertisement = $advertisement;

        return $this;
    }

    /**
     * Get advertisement
     *
     * @return boolean
     */
    public function getAdvertisement()
    {
        return $this->advertisement;
    }
}

