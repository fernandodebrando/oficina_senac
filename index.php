<?php

$con_string = "host=ec2-54-221-226-148.compute-1.amazonaws.com 
			   port=5432 
			   dbname=dbudkrpnc8vlqe 
			   user=njjppqkrydedey 
			   password=s2V7huGA_Kqv94hsHin39fhtpV";

pg_connect($con_string) or die('Conexão falhou!');

echo "Conectado no Postgres com sucesso!";