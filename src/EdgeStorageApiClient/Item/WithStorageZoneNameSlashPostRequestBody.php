<?php

namespace EdgeStorageApiClient\Item;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WithStorageZoneNameSlashPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $paths The Paths property
    */
    private ?array $paths = null;
    
    /**
     * @var string|null $rootPath The RootPath property
    */
    private ?string $rootPath = null;
    
    /**
     * Instantiates a new WithStorageZoneNameSlashPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithStorageZoneNameSlashPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithStorageZoneNameSlashPostRequestBody {
        return new WithStorageZoneNameSlashPostRequestBody();
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
            'Paths' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPaths($val);
            },
            'RootPath' => fn(ParseNode $n) => $o->setRootPath($n->getStringValue()),
        ];
    }

    /**
     * Gets the Paths property value. The Paths property
     * @return array<string>|null
    */
    public function getPaths(): ?array {
        return $this->paths;
    }

    /**
     * Gets the RootPath property value. The RootPath property
     * @return string|null
    */
    public function getRootPath(): ?string {
        return $this->rootPath;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('Paths', $this->getPaths());
        $writer->writeStringValue('RootPath', $this->getRootPath());
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
     * Sets the Paths property value. The Paths property
     * @param array<string>|null $value Value to set for the Paths property.
    */
    public function setPaths(?array $value): void {
        $this->paths = $value;
    }

    /**
     * Sets the RootPath property value. The RootPath property
     * @param string|null $value Value to set for the RootPath property.
    */
    public function setRootPath(?string $value): void {
        $this->rootPath = $value;
    }

}
