<?php

namespace Celeste3\ObjectOriented;

require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;

/**
 * Class Author
 * @Author Celeste Whitaker <cwhitaker4@cnm,edu>
 */

class Author {
	use ValidateUuid;
	/**
	 * authorId is the primary key
	 *
	 **/

	private $authorId;

	private $authorAvatarUrl;

	private $authorActivationToken;

	private $authorEmail;

	private $authorHash;

	private $authorUsername;



}

?>