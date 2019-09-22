<?php
/*
    Copyright (C) 2004-2019 Kestas J. Kuliukas, Philip Paquette

    This file is part of webDiplomacy.

    webDiplomacy is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    webDiplomacy is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with webDiplomacy.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace API;
defined('IN_CODE') or die('This script can not be run by itself.');

/**
 * Exception class - missing credentials (API key).
 */
class ClientUnauthorizedException extends \Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

/**
 * Exception class - access denied for request sender.
 */
class ClientForbiddenException extends \Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

/**
 * Exception class - server internal error.
 */
class ServerInternalException extends \Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

/**
 * Exception class - request is not implemented.
 */
class NotImplementedException extends \Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

/**
 * Exception class - bad request.
 */
class RequestException extends \Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}