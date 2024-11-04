<?php

namespace BunnyApiClient\Integration\Github;

use BunnyApiClient\Models\Integrations\Account;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GithubGetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<Account>|null $accounts The Accounts property
    */
    private ?array $accounts = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * Instantiates a new GithubGetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GithubGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GithubGetResponse {
        return new GithubGetResponse();
    }

    /**
     * Gets the Accounts property value. The Accounts property
     * @return array<Account>|null
    */
    public function getAccounts(): ?array {
        return $this->accounts;
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
            'Accounts' => fn(ParseNode $n) => $o->setAccounts($n->getCollectionOfObjectValues([Account::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('Accounts', $this->getAccounts());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the Accounts property value. The Accounts property
     * @param array<Account>|null $value Value to set for the Accounts property.
    */
    public function setAccounts(?array $value): void {
        $this->accounts = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

}
