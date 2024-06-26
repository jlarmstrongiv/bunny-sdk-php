<?php

namespace LoggingApiClient\WithMmWithDdWithYy\WithPullZoneIdLog;

/**
 * [LoggingApi API Docs](https://docs.bunny.net/docs/cdn-logging-api)
*/
class WithPullZoneIdLogRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $end 
    */
    public ?int $end = null;
    
    /**
     * @var GetOrderQueryParameterType|null $order 
    */
    public ?GetOrderQueryParameterType $order = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * @var int|null $start 
    */
    public ?int $start = null;
    
    /**
     * @var string|null $status 
    */
    public ?string $status = null;
    
    /**
     * Instantiates a new WithPullZoneIdLogRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $end 
     * @param GetOrderQueryParameterType|null $order 
     * @param string|null $search 
     * @param int|null $start 
     * @param string|null $status 
    */
    public function __construct(?int $end = null, ?GetOrderQueryParameterType $order = null, ?string $search = null, ?int $start = null, ?string $status = null) {
        $this->end = $end;
        $this->order = $order;
        $this->search = $search;
        $this->start = $start;
        $this->status = $status;
    }

}
