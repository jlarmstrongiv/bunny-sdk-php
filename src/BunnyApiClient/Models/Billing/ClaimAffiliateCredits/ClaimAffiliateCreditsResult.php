<?php

namespace BunnyApiClient\Models\Billing\ClaimAffiliateCredits;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClaimAffiliateCreditsResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $amountClaimed The amount of affiliate credits that were claimed
    */
    private ?float $amountClaimed = null;
    
    /**
     * Instantiates a new ClaimAffiliateCreditsResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClaimAffiliateCreditsResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClaimAffiliateCreditsResult {
        return new ClaimAffiliateCreditsResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the AmountClaimed property value. The amount of affiliate credits that were claimed
     * @return float|null
    */
    public function getAmountClaimed(): ?float {
        return $this->amountClaimed;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AmountClaimed' => fn(ParseNode $n) => $o->setAmountClaimed($n->getFloatValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('AmountClaimed', $this->getAmountClaimed());
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
     * Sets the AmountClaimed property value. The amount of affiliate credits that were claimed
     * @param float|null $value Value to set for the AmountClaimed property.
    */
    public function setAmountClaimed(?float $value): void {
        $this->amountClaimed = $value;
    }

}
