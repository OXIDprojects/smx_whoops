Great module proudly presented by [OXID Hackathon 2017](https://openspacer.org/12-oxid-community/185-oxid-hackathon-nuernberg-2017/) ;-)

Module version for OXID eShop 6. Original module by [shoptimax GmbH](https://github.com/shoptimax/smx_whoops).

# Features

use [whoops - php errors for cool kids](https://github.com/filp/whoops) for exception and error handling

## Installation

1. Composer
```
composer require oxid-community/smxwhoops
```

2. functions.php

Add the following lines in `modules/functions.php`:

```
define('__ROOT__', dirname(__FILE__, 2));
require_once(__ROOT__ . '/modules/oxcom/smxwhoops/functions.php');
```

# Screenshot

![OXID_smxwhoops](https://camo.githubusercontent.com/31a4e1410e740fd0ccda128cbcab8723f45e7e73/687474703a2f2f692e696d6775722e636f6d2f305651706539362e706e67)


# Changelog

* 2017-12-18	2.0.0	module release
