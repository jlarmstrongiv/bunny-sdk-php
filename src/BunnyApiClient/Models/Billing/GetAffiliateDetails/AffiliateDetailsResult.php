<?php

namespace BunnyApiClient\Models\Billing\GetAffiliateDetails;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AffiliateDetailsResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $affiliateBalance The amount of affiliate credits on the account
    */
    private ?float $affiliateBalance = null;
    
    /**
     * @var AffiliateDetailsResult_AffiliateClicksChart|null $affiliateClicksChart The constructed affiliate click history chart data
    */
    private ?AffiliateDetailsResult_AffiliateClicksChart $affiliateClicksChart = null;
    
    /**
     * @var AffiliateDetailsResult_AffiliateSignupsChart|null $affiliateSignupsChart The constructed affiliate signup history chart data
    */
    private ?AffiliateDetailsResult_AffiliateSignupsChart $affiliateSignupsChart = null;
    
    /**
     * @var string|null $affiliateUrl The affiliate URL for the currently authenticated user
    */
    private ?string $affiliateUrl = null;
    
    /**
     * Instantiates a new AffiliateDetailsResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AffiliateDetailsResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AffiliateDetailsResult {
        return new AffiliateDetailsResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the AffiliateBalance property value. The amount of affiliate credits on the account
     * @return float|null
    */
    public function getAffiliateBalance(): ?float {
        return $this->affiliateBalance;
    }

    /**
     * Gets the AffiliateClicksChart property value. The constructed affiliate click history chart data
     * @return AffiliateDetailsResult_AffiliateClicksChart|null
    */
    public function getAffiliateClicksChart(): ?AffiliateDetailsResult_AffiliateClicksChart {
        return $this->affiliateClicksChart;
    }

    /**
     * Gets the AffiliateSignupsChart property value. The constructed affiliate signup history chart data
     * @return AffiliateDetailsResult_AffiliateSignupsChart|null
    */
    public function getAffiliateSignupsChart(): ?AffiliateDetailsResult_AffiliateSignupsChart {
        return $this->affiliateSignupsChart;
    }

    /**
     * Gets the AffiliateUrl property value. The affiliate URL for the currently authenticated user
     * @return string|null
    */
    public function getAffiliateUrl(): ?string {
        return $this->affiliateUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'AffiliateBalance' => fn(ParseNode $n) => $o->setAffiliateBalance($n->getFloatValue()),
            'AffiliateClicksChart' => fn(ParseNode $n) => $o->setAffiliateClicksChart($n->getObjectValue([AffiliateDetailsResult_AffiliateClicksChart::class, 'createFromDiscriminatorValue'])),
            'AffiliateSignupsChart' => fn(ParseNode $n) => $o->setAffiliateSignupsChart($n->getObjectValue([AffiliateDetailsResult_AffiliateSignupsChart::class, 'createFromDiscriminatorValue'])),
            'AffiliateUrl' => fn(ParseNode $n) => $o->setAffiliateUrl($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('AffiliateBalance', $this->getAffiliateBalance());
        $writer->writeObjectValue('AffiliateClicksChart', $this->getAffiliateClicksChart());
        $writer->writeObjectValue('AffiliateSignupsChart', $this->getAffiliateSignupsChart());
        $writer->writeStringValue('AffiliateUrl', $this->getAffiliateUrl());
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
     * Sets the AffiliateBalance property value. The amount of affiliate credits on the account
     * @param float|null $value Value to set for the AffiliateBalance property.
    */
    public function setAffiliateBalance(?float $value): void {
        $this->affiliateBalance = $value;
    }

    /**
     * Sets the AffiliateClicksChart property value. The constructed affiliate click history chart data
     * @param AffiliateDetailsResult_AffiliateClicksChart|null $value Value to set for the AffiliateClicksChart property.
    */
    public function setAffiliateClicksChart(?AffiliateDetailsResult_AffiliateClicksChart $value): void {
        $this->affiliateClicksChart = $value;
    }

    /**
     * Sets the AffiliateSignupsChart property value. The constructed affiliate signup history chart data
     * @param AffiliateDetailsResult_AffiliateSignupsChart|null $value Value to set for the AffiliateSignupsChart property.
    */
    public function setAffiliateSignupsChart(?AffiliateDetailsResult_AffiliateSignupsChart $value): void {
        $this->affiliateSignupsChart = $value;
    }

    /**
     * Sets the AffiliateUrl property value. The affiliate URL for the currently authenticated user
     * @param string|null $value Value to set for the AffiliateUrl property.
    */
    public function setAffiliateUrl(?string $value): void {
        $this->affiliateUrl = $value;
    }

}
