<?php
	echo menu_active_block(HOMEPAGE, 'homepage', $language);
	echo menu_active_block('versenyzok.php', 'competitors', $language);
	echo menu_active_block('szabalyzat.php', 'rules', $language);
	echo menu_active_block('jelentkezes.php', 'signup', $language);
	echo menu_active_block('idopontok.php', 'dates', $language);
	echo menu_active_block('nyeremenyek.php', 'prizes', $language);
	echo menu_active_block('kapcsolat.php', 'contact', $language);
?>