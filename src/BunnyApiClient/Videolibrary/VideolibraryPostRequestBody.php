<?php

namespace BunnyApiClient\Videolibrary;

use BunnyApiClient\Models\StreamVideoLibrary\ReplicationRegions;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VideolibraryPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name The name of the Video Library.
    */
    private ?string $name = null;
    
    /**
     * @var array<ReplicationRegions>|null $replicationRegions The geo-replication regions of the underlying storage zone
    */
    private ?array $replicationRegions = null;
    
    /**
     * Instantiates a new VideolibraryPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideolibraryPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideolibraryPostRequestBody {
        return new VideolibraryPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'ReplicationRegions' => fn(ParseNode $n) => $o->setReplicationRegions($n->getCollectionOfEnumValues(ReplicationRegions::class)),
        ];
    }

    /**
     * Gets the Name property value. The name of the Video Library.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the ReplicationRegions property value. The geo-replication regions of the underlying storage zone
     * @return array<ReplicationRegions>|null
    */
    public function getReplicationRegions(): ?array {
        return $this->replicationRegions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeCollectionOfEnumValues('ReplicationRegions', $this->getReplicationRegions());
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
     * Sets the Name property value. The name of the Video Library.
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the ReplicationRegions property value. The geo-replication regions of the underlying storage zone
     * @param array<ReplicationRegions>|null $value Value to set for the ReplicationRegions property.
    */
    public function setReplicationRegions(?array $value): void {
        $this->replicationRegions = $value;
    }

}
