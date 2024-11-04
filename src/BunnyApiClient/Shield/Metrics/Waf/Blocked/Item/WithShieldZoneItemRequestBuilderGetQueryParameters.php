<?php

namespace BunnyApiClient\Shield\Metrics\Waf\Blocked\Item;

class WithShieldZoneItemRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $dataTimeframe 
    */
    public ?int $dataTimeframe = null;
    
    /**
     * @var string|null $groupTime 
    */
    public ?string $groupTime = null;
    
    /**
     * Instantiates a new WithShieldZoneItemRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $dataTimeframe 
     * @param string|null $groupTime 
    */
    public function __construct(?int $dataTimeframe = null, ?string $groupTime = null) {
        $this->dataTimeframe = $dataTimeframe;
        $this->groupTime = $groupTime;
    }

}
