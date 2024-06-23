<?php

namespace BunnyApiClient\Models\AbuseCases;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AbuseCase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actualUrl The ActualUrl property
    */
    private ?string $actualUrl = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $dateCreated The DateCreated property
    */
    private ?DateTime $dateCreated = null;
    
    /**
     * @var DateTime|null $dateUpdated The DateUpdated property
    */
    private ?DateTime $dateUpdated = null;
    
    /**
     * @var DateTime|null $deadline The Deadline property
    */
    private ?DateTime $deadline = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $message The Message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $path The Path property
    */
    private ?string $path = null;
    
    /**
     * @var int|null $pullZoneId The PullZoneId property
    */
    private ?int $pullZoneId = null;
    
    /**
     * @var string|null $pullZoneName The PullZoneName property
    */
    private ?string $pullZoneName = null;
    
    /**
     * @var float|null $status The Status property
    */
    private ?float $status = null;
    
    /**
     * @var array<Url>|null $urls The Urls property
    */
    private ?array $urls = null;
    
    /**
     * Instantiates a new AbuseCase and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AbuseCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AbuseCase {
        return new AbuseCase();
    }

    /**
     * Gets the ActualUrl property value. The ActualUrl property
     * @return string|null
    */
    public function getActualUrl(): ?string {
        return $this->actualUrl;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the DateCreated property value. The DateCreated property
     * @return DateTime|null
    */
    public function getDateCreated(): ?DateTime {
        return $this->dateCreated;
    }

    /**
     * Gets the DateUpdated property value. The DateUpdated property
     * @return DateTime|null
    */
    public function getDateUpdated(): ?DateTime {
        return $this->dateUpdated;
    }

    /**
     * Gets the Deadline property value. The Deadline property
     * @return DateTime|null
    */
    public function getDeadline(): ?DateTime {
        return $this->deadline;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ActualUrl' => fn(ParseNode $n) => $o->setActualUrl($n->getStringValue()),
            'DateCreated' => fn(ParseNode $n) => $o->setDateCreated($n->getDateTimeValue()),
            'DateUpdated' => fn(ParseNode $n) => $o->setDateUpdated($n->getDateTimeValue()),
            'Deadline' => fn(ParseNode $n) => $o->setDeadline($n->getDateTimeValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'Path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'PullZoneId' => fn(ParseNode $n) => $o->setPullZoneId($n->getIntegerValue()),
            'PullZoneName' => fn(ParseNode $n) => $o->setPullZoneName($n->getStringValue()),
            'Status' => fn(ParseNode $n) => $o->setStatus($n->getFloatValue()),
            'Urls' => fn(ParseNode $n) => $o->setUrls($n->getCollectionOfObjectValues([Url::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the Id property value. The Id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the Message property value. The Message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the Path property value. The Path property
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the PullZoneId property value. The PullZoneId property
     * @return int|null
    */
    public function getPullZoneId(): ?int {
        return $this->pullZoneId;
    }

    /**
     * Gets the PullZoneName property value. The PullZoneName property
     * @return string|null
    */
    public function getPullZoneName(): ?string {
        return $this->pullZoneName;
    }

    /**
     * Gets the Status property value. The Status property
     * @return float|null
    */
    public function getStatus(): ?float {
        return $this->status;
    }

    /**
     * Gets the Urls property value. The Urls property
     * @return array<Url>|null
    */
    public function getUrls(): ?array {
        return $this->urls;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ActualUrl', $this->getActualUrl());
        $writer->writeDateTimeValue('DateCreated', $this->getDateCreated());
        $writer->writeDateTimeValue('DateUpdated', $this->getDateUpdated());
        $writer->writeDateTimeValue('Deadline', $this->getDeadline());
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeStringValue('Message', $this->getMessage());
        $writer->writeStringValue('Path', $this->getPath());
        $writer->writeIntegerValue('PullZoneId', $this->getPullZoneId());
        $writer->writeStringValue('PullZoneName', $this->getPullZoneName());
        $writer->writeFloatValue('Status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('Urls', $this->getUrls());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the ActualUrl property value. The ActualUrl property
     * @param string|null $value Value to set for the ActualUrl property.
    */
    public function setActualUrl(?string $value): void {
        $this->actualUrl = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the DateCreated property value. The DateCreated property
     * @param DateTime|null $value Value to set for the DateCreated property.
    */
    public function setDateCreated(?DateTime $value): void {
        $this->dateCreated = $value;
    }

    /**
     * Sets the DateUpdated property value. The DateUpdated property
     * @param DateTime|null $value Value to set for the DateUpdated property.
    */
    public function setDateUpdated(?DateTime $value): void {
        $this->dateUpdated = $value;
    }

    /**
     * Sets the Deadline property value. The Deadline property
     * @param DateTime|null $value Value to set for the Deadline property.
    */
    public function setDeadline(?DateTime $value): void {
        $this->deadline = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Message property value. The Message property
     * @param string|null $value Value to set for the Message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the Path property value. The Path property
     * @param string|null $value Value to set for the Path property.
    */
    public function setPath(?string $value): void {
        $this->path = $value;
    }

    /**
     * Sets the PullZoneId property value. The PullZoneId property
     * @param int|null $value Value to set for the PullZoneId property.
    */
    public function setPullZoneId(?int $value): void {
        $this->pullZoneId = $value;
    }

    /**
     * Sets the PullZoneName property value. The PullZoneName property
     * @param string|null $value Value to set for the PullZoneName property.
    */
    public function setPullZoneName(?string $value): void {
        $this->pullZoneName = $value;
    }

    /**
     * Sets the Status property value. The Status property
     * @param float|null $value Value to set for the Status property.
    */
    public function setStatus(?float $value): void {
        $this->status = $value;
    }

    /**
     * Sets the Urls property value. The Urls property
     * @param array<Url>|null $value Value to set for the Urls property.
    */
    public function setUrls(?array $value): void {
        $this->urls = $value;
    }

}
