<?php
	echo "POST array: <br>";
	print_r($_POST);
	echo "<hr>";

	echo "Name: " .$_POST['firstName'], "<br>";
	echo "Surname: " .$_POST['secondName'], "<br>";
	echo "Sex: " .$_POST['sex'], "<br>";
	echo "Age: " .$_POST['age'], "<br>";
	echo "Gender: " .$_POST['gender'], "<br>";
	echo "Birthday: " .$_POST['birthday'], "<br>";
	echo "Family status: " .$_POST['maritalStatus'], "<br>";
	echo "Social status: " .$_POST['socialStatus'], "<br>";
	echo "Location: " .$_POST['location'], "<br>";
	echo "Weekend activities: " .$_POST['weekend'], "<br>";
	echo "Favorite genre book: " .$_POST['genreBooks'], "<br>";
	echo "Quantity books: " .$_POST['books'], "<br>";
	echo "Comments: " .$_POST['coments'], "<br>";
	echo "Position: " .$_POST['numberPosition'], "<br>";
	echo "Conclusion: " .$_POST['conclusion'], "<br>";
	echo "E-mail: " .$_POST['emailAddres'], "<br>";
	echo "Category: " .$_POST['category'], "<br>";
	echo "Task: " .$_POST['task'], "<br>";
?>