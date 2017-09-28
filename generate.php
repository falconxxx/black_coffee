						<?php 


						$c = "mysql:host=localhost;dbname=black_coffee";
						$u = "root";
						$p = "";


						$db = new db();

						$sql = $db->connectDB($c, $u, $p);

						class db{
							
						function connectDB($c, $u, $p){
						$conn = new PDO($c, $u, $p);
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						try{
							$sql = $conn;
							return $sql;

						}
						catch(PDOException $e){
							echo $e->getMessage();
						}
					}

					function selectDB($sql, $query){
						try{
							$return = $sql->query($query);
						$return->setFetchMode(PDO::FETCH_OBJ);
						return $return;
						}
						catch(PDOException $e){
							echo $e->getMessage();
						}
					}
				}

				// $t = '';
				// $cn = '';

				// $q = $sql->query("SELECT * FROM post WHERE  ");


						?>