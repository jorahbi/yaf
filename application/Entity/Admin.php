<?php

namespace Entity;

/**
 * Admin
 */
class Admin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $adminLimit;

    /**
     * @var integer
     */
    private $groupId;

    /**
     * @var integer
     */
    private $positionId;

    /**
     * @var string
     */
    private $realName;

    /**
     * @var string
     */
    private $jobNum;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $qq;

    /**
     * @var boolean
     */
    private $sex;

    /**
     * @var integer
     */
    private $bbsUid;

    /**
     * @var boolean
     */
    private $valid;

    /**
     * @var boolean
     */
    private $isService;

    /**
     * @var boolean
     */
    private $isInvestmentAdviser;

    /**
     * @var boolean
     */
    private $isBbsAdmin;

    /**
     * @var boolean
     */
    private $isPartTime;

    /**
     * @var boolean
     */
    private $isAutoAllot;

    /**
     * @var boolean
     */
    private $skin;

    /**
     * @var boolean
     */
    private $isServiceOnline;

    /**
     * @var integer
     */
    private $cno;


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
     * Set username
     *
     * @param string $username
     *
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set adminLimit
     *
     * @param string $adminLimit
     *
     * @return Admin
     */
    public function setAdminLimit($adminLimit)
    {
        $this->adminLimit = $adminLimit;

        return $this;
    }

    /**
     * Get adminLimit
     *
     * @return string
     */
    public function getAdminLimit()
    {
        return $this->adminLimit;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return Admin
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set positionId
     *
     * @param integer $positionId
     *
     * @return Admin
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;

        return $this;
    }

    /**
     * Get positionId
     *
     * @return integer
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return Admin
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
     * Set jobNum
     *
     * @param string $jobNum
     *
     * @return Admin
     */
    public function setJobNum($jobNum)
    {
        $this->jobNum = $jobNum;

        return $this;
    }

    /**
     * Get jobNum
     *
     * @return string
     */
    public function getJobNum()
    {
        return $this->jobNum;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Admin
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set qq
     *
     * @param string $qq
     *
     * @return Admin
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     *
     * @return Admin
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set bbsUid
     *
     * @param integer $bbsUid
     *
     * @return Admin
     */
    public function setBbsUid($bbsUid)
    {
        $this->bbsUid = $bbsUid;

        return $this;
    }

    /**
     * Get bbsUid
     *
     * @return integer
     */
    public function getBbsUid()
    {
        return $this->bbsUid;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return Admin
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set isService
     *
     * @param boolean $isService
     *
     * @return Admin
     */
    public function setIsService($isService)
    {
        $this->isService = $isService;

        return $this;
    }

    /**
     * Get isService
     *
     * @return boolean
     */
    public function getIsService()
    {
        return $this->isService;
    }

    /**
     * Set isInvestmentAdviser
     *
     * @param boolean $isInvestmentAdviser
     *
     * @return Admin
     */
    public function setIsInvestmentAdviser($isInvestmentAdviser)
    {
        $this->isInvestmentAdviser = $isInvestmentAdviser;

        return $this;
    }

    /**
     * Get isInvestmentAdviser
     *
     * @return boolean
     */
    public function getIsInvestmentAdviser()
    {
        return $this->isInvestmentAdviser;
    }

    /**
     * Set isBbsAdmin
     *
     * @param boolean $isBbsAdmin
     *
     * @return Admin
     */
    public function setIsBbsAdmin($isBbsAdmin)
    {
        $this->isBbsAdmin = $isBbsAdmin;

        return $this;
    }

    /**
     * Get isBbsAdmin
     *
     * @return boolean
     */
    public function getIsBbsAdmin()
    {
        return $this->isBbsAdmin;
    }

    /**
     * Set isPartTime
     *
     * @param boolean $isPartTime
     *
     * @return Admin
     */
    public function setIsPartTime($isPartTime)
    {
        $this->isPartTime = $isPartTime;

        return $this;
    }

    /**
     * Get isPartTime
     *
     * @return boolean
     */
    public function getIsPartTime()
    {
        return $this->isPartTime;
    }

    /**
     * Set isAutoAllot
     *
     * @param boolean $isAutoAllot
     *
     * @return Admin
     */
    public function setIsAutoAllot($isAutoAllot)
    {
        $this->isAutoAllot = $isAutoAllot;

        return $this;
    }

    /**
     * Get isAutoAllot
     *
     * @return boolean
     */
    public function getIsAutoAllot()
    {
        return $this->isAutoAllot;
    }

    /**
     * Set skin
     *
     * @param boolean $skin
     *
     * @return Admin
     */
    public function setSkin($skin)
    {
        $this->skin = $skin;

        return $this;
    }

    /**
     * Get skin
     *
     * @return boolean
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set isServiceOnline
     *
     * @param boolean $isServiceOnline
     *
     * @return Admin
     */
    public function setIsServiceOnline($isServiceOnline)
    {
        $this->isServiceOnline = $isServiceOnline;

        return $this;
    }

    /**
     * Get isServiceOnline
     *
     * @return boolean
     */
    public function getIsServiceOnline()
    {
        return $this->isServiceOnline;
    }

    /**
     * Set cno
     *
     * @param integer $cno
     *
     * @return Admin
     */
    public function setCno($cno)
    {
        $this->cno = $cno;

        return $this;
    }

    /**
     * Get cno
     *
     * @return integer
     */
    public function getCno()
    {
        return $this->cno;
    }
}

