<?php

namespace BunnyApiClient\Models\Shield;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateCustomWafRuleModel_variableTypes implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $aRGS The ARGS property
    */
    private ?string $aRGS = null;
    
    /**
     * @var string|null $aRGS_COMBINED_SIZE The ARGS_COMBINED_SIZE property
    */
    private ?string $aRGS_COMBINED_SIZE = null;
    
    /**
     * @var string|null $aRGS_GET The ARGS_GET property
    */
    private ?string $aRGS_GET = null;
    
    /**
     * @var string|null $aRGS_GET_NAMES The ARGS_GET_NAMES property
    */
    private ?string $aRGS_GET_NAMES = null;
    
    /**
     * @var string|null $aRGS_POST The ARGS_POST property
    */
    private ?string $aRGS_POST = null;
    
    /**
     * @var string|null $aRGS_POST_NAMES The ARGS_POST_NAMES property
    */
    private ?string $aRGS_POST_NAMES = null;
    
    /**
     * @var string|null $fILES_NAMES The FILES_NAMES property
    */
    private ?string $fILES_NAMES = null;
    
    /**
     * @var string|null $gEO The GEO property
    */
    private ?string $gEO = null;
    
    /**
     * @var string|null $qUERY_STRING The QUERY_STRING property
    */
    private ?string $qUERY_STRING = null;
    
    /**
     * @var string|null $rEMOTE_ADDR The REMOTE_ADDR property
    */
    private ?string $rEMOTE_ADDR = null;
    
    /**
     * @var string|null $rEQUEST_BASENAME The REQUEST_BASENAME property
    */
    private ?string $rEQUEST_BASENAME = null;
    
    /**
     * @var string|null $rEQUEST_BODY The REQUEST_BODY property
    */
    private ?string $rEQUEST_BODY = null;
    
    /**
     * @var string|null $rEQUEST_COOKIES The REQUEST_COOKIES property
    */
    private ?string $rEQUEST_COOKIES = null;
    
    /**
     * @var string|null $rEQUEST_COOKIES_NAMES The REQUEST_COOKIES_NAMES property
    */
    private ?string $rEQUEST_COOKIES_NAMES = null;
    
    /**
     * @var string|null $rEQUEST_FILENAME The REQUEST_FILENAME property
    */
    private ?string $rEQUEST_FILENAME = null;
    
    /**
     * @var string|null $rEQUEST_HEADERS The REQUEST_HEADERS property
    */
    private ?string $rEQUEST_HEADERS = null;
    
    /**
     * @var string|null $rEQUEST_HEADERS_NAMES The REQUEST_HEADERS_NAMES property
    */
    private ?string $rEQUEST_HEADERS_NAMES = null;
    
    /**
     * @var string|null $rEQUEST_LINE The REQUEST_LINE property
    */
    private ?string $rEQUEST_LINE = null;
    
    /**
     * @var string|null $rEQUEST_METHOD The REQUEST_METHOD property
    */
    private ?string $rEQUEST_METHOD = null;
    
    /**
     * @var string|null $rEQUEST_PROTOCOL The REQUEST_PROTOCOL property
    */
    private ?string $rEQUEST_PROTOCOL = null;
    
    /**
     * @var string|null $rEQUEST_URI The REQUEST_URI property
    */
    private ?string $rEQUEST_URI = null;
    
    /**
     * @var string|null $rEQUEST_URI_RAW The REQUEST_URI_RAW property
    */
    private ?string $rEQUEST_URI_RAW = null;
    
    /**
     * @var string|null $rESPONSE_BODY The RESPONSE_BODY property
    */
    private ?string $rESPONSE_BODY = null;
    
    /**
     * @var string|null $rESPONSE_HEADERS The RESPONSE_HEADERS property
    */
    private ?string $rESPONSE_HEADERS = null;
    
    /**
     * @var string|null $rESPONSE_STATUS The RESPONSE_STATUS property
    */
    private ?string $rESPONSE_STATUS = null;
    
    /**
     * Instantiates a new CreateCustomWafRuleModel_variableTypes and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCustomWafRuleModel_variableTypes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCustomWafRuleModel_variableTypes {
        return new CreateCustomWafRuleModel_variableTypes();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ARGS property value. The ARGS property
     * @return string|null
    */
    public function getARGS(): ?string {
        return $this->aRGS;
    }

    /**
     * Gets the ARGS_COMBINED_SIZE property value. The ARGS_COMBINED_SIZE property
     * @return string|null
    */
    public function getARGSCOMBINEDSIZE(): ?string {
        return $this->aRGS_COMBINED_SIZE;
    }

    /**
     * Gets the ARGS_GET property value. The ARGS_GET property
     * @return string|null
    */
    public function getARGSGET(): ?string {
        return $this->aRGS_GET;
    }

    /**
     * Gets the ARGS_GET_NAMES property value. The ARGS_GET_NAMES property
     * @return string|null
    */
    public function getARGSGETNAMES(): ?string {
        return $this->aRGS_GET_NAMES;
    }

    /**
     * Gets the ARGS_POST property value. The ARGS_POST property
     * @return string|null
    */
    public function getARGSPOST(): ?string {
        return $this->aRGS_POST;
    }

    /**
     * Gets the ARGS_POST_NAMES property value. The ARGS_POST_NAMES property
     * @return string|null
    */
    public function getARGSPOSTNAMES(): ?string {
        return $this->aRGS_POST_NAMES;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ARGS' => fn(ParseNode $n) => $o->setARGS($n->getStringValue()),
            'ARGS_COMBINED_SIZE' => fn(ParseNode $n) => $o->setARGSCOMBINEDSIZE($n->getStringValue()),
            'ARGS_GET' => fn(ParseNode $n) => $o->setARGSGET($n->getStringValue()),
            'ARGS_GET_NAMES' => fn(ParseNode $n) => $o->setARGSGETNAMES($n->getStringValue()),
            'ARGS_POST' => fn(ParseNode $n) => $o->setARGSPOST($n->getStringValue()),
            'ARGS_POST_NAMES' => fn(ParseNode $n) => $o->setARGSPOSTNAMES($n->getStringValue()),
            'FILES_NAMES' => fn(ParseNode $n) => $o->setFILESNAMES($n->getStringValue()),
            'GEO' => fn(ParseNode $n) => $o->setGEO($n->getStringValue()),
            'QUERY_STRING' => fn(ParseNode $n) => $o->setQUERYSTRING($n->getStringValue()),
            'REMOTE_ADDR' => fn(ParseNode $n) => $o->setREMOTEADDR($n->getStringValue()),
            'REQUEST_BASENAME' => fn(ParseNode $n) => $o->setREQUESTBASENAME($n->getStringValue()),
            'REQUEST_BODY' => fn(ParseNode $n) => $o->setREQUESTBODY($n->getStringValue()),
            'REQUEST_COOKIES' => fn(ParseNode $n) => $o->setREQUESTCOOKIES($n->getStringValue()),
            'REQUEST_COOKIES_NAMES' => fn(ParseNode $n) => $o->setREQUESTCOOKIESNAMES($n->getStringValue()),
            'REQUEST_FILENAME' => fn(ParseNode $n) => $o->setREQUESTFILENAME($n->getStringValue()),
            'REQUEST_HEADERS' => fn(ParseNode $n) => $o->setREQUESTHEADERS($n->getStringValue()),
            'REQUEST_HEADERS_NAMES' => fn(ParseNode $n) => $o->setREQUESTHEADERSNAMES($n->getStringValue()),
            'REQUEST_LINE' => fn(ParseNode $n) => $o->setREQUESTLINE($n->getStringValue()),
            'REQUEST_METHOD' => fn(ParseNode $n) => $o->setREQUESTMETHOD($n->getStringValue()),
            'REQUEST_PROTOCOL' => fn(ParseNode $n) => $o->setREQUESTPROTOCOL($n->getStringValue()),
            'REQUEST_URI' => fn(ParseNode $n) => $o->setREQUESTURI($n->getStringValue()),
            'REQUEST_URI_RAW' => fn(ParseNode $n) => $o->setREQUESTURIRAW($n->getStringValue()),
            'RESPONSE_BODY' => fn(ParseNode $n) => $o->setRESPONSEBODY($n->getStringValue()),
            'RESPONSE_HEADERS' => fn(ParseNode $n) => $o->setRESPONSEHEADERS($n->getStringValue()),
            'RESPONSE_STATUS' => fn(ParseNode $n) => $o->setRESPONSESTATUS($n->getStringValue()),
        ];
    }

    /**
     * Gets the FILES_NAMES property value. The FILES_NAMES property
     * @return string|null
    */
    public function getFILESNAMES(): ?string {
        return $this->fILES_NAMES;
    }

    /**
     * Gets the GEO property value. The GEO property
     * @return string|null
    */
    public function getGEO(): ?string {
        return $this->gEO;
    }

    /**
     * Gets the QUERY_STRING property value. The QUERY_STRING property
     * @return string|null
    */
    public function getQUERYSTRING(): ?string {
        return $this->qUERY_STRING;
    }

    /**
     * Gets the REMOTE_ADDR property value. The REMOTE_ADDR property
     * @return string|null
    */
    public function getREMOTEADDR(): ?string {
        return $this->rEMOTE_ADDR;
    }

    /**
     * Gets the REQUEST_BASENAME property value. The REQUEST_BASENAME property
     * @return string|null
    */
    public function getREQUESTBASENAME(): ?string {
        return $this->rEQUEST_BASENAME;
    }

    /**
     * Gets the REQUEST_BODY property value. The REQUEST_BODY property
     * @return string|null
    */
    public function getREQUESTBODY(): ?string {
        return $this->rEQUEST_BODY;
    }

    /**
     * Gets the REQUEST_COOKIES property value. The REQUEST_COOKIES property
     * @return string|null
    */
    public function getREQUESTCOOKIES(): ?string {
        return $this->rEQUEST_COOKIES;
    }

    /**
     * Gets the REQUEST_COOKIES_NAMES property value. The REQUEST_COOKIES_NAMES property
     * @return string|null
    */
    public function getREQUESTCOOKIESNAMES(): ?string {
        return $this->rEQUEST_COOKIES_NAMES;
    }

    /**
     * Gets the REQUEST_FILENAME property value. The REQUEST_FILENAME property
     * @return string|null
    */
    public function getREQUESTFILENAME(): ?string {
        return $this->rEQUEST_FILENAME;
    }

    /**
     * Gets the REQUEST_HEADERS property value. The REQUEST_HEADERS property
     * @return string|null
    */
    public function getREQUESTHEADERS(): ?string {
        return $this->rEQUEST_HEADERS;
    }

    /**
     * Gets the REQUEST_HEADERS_NAMES property value. The REQUEST_HEADERS_NAMES property
     * @return string|null
    */
    public function getREQUESTHEADERSNAMES(): ?string {
        return $this->rEQUEST_HEADERS_NAMES;
    }

    /**
     * Gets the REQUEST_LINE property value. The REQUEST_LINE property
     * @return string|null
    */
    public function getREQUESTLINE(): ?string {
        return $this->rEQUEST_LINE;
    }

    /**
     * Gets the REQUEST_METHOD property value. The REQUEST_METHOD property
     * @return string|null
    */
    public function getREQUESTMETHOD(): ?string {
        return $this->rEQUEST_METHOD;
    }

    /**
     * Gets the REQUEST_PROTOCOL property value. The REQUEST_PROTOCOL property
     * @return string|null
    */
    public function getREQUESTPROTOCOL(): ?string {
        return $this->rEQUEST_PROTOCOL;
    }

    /**
     * Gets the REQUEST_URI property value. The REQUEST_URI property
     * @return string|null
    */
    public function getREQUESTURI(): ?string {
        return $this->rEQUEST_URI;
    }

    /**
     * Gets the REQUEST_URI_RAW property value. The REQUEST_URI_RAW property
     * @return string|null
    */
    public function getREQUESTURIRAW(): ?string {
        return $this->rEQUEST_URI_RAW;
    }

    /**
     * Gets the RESPONSE_BODY property value. The RESPONSE_BODY property
     * @return string|null
    */
    public function getRESPONSEBODY(): ?string {
        return $this->rESPONSE_BODY;
    }

    /**
     * Gets the RESPONSE_HEADERS property value. The RESPONSE_HEADERS property
     * @return string|null
    */
    public function getRESPONSEHEADERS(): ?string {
        return $this->rESPONSE_HEADERS;
    }

    /**
     * Gets the RESPONSE_STATUS property value. The RESPONSE_STATUS property
     * @return string|null
    */
    public function getRESPONSESTATUS(): ?string {
        return $this->rESPONSE_STATUS;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ARGS', $this->getARGS());
        $writer->writeStringValue('ARGS_COMBINED_SIZE', $this->getARGSCOMBINEDSIZE());
        $writer->writeStringValue('ARGS_GET', $this->getARGSGET());
        $writer->writeStringValue('ARGS_GET_NAMES', $this->getARGSGETNAMES());
        $writer->writeStringValue('ARGS_POST', $this->getARGSPOST());
        $writer->writeStringValue('ARGS_POST_NAMES', $this->getARGSPOSTNAMES());
        $writer->writeStringValue('FILES_NAMES', $this->getFILESNAMES());
        $writer->writeStringValue('GEO', $this->getGEO());
        $writer->writeStringValue('QUERY_STRING', $this->getQUERYSTRING());
        $writer->writeStringValue('REMOTE_ADDR', $this->getREMOTEADDR());
        $writer->writeStringValue('REQUEST_BASENAME', $this->getREQUESTBASENAME());
        $writer->writeStringValue('REQUEST_BODY', $this->getREQUESTBODY());
        $writer->writeStringValue('REQUEST_COOKIES', $this->getREQUESTCOOKIES());
        $writer->writeStringValue('REQUEST_COOKIES_NAMES', $this->getREQUESTCOOKIESNAMES());
        $writer->writeStringValue('REQUEST_FILENAME', $this->getREQUESTFILENAME());
        $writer->writeStringValue('REQUEST_HEADERS', $this->getREQUESTHEADERS());
        $writer->writeStringValue('REQUEST_HEADERS_NAMES', $this->getREQUESTHEADERSNAMES());
        $writer->writeStringValue('REQUEST_LINE', $this->getREQUESTLINE());
        $writer->writeStringValue('REQUEST_METHOD', $this->getREQUESTMETHOD());
        $writer->writeStringValue('REQUEST_PROTOCOL', $this->getREQUESTPROTOCOL());
        $writer->writeStringValue('REQUEST_URI', $this->getREQUESTURI());
        $writer->writeStringValue('REQUEST_URI_RAW', $this->getREQUESTURIRAW());
        $writer->writeStringValue('RESPONSE_BODY', $this->getRESPONSEBODY());
        $writer->writeStringValue('RESPONSE_HEADERS', $this->getRESPONSEHEADERS());
        $writer->writeStringValue('RESPONSE_STATUS', $this->getRESPONSESTATUS());
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
     * Sets the ARGS property value. The ARGS property
     * @param string|null $value Value to set for the ARGS property.
    */
    public function setARGS(?string $value): void {
        $this->aRGS = $value;
    }

    /**
     * Sets the ARGS_COMBINED_SIZE property value. The ARGS_COMBINED_SIZE property
     * @param string|null $value Value to set for the ARGS_COMBINED_SIZE property.
    */
    public function setARGSCOMBINEDSIZE(?string $value): void {
        $this->aRGS_COMBINED_SIZE = $value;
    }

    /**
     * Sets the ARGS_GET property value. The ARGS_GET property
     * @param string|null $value Value to set for the ARGS_GET property.
    */
    public function setARGSGET(?string $value): void {
        $this->aRGS_GET = $value;
    }

    /**
     * Sets the ARGS_GET_NAMES property value. The ARGS_GET_NAMES property
     * @param string|null $value Value to set for the ARGS_GET_NAMES property.
    */
    public function setARGSGETNAMES(?string $value): void {
        $this->aRGS_GET_NAMES = $value;
    }

    /**
     * Sets the ARGS_POST property value. The ARGS_POST property
     * @param string|null $value Value to set for the ARGS_POST property.
    */
    public function setARGSPOST(?string $value): void {
        $this->aRGS_POST = $value;
    }

    /**
     * Sets the ARGS_POST_NAMES property value. The ARGS_POST_NAMES property
     * @param string|null $value Value to set for the ARGS_POST_NAMES property.
    */
    public function setARGSPOSTNAMES(?string $value): void {
        $this->aRGS_POST_NAMES = $value;
    }

    /**
     * Sets the FILES_NAMES property value. The FILES_NAMES property
     * @param string|null $value Value to set for the FILES_NAMES property.
    */
    public function setFILESNAMES(?string $value): void {
        $this->fILES_NAMES = $value;
    }

    /**
     * Sets the GEO property value. The GEO property
     * @param string|null $value Value to set for the GEO property.
    */
    public function setGEO(?string $value): void {
        $this->gEO = $value;
    }

    /**
     * Sets the QUERY_STRING property value. The QUERY_STRING property
     * @param string|null $value Value to set for the QUERY_STRING property.
    */
    public function setQUERYSTRING(?string $value): void {
        $this->qUERY_STRING = $value;
    }

    /**
     * Sets the REMOTE_ADDR property value. The REMOTE_ADDR property
     * @param string|null $value Value to set for the REMOTE_ADDR property.
    */
    public function setREMOTEADDR(?string $value): void {
        $this->rEMOTE_ADDR = $value;
    }

    /**
     * Sets the REQUEST_BASENAME property value. The REQUEST_BASENAME property
     * @param string|null $value Value to set for the REQUEST_BASENAME property.
    */
    public function setREQUESTBASENAME(?string $value): void {
        $this->rEQUEST_BASENAME = $value;
    }

    /**
     * Sets the REQUEST_BODY property value. The REQUEST_BODY property
     * @param string|null $value Value to set for the REQUEST_BODY property.
    */
    public function setREQUESTBODY(?string $value): void {
        $this->rEQUEST_BODY = $value;
    }

    /**
     * Sets the REQUEST_COOKIES property value. The REQUEST_COOKIES property
     * @param string|null $value Value to set for the REQUEST_COOKIES property.
    */
    public function setREQUESTCOOKIES(?string $value): void {
        $this->rEQUEST_COOKIES = $value;
    }

    /**
     * Sets the REQUEST_COOKIES_NAMES property value. The REQUEST_COOKIES_NAMES property
     * @param string|null $value Value to set for the REQUEST_COOKIES_NAMES property.
    */
    public function setREQUESTCOOKIESNAMES(?string $value): void {
        $this->rEQUEST_COOKIES_NAMES = $value;
    }

    /**
     * Sets the REQUEST_FILENAME property value. The REQUEST_FILENAME property
     * @param string|null $value Value to set for the REQUEST_FILENAME property.
    */
    public function setREQUESTFILENAME(?string $value): void {
        $this->rEQUEST_FILENAME = $value;
    }

    /**
     * Sets the REQUEST_HEADERS property value. The REQUEST_HEADERS property
     * @param string|null $value Value to set for the REQUEST_HEADERS property.
    */
    public function setREQUESTHEADERS(?string $value): void {
        $this->rEQUEST_HEADERS = $value;
    }

    /**
     * Sets the REQUEST_HEADERS_NAMES property value. The REQUEST_HEADERS_NAMES property
     * @param string|null $value Value to set for the REQUEST_HEADERS_NAMES property.
    */
    public function setREQUESTHEADERSNAMES(?string $value): void {
        $this->rEQUEST_HEADERS_NAMES = $value;
    }

    /**
     * Sets the REQUEST_LINE property value. The REQUEST_LINE property
     * @param string|null $value Value to set for the REQUEST_LINE property.
    */
    public function setREQUESTLINE(?string $value): void {
        $this->rEQUEST_LINE = $value;
    }

    /**
     * Sets the REQUEST_METHOD property value. The REQUEST_METHOD property
     * @param string|null $value Value to set for the REQUEST_METHOD property.
    */
    public function setREQUESTMETHOD(?string $value): void {
        $this->rEQUEST_METHOD = $value;
    }

    /**
     * Sets the REQUEST_PROTOCOL property value. The REQUEST_PROTOCOL property
     * @param string|null $value Value to set for the REQUEST_PROTOCOL property.
    */
    public function setREQUESTPROTOCOL(?string $value): void {
        $this->rEQUEST_PROTOCOL = $value;
    }

    /**
     * Sets the REQUEST_URI property value. The REQUEST_URI property
     * @param string|null $value Value to set for the REQUEST_URI property.
    */
    public function setREQUESTURI(?string $value): void {
        $this->rEQUEST_URI = $value;
    }

    /**
     * Sets the REQUEST_URI_RAW property value. The REQUEST_URI_RAW property
     * @param string|null $value Value to set for the REQUEST_URI_RAW property.
    */
    public function setREQUESTURIRAW(?string $value): void {
        $this->rEQUEST_URI_RAW = $value;
    }

    /**
     * Sets the RESPONSE_BODY property value. The RESPONSE_BODY property
     * @param string|null $value Value to set for the RESPONSE_BODY property.
    */
    public function setRESPONSEBODY(?string $value): void {
        $this->rESPONSE_BODY = $value;
    }

    /**
     * Sets the RESPONSE_HEADERS property value. The RESPONSE_HEADERS property
     * @param string|null $value Value to set for the RESPONSE_HEADERS property.
    */
    public function setRESPONSEHEADERS(?string $value): void {
        $this->rESPONSE_HEADERS = $value;
    }

    /**
     * Sets the RESPONSE_STATUS property value. The RESPONSE_STATUS property
     * @param string|null $value Value to set for the RESPONSE_STATUS property.
    */
    public function setRESPONSESTATUS(?string $value): void {
        $this->rESPONSE_STATUS = $value;
    }

}
