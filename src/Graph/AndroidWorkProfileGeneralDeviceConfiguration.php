<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;

class AndroidWorkProfileGeneralDeviceConfiguration extends ClientObject
{
    /**
     * @return bool
     */
    public function getPasswordBlockFingerprintUnlock()
    {
        if (!$this->isPropertyAvailable("PasswordBlockFingerprintUnlock")) {
            return null;
        }
        return $this->getProperty("PasswordBlockFingerprintUnlock");
    }
    /**
     * @var bool
     */
    public function setPasswordBlockFingerprintUnlock($value)
    {
        $this->setProperty("PasswordBlockFingerprintUnlock", $value, true);
    }
    /**
     * @return bool
     */
    public function getPasswordBlockTrustAgents()
    {
        if (!$this->isPropertyAvailable("PasswordBlockTrustAgents")) {
            return null;
        }
        return $this->getProperty("PasswordBlockTrustAgents");
    }
    /**
     * @var bool
     */
    public function setPasswordBlockTrustAgents($value)
    {
        $this->setProperty("PasswordBlockTrustAgents", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordExpirationDays()
    {
        if (!$this->isPropertyAvailable("PasswordExpirationDays")) {
            return null;
        }
        return $this->getProperty("PasswordExpirationDays");
    }
    /**
     * @var integer
     */
    public function setPasswordExpirationDays($value)
    {
        $this->setProperty("PasswordExpirationDays", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordMinimumLength()
    {
        if (!$this->isPropertyAvailable("PasswordMinimumLength")) {
            return null;
        }
        return $this->getProperty("PasswordMinimumLength");
    }
    /**
     * @var integer
     */
    public function setPasswordMinimumLength($value)
    {
        $this->setProperty("PasswordMinimumLength", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (!$this->isPropertyAvailable("PasswordMinutesOfInactivityBeforeScreenTimeout")) {
            return null;
        }
        return $this->getProperty("PasswordMinutesOfInactivityBeforeScreenTimeout");
    }
    /**
     * @var integer
     */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($value)
    {
        $this->setProperty("PasswordMinutesOfInactivityBeforeScreenTimeout", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (!$this->isPropertyAvailable("PasswordPreviousPasswordBlockCount")) {
            return null;
        }
        return $this->getProperty("PasswordPreviousPasswordBlockCount");
    }
    /**
     * @var integer
     */
    public function setPasswordPreviousPasswordBlockCount($value)
    {
        $this->setProperty("PasswordPreviousPasswordBlockCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (!$this->isPropertyAvailable("PasswordSignInFailureCountBeforeFactoryReset")) {
            return null;
        }
        return $this->getProperty("PasswordSignInFailureCountBeforeFactoryReset");
    }
    /**
     * @var integer
     */
    public function setPasswordSignInFailureCountBeforeFactoryReset($value)
    {
        $this->setProperty("PasswordSignInFailureCountBeforeFactoryReset", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockNotificationsWhileDeviceLocked()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockNotificationsWhileDeviceLocked")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockNotificationsWhileDeviceLocked");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockNotificationsWhileDeviceLocked($value)
    {
        $this->setProperty("WorkProfileBlockNotificationsWhileDeviceLocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockAddingAccounts()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockAddingAccounts")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockAddingAccounts");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockAddingAccounts($value)
    {
        $this->setProperty("WorkProfileBlockAddingAccounts", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBluetoothEnableContactSharing()
    {
        if (!$this->isPropertyAvailable("WorkProfileBluetoothEnableContactSharing")) {
            return null;
        }
        return $this->getProperty("WorkProfileBluetoothEnableContactSharing");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBluetoothEnableContactSharing($value)
    {
        $this->setProperty("WorkProfileBluetoothEnableContactSharing", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockScreenCapture()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockScreenCapture")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockScreenCapture");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockScreenCapture($value)
    {
        $this->setProperty("WorkProfileBlockScreenCapture", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockCrossProfileCallerId()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockCrossProfileCallerId")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockCrossProfileCallerId");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockCrossProfileCallerId($value)
    {
        $this->setProperty("WorkProfileBlockCrossProfileCallerId", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockCamera()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockCamera")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockCamera");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockCamera($value)
    {
        $this->setProperty("WorkProfileBlockCamera", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockCrossProfileContactsSearch()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockCrossProfileContactsSearch")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockCrossProfileContactsSearch");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockCrossProfileContactsSearch($value)
    {
        $this->setProperty("WorkProfileBlockCrossProfileContactsSearch", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileBlockCrossProfileCopyPaste()
    {
        if (!$this->isPropertyAvailable("WorkProfileBlockCrossProfileCopyPaste")) {
            return null;
        }
        return $this->getProperty("WorkProfileBlockCrossProfileCopyPaste");
    }
    /**
     * @var bool
     */
    public function setWorkProfileBlockCrossProfileCopyPaste($value)
    {
        $this->setProperty("WorkProfileBlockCrossProfileCopyPaste", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfilePasswordBlockFingerprintUnlock()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordBlockFingerprintUnlock")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordBlockFingerprintUnlock");
    }
    /**
     * @var bool
     */
    public function setWorkProfilePasswordBlockFingerprintUnlock($value)
    {
        $this->setProperty("WorkProfilePasswordBlockFingerprintUnlock", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfilePasswordBlockTrustAgents()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordBlockTrustAgents")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordBlockTrustAgents");
    }
    /**
     * @var bool
     */
    public function setWorkProfilePasswordBlockTrustAgents($value)
    {
        $this->setProperty("WorkProfilePasswordBlockTrustAgents", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordExpirationDays()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordExpirationDays")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordExpirationDays");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordExpirationDays($value)
    {
        $this->setProperty("WorkProfilePasswordExpirationDays", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinimumLength()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinimumLength")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinimumLength");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinimumLength($value)
    {
        $this->setProperty("WorkProfilePasswordMinimumLength", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinNumericCharacters()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinNumericCharacters")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinNumericCharacters");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinNumericCharacters($value)
    {
        $this->setProperty("WorkProfilePasswordMinNumericCharacters", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinNonLetterCharacters()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinNonLetterCharacters")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinNonLetterCharacters");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinNonLetterCharacters($value)
    {
        $this->setProperty("WorkProfilePasswordMinNonLetterCharacters", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinLetterCharacters()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinLetterCharacters")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinLetterCharacters");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinLetterCharacters($value)
    {
        $this->setProperty("WorkProfilePasswordMinLetterCharacters", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinLowerCaseCharacters()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinLowerCaseCharacters")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinLowerCaseCharacters");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinLowerCaseCharacters($value)
    {
        $this->setProperty("WorkProfilePasswordMinLowerCaseCharacters", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinUpperCaseCharacters()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinUpperCaseCharacters")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinUpperCaseCharacters");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinUpperCaseCharacters($value)
    {
        $this->setProperty("WorkProfilePasswordMinUpperCaseCharacters", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinSymbolCharacters()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinSymbolCharacters")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinSymbolCharacters");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinSymbolCharacters($value)
    {
        $this->setProperty("WorkProfilePasswordMinSymbolCharacters", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout($value)
    {
        $this->setProperty("WorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordPreviousPasswordBlockCount()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordPreviousPasswordBlockCount")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordPreviousPasswordBlockCount");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordPreviousPasswordBlockCount($value)
    {
        $this->setProperty("WorkProfilePasswordPreviousPasswordBlockCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset()
    {
        if (!$this->isPropertyAvailable("WorkProfilePasswordSignInFailureCountBeforeFactoryReset")) {
            return null;
        }
        return $this->getProperty("WorkProfilePasswordSignInFailureCountBeforeFactoryReset");
    }
    /**
     * @var integer
     */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($value)
    {
        $this->setProperty("WorkProfilePasswordSignInFailureCountBeforeFactoryReset", $value, true);
    }
    /**
     * @return bool
     */
    public function getWorkProfileRequirePassword()
    {
        if (!$this->isPropertyAvailable("WorkProfileRequirePassword")) {
            return null;
        }
        return $this->getProperty("WorkProfileRequirePassword");
    }
    /**
     * @var bool
     */
    public function setWorkProfileRequirePassword($value)
    {
        $this->setProperty("WorkProfileRequirePassword", $value, true);
    }
    /**
     * @return bool
     */
    public function getSecurityRequireVerifyApps()
    {
        if (!$this->isPropertyAvailable("SecurityRequireVerifyApps")) {
            return null;
        }
        return $this->getProperty("SecurityRequireVerifyApps");
    }
    /**
     * @var bool
     */
    public function setSecurityRequireVerifyApps($value)
    {
        $this->setProperty("SecurityRequireVerifyApps", $value, true);
    }
}