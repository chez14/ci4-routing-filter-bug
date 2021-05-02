<?php

namespace Extendables\Config;

use Config\Filters;
use Extendables\Filters\Auth;

/**
 * @var Filters $filters
 * 
 * @link https://github.com/codeigniter4/CodeIgniter4/issues/4572#issuecomment-821981736
 */
$filters->aliases['pnd_auth'] = Auth::class;
