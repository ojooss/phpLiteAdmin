<?php
// Polish translation by Maciek Dmytrow (https://www.facebook.com/maciek.dmytrow)
// Last modified 31 January 2020 by Piotr Lenart (https://piotrlenart.pl)
// Version 1.9.8
// Read our wiki on how to translate: https://bitbucket.org/phpliteadmin/public/wiki/Localization
$lang = [
    "direction" => "LTR",
    "date_format" => 'G:i\, j-m-Y (T)',
    // see http://php.net/manual/en/function.date.php for what the letters stand for
    "ver" => "wersja",
    "for" => "dla",
    "to" => "na",
    "go" => "Wykonaj",
    "yes" => "Tak",
    "no" => "Nie",
    "sql" => "SQL",
    "csv" => "CSV",
    "csv_tbl" => "Tabela, do której odnosi się CSV",
    "srch" => "Szukaj",
    "srch_again" => "Szukaj ponownie",
    "login" => "Zaloguj",
    "logout" => "Wyloguj",
    "view" => "Widok",
    "confirm" => "Potwierdź",
    "cancel" => "Anuluj",
    "save_as" => "Zapisz jako",
    "options" => "Ustawienia",
    "no_opt" => "Brak ustawień",
    "help" => "Pomoc",
    "installed" => "zainstalowano",
    "not_installed" => "nie zainstalowano",
    "done" => "wykonano",
    "insert" => "Wstaw",
    "export" => "Eksport",
    "import" => "Import",
    "rename" => "Zmień nazwę",
    "empty" => "Opróżnij",
    "drop" => "Usuń",
    "tbl" => "Tabela",
    "chart" => "Wykres",
    "err" => "BŁĄD",
    "act" => "Czynności",
    "rec" => "Rekordy",
    "col" => "Kolumna",
    "cols" => "Kolumny",
    "rows" => "wiersz.",
    "edit" => "Edytuj",
    "del" => "Usuń",
    "add" => "Dodaj",
    "backup" => "Kopia zapasowa bazy danych do pliku",
    "before" => "Przed",
    "after" => "Po",
    "passwd" => "Hasło",
    "passwd_incorrect" => "Nieprawidłowe hasło.",
    "chk_ext" => "Sprawdzanie rozszerzeń PHP obsługujących SQLite",
    "autoincrement" => "Autoinkrementacja",
    "not_null" => "Not NULL",
    "attention" => "Uwaga",
    "none" => "Brak",
    "as_defined" => "Definiowana jako",
    "expression" => "Wyrażenie",
    "download" => "Pobierz",
    "open_in_browser" => "Otwórz w przeglądarce",
    "sqlite_ext" => "SQLite interfejs",
    "sqlite_ext_support" => "Wygląda na to, że żadne z rozszerzeń PHP, obsługujących SQLite, nie jest dostępne w twojej instalacji PHP. Nie można korzystać z %s dopóki przynajmniej jedeno z nich nie będzie dostępne.",
    "sqlite_v" => "SQLite wersja",
    "sqlite_v_error" => "Wygląda na to, że twoja baza danych została stworzona w SQLite wersja %s, ale w twojej instalacji PHP nie ma wymaganych rozszerzeń, które mogłyby ją obsłużyć. Aby rozwiązać problem, usuń bazę danych i pozwól %s utworzyć ją automatycznie albo utwórz ją ponownie samodzielnie jako bazę SQLite wersja %s.",
    "report_issue" => "Prawidłowe zdiagnozowanie problemu było niemożliwe. Proszę przekazać raport o problemie do",
    "sqlite_limit" => "Z powodu ograniczeń SQLite, można zmienić wyłącznie nazwę nagłówka oraz typ danych.",
    "php_v" => "PHP wersja",
    "new_version" => "Nowa wersja jest dostępna!",
    "db_dump" => "zrzut bazy danych",
    "db_f" => "plik bazy danych",
    "db_ch" => "Baza danych",
    "db_event" => "Zdarzenie w bazie danych",
    "db_name" => "Nazwa bazy danych",
    "db_rename" => "Zmień nazwę bazy danych",
    "db_renamed" => "Nazwa bazy danych '%s' została zmieniona na",
    "db_del" => "Usuń bazę danych",
    "db_path" => "Ścieżka do bazy danych",
    "db_size" => "Rozmiar bazdy danych",
    "db_mod" => "Ostatnia zmiana bazy danych",
    "db_create" => "Utwórz bazę danych",
    "db_vac" => "Baza danych '%s' została oczyszczona.",
    "db_not_writeable" => "Baza danych '%s' nie istnieje i nie może zostać utworzona w katalogu '%s' ze względu na brak praw do zapisu. Aplikacja pozostanie bezużyteczna dopóki to się nie zmieni.",
    "db_setup" => "Wystąpił problem podczas tworzenia bazy danych %s. Odpowiednie działania zostaną podjęte, aby ustalić przyczynę problemu i ułatwić jego rozwiązanie.",
    "db_exists" => "Baza danych, inny plik lub katalog o nazwie '%s' już istnieje.",
    "db_blank" => "Nazwa bazy danych nie może być pusta.",
    "exported" => "Eksportowano",
    "struct" => "Struktura",
    "struct_for" => "struktura dla",
    "on_tbl" => "w tabeli",
    "data_dump" => "Zrzut danych dla",
    "backup_hint" => "Wskazówka: Najprostszym sposobem wykonania kopii zapasowej bazy danych jest %s.",
    "backup_hint_linktext" => "pobranie pliku bazy danych",
    "total_rows" => "w sumie %s wierszy",
    "total" => "w sumie",
    "not_dir" => "Wskazana przez ciebie sciezka do wyszukania baz danych nie istnieje lub nie jest katalogiem.",
    "bad_php_directive" => "Wygląda na to, że dyrektywa PHP 'register_globals' jest włączona. To źle. Musisz ją wyłączyć zanim będzie można kontynuować.",
    "page_gen" => "Strona wygenerowana w ciągu %s sek.",
    "powered" => "Napędzane przez",
    "free_software" => "To oprogramowanie jest darmowe.",
    "please_donate" => "Prośba o dotację.",
    "remember" => "Zapamiętaj mnie",
    "no_db" => "Witaj w %s. Wygląda na to, że wskazany został katalog do przeszukania. Jednak %s nie odnalazł w nim żadnych prawidłowych baz danych SQLite. Możesz wykorzystać poniższy formularz, aby utworzyć nową bazę danych.",
    "no_db2" => "We wskazanym katalogu nie odnalaziono żadnych istniejących baz danych do zarządzania, katalog zaś nie posiada praw do zapisu. Oznacza to, że nie możesz utworzyć żadnej nowej bazy danych za pomocą %s. Musisz nadać katalogowi prawa do zapisu lub samodzielnie umieścić w nim bazy danych.",
    "dir_not_executable" => "Podany katalog nie może być przeglądany w poszukiwaniu baz danych, gdyż %s ma brak pozwolenia na wykonanie operacji. W systemie Linux ustaw 'chmod +x %s', aby to zmienić.",
    "create" => "Utwórz",
    "created" => "utworzono",
    "create_tbl" => "Utwórz nową tabelę",
    "create_tbl_db" => "Utwórz nową tabelę w bazie danych",
    "create_trigger" => "Tworzenie nowego wyzwalacza w tabeli",
    "create_index" => "Tworzenie nowego indeksu w tabeli",
    "create_index1" => "Utwórz indeks",
    "create_view" => "Utwórz nowy widok w bazie danych",
    "trigger" => "Wyzwalacz",
    "triggers" => "Wyzwalacze",
    "trigger_name" => "Nazwa wyzwalacza",
    "trigger_act" => "Działanie wyzwalacza",
    "trigger_step" => "Kroki wyzwalacza (rozdzielone średnikami)",
    "when_exp" => "wyrażenie WHEN (podaj sam warunek bez 'WHEN')",
    "index" => "Indeks",
    "indexes" => "Indeksy",
    "index_name" => "Nazwa indeksu",
    "name" => "Nazwa",
    "unique" => "Unikalny",
    "seq_no" => "Seq. No.",
    "emptied" => "opróżniono",
    "dropped" => "usunięto",
    "renamed" => "przemianowano na",
    "altered" => "zmieniono z powodzeniem",
    "inserted" => "wstawiono",
    "deleted" => "usunięto",
    "affected" => "zmieniono",
    "blank_index" => "Nazwa indeksu nie może być pusta.",
    "one_index" => "Musisz wskazać przynajmniej jedną kolumnę indeksowaną.",
    "docu" => "Dokumentacja",
    "license" => "Licencja",
    "proj_site" => "Strona projektu",
    "bug_report" => "To może być błąd, który należy zgłosić na",
    "return" => "Powrót",
    "browse" => "Przeglądaj",
    "fld" => "Nagłówek",
    "fld_num" => "Liczba nagłówków",
    "fields" => "Nagłówki",
    "type" => "Typ",
    "operator" => "Operator",
    "val" => "Wartość",
    "update" => "Aktualizuj",
    "comments" => "Komentarze",
    "specify_fields" => "Musiz podać liczbę nagłówków tabeli.",
    "specify_tbl" => "Musisz podać nazwę tabeli.",
    "specify_col" => "Musisz podać kolumnę.",
    "tbl_exists" => "Tabela o takiej nazwie już istnieje.",
    "show" => "Pokaż",
    "show_rows" => "Wyświetlanie %s wierszy. ",
    "showing" => "Wyświetlanie",
    "showing_rows" => "Wyświetlanie wierszy",
    "query_time" => "(kwerenda zajęła %s sek.)",
    "syntax_err" => "Wystąpił problem ze składnią twojej kwerendy (kwerenda nie została wykonana)",
    "run_sql" => "Wykonaj kwerendę/kwerendy do bazy danych '%s'",
    "recent_queries" => "Ostatnie kwerendy",
    "full_texts" => "Pokaż długi tekst",
    "no_full_texts" => "Skróć długi tekst",
    "ques_empty" => "Czy na pewno chcesz opróżnić tabelę '%s'? Utracisz zawarte w niej dane.",
    "ques_drop" => "Czy na pewno chcesz usunąć tabelę '%s'? Utracisz zawarte w niej dane.",
    "ques_drop_view" => "Czy na pewno chcesz usunąć widok '%s'?",
    "ques_del_rows" => "Czy na pewno chcesz usunąć wiersze %s z tabeli '%s'?",
    "ques_del_db" => "Czy na pewno chcesz usunąć bazę danych '%s'? Utracisz zawarte w niej dane.",
    "ques_column_delete" => "Czy na pewno chcesz usunąć kolumny %s z tabeli '%s'?",
    "ques_del_index" => "Czy na pewno chcesz usunąć indeks '%s'?",
    "ques_del_trigger" => "Czy na pewno chcesz usunąć wyzwalacz '%s'?",
    "ques_primarykey_add" => "Czy na pewno chcesz dodać klucz główny do kolumn %s w tabeli '%s'?",
    "export_struct" => "Eksport ze strukturą",
    "export_data" => "Eksport z danymi",
    "add_drop" => "Dodaj DROP TABLE",
    "add_transact" => "Dodaj TRANSACTION",
    "fld_terminated" => "Separator nazw nagłówków",
    "fld_enclosed" => "Nazwy nagłówków zawarte w",
    "fld_escaped" => "Znak ucieczki w nagłówkach",
    "fld_names" => "Nazwy nagłówków w pierwszym wierszu",
    "rep_null" => "Zastąp NULL przez",
    "rem_crlf" => "Usuń znaki CRLF z nagłówków",
    "put_fld" => "Umieść nazwy nagłówków w pierwszym wierszu",
    "null_represent" => "NULL reprezentowany przez",
    "import_suc" => "Import zakończony powodzeniem.",
    "import_into" => "Import do",
    "import_f" => "Plik do importowania",
    "rename_tbl" => "Zmień nazwę tabeli '%s' na",
    "max_file_size" => "Maksymalny rozmiar pliku",
    "rows_records" => "wierszy zaczynając od rekordu # ",
    "rows_aff" => "wierszy uwzględnionych.",
    "as_a" => "jako",
    "readonly_tbl" => "'%s' jest widokiem, co oznacza, że jest on wynikiem kwerendy SELECT i jest traktowany jako tabela tylko do odczytu. Nie możesz edytować ani dodawać rekordów.",
    "chk_all" => "Zaznacz wszystko",
    "unchk_all" => "Odznacz wszystko",
    "with_sel" => "Zaznaczone",
    "no_tbl" => "Brak tabel w bazie danych.",
    "no_chart" => "Jeśli to widzisz, to znaczy, że nie udało się wygenerować wykresu. Dane, które próbujesz wyświetlić mogą być nieodpowiednie do przygotowania wykresu.",
    "no_rows" => "We wskazanym zakresie nie ma w tabeli żadnych wierszy.",
    "no_sel" => "Nic nie zostało zaznaczone.",
    "chart_type" => "Typ wykresu",
    "chart_bar" => "Wykres słupkowy",
    "chart_pie" => "Wykres kołowy",
    "chart_line" => "Wykres liniowy",
    "lbl" => "Etykiety",
    "empty_tbl" => "Ta tabela jest pusta.",
    "click" => "Kliknij tutaj",
    "insert_rows" => "aby wstawić wiersze.",
    "restart_insert" => "Zacznij wstawianie w",
    "ignore" => "Ignoruj",
    "func" => "Funkcja",
    "new_insert" => "Wstaw jako nowy wiersz",
    "save_ch" => "Zapisz zmiany",
    "def_val" => "Domyślna wartość",
    "prim_key" => "Klucz główny",
    "tbl_end" => "nagłówki do końca tabeli",
    "query_used_table" => "Kwerenda użyta do utworzenia tej tabeli",
    "query_used_view" => "Kwerenda użyta do utworzenia tego widoku",
    "create_index2" => "Utwórz indeks w",
    "create_trigger2" => "Utwórz nowy wyzwalacz",
    "new_fld" => "Dodawanie nowych nagłówków do tabeli '%s'",
    "add_flds" => "Dodaj nagłówki",
    "edit_col" => "Edycja kolumny '%s'",
    "vac" => "Oczyść",
    "vac_desc" => "Duże bazy danych wymagają czasami oczyszczenia, aby mniej obciążały serwer. Kliknij przycisk poniżej, aby oczyścić bazę danych '%s'.",
    "vac_on_empty"=>"Odśwież plik bazy danych, aby odzyskać nieużywane miejsce (Vacuum)",
    "event" => "Zdarzenie",
    "each_row" => "Dla każdego wiersza",
    "define_index" => "Definiuj właściwości indeksu",
    "dup_val" => "Duplikuj wartości",
    "allow" => "Dozwolone",
    "not_allow" => "Niedozwolone",
    "asc" => "Rosnąco",
    "desc" => "Malejąco",
    "warn0" => "Pamiętaj, że ostrzegaliśmy.",
    "warn_passwd" => "Korzystasz z domyślnego hasła, co naraża bazy danych na poważne niebezpieczeństwo. Hasło możesz łatwo zmienić edytując %s.",
    "counting_skipped" => "Zliczanie rekordów zostało pominięte ponieważ twoja baza danych jest duża, a niektóre zawarte w niej tabele nie posiadają kluczy głównych. Zliczanie rekordów mogłoby trwać bardzo długo. Dodaj klucze główne do tych tabel lub %swymuś zliczanie%s.",
    "sel_state" => "Kwerenda",
    "delimit" => "Separator",
    "back_top" => "&uarr; Powrót do góry",
    "choose_f" => "Wybierz plik",
    "instead" => "Zamiast",
    "define_in_col" => "Zdefiniuj kolumny indeksowane",
    "delete_only_managed" => "You can only delete databases managed by this tool!",
    "rename_only_managed" => "You can only rename databases managed by this tool!",
    "db_moved_outside" => "You either tried to move the database into a directory where it cannot be managed anylonger, or the check if you did this failed because of missing rights.",
    "extension_not_allowed" => "The extension you provided is not within the list of allowed extensions. Please use one of the following extensions",
    "add_allowed_extension" => "You can add extensions to this list by adding your extension to \$allowed_extensions in the configuration.",
    "database_not_writable" => "Plik bazy danych jest zabezpieczony przed zapisem, dlatego jego zawartość w żaden sposób nie może być zmieniona.",
    "directory_not_writable" => "The database-file itself is writable, but to write into it, the containing directory needs to be writable as well. This is because SQLite puts temporary files in there for locking.",
    "tbl_inexistent" => "Tabela %s nie istnieje",
    "col_inexistent" => "Kolumna %s nie istnieje",
    // errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
    "alter_failed" => "Wprowadzanie zmian w tabeli %s nie powiodło się",
    "alter_tbl_name_not_replacable" => "nie udało się zastąpić nazwy tabeli przez nazwę tymczasową",
    "alter_no_def" => "brak definicji ALTER",
    "alter_parse_failed" =>"przetwarzanie definicji ALTER nie powiodło się",
    "alter_action_not_recognized" => "czynność ALTER nie została rozpoznana",
    "alter_no_add_col" => "wykryto brak kolumny do dodania w wyrażeniu ALTER",
    "alter_pattern_mismatch"=>"Wzór nie pasował do twojego oryginalnego wyrażenia CREATE TABLE",
    "alter_col_not_recognized" => "rozpoznanie nowej lub starej nazwy nie powiodło się",
    "alter_unknown_operation" => "Nieznana operacja ALTER!",
    /* Help documentation */
    "help_doc" => "– pomoc",
    "help1" => "Rozszerzenia obsługujące SQLite",
    "help1_x" => "%s wykorzystuje rozszerzenia PHP, które pozwalają na komunikację z bazami danych SQLite. Obecnie %s obsługuje PDO, SQLite3 i SQLiteDatabase. Zarówno PDO, jak też SQLite3 dotyczą wersji 3 SQLite, natomiast  SQLiteDatabase dotyczy wersji 2. Jeśli twoja instalacja PHP zawiera więcej niż jedno rozszerzenie do obsługi SQLite, do komunikacji wykorzystane zostaną w pierwszej kolejności PDO i SQLite3, aby wykorzystać najlepszą technologię. Jeśli jednak posiadasz istniejące bazy danych SQLite w wersji 2, %s wykorzysta SQLiteDatabase do obsługi wyłącznie tych baz danych. Nie wszystkie bazy danych muszą być w tej samej wersji. Jednak podczas tworzenia nowej bazy danych wykorzystane zostanie najbardziej zaawansowane rozszerzenie.",
    "help2" => "Tworzenie nowej bazy danych",
    "help2_x" => "Podczas tworzenia nowej bazy danych, do jej nazwy dołączone zostanie odpowiednie rozszerzenie pliku (.db, .db3, .sqlite, etc.) jeśli nie zrobi tego użytkownik. Baza danych zostanie utworzona w katalogu, który został wskazany w zmiennej \$directory.",
    "help3" => "Tabele i widoki",
    "help3_x" => "Na głównej stronie bazy danych znajduje się lista tabeli i widoków. Ponieważ widoki są tylko do odczytu, niektóre czynności będą dla nich niedostępne. Aby zmienić dane dla widoku, konieczne jest usunięcie widoku oraz jego ponowne utworzenie i zdefiniowanie odpowiedniej kwerendy SELECT do istniejących tabel. Więcej informacji na ten temat można uzyskać na stronie <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
    "help4" => "Tworzenie kwerendy SELECT dla nowego widoku",
    "help4_x" => "Utworzenie nowego widoku wymaga stworzenia wyrażenia SQL SELECT. Krótko mówiąc, widok to tabela tylko do odczytu, do którego można uzyskać dostęp i wysyłać kwerendy jak do zwykłej tabeli z tą różnicą, że nie może być ona zmieniona przez wstawienie, edycję kolumn lub wierszy. Widok jest używany tylko do wygodnego uzyskiwania wybranych danych.",
    "help5" => "Eksport struktury do pliku SQL",
    "help5_x" => "Istnieje możliwość, aby podczas eksportu do pliku SQL, załączone zostały do niego również kwerendy, których zadaniem jest odtworzenie struktury tabel wraz z nagłówkami podczas importu.",
    "help6" => "Eksport danych do pliku SQL",
    "help6_x" => "Istnieje możliwość, aby podczas eksportu do pliku SQL, załączone zostały do niego również kwerendy, których zadaniem jest zasilenie tabel rekordami podczas importu.",
    "help7" => "Dodawanie DROP TABLE do wyeksportowanego pliku SQL",
    "help7_x" => "Istnieje możliwość, aby podczas eksportu do pliku SQL, załączone zostały do niego również kwerendy, których zadaniem jest usunięcie istniejących tabel przed importem, co pozwala uniknąć problemów przy próbie utworzenia podczas importu tabel, które już istnieją.",
    "help8" => "Dodawanie TRANSACTION do wyeksportowanego pliku SQL",
    "help8_x" => "Istnieje możliwość, aby podczas eksportu do pliku SQL wstawione zostały do niego znaczniki TRANSACTION. Dzięki nim import odbywać się będzie w trybie transakcji. Jeśli w którymkolwiek momencie importu pliku SQL wystąpi błąd, będzie możliwość cofnięcia zmian w bazie danych i zapobiegnięcia częściowego zasilenia bazy danych nowymi danymi.",
    "help9" => "Dodawanie komentarzy do wyeksportowanego pliku SQL",
    "help9_x" => "Istnieje możliwość, aby podczas eksportu do pliku SQL, załączone zostały do niego również komentarze objaśniające poszczególne etapy procesu importu pliku SQL.",
    "help10" => "Partial Indexes",
    "help10_x" => "Partial indexes are indexes over a subset of the rows of a table specified by a WHERE clause. Note this requires at least SQLite 3.8.0 and database files with partial indexes won't be readable or writable by older versions. Zobacz <a href='https://www.sqlite.org/partialindex.html' target='_blank'>SQLite documentation.</a>",
    "help11" => "Maksymalny rozmiar przesyłanego pliku",
    "help11_x" => "Maksymalny rozmiar przesyłanego pliku jest określony przez trzy ustawienia PHP: <em>upload_max_filesize</em>, <em>post_max_size</em> oraz <em>memory_limit</em>. Najmniejszy z nich trzech określa maksymalny rozmiar przesyłanych plików.. Aby przesyłać większe pliki, dostosuj te wartości w pliku <em>php.ini</em>.",
];
