<?php
/**
 *
 * Akismet. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\akismet\tests\mock;

/**
 *
 * Dead simple Akismet mock.
 *
 * @package Gothick Akismet
 */
class akismet_mock extends \Gothick\AkismetClient\Client
{
	protected $blatant;

	public function __construct($blatant = false)
	{
		$this->blatant = $blatant;
	}

	public function commentCheck($params = array(), $server_params = array())
	{
		if ($params['comment_author'] == 'viagra-test-123')
		{
			return new akismet_client_check_result_mock(true, $this->blatant);
		}
		return new akismet_client_check_result_mock(false, false);
	}
}
