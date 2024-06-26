<?php

namespace StreamApiClient\Library\Item\Videos\Fetch;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FetchPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FetchPostRequestBody_headers|null $headers The headers that will be sent along with the fetch request.
    */
    private ?FetchPostRequestBody_headers $headers = null;
    
    /**
     * @var string|null $title The title that will be set to video.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $url The URL from which the video will be fetched from.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new FetchPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FetchPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FetchPostRequestBody {
        return new FetchPostRequestBody();
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
            'headers' => fn(ParseNode $n) => $o->setHeaders($n->getObjectValue([FetchPostRequestBody_headers::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the headers property value. The headers that will be sent along with the fetch request.
     * @return FetchPostRequestBody_headers|null
    */
    public function getHeaders(): ?FetchPostRequestBody_headers {
        return $this->headers;
    }

    /**
     * Gets the title property value. The title that will be set to video.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the url property value. The URL from which the video will be fetched from.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('headers', $this->getHeaders());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the headers property value. The headers that will be sent along with the fetch request.
     * @param FetchPostRequestBody_headers|null $value Value to set for the headers property.
    */
    public function setHeaders(?FetchPostRequestBody_headers $value): void {
        $this->headers = $value;
    }

    /**
     * Sets the title property value. The title that will be set to video.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the url property value. The URL from which the video will be fetched from.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
