<?php

class SentryUserGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users_groups')->delete();

		$userUser0 = Sentry::getUserProvider()->findByLogin('sachi');

		$userUser1 = Sentry::getUserProvider()->findByLogin('arturo');

		$userUser2 = Sentry::getUserProvider()->findByLogin('ahmed');

		$userUser3 = Sentry::getUserProvider()->findByLogin('allen');

		$userUser4 = Sentry::getUserProvider()->findByLogin('alex');

		$userUser5 = Sentry::getUserProvider()->findByLogin('joel');

		$userUser6 = Sentry::getUserProvider()->findByLogin('jonathan');

		$userUser7 = Sentry::getUserProvider()->findByLogin('john');

		$userUser8 = Sentry::getUserProvider()->findByLogin('kevin');

		$userUser9 = Sentry::getUserProvider()->findByLogin('morgan');

		




		$userGroup = Sentry::getGroupProvider()->findByName('Users');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admins');

	    $userUser0->addGroup($userGroup);
	    $userUser0->addGroup($adminGroup);

	    $userUser1->addGroup($userGroup);
	    $userUser1->addGroup($adminGroup);

	    $userUser2->addGroup($userGroup);
	    $userUser2->addGroup($adminGroup);

	    $userUser3->addGroup($userGroup);
	    $userUser3->addGroup($adminGroup);

	    $userUser4->addGroup($userGroup);
	    $userUser4->addGroup($adminGroup);

	    $userUser5->addGroup($userGroup);
	    $userUser5->addGroup($adminGroup);

	    $userUser6->addGroup($userGroup);
	    $userUser6->addGroup($adminGroup);

	    $userUser7->addGroup($userGroup);
	    $userUser7->addGroup($adminGroup);

	    $userUser8->addGroup($userGroup);
	    $userUser8->addGroup($adminGroup);

	    $userUser9->addGroup($userGroup);
	    $userUser9->addGroup($adminGroup);

	}

}