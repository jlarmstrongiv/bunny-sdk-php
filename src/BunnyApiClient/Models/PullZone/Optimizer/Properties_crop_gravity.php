<?php

namespace BunnyApiClient\Models\PullZone\Optimizer;

use Microsoft\Kiota\Abstractions\Enum;

class Properties_crop_gravity extends Enum {
    public const CENTER = 'center';
    public const FORGET = 'forget';
    public const EAST = 'east';
    public const NORTH = 'north';
    public const SOUTH = 'south';
    public const WEST = 'west';
    public const NORTHEAST = 'northeast';
    public const NORTHWEST = 'northwest';
    public const SOUTHEAST = 'southeast';
    public const SOUTHWEST = 'southwest';
}
