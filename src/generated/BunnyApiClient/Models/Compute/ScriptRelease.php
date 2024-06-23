<?php

namespace BunnyApiClient\Models\Compute;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScriptRelease implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $author The Author property
    */
    private ?string $author = null;
    
    /**
     * @var string|null $authorEmail The AuthorEmail property
    */
    private ?string $authorEmail = null;
    
    /**
     * @var string|null $code The Code property
    */
    private ?string $code = null;
    
    /**
     * @var DateTime|null $datePublished The DatePublished property
    */
    private ?DateTime $datePublished = null;
    
    /**
     * @var DateTime|null $dateReleased The DateReleased property
    */
    private ?DateTime $dateReleased = null;
    
    /**
     * @var bool|null $deleted The Deleted property
    */
    private ?bool $deleted = null;
    
    /**
     * @var int|null $id The Id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $note The Note property
    */
    private ?string $note = null;
    
    /**
     * @var float|null $status The Status property
    */
    private ?float $status = null;
    
    /**
     * @var string|null $uuid The Uuid property
    */
    private ?string $uuid = null;
    
    /**
     * Instantiates a new ScriptRelease and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScriptRelease
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScriptRelease {
        return new ScriptRelease();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the Author property value. The Author property
     * @return string|null
    */
    public function getAuthor(): ?string {
        return $this->author;
    }

    /**
     * Gets the AuthorEmail property value. The AuthorEmail property
     * @return string|null
    */
    public function getAuthorEmail(): ?string {
        return $this->authorEmail;
    }

    /**
     * Gets the Code property value. The Code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the DatePublished property value. The DatePublished property
     * @return DateTime|null
    */
    public function getDatePublished(): ?DateTime {
        return $this->datePublished;
    }

    /**
     * Gets the DateReleased property value. The DateReleased property
     * @return DateTime|null
    */
    public function getDateReleased(): ?DateTime {
        return $this->dateReleased;
    }

    /**
     * Gets the Deleted property value. The Deleted property
     * @return bool|null
    */
    public function getDeleted(): ?bool {
        return $this->deleted;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Author' => fn(ParseNode $n) => $o->setAuthor($n->getStringValue()),
            'AuthorEmail' => fn(ParseNode $n) => $o->setAuthorEmail($n->getStringValue()),
            'Code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'DatePublished' => fn(ParseNode $n) => $o->setDatePublished($n->getDateTimeValue()),
            'DateReleased' => fn(ParseNode $n) => $o->setDateReleased($n->getDateTimeValue()),
            'Deleted' => fn(ParseNode $n) => $o->setDeleted($n->getBooleanValue()),
            'Id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'Note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'Status' => fn(ParseNode $n) => $o->setStatus($n->getFloatValue()),
            'Uuid' => fn(ParseNode $n) => $o->setUuid($n->getStringValue()),
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
     * Gets the Note property value. The Note property
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the Status property value. The Status property
     * @return float|null
    */
    public function getStatus(): ?float {
        return $this->status;
    }

    /**
     * Gets the Uuid property value. The Uuid property
     * @return string|null
    */
    public function getUuid(): ?string {
        return $this->uuid;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Author', $this->getAuthor());
        $writer->writeStringValue('AuthorEmail', $this->getAuthorEmail());
        $writer->writeStringValue('Code', $this->getCode());
        $writer->writeDateTimeValue('DatePublished', $this->getDatePublished());
        $writer->writeDateTimeValue('DateReleased', $this->getDateReleased());
        $writer->writeBooleanValue('Deleted', $this->getDeleted());
        $writer->writeIntegerValue('Id', $this->getId());
        $writer->writeStringValue('Note', $this->getNote());
        $writer->writeFloatValue('Status', $this->getStatus());
        $writer->writeStringValue('Uuid', $this->getUuid());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the Author property value. The Author property
     * @param string|null $value Value to set for the Author property.
    */
    public function setAuthor(?string $value): void {
        $this->author = $value;
    }

    /**
     * Sets the AuthorEmail property value. The AuthorEmail property
     * @param string|null $value Value to set for the AuthorEmail property.
    */
    public function setAuthorEmail(?string $value): void {
        $this->authorEmail = $value;
    }

    /**
     * Sets the Code property value. The Code property
     * @param string|null $value Value to set for the Code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the DatePublished property value. The DatePublished property
     * @param DateTime|null $value Value to set for the DatePublished property.
    */
    public function setDatePublished(?DateTime $value): void {
        $this->datePublished = $value;
    }

    /**
     * Sets the DateReleased property value. The DateReleased property
     * @param DateTime|null $value Value to set for the DateReleased property.
    */
    public function setDateReleased(?DateTime $value): void {
        $this->dateReleased = $value;
    }

    /**
     * Sets the Deleted property value. The Deleted property
     * @param bool|null $value Value to set for the Deleted property.
    */
    public function setDeleted(?bool $value): void {
        $this->deleted = $value;
    }

    /**
     * Sets the Id property value. The Id property
     * @param int|null $value Value to set for the Id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the Note property value. The Note property
     * @param string|null $value Value to set for the Note property.
    */
    public function setNote(?string $value): void {
        $this->note = $value;
    }

    /**
     * Sets the Status property value. The Status property
     * @param float|null $value Value to set for the Status property.
    */
    public function setStatus(?float $value): void {
        $this->status = $value;
    }

    /**
     * Sets the Uuid property value. The Uuid property
     * @param string|null $value Value to set for the Uuid property.
    */
    public function setUuid(?string $value): void {
        $this->uuid = $value;
    }

}
