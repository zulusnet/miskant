<div id="sub-header-table">
	<div id="sub-header">
		<h1>Oferta</h1>
		<p class="after-header">Firma Doran oferuje Państwu:</p>
		<ul class="list decimal" style="margin-bottom: 0">
			<li>Sadzonki korzeniowe (rhizomy) Miskanta olbrzymiego, <strong
				style="font-weight: bold; color: #698B22;">w bardzo atrakcyjnych
					cenach</strong>,</li>
			<li>Kompleksowe usługi dot.:
				<ul class="list lower-alpha" style="margin-bottom: 0">
					<li>Pozyskania i produkcji sadzonek z istniejących plantacji,</li>
					<li>Założenia a następnie doradztwa w zakresie utrzymania i
						prowadzenia plantacji Miskanta olbrzymiego,</li>
				</ul></li>
			<li>Doradztwo w zakresie:
				<ul class="list lower-alpha" style="margin-bottom: 0">
					<li>Pozyskania i produkcji sadzonek,</li>
					<li>Założenia, prowadzenia i utrzymania plantacji Miskanta
						olbrzymiego.</li>
				</ul></li>
		</ul>
	</div>
	<!-- //#sub-header -->
	<div id="content-images-cell">
		<div id="slide-holder">
			<div id="slide-runner">
			</div>
		</div>
	</div>
	<!--  //#content-images-cell -->
</div>
<!--  //#sub-header-table -->
<div id="body">
	<div id="main-content">
	<?php
	// sprawdzamy, czy zmienna $submit jest pusta
	if (empty($_POST['submit'])) {
		// wyświetlamy formularz
		?>
		<form method="post" action="#" id="quotation" class="quotation">
			<fieldset>
				<legend>Zapytanie ofertowe</legend>
				<div class="quotation-line">
					<label for="fName">Imię i Nazwisko: </label> <input id="fName"
						class="required" minlength="3" name="name" type="text">
				</div>
				<div class="quotation-line">
					<label for="fCompany">Nazwa firmy: </label> <input id="fCompany"
						name="company" minlength="3" type="text">
				</div>
				<div class="quotation-line">
					<label for="fEmail">E-mail: </label> <input id="fEmail"
						class="required email" name="email" type="text">
				</div>
				<div class="quotation-line">
					<label for="fUrl">Strona www: </label> <input id="fUrl" class="url"
						name="url" type="text">
				</div>
				<div class="quotation-line">
					<label for="fPhone">Telefon: </label> <input id="fPhone"
						class="phone" name="phone" type="text">
				</div>
				<div class="quotation-line">
					<label for="fMobile">Telefon komórkowy: </label> <input
						id="fMobile" class="phone" name="mobile" type="text">
				</div>
				<div class="quotation-line">
					<label for="fBody">Treść zapytania: </label>
					<textarea id="fBody" name="body" class="required" minlength="20"
						rows="10" cols="30"></textarea>
				</div>
				<div class="quotation-line">
					<!-- <input type="hidden" name="metoda1" value="1" /> -->
					<input type="hidden" name="metoda2" value="1" />
					<input class="submit" type="submit" name="submit" value="Wyślij">&nbsp;
					<input class="reset" type="reset" value="Od nowa" />
				</div>

			</fieldset>
		</form>
		<?php
	}
	elseif( !isset( $_POST['submit'] ) || $_POST['submit'] != 'Wyslij'  || isset( $_POST['metoda1'] ) || !isset( $_POST['metoda2'] ))  exit();

	//sprawdzamy poprawność adresu email
	elseif (!(preg_match("/^.{1,}?@.{1,}\./", $_POST['email'])) && !empty($_POST['email']))  {
		echo "<span style=\"margin: 0; color: #FF0000; text-align: center; font-size: 14px\">Adres e-mail który wpisałeś (</span><i>".$_POST['email']."</i><span style=\"margin: 0; color: #FF0000; text-align: center; font-size: 14px\">) jest nie poprawny</span><br><br><a href=\"javascript:history.back()\" style=\"font-size: 14px; margin: 0 0 0 15px\">Cofnij</a>";
	}

	// sprawdzamy, czy zmienne przesłane z formularza nie są puste
	elseif (!empty($_POST['body']) && !empty($_POST['name']) && !empty($_POST['email'])) {
		// jeżeli powyższy warunek jest spełniony tworzona jest wiadomość
		// zmienna $message zawiera treść wiadomości
		$message = "Imię i nazwisko: $_POST[name]<br \><br \>Nazwa firmy: $_POST[company]<br \><br \>e-mail: $_POST[email]<br \><br \>Strona www: $_POST[url]<br \><br \>Numer telefonu: $_POST[phone]<br \><br \>Numer telefonu komórkowego: $_POST[mobile]<br \><br \>Treść wiadomości:<br \>$_POST[body]";
		// zmienna $header zawiera przede wszystkim adres zwrotny
		$header = "From: $_POST[name] <$_POST[email]>\nMIME-Version: 1.0\nContent-type: text/html; charset=UTF-8";
		// funkcja mail() za pomocą której wiadomość zostanie wysłana
		@mail("info@miskantolbrzymi.com.pl","Wiadomosc ze strony http://www.miskantolbrzymi.com.pl","$message","$header")
		or die("<p class=\"quotation_error_mess\"><strong style=\"color: #C02942;\">Niestety</strong>, nie udało się wysłać wiadomości. Prosimy spróbować później lub wysłać e-mail bezpośrednio na adres: <a href=\"mailto:info@miskantolbrzymi.com.pl\" style=\"text-decoration:none;\">info@miskantolbrzymi.com.pl</a><br><br><a href=\"javascript:history.back()\" style=\"text-decoration:none\">Cofnij</a></p>");
		// wyświetlenie komunikatu w przypadku powodzenia

		echo "<p class=\"quotation_success_mess\"><strong>Dziękujemy</strong>, wiadomość została wysłana poprawnie. Niebawem ktoś się z Państwem skontaktuje. Pozdrawiamy<br><br><a href=\"javascript:history.back()\" style=\"text-decoration:none;\">Cofnij</a></p>";
	}

	// lub w przypadku nie wypełnienia formularza do końca
	else echo "<p class=\"quotation_error_mess\"><strong style=\"color: #C02942;\"> Wypełnij wymagane pola formularza!</strong><br><br><a href=\"javascript:history.back()\" style=\"font-size: 14px; margin: 0 0 0 0px\">Cofnij</a></p>";

	?>
	</div>
	<!-- //#main-content -->
	<div id="sidebar">
	<?php include "pages/pl/sidebar.php"?>
	</div>
	<!-- //#sidebar -->
</div>
<!-- //#body  -->
