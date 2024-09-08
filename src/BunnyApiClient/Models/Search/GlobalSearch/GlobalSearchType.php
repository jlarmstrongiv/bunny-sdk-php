<?php

namespace BunnyApiClient\Models\Search\GlobalSearch;

use Microsoft\Kiota\Abstractions\Enum;

class GlobalSearchType extends Enum {
    public const CDN = 'cdn';
    public const STORAGE = 'storage';
    public const DNS = 'dns';
    public const SCRIPT = 'script';
    public const STREAM = 'stream';
}
