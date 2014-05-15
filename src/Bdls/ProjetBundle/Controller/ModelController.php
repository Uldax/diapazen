<?php

namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModelController extends Controller
{
	public function insertTextAction()
	{
		$sqlValues = "";
		$keys = array_keys($values);
		for($i = 0; $i < count($values); $i++)
		{
			$sqlValues .= strtoupper(":".$keys[$i]);
			$sqlValues .= $i < count($values) - 1 ? ", " : ""; 
		}

		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", 
							$table,
							implode(', ', array_keys($values)),
							$sqlValues
							);

		$request = $this->getPDO()->prepare($query);
		
		// On binde les valeurs
		foreach ($values as $key => $value)
			$request->bindValue(strtoupper(':'.$key), htmlspecialchars($value));

		return $request->execute();
	}
	
		public function insertDateAction()
	{
		$sqlValues = "";
		$keys = array_keys($values);
		for($i = 0; $i < count($values); $i++)
		{
			$sqlValues .= strtoupper(":".$keys[$i]);
			$sqlValues .= $i < count($values) - 1 ? ", " : ""; 
		}

		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", 
							$table,
							implode(', ', array_keys($values)),
							$sqlValues
							);

		$request = $this->getPDO()->prepare($query);
		
		// On binde les valeurs
		foreach ($values as $key => $value)
			$request->bindValue(strtoupper(':'.$key), htmlspecialchars($value));

		return $request->execute();
	}
	
		public function insertIntAction()
	{
		$sqlValues = "";
		$keys = array_keys($values);
		for($i = 0; $i < count($values); $i++)
		{
			$sqlValues .= strtoupper(":".$keys[$i]);
			$sqlValues .= $i < count($values) - 1 ? ", " : ""; 
		}

		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", 
							$table,
							implode(', ', array_keys($values)),
							$sqlValues
							);

		$request = $this->getPDO()->prepare($query);
		
		// On binde les valeurs
		foreach ($values as $key => $value)
			$request->bindValue(strtoupper(':'.$key), htmlspecialchars($value));

		return $request->execute();
	}
}

