<?php

namespace BunnyApiClient\Models\PullZone\Optimizer;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Properties implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $aspect_ratio The aspect_ratio property
    */
    private ?string $aspect_ratio = null;
    
    /**
     * @var Properties_auto_optimize|null $auto_optimize The auto_optimize property
    */
    private ?Properties_auto_optimize $auto_optimize = null;
    
    /**
     * @var string|null $blur The blur property
    */
    private ?string $blur = null;
    
    /**
     * @var string|null $brightness The brightness property
    */
    private ?string $brightness = null;
    
    /**
     * @var string|null $contrast The contrast property
    */
    private ?string $contrast = null;
    
    /**
     * @var string|null $crop The crop property
    */
    private ?string $crop = null;
    
    /**
     * @var Properties_crop_gravity|null $crop_gravity The crop_gravity property
    */
    private ?Properties_crop_gravity $crop_gravity = null;
    
    /**
     * @var string|null $flip The flip property
    */
    private ?string $flip = null;
    
    /**
     * @var string|null $flop The flop property
    */
    private ?string $flop = null;
    
    /**
     * @var string|null $gamma The gamma property
    */
    private ?string $gamma = null;
    
    /**
     * @var string|null $height The height property
    */
    private ?string $height = null;
    
    /**
     * @var string|null $hue The hue property
    */
    private ?string $hue = null;
    
    /**
     * @var Properties_optimizer|null $optimizer The optimizer property
    */
    private ?Properties_optimizer $optimizer = null;
    
    /**
     * @var string|null $quality The quality property
    */
    private ?string $quality = null;
    
    /**
     * @var string|null $saturation The saturation property
    */
    private ?string $saturation = null;
    
    /**
     * @var string|null $sharpen The sharpen property
    */
    private ?string $sharpen = null;
    
    /**
     * @var string|null $width The width property
    */
    private ?string $width = null;
    
    /**
     * Instantiates a new Properties and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Properties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Properties {
        return new Properties();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspect_ratio property value. The aspect_ratio property
     * @return string|null
    */
    public function getAspectRatio(): ?string {
        return $this->aspect_ratio;
    }

    /**
     * Gets the auto_optimize property value. The auto_optimize property
     * @return Properties_auto_optimize|null
    */
    public function getAutoOptimize(): ?Properties_auto_optimize {
        return $this->auto_optimize;
    }

    /**
     * Gets the blur property value. The blur property
     * @return string|null
    */
    public function getBlur(): ?string {
        return $this->blur;
    }

    /**
     * Gets the brightness property value. The brightness property
     * @return string|null
    */
    public function getBrightness(): ?string {
        return $this->brightness;
    }

    /**
     * Gets the contrast property value. The contrast property
     * @return string|null
    */
    public function getContrast(): ?string {
        return $this->contrast;
    }

    /**
     * Gets the crop property value. The crop property
     * @return string|null
    */
    public function getCrop(): ?string {
        return $this->crop;
    }

    /**
     * Gets the crop_gravity property value. The crop_gravity property
     * @return Properties_crop_gravity|null
    */
    public function getCropGravity(): ?Properties_crop_gravity {
        return $this->crop_gravity;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspect_ratio' => fn(ParseNode $n) => $o->setAspectRatio($n->getStringValue()),
            'auto_optimize' => fn(ParseNode $n) => $o->setAutoOptimize($n->getEnumValue(Properties_auto_optimize::class)),
            'blur' => fn(ParseNode $n) => $o->setBlur($n->getStringValue()),
            'brightness' => fn(ParseNode $n) => $o->setBrightness($n->getStringValue()),
            'contrast' => fn(ParseNode $n) => $o->setContrast($n->getStringValue()),
            'crop' => fn(ParseNode $n) => $o->setCrop($n->getStringValue()),
            'crop_gravity' => fn(ParseNode $n) => $o->setCropGravity($n->getEnumValue(Properties_crop_gravity::class)),
            'flip' => fn(ParseNode $n) => $o->setFlip($n->getStringValue()),
            'flop' => fn(ParseNode $n) => $o->setFlop($n->getStringValue()),
            'gamma' => fn(ParseNode $n) => $o->setGamma($n->getStringValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getStringValue()),
            'hue' => fn(ParseNode $n) => $o->setHue($n->getStringValue()),
            'optimizer' => fn(ParseNode $n) => $o->setOptimizer($n->getEnumValue(Properties_optimizer::class)),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getStringValue()),
            'saturation' => fn(ParseNode $n) => $o->setSaturation($n->getStringValue()),
            'sharpen' => fn(ParseNode $n) => $o->setSharpen($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getStringValue()),
        ];
    }

    /**
     * Gets the flip property value. The flip property
     * @return string|null
    */
    public function getFlip(): ?string {
        return $this->flip;
    }

    /**
     * Gets the flop property value. The flop property
     * @return string|null
    */
    public function getFlop(): ?string {
        return $this->flop;
    }

    /**
     * Gets the gamma property value. The gamma property
     * @return string|null
    */
    public function getGamma(): ?string {
        return $this->gamma;
    }

    /**
     * Gets the height property value. The height property
     * @return string|null
    */
    public function getHeight(): ?string {
        return $this->height;
    }

    /**
     * Gets the hue property value. The hue property
     * @return string|null
    */
    public function getHue(): ?string {
        return $this->hue;
    }

    /**
     * Gets the optimizer property value. The optimizer property
     * @return Properties_optimizer|null
    */
    public function getOptimizer(): ?Properties_optimizer {
        return $this->optimizer;
    }

    /**
     * Gets the quality property value. The quality property
     * @return string|null
    */
    public function getQuality(): ?string {
        return $this->quality;
    }

    /**
     * Gets the saturation property value. The saturation property
     * @return string|null
    */
    public function getSaturation(): ?string {
        return $this->saturation;
    }

    /**
     * Gets the sharpen property value. The sharpen property
     * @return string|null
    */
    public function getSharpen(): ?string {
        return $this->sharpen;
    }

    /**
     * Gets the width property value. The width property
     * @return string|null
    */
    public function getWidth(): ?string {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aspect_ratio', $this->getAspectRatio());
        $writer->writeEnumValue('auto_optimize', $this->getAutoOptimize());
        $writer->writeStringValue('blur', $this->getBlur());
        $writer->writeStringValue('brightness', $this->getBrightness());
        $writer->writeStringValue('contrast', $this->getContrast());
        $writer->writeStringValue('crop', $this->getCrop());
        $writer->writeEnumValue('crop_gravity', $this->getCropGravity());
        $writer->writeStringValue('flip', $this->getFlip());
        $writer->writeStringValue('flop', $this->getFlop());
        $writer->writeStringValue('gamma', $this->getGamma());
        $writer->writeStringValue('height', $this->getHeight());
        $writer->writeStringValue('hue', $this->getHue());
        $writer->writeEnumValue('optimizer', $this->getOptimizer());
        $writer->writeStringValue('quality', $this->getQuality());
        $writer->writeStringValue('saturation', $this->getSaturation());
        $writer->writeStringValue('sharpen', $this->getSharpen());
        $writer->writeStringValue('width', $this->getWidth());
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
     * Sets the aspect_ratio property value. The aspect_ratio property
     * @param string|null $value Value to set for the aspect_ratio property.
    */
    public function setAspectRatio(?string $value): void {
        $this->aspect_ratio = $value;
    }

    /**
     * Sets the auto_optimize property value. The auto_optimize property
     * @param Properties_auto_optimize|null $value Value to set for the auto_optimize property.
    */
    public function setAutoOptimize(?Properties_auto_optimize $value): void {
        $this->auto_optimize = $value;
    }

    /**
     * Sets the blur property value. The blur property
     * @param string|null $value Value to set for the blur property.
    */
    public function setBlur(?string $value): void {
        $this->blur = $value;
    }

    /**
     * Sets the brightness property value. The brightness property
     * @param string|null $value Value to set for the brightness property.
    */
    public function setBrightness(?string $value): void {
        $this->brightness = $value;
    }

    /**
     * Sets the contrast property value. The contrast property
     * @param string|null $value Value to set for the contrast property.
    */
    public function setContrast(?string $value): void {
        $this->contrast = $value;
    }

    /**
     * Sets the crop property value. The crop property
     * @param string|null $value Value to set for the crop property.
    */
    public function setCrop(?string $value): void {
        $this->crop = $value;
    }

    /**
     * Sets the crop_gravity property value. The crop_gravity property
     * @param Properties_crop_gravity|null $value Value to set for the crop_gravity property.
    */
    public function setCropGravity(?Properties_crop_gravity $value): void {
        $this->crop_gravity = $value;
    }

    /**
     * Sets the flip property value. The flip property
     * @param string|null $value Value to set for the flip property.
    */
    public function setFlip(?string $value): void {
        $this->flip = $value;
    }

    /**
     * Sets the flop property value. The flop property
     * @param string|null $value Value to set for the flop property.
    */
    public function setFlop(?string $value): void {
        $this->flop = $value;
    }

    /**
     * Sets the gamma property value. The gamma property
     * @param string|null $value Value to set for the gamma property.
    */
    public function setGamma(?string $value): void {
        $this->gamma = $value;
    }

    /**
     * Sets the height property value. The height property
     * @param string|null $value Value to set for the height property.
    */
    public function setHeight(?string $value): void {
        $this->height = $value;
    }

    /**
     * Sets the hue property value. The hue property
     * @param string|null $value Value to set for the hue property.
    */
    public function setHue(?string $value): void {
        $this->hue = $value;
    }

    /**
     * Sets the optimizer property value. The optimizer property
     * @param Properties_optimizer|null $value Value to set for the optimizer property.
    */
    public function setOptimizer(?Properties_optimizer $value): void {
        $this->optimizer = $value;
    }

    /**
     * Sets the quality property value. The quality property
     * @param string|null $value Value to set for the quality property.
    */
    public function setQuality(?string $value): void {
        $this->quality = $value;
    }

    /**
     * Sets the saturation property value. The saturation property
     * @param string|null $value Value to set for the saturation property.
    */
    public function setSaturation(?string $value): void {
        $this->saturation = $value;
    }

    /**
     * Sets the sharpen property value. The sharpen property
     * @param string|null $value Value to set for the sharpen property.
    */
    public function setSharpen(?string $value): void {
        $this->sharpen = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param string|null $value Value to set for the width property.
    */
    public function setWidth(?string $value): void {
        $this->width = $value;
    }

}
