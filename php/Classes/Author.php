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

	private $authorHash; $hash = password_hash("password", PASSWORD_ARGON2I, ["time_cost" => 7]);

	private $authorUsername;

}




//DDL for Assignment

//create table author(

//	 authorId binary(16) not null,

//  authorActivationToken char(32),

//  authorAvatarUrl varchar(255),

//  authorEmail varchar(128) not null,

//  authorHash char(97) not null,

//  authorUsername varchar(32) not null,

//  unique(authorEmail),

//  unique(authorUsername),

//  primary key(authorId)

//

?>