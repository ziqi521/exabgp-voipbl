<?php

/**
 * The ExaBGP process plugin script to RTBH a local and the voipbl.org blacklist
 *
 * The ExaBGP process plugin script advertises the prefixes from a local and the
 * voipbl.org blacklist to ExaBGP via unicast or FlowSpec BGP.
 *
 * PHP version 7.0
 *
 * @package   ExaBGP\VoIPBL
 * @author    Geert Hauwaerts <geert@hauwaerts.be>
 * @copyright 2014 Geert Hauwaerts
 * @license   BSD 3-Clause License
 * @link      https://github.com/GeertHauwaerts/exabgp-voipbl exabgp-voipbl
 */

namespace ExaBGP\VoIPBL\Exception;

use RuntimeException;

/**
 * The InvalidBlacklistException class.
 *
 * @package   ExaBGP\VoIPBL\Exception\InvalidBlacklistException
 * @author    Geert Hauwaerts <geert@hauwaerts.be>
 * @copyright 2014 Geert Hauwaerts
 * @license   BSD 3-Clause License
 * @version   Release: @package_version@
 * @link      https://github.com/GeertHauwaerts/exabgp-voipbl exabgp-voipbl
 */
class InvalidBlacklistException extends RuntimeException implements ExceptionInterface
{
}
