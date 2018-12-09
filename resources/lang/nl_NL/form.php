<?php

/**
 * form.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Banknaam',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Saldo van spaarrekening',
    'credit_card_limit'           => 'Credit card limiet',
    'automatch'                   => 'Automatisch herkennen',
    'skip'                        => 'Overslaan',
    'enabled'                     => 'Ingeschakeld',
    'name'                        => 'Naam',
    'active'                      => 'Actief',
    'amount_min'                  => 'Minimumbedrag',
    'amount_max'                  => 'Maximumbedrag',
    'match'                       => 'Reageert op',
    'strict'                      => 'Strikte modus',
    'repeat_freq'                 => 'Herhaling',
    'journal_currency_id'         => 'Valuta',
    'currency_id'                 => 'Valuta',
    'transaction_currency_id'     => 'Valuta',
    'external_ip'                 => 'Het externe IP-adres van je server',
    'attachments'                 => 'Bijlagen',
    'journal_amount'              => 'Bedrag',
    'journal_source_name'         => 'Debiteur (bron)',
    'keep_bill_id'                => 'Contract',
    'journal_source_id'           => 'Betaalrekening (bron)',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Bevestig wachtwoordsterkte',
    'source_account'              => 'Bronrekening',
    'destination_account'         => 'Doelrekening',
    'journal_destination_id'      => 'Betaalrekening (doel)',
    'asset_destination_account'   => 'Doelrekening',
    'include_net_worth'           => 'Meetellen in kapitaal',
    'asset_source_account'        => 'Bronrekening',
    'journal_description'         => 'Omschrijving',
    'note'                        => 'Notities',
    'split_journal'               => 'Splits deze transactie',
    'split_journal_explanation'   => 'Splits deze transactie in meerdere stukken',
    'currency'                    => 'Valuta',
    'account_id'                  => 'Betaalrekening',
    'budget_id'                   => 'Budget',
    'openingBalance'              => 'Startsaldo',
    'tagMode'                     => 'Tag modus',
    'tag_position'                => 'Taglocatie',
    'virtualBalance'              => 'Virtuele saldo',
    'targetamount'                => 'Doelbedrag',
    'accountRole'                 => 'Rol van rekening',
    'openingBalanceDate'          => 'Startsaldodatum',
    'ccType'                      => 'Betaalplan',
    'ccMonthlyPaymentDate'        => 'Betaaldatum',
    'piggy_bank_id'               => 'Spaarpotje',
    'returnHere'                  => 'Keer terug',
    'returnHereExplanation'       => 'Terug naar deze pagina na het opslaan.',
    'returnHereUpdateExplanation' => 'Terug naar deze pagina na het wijzigen.',
    'description'                 => 'Omschrijving',
    'expense_account'             => 'Crediteur',
    'revenue_account'             => 'Debiteur',
    'decimal_places'              => 'Aantal decimalen',
    'exchange_rate_instruction'   => 'Vreemde valuta',
    'source_amount'               => 'Bronbedrag',
    'destination_amount'          => 'Doelbedrag',
    'native_amount'               => 'Origineel bedrag',
    'new_email_address'           => 'Nieuw emailadres',
    'verification'                => 'Verificatie',
    'api_key'                     => 'API sleutel',
    'remember_me'                 => 'Aangemeld blijven',
    'liability_type_id'           => 'Passivasoort',
    'interest'                    => 'Rente',
    'interest_period'             => 'Renteperiode',

    'source_account_asset'        => 'Bronrekening (betaalrekening)',
    'destination_account_expense' => 'Doelrekening (crediteur)',
    'destination_account_asset'   => 'Doelrekening (betaalrekening)',
    'source_account_revenue'      => 'Bronrekening (debiteur)',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Verander uitgave',
    'convert_Deposit'             => 'Verander inkomsten',
    'convert_Transfer'            => 'Verander overschrijving',

    'amount'                      => 'Bedrag',
    'foreign_amount'              => 'Bedrag in vreemde valuta',
    'existing_attachments'        => 'Bestaande bijlagen',
    'date'                        => 'Datum',
    'interest_date'               => 'Rentedatum',
    'book_date'                   => 'Boekdatum',
    'process_date'                => 'Verwerkingsdatum',
    'category'                    => 'Categorie',
    'tags'                        => 'Tags',
    'deletePermanently'           => 'Verwijderen',
    'cancel'                      => 'Annuleren',
    'targetdate'                  => 'Doeldatum',
    'startdate'                   => 'Startdatum',
    'tag'                         => 'Tag',
    'under'                       => 'Onder',
    'symbol'                      => 'Symbool',
    'code'                        => 'Code',
    'iban'                        => 'IBAN',
    'accountNumber'               => 'Rekeningnummer',
    'creditCardNumber'            => 'Creditcardnummer',
    'has_headers'                 => 'Kolomnamen op de eerste rij?',
    'date_format'                 => 'Datumformaat',
    'specifix'                    => 'Bank- or of bestandsspecifieke opties',
    'attachments[]'               => 'Bijlagen',
    'store_new_withdrawal'        => 'Nieuwe uitgave opslaan',
    'store_new_deposit'           => 'Nieuwe inkomsten opslaan',
    'store_new_transfer'          => 'Nieuwe overschrijving opslaan',
    'add_new_withdrawal'          => 'Maak nieuwe uitgave',
    'add_new_deposit'             => 'Maak nieuwe inkomsten',
    'add_new_transfer'            => 'Maak nieuwe overschrijving',
    'title'                       => 'Titel',
    'notes'                       => 'Notities',
    'filename'                    => 'Bestandsnaam',
    'mime'                        => 'Bestandstype',
    'size'                        => 'Grootte',
    'trigger'                     => 'Trigger',
    'stop_processing'             => 'Stop met verwerken',
    'start_date'                  => 'Start van bereik',
    'end_date'                    => 'Einde van bereik',
    'export_start_range'          => 'Start van exportbereik',
    'export_end_range'            => 'Einde van exportbereik',
    'export_format'               => 'Bestandsformaat',
    'include_attachments'         => 'Sla ook geüploade bijlagen op',
    'include_old_uploads'         => 'Sla ook geïmporteerde bestanden op',
    'accounts'                    => 'Exporteer boekingen van deze rekeningen',
    'delete_account'              => 'Verwijder rekening ":name"',
    'delete_bill'                 => 'Verwijder contract ":name"',
    'delete_budget'               => 'Verwijder budget ":name"',
    'delete_category'             => 'Verwijder categorie ":name"',
    'delete_currency'             => 'Verwijder valuta ":name"',
    'delete_journal'              => 'Verwijder transactie met omschrijving ":description"',
    'delete_attachment'           => 'Verwijder bijlage ":name"',
    'delete_rule'                 => 'Verwijder regel ":title"',
    'delete_rule_group'           => 'Verwijder regelgroep ":title"',
    'delete_link_type'            => 'Verwijder linktype ":name"',
    'delete_user'                 => 'Verwijder gebruiker ":email"',
    'delete_recurring'            => 'Periodieke transactie ":title" verwijderen',
    'user_areYouSure'             => 'Als je gebruiker ":email" verwijdert is alles weg. Je kan dit niet ongedaan maken of ont-verwijderen of wat dan ook. Als je jezelf verwijdert ben je ook je toegang tot deze installatie van Firefly III kwijt.',
    'attachment_areYouSure'       => 'Weet je zeker dat je de bijlage met naam ":name" wilt verwijderen?',
    'account_areYouSure'          => 'Weet je zeker dat je de rekening met naam ":name" wilt verwijderen?',
    'bill_areYouSure'             => 'Weet je zeker dat je het contract met naam ":name" wilt verwijderen?',
    'rule_areYouSure'             => 'Weet je zeker dat je regel ":title" wilt verwijderen?',
    'ruleGroup_areYouSure'        => 'Weet je zeker dat je regelgroep ":title" wilt verwijderen?',
    'budget_areYouSure'           => 'Weet je zeker dat je het budget met naam ":name" wilt verwijderen?',
    'category_areYouSure'         => 'Weet je zeker dat je het category met naam ":name" wilt verwijderen?',
    'recurring_areYouSure'        => 'Weet je zeker dat je periodieke transactie ":title" wilt verwijderen?',
    'currency_areYouSure'         => 'Weet je zeker dat je de valuta met naam ":name" wilt verwijderen?',
    'piggyBank_areYouSure'        => 'Weet je zeker dat je het spaarpotje met naam ":name" wilt verwijderen?',
    'journal_areYouSure'          => 'Weet je zeker dat je de transactie met naam ":description" wilt verwijderen?',
    'mass_journal_are_you_sure'   => 'Weet je zeker dat je al deze transacties wilt verwijderen?',
    'tag_areYouSure'              => 'Weet je zeker dat je de tag met naam ":tag" wilt verwijderen?',
    'journal_link_areYouSure'     => 'Weet je zeker dat je de koppeling tussen <a href=":source_link">:source</a> en <a href=":destination_link">:destination</a> wilt verwijderen?',
    'linkType_areYouSure'         => 'Weet je zeker dat je linktype ":name" (":inward" / ":outward") wilt verwijderen?',
    'permDeleteWarning'           => 'Dingen verwijderen uit Firefly III is permanent en kan niet ongedaan gemaakt worden.',
    'mass_make_selection'         => 'Je kan items alsnog redden van de ondergang door het vinkje weg te halen.',
    'delete_all_permanently'      => 'Verwijder geselecteerde items permanent',
    'update_all_journals'         => 'Wijzig deze transacties',
    'also_delete_transactions'    => 'Ook de enige transactie verbonden aan deze rekening wordt verwijderd.|Ook alle :count transacties verbonden aan deze rekening worden verwijderd.',
    'also_delete_connections'     => 'De enige transactie gelinkt met dit linktype zal deze verbinding verliezen. | Alle :count transacties met dit linktype zullen deze verbinding verliezen.',
    'also_delete_rules'           => 'De enige regel in deze regelgroep wordt ook verwijderd.|Alle :count regels in deze regelgroep worden ook verwijderd.',
    'also_delete_piggyBanks'      => 'Ook het spaarpotje verbonden aan deze rekening wordt verwijderd.|Ook alle :count spaarpotjes verbonden aan deze rekening worden verwijderd.',
    'bill_keep_transactions'      => 'De enige transactie verbonden aan dit contract blijft bewaard.|De :count transacties verbonden aan dit contract blijven bewaard.',
    'budget_keep_transactions'    => 'De enige transactie verbonden aan dit budget blijft bewaard.|De :count transacties verbonden aan dit budget blijven bewaard.',
    'category_keep_transactions'  => 'De enige transactie verbonden aan deze categorie blijft bewaard.|De :count transacties verbonden aan deze categorie blijven bewaard.',
    'recurring_keep_transactions' => 'De enige transactie verbonden aan deze periode transactie blijft bewaard.|De :count transacties verbonden aan deze periode transactie blijven bewaard.',
    'tag_keep_transactions'       => 'De enige transactie verbonden aan deze tag blijft bewaard.|De :count transacties verbonden aan deze tag blijven bewaard.',
    'check_for_updates'           => 'Op updates controleren',

    'email'                 => 'E-mailadres',
    'password'              => 'Wachtwoord',
    'password_confirmation' => 'Wachtwoord (nogmaals)',
    'blocked'               => 'Is geblokkeerd?',
    'blocked_code'          => 'Reden voor blokkade',
    'login_name'            => 'Login',

    // import
    'apply_rules'           => 'Regels toepassen',
    'artist'                => 'Artiest',
    'album'                 => 'Album',
    'song'                  => 'Nummer',


    // admin
    'domain'                => 'Domein',
    'single_user_mode'      => 'Registratie uitgeschakelen',
    'is_demo_site'          => 'Is demo website',

    // import
    'import_file'           => 'Importbestand',
    'configuration_file'    => 'Configuratiebestand',
    'import_file_type'      => 'Importbestandstype',
    'csv_comma'             => 'Een komma (,)',
    'csv_semicolon'         => 'Een puntkomma (;)',
    'csv_tab'               => 'Een tab (onzichtbaar)',
    'csv_delimiter'         => 'CSV scheidingsteken',
    'csv_import_account'    => 'Standaard rekening voor importeren',
    'csv_config'            => 'Configuratiebestand',
    'client_id'             => 'Client ID',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'App ID',
    'secret'                => 'Secret',
    'public_key'            => 'Publieke sleutel',
    'country_code'          => 'Landcode',
    'provider_code'         => 'Bank of gegevensprovider',
    'fints_url'             => 'FinTS API URL',
    'fints_port'            => 'Poort',
    'fints_bank_code'       => 'Bankcode',
    'fints_username'        => 'Gebruikersnaam',
    'fints_password'        => 'Pincode / wachtwoord',
    'fints_account'         => 'FinTS-rekening',
    'local_account'         => 'Firefly III rekening',
    'from_date'             => 'Datum van',
    'to_date'               => 'Datum tot',


    'due_date'                => 'Vervaldatum',
    'payment_date'            => 'Betalingsdatum',
    'invoice_date'            => 'Factuurdatum',
    'internal_reference'      => 'Interne verwijzing',
    'inward'                  => 'Binnenwaartse beschrijving',
    'outward'                 => 'Buitenwaartse beschrijving',
    'rule_group_id'           => 'Regelgroep',
    'transaction_description' => 'Transactiebeschrijving',
    'first_date'              => 'Eerste datum',
    'transaction_type'        => 'Transactietype',
    'repeat_until'            => 'Herhalen tot',
    'recurring_description'   => 'Beschrijving van de periodieke transactie',
    'repetition_type'         => 'Type herhaling',
    'foreign_currency_id'     => 'Vreemde valuta',
    'repetition_end'          => 'Stopt met herhalen',
    'repetitions'             => 'Herhalingen',
    'calendar'                => 'Kalender',
    'weekend'                 => 'Weekend',
    'client_secret'           => 'Client secret',

];
