<?php

namespace PollBundle\Controller;

class PoolText extends PoolModel
{
	public function __construct($request)
	{
		try
		{
			if ($request->getMethod() == 'POST')
			{
				$title       = $request->get("title_input");
				$description = $request->get("description_input");
				$date_fin    = $request->get("date_input");
				$choices     = $request->get("choices");
			}
//			$this->setPollTitle($title);
//			$this->setPollDescription($description);
//			$this->setPoll_expiration_date($date_fin);
//			$this->generatePollUrl();
//			$this->setPoll_etat(true);
//			$this->setPoll_type("c3");

			$this->setPollTitle($title);
			$this->setPollDescription($description);
			$this->setPoll_expiration_date(new \DateTime($date_fin));
			$this->generatePollUrl();
			$this->setPoll_choices($choices);
			$this->setPoll_etat(true);
			$this->setPoll_type("text");
		}
		catch (Exception $ex)
		{
			throw new Exception("Erreur lors de la création du sondage");
		}
	}
}