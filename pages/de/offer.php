<div id="sub-header-table">
	<div id="sub-header">
		<h1>Angebot</h1>
		<p class="after-header">Das DORAN Unternehmen bietet Ihnen:</p>
		<ul class="list decimal" style="margin-bottom: 0">
			<li>Würzelpflänzlinge von Miscanthus X Giganteus <strong
				style="font-weight: bold; color: #698B22;">in sehr attraktiven
					Preisen</strong>,</li>
			<li>Komplexe Behandlung bei:
				<ul class="list lower-alpha" style="margin-bottom: 0">
					<li>Anwerbung und Produktion der Wurzelpflänzlinge aus Plantagen,</li>
					<li>Annahme und Beratung im Behalt und Führung des
						Miscanthus X Giganteus Plantage,</li>
				</ul></li>
			<li>Beratung im Bereich:
				<ul class="list lower-alpha" style="margin-bottom: 0">
					<li>Anwerbung und Produktion von Pflänzlingen,</li>
					<li>Aufgrundung, Führung und Erhalt von Plantagen des Miscanthus X Giganteus’.</li>
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
				<legend>Anfrage: </legend>
				<div class="quotation-line">
					<label for="fName">Vorname und Name: </label> <input id="fName"
						class="required" minlength="3" name="name" type="text">
				</div>
				<div class="quotation-line">
					<label for="fCompany">das Unternehmen: </label> <input id="fCompany"
						name="company" minlength="3" type="text">
				</div>
				<div class="quotation-line">
					<label for="fEmail">E-mail: </label> <input id="fEmail"
						class="required email" name="email" type="text">
				</div>
				<div class="quotation-line">
					<label for="fUrl">Seite WWW: </label> <input id="fUrl" class="url"
						name="url" type="text">
				</div>
				<div class="quotation-line">
					<label for="fPhone">Telefonnummer: </label> <input id="fPhone"
						class="phone" name="phone" type="text">
				</div>
				<div class="quotation-line">
					<label for="fMobile">Handynummer: </label> <input
						id="fMobile" class="phone" name="mobile" type="text">
				</div>
				<div class="quotation-line">
					<label for="fBody">Inhalt der Anfrage: </label>
					<textarea id="fBody" name="body" class="required" minlength="20"
						rows="10" cols="30"></textarea>
				</div>
				<div class="quotation-line">
				<!-- <input type="hidden" name="metoda1" value="1" /> -->
					<input type="hidden" name="metoda2" value="1" />
					<input class="submit" type="submit" name="submit" value="Senden">&nbsp;
					<input class="reset" type="reset" value="von Anfang" />
				</div>

			</fieldset>
		</form>
		<?php
	}
	elseif( !isset( $_POST['submit'] ) || $_POST['submit'] != 'Senden'  || isset( $_POST['metoda1'] ) || !isset( $_POST['metoda2'] ))  exit();
	//sprawdzamy poprawność adresu email
	elseif (!(preg_match("/^.{1,}?@.{1,}\./", $_POST['email'])) && !empty($_POST['email']))  {
		echo "<span style=\"margin: 0; color: #FF0000; text-align: center; font-size: 14px\">E-mail-Adresse (</span><i>".$_POST['email']."</i><span style=\"margin: 0; color: #FF0000; text-align: center; font-size: 14px\">) ist falsch </span><br><br><a href=\"javascript:history.back()\" style=\"font-size: 14px; margin: 0 0 0 15px\">zurück</a>";
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

		echo "<p class=\"quotation_success_mess\"><strong>Danke</strong>, es war Ihre Nachricht wurde erfolgreich gesendet. Bald wird jemand bei Ihnen melden. Grüße<br><br><a href=\"javascript:history.back()\" style=\"text-decoration:none;\">zurück</a></p>";
	}

	// lub w przypadku nie wypełnienia formularza do końca
	else echo "<p class=\"quotation_error_mess\"><strong style=\"color: #C02942;\"> Füllen Sie die erforderlichen Felder!</strong><br><br><a href=\"javascript:history.back()\" style=\"font-size: 14px; margin: 0 0 0 0px\">zurück</a></p>";

	?>
	</div>
	<!-- //#main-content -->
	<div id="sidebar">
	<?php include "pages/de/sidebar.php"?>
	</div>
	<!-- //#sidebar -->
</div>
<!-- //#body  -->
