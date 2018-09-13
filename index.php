<!DOCTYPE html>
<html>
<head>
	<title>Monday morning HTML Quiz</title>
</head>

<style type="text/css">
		
	p {
		color:red;
		background-color: blue;
	}

</style>
<body>

	<h1>Quiz</h1>

	<p>This document is for the Thursday afternoon quiz</p>

	<ol>

		<li>This document.</li>
		<li>Hyper Text Markup Language</li>
		<li>It's a markup language for a browser (client) to render content and interperate meta-data as aresource requested by a user from a server.</li>
		<li><a href="www.example.com" target="_blank">Click here</a></li>
		<li>Cascading Style Sheets</li>
		<li>To declare styles to be applied across your HTML (markup)</li>
		<li>
			<ol>
			<li>Inline using the style attribute of a HTML element.</li>
			<li>Via a<code><style></style></code> tag</li>
			</ol>
		</li>
		<li>
			<code>p {
					color:red;
					background-color: blue;
				}</code>
		</li>
		<li>Classes help create useful uniform classification of objects, that can be instantiated and constistently used throughout your code in OOP.</li>
		<li>Data and Behaviour</li>
		<li>
			
		<?php

			class Car {

				private $make;
				private $model;
				private $color;
				private $year;
				private $price;

				public function __construct($make, $model, $color, $year, $price) {

					$this->make = $make;
					$this->model = $model;
					$this->color = $color;
					$this->year = $year;
					$this->price = $price;
				}

				public function getMake() {
					return $this->make;

				}

				public function getYear() {
					return $this->year;

				}

			}

					?>

		</li>
		<li>
			<?php

				$newCar = new Car("Tesla", "S3", "red", 2018, 30000);

				$year = $newCar->getYear();

				echo "New Car Year: $year";
			?>
			
		</li>

		<li>
			<?php

				$bag = [];

				for ($i=0; $i <= 100; $i++) { 
					# code...

					$i % 2 ? $bag[] = $i : null;
				}

				print_r($bag);


				?>
		</li>

		<li>
			<?php 

				$sum = 0;

				foreach ($bag as $i => $num) {
					# code...
					$sum = $sum + $num;
				}

				if ($sum > 2000) {
					echo "BIG";
				} elseif ($sum == 2000) {
					echo "MEH";
				} else {
					echo "SMALL";
				}
				

				?>
		</li>
		<li>
			A scheme is a sctucture that defines your database, including tables columns (fields) and rows.
		</li>
		<li>
			Within a DB schema tables map to classes and rows (data) map to class instances.
		</li>
		<li>
			<table border="1">
				<thead>
			        <tr>
			            <th colspan="6">The Car Table Schema in the DB</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<tr>
						<td>
							id
						</td>
						<td>
							make
						</td>
						<td>
							model
						</td>
						
						<td>
							year
						</td>
						<td>
							price
						</td>
					</tr>
					<tr>
						<td>
							INT
						</td>
						<td>
							VARCHAR(255)
						</td>
						<td>
							VARCHAR(255)
						</td>
						
						<td>
							DATETIME
						</td>
						<td>
							INT
						</td>
					</tr>
			    </tbody>	
			</table>
			<br/>

			<table border="1">
				<thead>
			        <tr>
			            <th colspan="5">The User Table Schema in the DB</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<tr>
						<td>
							id
						</td>
						<td>
							name
						</td>
						<td>
							email
						</td>
						
						<td>
							password
						</td>
						<td>
							role
						</td>
					</tr>
					<tr>
						<td>
							INT
						</td>
						<td>
							VARCHAR(255)
						</td>
						<td>
							VARCHAR(255)
						</td>
						
						<td>
							VARCHAR(255)
						</td>
						<td>
							INT
						</td>
					</tr>
			    </tbody>	
			</table>

			<br/>

			<table border="1">
				<thead>
			        <tr>
			            <th colspan="5">The Sale Table Schema in the DB</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<tr>
						<td>
							id
						</td>
						<td>
							user_id
						</td>
						<td>
							car_id
						</td>
						
						<td>
							price
						</td>
						<td>
							created_at
						</td>
					</tr>
					<tr>
						<td>
							INT
						</td>
						<td>
							INT
						</td>
						<td>
							INT
						</td>
						
						<td>
							INT
						</td>
						<td>
							DATETIME
						</td>
					</tr>
			    </tbody>	
			</table>
			<br/>
		</li>

		<li>
			'Best' salesperson could be the user with the highest <b>total sales</b> each month. 

			<br/>
			<br/>

			To determine this you could follow:

			a) Query your database for all users with the role 1 ("salesperson")
			b) Create class method for the User class that queried the database to lookup all sales with a created_at date greater than the first date of that last month. Perhaps the method takes user_id and date as parameters and the results stored in an array whose length can be counted. 
			c) You could then build up a new array, say $monthlySales, and associate user to their total count.
			d) You'd then loop through this array to determine the maximim vaule (most sales) and return that along with the user_id index to find your 'Best' salesperson.

			<br/><br/>

			You could follow a similar pattern for cars, by quering the Sales table for last months sales then building an index (count) per car_id, per make and model.

			<br/>

			NB. We're using Total Sales to signify 'Best' and 'Successful' - maybe a true measure of success is total sales value or profit.


		</li>

			
	</ol>

</body>
</html>