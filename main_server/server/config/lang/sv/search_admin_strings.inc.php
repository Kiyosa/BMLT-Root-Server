<?php
/***********************************************************************/
/** \file	search_admin_strings.inc.php
	\brief	The strings displayed in the search admin for this language (English)
    
    This file is part of the Basic Meeting List Toolbox (BMLT).
    
    Find out more at: http://magshare.org/bmlt

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this code.  If not, see <http://www.gnu.org/licenses/>.*/	
	defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.

	$comdef_search_admin_strings = array (
										'Login_Form' =>
											array ( 'login' => 'Användarnamn',
													'password' => 'Lösenord',
													'button' => 'Logga in',
													'cookie' =>'Du måste tillåta kakor för att kunna administrera möteslistan.',
													'noscript' => 'Du måste tillåta JavaScript för att kunna administrera möteslistan.',
													'title' => 'Logga in för att administrera möteslistan.',
													'not_auth_1' => 'För låg behörighet.',
													'not_auth_2' => 'Du har för låg behörighet för att administrera möteslistan',
													'not_auth_3' => 'Ditt användarnamn eller lösenord är fel.'
													),
										'Edit_Meeting' =>
											array (	'auth_failure' => 'Du har för låg behörighet för att administrera detta möte.',
													'revert_failure' => 'Något gick fel i återställningsprossesen.',
													'object_not_found' => 'FEL: mötet finns inte',
													'object_not_changed' => 'FEL: Mötet gick inte att ändra',
													'meeting_id' => 'Mötets ID:',
													'changes' => 'Historiska ändringar',
													'changed_by' => 'Ändrad av ',
													'created_by' => 'Skapad av ',
													'change_revert' => 'Återställ till det föregående inställningarna',
													'change_revert_title' => 'Detta kommer återställa till de föregående inställningarna',
													'change_revert_confirm' => 'Säker på att återställa till de föregående inställningarna?',
													'changed_on' => ' på ',
													'meeting_deleted' => 'Kassera mötets ID:',
													'meeting_reverted' => 'Återställ mötets ID:',
													'weekday' => 'Veckodag',
													'starts_at' => 'Börjar klockan',
													'duration' => 'pågår',
													'data_values' => 'Möte datavärden',
													'will_be_deleted' => 'Kommer att kasseras. ',
													'follow_link_undel' => 'Följ denna länk för att återskapa.',
													'follow_link_add' => 'Följ denna länk för att lägga till en ny datapost.',
													'button_do_not_add' => 'Lägg inte till detta dataelement',
													'meeting_id' => 'Mötes ID',
													'world_id' => 'Världs ID',
													'meeting_format' => 'Mötestyp',
													'service_body' => 'Serviceenhet',
													'language' => 'Språk',
													'long_lat' => 'Longitud och latitud',
													'set_loc' => 'Följ denna länk för att bestämma mötets geografiska plats',
													'button_delete_dataitem' => 'Ta bort detta dataelement',
													'button_delete_meeting' => 'Ta bort detta möte',
													'button_submit_changes' => 'Spara ändringar',
													'close_window' => 'Stäng fönstret',
													'dirty_confirm' => 'Är du säker på att du vill stänga detta fönstret utan att spara dina ändringar?',
													'delete_confirm' => 'Säkert att du vill kasta detta möte?',
													'noscript_warning' => 'Du måste ha JavaScript aktiverat i din webbläsare för att detta ska fungera!',
													'published' => 'Mötet är nu publicerat',
													'unknown_bulk_operation' => 'Okänd operation',
													'meeting_does_not_exist' => 'Mötet finns inte',
													'bulk_delete_confirm' => 'Är du säker på att du vill ta bort dessa möten?',
													'bulk_delete_confirm_ep' => 'Är du säker på att du permanent vill ta bort dessa möten?',
													'bulk_copy_confirm' => 'Är du säker på att du vill göra kopior av dessa möten?',
													'long_label' => 'Longitud',
													'lat_label' => 'Latitud',
													'delete_extreme_prejudice' => 'Ta bort Möte permanent',
													'perm_delete_confirm' => 'Är du säker på att du permanent vill ta bort detta möte?',
													'delete_extreme_prejudice_title' => 'Detta kommer att radera alla ändringar och uppgifter om detta möte.',
													'meeting_permanently_deleted' => 'Raderas permanent mötet ',
													'copy_prompt' => 'Dubblett',
													'cant_publish_no_location' => 'Du kan inte publicera detta möte eftersom en longitud och latitud ännu inte har fastställts.',
													'cant_publish_meetinglist_admin' => 'Du kan inte publicera detta möte eftersom du inte får göra det.',
													'cant_publish_duplicate' => 'Du kan inte publicera detta möte eftersom det är en dubblett, och du måste först ta bort det dubbla mötet.',
													'copy' => "Detta är ett dubblett möte och kan inte publiceras förrän du tar bort det dubbla mötet",
													'duplicate_string' => "Detta är ett dubblett möte och kan inte publiceras förrän du tar bort de dubbla mötet.",
													'unpublished_string' => "Detta möte är inte publicerat.",
													'email_contact' => 'Kontakt Epost',
													'email_contact_note' => 'Din adress visas aldrig publikt',
													'email_format_bad' => 'Felaktig Epost adress.',
													'visibility_prompt' => 'fält synlighet',
													'visibility_value_all' => 'Synlig för alla',
													'visibility_value_admin' => 'Endast synligt för administratörer',
													'visibility_value_web_mob' => 'Visas endast för webbanvändare och mobila användare',
													'visibility_value_web' => 'Visas endast för webbanvändare',
													'visibility_value_mob' => 'Visas endast för mobila användare',
													'visibility_value_print' => 'Visas endast vid utskrift'
													),
										'Edit_Formats' =>
											array (	'auth_failure' => 'Du har inte behörighet att redigera mötestyperna på den här servern.',
													'dirty_confirm' => 'Är du säker på att du vill stänga detta fönstrer utan att spara först?',
													'delete_confirm' => 'Är du säker på att du vill ta bort denna mötestyp?',
													'change_button' => 'Ändra mötestyp',
													'delete_button' => 'Ta bort mötestyp',
													'copy_button' => 'Kopiera mötestyp',
													'add_button' => 'Lägg till mötestyp',
													'change_revert_confirm' => 'Är du säker på att du vill returnera formatet till det tillstånd den var innan denna förändring?',
													'object_not_found' => 'FEL: Mötestypen hittades inte.',
													'object_not_changed' => 'FEL: Mötestypen ändrades inte.',
													'format_key_not_unique' => 'FEL: Mötestypens nyckeln är inte unik.',
													'no_formats' => 'Det finns inga Mötestyper att redigera.',
													'no_blank' => 'Minst en mötestyp måste väljas',
													'name_label' => 'Namn',
													'key_label' => 'Nyckel',
													'sid_label' => 'Delad ID',
													'type_label' => 'Mötestyp',
													'native_lang' => 'Serverns standard språk',
													'new_format' => 'Ny mötestyp',
													'description_label' => 'Beskrivning',
													'FormatsDiv' => 'Ändra mötestyp',
													'sort_select_label' => 'Sortera mötestyp efter',
													'sort_option_id' => 'ID',
													'sort_option_type' => 'Mötestyp',
													'sort_option_key' => 'Nyckel'
												),
										'Edit_Meetings' =>
											array (	'auth_failure' => 'Du har inte behörighet att redigera möten på denna server.',
													'deleteds' => 'Ta bort möten',
													'id' => 'ID ',
													'the_meeting' => 'Mötet "',
													'deleted_by' => '" blev borttaget av ',
													'changed_by' => '" blev ändrat av ',
													'created_by' => '" blev skapat av ',
													'revert_meeting' => 'Återgå till förra inställning för mötet.',
													'revert_meeting_title' => 'Detta återställer mötet till tidigare inställningar',
													'undelete_meeting' => 'Återställ det borttagna mötet',
													'undelete_meeting_confirm' => 'Är du säker på att du vill Återställa det borttagna mötet?',
													'undelete_meeting_title' => 'Detta kommer att återställa mötet till det tillstånd den var strax före det togs bort.',
													'met_on' => 'Mötet är den ',
													'met_at' => ' vid ',
													'NewMeeting' => 'Skapa ett nytt möte',
													'change_visit_title' => 'Se mötet som det för närvarande visas',
													'change_visit' => 'Visa mötet',
													'edit_data_item_value_textarea_label' => 'Värde att visa för dessa möten.',
													'edit_data_item_value_cancel_button' => 'Ångra',
													'edit_data_item_value_apply_button' => 'OK',
													'edit_data_item_value_apply_confirm' => 'Är du säker på att du vill använda detta värde till alla dessa möten? Värdet kommer att ersätta eventuella tidigare värden i den valda mötena.',
													'edit_data_item_value_apply_confirm_delete' => 'Är du säker på att du vill ta bort detta dataelement från alla dessa möten?',
													'edit_data_item_value_apply_confirm_delete_oops' => 'Du kan inte radera ett dataobjekt, såvida du inte väljer "Ändra befintliga värden kryssrutan."',
													'edit_data_item_value_apply_confirm_canceled' => 'Datan skrevs inte',
													'edit_data_item_value_apply_complete1' => 'Ändrade framgångsrikt ',
													'edit_data_item_value_apply_complete2' => ' dataobjektet till "',
													'edit_data_item_value_apply_complete3' => '" för mötena med följande ID: ',
													'no_meetings_checked_alert' => 'Du måste välja minst ett möte för denna operation ska lyckas.',
													'edit_data_item_override_checkbox_label' => 'Ändra nuvarande värde.',
													'edit_data_item_override_checkbox_title' => 'att välja det här kommer att tvinga det värde som ska skrivas, överordnade alla tidigare värde. Annars kommer befintliga värden lämnas ifred.'
												),
										'Edit_Service_Bodies' =>
											array (	'auth_failure' => 'Du har inte behörighet att redigera det här Serviceenheten',
													'sql_err' => 'Serverfel.',
													'no_reassignment_meetings' => 'Det fanns ingen giltig omplacering möjlighet av mötena i denna Serviceenhet',
													'no_reassignment_sb' => 'Det fanns ingen giltig omplacering möjlighet av Serviceenheten "ägt av" denna Serviceenhet.',
													'Edit_Bodies' => 'Ändra Serviceenhet',
													'World_ID' => 'Världs ID',
													'service_body_id' => 'Serviceenhet ID',
													'object_not_found' => 'FEL: Serviceenhet gick inte att hitta',
													'object_not_changed' => 'FEL: Serviceenheten gick inte att ändra',
													'server_not_instantiated' => 'FEL: Servern genererade ett fel. Så pass illa att det gick inte att skapa ett grundläggande server objekt.',
													'Name' => 'Namn',
													'Description' => 'Beskrivning',
													'Language' => 'Språk',
													'Primary_Parent' => 'Primär förälder till Serviceenheten',
													'Secondary_Parent' => 'Sekundär förälder till Serviceenheten',
													'no_primary_owner' => 'Ingen primär Förälder till Serviceenheten',
													'no_secondary_owner' => 'Ingen sekundär Förälder till Serviceenheten',
													'delete_sb_confirm' => 'Är du säker på att du vill ta bort denna Serviceenhet?',
													'deleted_sb' => 'Serviceenheten är nu raderat',
													'select_sb' => 'Välj typ av Serviceenhet',
													'delete_sb_name' => 'Ta bort Serviceenheten',
													'change_sb_name' => 'Ändra Serviceenheten',
													'New_Name' => 'Skapa ett nytt Serviceenhet',
													'sb_admin' => 'Serviceenhet administratör',
													'sb_type' => 'Serviceenhetstyp',
													'sb_editors' => 'Editors',
													'sb_uri' => 'URI',
													'sb_kml_uri' => 'KML fil URI',
													'sb_ContactEmail' => 'Mötets kontakt Epostadress',
													'not_allowed_reassign' => 'Du har inte behörighet att tilldela dessa möten.'
												),
											'Edit_Users' =>
												array (	'Edit_Users' => 'Ändra användare',
														'Edit_My_Info' => 'Ändra mitt konto',
														'Change_My_Info' => 'Ändra mitt konto',
														'user_login_string' => 'ID',
														'user_password_string' => 'Ange nytt lösenord',
														'user_password_string_warning' => 'OBS: Detta kommer att ersätta nuvarande lösenord. Lämna tomt om du inte vill byta lösenord.',
														'user_name_string' => 'Namn',
														'new_user_name' => 'Create Ny användare',
														'user_description_string' => 'Beskrivning',
														'user_email_string' => 'Epost',
														'user_level_string' => 'användarnivå',
														'Language' => 'Språk',
														'delete_user_confirm' => 'Är du säker på att du vill ta bort denna användare?',
														'delete_user_name' => 'Ta bort användare',
														'change_user_name' => 'Ändra användare',
														'New_Name' => 'Skapa en ny användare',
														_USER_LEVEL_SERVER_ADMIN => 'Server Administrator',
														_USER_LEVEL_SERVICE_BODY_ADMIN => 'Serviceenhets Administrator',
														_USER_LEVEL_EDITOR => 'Administratör möteslistan',
														_USER_LEVEL_DISABLED => 'inaktiverad',
														_USER_LEVEL_OBSERVER => 'Observatör',
														'del_message' => 'Användaren ##USER## blev borttagen.',
														'dup_login' => 'Detta inloggnings-ID används redan. Välj en annan.',
														'auth_failure' => 'Du har inte behörighet att redigera den här användaren.',
														'user_id' => 'Användar ID',
														'object_not_found' => 'FEL: Användaren hittades inte.',
														'object_not_changed' => 'FEL: Ändringen sparades inte.',
														'pw_too_short' => 'Lösenordet är för kort. Minst ##MIN_PW_LEN## tecken.',
														'server_not_instantiated' => 'FEL: Servern genererade ett fel. Så pass illa att det inte gick att skapa ett grundläggande server objekt.'
													),
											'Admin_Bar' =>
												array (	'logged_in' => 'Du är inloggad som ',
														'login_name' => ', och ditt ID är ',
														'edit_link' => 'Redigerings funktioner',
														'meeting_search' => 'Sök möten',
														'logout' => 'Logga ut',
														'login' => 'Logga in'
													),
											'Admin_Spec' =>
												array (	'admin_fieldset_name' => 'Administrativa val',
														'admin_select_published_label' => 'Sök efter',
														'admin_select_published_option_unpub' => 'Endast opublicerade möten',
														'admin_select_published_option_anypub' => 'opublicerade eller publicerade möten',
														'admin_select_published_option_pub' => 'Bara publicerade möten'
													),
											'Admin_Reports' =>
												array (	'reports_div_title' => 'Administrativ logg',
														'meeting_reports_div_title' => 'Ändringar i möten',
														'deleted_meeting_reports_div_title' => 'Borttagna möten',
														'changed_meeting_reports_div_title' => 'Ändrade möten',
														'new_meeting_reports_div_title' => 'Nya möten'
													)
										);
?>