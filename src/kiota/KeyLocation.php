<?php

namespace Microsoft\Kiota\Authentication;

enum KeyLocation: string
{
    case Header = "header";
    case QueryParameter = "query_parameter";
}

?>
