<?php

namespace BunnyApiClient\Models\User;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class User implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accountId The Id of the user
    */
    private ?string $accountId = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $balance The remaining balance on the user's account
    */
    private ?float $balance = null;
    
    /**
     * @var string|null $billingEmail The email where the invoices and billing messages will be sent
    */
    private ?string $billingEmail = null;
    
    /**
     * @var DateTime|null $billingFreeUntilDate The end date of the account's free trial. If this is in the past, the free trial has expired.
    */
    private ?DateTime $billingFreeUntilDate = null;
    
    /**
     * @var float|null $billingType The BillingType property
    */
    private ?float $billingType = null;
    
    /**
     * @var bool|null $cardVerified The CardVerified property
    */
    private ?bool $cardVerified = null;
    
    /**
     * @var string|null $city The city of the user
    */
    private ?string $city = null;
    
    /**
     * @var string|null $companyName The country name that the user is from
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $country The Alpha2 country code that the user is from
    */
    private ?string $country = null;
    
    /**
     * @var DateTime|null $dateJoined The date when the user joined bunny.net
    */
    private ?DateTime $dateJoined = null;
    
    /**
     * @var bool|null $dpaAccepted Determines if the DPA was accepted by the user or not
    */
    private ?bool $dpaAccepted = null;
    
    /**
     * @var DateTime|null $dpaDateAccepted Determines the date on which the DPA was accepted
    */
    private ?DateTime $dpaDateAccepted = null;
    
    /**
     * @var int|null $dpaVersionAccepted Determines which version of the DPA was accepted
    */
    private ?int $dpaVersionAccepted = null;
    
    /**
     * @var string|null $email The email of the user
    */
    private ?string $email = null;
    
    /**
     * @var bool|null $emailVerified Determines if the account's email has been successfully verified
    */
    private ?bool $emailVerified = null;
    
    /**
     * @var array<string>|null $enabledPaymentTypes Contains the list of available payment types for this account
    */
    private ?array $enabledPaymentTypes = null;
    
    /**
     * @var array<string>|null $featureFlags The list of features that the user has enabled
    */
    private ?array $featureFlags = null;
    
    /**
     * @var string|null $firstName The first name of the user
    */
    private ?string $firstName = null;
    
    /**
     * @var DateTime|null $freeTrialExtendedDate The FreeTrialExtendedDate property
    */
    private ?DateTime $freeTrialExtendedDate = null;
    
    /**
     * @var bool|null $hasCompleteBillingProfile The HasCompleteBillingProfile property
    */
    private ?bool $hasCompleteBillingProfile = null;
    
    /**
     * @var string|null $id The Id of the user
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isSsoAccount Determines whether the user used a Single Sign On account
    */
    private ?bool $isSsoAccount = null;
    
    /**
     * @var string|null $lastName The last name of the user
    */
    private ?string $lastName = null;
    
    /**
     * @var bool|null $paymentsDisabled Determines if the payments are disabled on this account
    */
    private ?bool $paymentsDisabled = null;
    
    /**
     * @var bool|null $receiveNotificationEmails Determines if the account should receive notification emails from bunny.net
    */
    private ?bool $receiveNotificationEmails = null;
    
    /**
     * @var bool|null $receivePromotionalEmails Determines if the account should receive promotional emails from bunny.net
    */
    private ?bool $receivePromotionalEmails = null;
    
    /**
     * @var array<string>|null $roles Determines the roles that the user belongs to
    */
    private ?array $roles = null;
    
    /**
     * @var string|null $streetAddress The street address of the user
    */
    private ?string $streetAddress = null;
    
    /**
     * @var bool|null $suspended Determines if the user's account is suspended
    */
    private ?bool $suspended = null;
    
    /**
     * @var int|null $totalBandwidthUsed The total bandwidth used by the account.
    */
    private ?int $totalBandwidthUsed = null;
    
    /**
     * @var float|null $trialBalance The TrialBalance property
    */
    private ?float $trialBalance = null;
    
    /**
     * @var int|null $trialBandwidthLimit The total free trial bandwidth limit for this account
    */
    private ?int $trialBandwidthLimit = null;
    
    /**
     * @var bool|null $twoFactorAuthenticationEnabled Determines if the account has 2FA enabled
    */
    private ?bool $twoFactorAuthenticationEnabled = null;
    
    /**
     * @var int|null $unreadSupportTicketCount Returns the number of unread tickets on the user's account
    */
    private ?int $unreadSupportTicketCount = null;
    
    /**
     * @var string|null $vATNumber The billing VAT number of the account
    */
    private ?string $vATNumber = null;
    
    /**
     * @var string|null $zipCode The address zip code of the user
    */
    private ?string $zipCode = null;
    
    /**
     * Instantiates a new User and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return User
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): User {
        return new User();
    }

    /**
     * Gets the AccountId property value. The Id of the user
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Balance property value. The remaining balance on the user's account
     * @return float|null
    */
    public function getBalance(): ?float {
        return $this->balance;
    }

    /**
     * Gets the BillingEmail property value. The email where the invoices and billing messages will be sent
     * @return string|null
    */
    public function getBillingEmail(): ?string {
        return $this->billingEmail;
    }

    /**
     * Gets the BillingFreeUntilDate property value. The end date of the account's free trial. If this is in the past, the free trial has expired.
     * @return DateTime|null
    */
    public function getBillingFreeUntilDate(): ?DateTime {
        return $this->billingFreeUntilDate;
    }

    /**
     * Gets the BillingType property value. The BillingType property
     * @return float|null
    */
    public function getBillingType(): ?float {
        return $this->billingType;
    }

    /**
     * Gets the CardVerified property value. The CardVerified property
     * @return bool|null
    */
    public function getCardVerified(): ?bool {
        return $this->cardVerified;
    }

    /**
     * Gets the City property value. The city of the user
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the CompanyName property value. The country name that the user is from
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the Country property value. The Alpha2 country code that the user is from
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the DateJoined property value. The date when the user joined bunny.net
     * @return DateTime|null
    */
    public function getDateJoined(): ?DateTime {
        return $this->dateJoined;
    }

    /**
     * Gets the DpaAccepted property value. Determines if the DPA was accepted by the user or not
     * @return bool|null
    */
    public function getDpaAccepted(): ?bool {
        return $this->dpaAccepted;
    }

    /**
     * Gets the DpaDateAccepted property value. Determines the date on which the DPA was accepted
     * @return DateTime|null
    */
    public function getDpaDateAccepted(): ?DateTime {
        return $this->dpaDateAccepted;
    }

    /**
     * Gets the DpaVersionAccepted property value. Determines which version of the DPA was accepted
     * @return int|null
    */
    public function getDpaVersionAccepted(): ?int {
        return $this->dpaVersionAccepted;
    }

    /**
     * Gets the Email property value. The email of the user
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the EmailVerified property value. Determines if the account's email has been successfully verified
     * @return bool|null
    */
    public function getEmailVerified(): ?bool {
        return $this->emailVerified;
    }

    /**
     * Gets the EnabledPaymentTypes property value. Contains the list of available payment types for this account
     * @return array<string>|null
    */
    public function getEnabledPaymentTypes(): ?array {
        return $this->enabledPaymentTypes;
    }

    /**
     * Gets the FeatureFlags property value. The list of features that the user has enabled
     * @return array<string>|null
    */
    public function getFeatureFlags(): ?array {
        return $this->featureFlags;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AccountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'Balance' => fn(ParseNode $n) => $o->setBalance($n->getFloatValue()),
            'BillingEmail' => fn(ParseNode $n) => $o->setBillingEmail($n->getStringValue()),
            'BillingFreeUntilDate' => fn(ParseNode $n) => $o->setBillingFreeUntilDate($n->getDateTimeValue()),
            'BillingType' => fn(ParseNode $n) => $o->setBillingType($n->getFloatValue()),
            'CardVerified' => fn(ParseNode $n) => $o->setCardVerified($n->getBooleanValue()),
            'City' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'CompanyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'Country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'DateJoined' => fn(ParseNode $n) => $o->setDateJoined($n->getDateTimeValue()),
            'DpaAccepted' => fn(ParseNode $n) => $o->setDpaAccepted($n->getBooleanValue()),
            'DpaDateAccepted' => fn(ParseNode $n) => $o->setDpaDateAccepted($n->getDateTimeValue()),
            'DpaVersionAccepted' => fn(ParseNode $n) => $o->setDpaVersionAccepted($n->getIntegerValue()),
            'Email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'EmailVerified' => fn(ParseNode $n) => $o->setEmailVerified($n->getBooleanValue()),
            'EnabledPaymentTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnabledPaymentTypes($val);
            },
            'FeatureFlags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFeatureFlags($val);
            },
            'FirstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'FreeTrialExtendedDate' => fn(ParseNode $n) => $o->setFreeTrialExtendedDate($n->getDateTimeValue()),
            'HasCompleteBillingProfile' => fn(ParseNode $n) => $o->setHasCompleteBillingProfile($n->getBooleanValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'IsSsoAccount' => fn(ParseNode $n) => $o->setIsSsoAccount($n->getBooleanValue()),
            'LastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'PaymentsDisabled' => fn(ParseNode $n) => $o->setPaymentsDisabled($n->getBooleanValue()),
            'ReceiveNotificationEmails' => fn(ParseNode $n) => $o->setReceiveNotificationEmails($n->getBooleanValue()),
            'ReceivePromotionalEmails' => fn(ParseNode $n) => $o->setReceivePromotionalEmails($n->getBooleanValue()),
            'Roles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoles($val);
            },
            'StreetAddress' => fn(ParseNode $n) => $o->setStreetAddress($n->getStringValue()),
            'Suspended' => fn(ParseNode $n) => $o->setSuspended($n->getBooleanValue()),
            'TotalBandwidthUsed' => fn(ParseNode $n) => $o->setTotalBandwidthUsed($n->getIntegerValue()),
            'TrialBalance' => fn(ParseNode $n) => $o->setTrialBalance($n->getFloatValue()),
            'TrialBandwidthLimit' => fn(ParseNode $n) => $o->setTrialBandwidthLimit($n->getIntegerValue()),
            'TwoFactorAuthenticationEnabled' => fn(ParseNode $n) => $o->setTwoFactorAuthenticationEnabled($n->getBooleanValue()),
            'UnreadSupportTicketCount' => fn(ParseNode $n) => $o->setUnreadSupportTicketCount($n->getIntegerValue()),
            'VATNumber' => fn(ParseNode $n) => $o->setVATNumber($n->getStringValue()),
            'ZipCode' => fn(ParseNode $n) => $o->setZipCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the FirstName property value. The first name of the user
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the FreeTrialExtendedDate property value. The FreeTrialExtendedDate property
     * @return DateTime|null
    */
    public function getFreeTrialExtendedDate(): ?DateTime {
        return $this->freeTrialExtendedDate;
    }

    /**
     * Gets the HasCompleteBillingProfile property value. The HasCompleteBillingProfile property
     * @return bool|null
    */
    public function getHasCompleteBillingProfile(): ?bool {
        return $this->hasCompleteBillingProfile;
    }

    /**
     * Gets the Id property value. The Id of the user
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the IsSsoAccount property value. Determines whether the user used a Single Sign On account
     * @return bool|null
    */
    public function getIsSsoAccount(): ?bool {
        return $this->isSsoAccount;
    }

    /**
     * Gets the LastName property value. The last name of the user
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the PaymentsDisabled property value. Determines if the payments are disabled on this account
     * @return bool|null
    */
    public function getPaymentsDisabled(): ?bool {
        return $this->paymentsDisabled;
    }

    /**
     * Gets the ReceiveNotificationEmails property value. Determines if the account should receive notification emails from bunny.net
     * @return bool|null
    */
    public function getReceiveNotificationEmails(): ?bool {
        return $this->receiveNotificationEmails;
    }

    /**
     * Gets the ReceivePromotionalEmails property value. Determines if the account should receive promotional emails from bunny.net
     * @return bool|null
    */
    public function getReceivePromotionalEmails(): ?bool {
        return $this->receivePromotionalEmails;
    }

    /**
     * Gets the Roles property value. Determines the roles that the user belongs to
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Gets the StreetAddress property value. The street address of the user
     * @return string|null
    */
    public function getStreetAddress(): ?string {
        return $this->streetAddress;
    }

    /**
     * Gets the Suspended property value. Determines if the user's account is suspended
     * @return bool|null
    */
    public function getSuspended(): ?bool {
        return $this->suspended;
    }

    /**
     * Gets the TotalBandwidthUsed property value. The total bandwidth used by the account.
     * @return int|null
    */
    public function getTotalBandwidthUsed(): ?int {
        return $this->totalBandwidthUsed;
    }

    /**
     * Gets the TrialBalance property value. The TrialBalance property
     * @return float|null
    */
    public function getTrialBalance(): ?float {
        return $this->trialBalance;
    }

    /**
     * Gets the TrialBandwidthLimit property value. The total free trial bandwidth limit for this account
     * @return int|null
    */
    public function getTrialBandwidthLimit(): ?int {
        return $this->trialBandwidthLimit;
    }

    /**
     * Gets the TwoFactorAuthenticationEnabled property value. Determines if the account has 2FA enabled
     * @return bool|null
    */
    public function getTwoFactorAuthenticationEnabled(): ?bool {
        return $this->twoFactorAuthenticationEnabled;
    }

    /**
     * Gets the UnreadSupportTicketCount property value. Returns the number of unread tickets on the user's account
     * @return int|null
    */
    public function getUnreadSupportTicketCount(): ?int {
        return $this->unreadSupportTicketCount;
    }

    /**
     * Gets the VATNumber property value. The billing VAT number of the account
     * @return string|null
    */
    public function getVATNumber(): ?string {
        return $this->vATNumber;
    }

    /**
     * Gets the ZipCode property value. The address zip code of the user
     * @return string|null
    */
    public function getZipCode(): ?string {
        return $this->zipCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('AccountId', $this->getAccountId());
        $writer->writeFloatValue('Balance', $this->getBalance());
        $writer->writeStringValue('BillingEmail', $this->getBillingEmail());
        $writer->writeDateTimeValue('BillingFreeUntilDate', $this->getBillingFreeUntilDate());
        $writer->writeFloatValue('BillingType', $this->getBillingType());
        $writer->writeBooleanValue('CardVerified', $this->getCardVerified());
        $writer->writeStringValue('City', $this->getCity());
        $writer->writeStringValue('CompanyName', $this->getCompanyName());
        $writer->writeStringValue('Country', $this->getCountry());
        $writer->writeDateTimeValue('DateJoined', $this->getDateJoined());
        $writer->writeBooleanValue('DpaAccepted', $this->getDpaAccepted());
        $writer->writeDateTimeValue('DpaDateAccepted', $this->getDpaDateAccepted());
        $writer->writeIntegerValue('DpaVersionAccepted', $this->getDpaVersionAccepted());
        $writer->writeStringValue('Email', $this->getEmail());
        $writer->writeBooleanValue('EmailVerified', $this->getEmailVerified());
        $writer->writeCollectionOfPrimitiveValues('EnabledPaymentTypes', $this->getEnabledPaymentTypes());
        $writer->writeCollectionOfPrimitiveValues('FeatureFlags', $this->getFeatureFlags());
        $writer->writeStringValue('FirstName', $this->getFirstName());
        $writer->writeDateTimeValue('FreeTrialExtendedDate', $this->getFreeTrialExtendedDate());
        $writer->writeBooleanValue('HasCompleteBillingProfile', $this->getHasCompleteBillingProfile());
        $writer->writeStringValue('Id', $this->getId());
        $writer->writeBooleanValue('IsSsoAccount', $this->getIsSsoAccount());
        $writer->writeStringValue('LastName', $this->getLastName());
        $writer->writeBooleanValue('PaymentsDisabled', $this->getPaymentsDisabled());
        $writer->writeBooleanValue('ReceiveNotificationEmails', $this->getReceiveNotificationEmails());
        $writer->writeBooleanValue('ReceivePromotionalEmails', $this->getReceivePromotionalEmails());
        $writer->writeCollectionOfPrimitiveValues('Roles', $this->getRoles());
        $writer->writeStringValue('StreetAddress', $this->getStreetAddress());
        $writer->writeBooleanValue('Suspended', $this->getSuspended());
        $writer->writeIntegerValue('TotalBandwidthUsed', $this->getTotalBandwidthUsed());
        $writer->writeFloatValue('TrialBalance', $this->getTrialBalance());
        $writer->writeIntegerValue('TrialBandwidthLimit', $this->getTrialBandwidthLimit());
        $writer->writeBooleanValue('TwoFactorAuthenticationEnabled', $this->getTwoFactorAuthenticationEnabled());
        $writer->writeIntegerValue('UnreadSupportTicketCount', $this->getUnreadSupportTicketCount());
        $writer->writeStringValue('VATNumber', $this->getVATNumber());
        $writer->writeStringValue('ZipCode', $this->getZipCode());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AccountId property value. The Id of the user
     * @param string|null $value Value to set for the AccountId property.
    */
    public function setAccountId(?string $value): void {
        $this->accountId = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the Balance property value. The remaining balance on the user's account
     * @param float|null $value Value to set for the Balance property.
    */
    public function setBalance(?float $value): void {
        $this->balance = $value;
    }

    /**
     * Sets the BillingEmail property value. The email where the invoices and billing messages will be sent
     * @param string|null $value Value to set for the BillingEmail property.
    */
    public function setBillingEmail(?string $value): void {
        $this->billingEmail = $value;
    }

    /**
     * Sets the BillingFreeUntilDate property value. The end date of the account's free trial. If this is in the past, the free trial has expired.
     * @param DateTime|null $value Value to set for the BillingFreeUntilDate property.
    */
    public function setBillingFreeUntilDate(?DateTime $value): void {
        $this->billingFreeUntilDate = $value;
    }

    /**
     * Sets the BillingType property value. The BillingType property
     * @param float|null $value Value to set for the BillingType property.
    */
    public function setBillingType(?float $value): void {
        $this->billingType = $value;
    }

    /**
     * Sets the CardVerified property value. The CardVerified property
     * @param bool|null $value Value to set for the CardVerified property.
    */
    public function setCardVerified(?bool $value): void {
        $this->cardVerified = $value;
    }

    /**
     * Sets the City property value. The city of the user
     * @param string|null $value Value to set for the City property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the CompanyName property value. The country name that the user is from
     * @param string|null $value Value to set for the CompanyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the Country property value. The Alpha2 country code that the user is from
     * @param string|null $value Value to set for the Country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the DateJoined property value. The date when the user joined bunny.net
     * @param DateTime|null $value Value to set for the DateJoined property.
    */
    public function setDateJoined(?DateTime $value): void {
        $this->dateJoined = $value;
    }

    /**
     * Sets the DpaAccepted property value. Determines if the DPA was accepted by the user or not
     * @param bool|null $value Value to set for the DpaAccepted property.
    */
    public function setDpaAccepted(?bool $value): void {
        $this->dpaAccepted = $value;
    }

    /**
     * Sets the DpaDateAccepted property value. Determines the date on which the DPA was accepted
     * @param DateTime|null $value Value to set for the DpaDateAccepted property.
    */
    public function setDpaDateAccepted(?DateTime $value): void {
        $this->dpaDateAccepted = $value;
    }

    /**
     * Sets the DpaVersionAccepted property value. Determines which version of the DPA was accepted
     * @param int|null $value Value to set for the DpaVersionAccepted property.
    */
    public function setDpaVersionAccepted(?int $value): void {
        $this->dpaVersionAccepted = $value;
    }

    /**
     * Sets the Email property value. The email of the user
     * @param string|null $value Value to set for the Email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the EmailVerified property value. Determines if the account's email has been successfully verified
     * @param bool|null $value Value to set for the EmailVerified property.
    */
    public function setEmailVerified(?bool $value): void {
        $this->emailVerified = $value;
    }

    /**
     * Sets the EnabledPaymentTypes property value. Contains the list of available payment types for this account
     * @param array<string>|null $value Value to set for the EnabledPaymentTypes property.
    */
    public function setEnabledPaymentTypes(?array $value): void {
        $this->enabledPaymentTypes = $value;
    }

    /**
     * Sets the FeatureFlags property value. The list of features that the user has enabled
     * @param array<string>|null $value Value to set for the FeatureFlags property.
    */
    public function setFeatureFlags(?array $value): void {
        $this->featureFlags = $value;
    }

    /**
     * Sets the FirstName property value. The first name of the user
     * @param string|null $value Value to set for the FirstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the FreeTrialExtendedDate property value. The FreeTrialExtendedDate property
     * @param DateTime|null $value Value to set for the FreeTrialExtendedDate property.
    */
    public function setFreeTrialExtendedDate(?DateTime $value): void {
        $this->freeTrialExtendedDate = $value;
    }

    /**
     * Sets the HasCompleteBillingProfile property value. The HasCompleteBillingProfile property
     * @param bool|null $value Value to set for the HasCompleteBillingProfile property.
    */
    public function setHasCompleteBillingProfile(?bool $value): void {
        $this->hasCompleteBillingProfile = $value;
    }

    /**
     * Sets the Id property value. The Id of the user
     * @param string|null $value Value to set for the Id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the IsSsoAccount property value. Determines whether the user used a Single Sign On account
     * @param bool|null $value Value to set for the IsSsoAccount property.
    */
    public function setIsSsoAccount(?bool $value): void {
        $this->isSsoAccount = $value;
    }

    /**
     * Sets the LastName property value. The last name of the user
     * @param string|null $value Value to set for the LastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the PaymentsDisabled property value. Determines if the payments are disabled on this account
     * @param bool|null $value Value to set for the PaymentsDisabled property.
    */
    public function setPaymentsDisabled(?bool $value): void {
        $this->paymentsDisabled = $value;
    }

    /**
     * Sets the ReceiveNotificationEmails property value. Determines if the account should receive notification emails from bunny.net
     * @param bool|null $value Value to set for the ReceiveNotificationEmails property.
    */
    public function setReceiveNotificationEmails(?bool $value): void {
        $this->receiveNotificationEmails = $value;
    }

    /**
     * Sets the ReceivePromotionalEmails property value. Determines if the account should receive promotional emails from bunny.net
     * @param bool|null $value Value to set for the ReceivePromotionalEmails property.
    */
    public function setReceivePromotionalEmails(?bool $value): void {
        $this->receivePromotionalEmails = $value;
    }

    /**
     * Sets the Roles property value. Determines the roles that the user belongs to
     * @param array<string>|null $value Value to set for the Roles property.
    */
    public function setRoles(?array $value): void {
        $this->roles = $value;
    }

    /**
     * Sets the StreetAddress property value. The street address of the user
     * @param string|null $value Value to set for the StreetAddress property.
    */
    public function setStreetAddress(?string $value): void {
        $this->streetAddress = $value;
    }

    /**
     * Sets the Suspended property value. Determines if the user's account is suspended
     * @param bool|null $value Value to set for the Suspended property.
    */
    public function setSuspended(?bool $value): void {
        $this->suspended = $value;
    }

    /**
     * Sets the TotalBandwidthUsed property value. The total bandwidth used by the account.
     * @param int|null $value Value to set for the TotalBandwidthUsed property.
    */
    public function setTotalBandwidthUsed(?int $value): void {
        $this->totalBandwidthUsed = $value;
    }

    /**
     * Sets the TrialBalance property value. The TrialBalance property
     * @param float|null $value Value to set for the TrialBalance property.
    */
    public function setTrialBalance(?float $value): void {
        $this->trialBalance = $value;
    }

    /**
     * Sets the TrialBandwidthLimit property value. The total free trial bandwidth limit for this account
     * @param int|null $value Value to set for the TrialBandwidthLimit property.
    */
    public function setTrialBandwidthLimit(?int $value): void {
        $this->trialBandwidthLimit = $value;
    }

    /**
     * Sets the TwoFactorAuthenticationEnabled property value. Determines if the account has 2FA enabled
     * @param bool|null $value Value to set for the TwoFactorAuthenticationEnabled property.
    */
    public function setTwoFactorAuthenticationEnabled(?bool $value): void {
        $this->twoFactorAuthenticationEnabled = $value;
    }

    /**
     * Sets the UnreadSupportTicketCount property value. Returns the number of unread tickets on the user's account
     * @param int|null $value Value to set for the UnreadSupportTicketCount property.
    */
    public function setUnreadSupportTicketCount(?int $value): void {
        $this->unreadSupportTicketCount = $value;
    }

    /**
     * Sets the VATNumber property value. The billing VAT number of the account
     * @param string|null $value Value to set for the VATNumber property.
    */
    public function setVATNumber(?string $value): void {
        $this->vATNumber = $value;
    }

    /**
     * Sets the ZipCode property value. The address zip code of the user
     * @param string|null $value Value to set for the ZipCode property.
    */
    public function setZipCode(?string $value): void {
        $this->zipCode = $value;
    }

}
