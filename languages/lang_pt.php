<?php
// Brazilian Portuguese translation by Nicole Sigaud
$lang = [
    "direction" => "LTR",
    "date_format" => 'd.m.Y, H:i:s (O T)',
    // (formato brasileiro dd.mm.aaaa, hh:mm:ss) see http://php.net/manual/en/function.date.php for what the letters stand for
    "ver" => "versão",
    "for" => "para",
    "to" => "a",
    "go" => "Ir",
    "yes" => "Sim",
    "sql" => "SQL",
    "csv" => "CSV",
    "csv_tbl" => "Tabela à qual o CSV pertence",
    "srch" => "Buscar",
    "srch_again" => "Fazer outra busca",
    "login" => "Entrar",
    "logout" => "Sair",
    "view" => "Ver",
    "confirm" => "Confirmar",
    "cancel" => "Cancelar",
    "save_as" => "Salvar Como",
    "options" => "Opções",
    "no_opt" => "Sem opções",
    "help" => "Ajuda",
    "installed" => "instalado",
    "not_installed" => "não instalado",
    "done" => "feito",
    "insert" => "Inserir",
    "export" => "Exportar",
    "import" => "Importar",
    "rename" => "Renomear",
    "empty" => "Vazio",
    "drop" => "Eliminar",
    "tbl" => "Tabela",
    "chart" => "Gráfico",
    "err" => "ERRO",
    "act" => "Ação",
    "rec" => "Registros",
    "col" => "Coluna",
    "cols" => "Colunas",
    "rows" => "linha(s)",
    "edit" => "Editar",
    "del" => "Deletar",
    "add" => "Adicionar",
    "backup" => "Fazer Backup do banco de dados",
    "before" => "Antes",
    "after" => "Depois",
    "passwd" => "Senha",
    "passwd_incorrect" => "Senha errada.",
    "chk_ext" => "Verificando extensões SQLite PHP suportadas",
    "autoincrement" => "Autoincremento",
    "not_null" => "Não Nulo (NULL)",
    "attention" => "Atenção",
    "sqlite_ext" => "ExtensãoSQLite",
    "sqlite_ext_support" => "Aparentemente nenhuma das extensões da biblioteca SQLite estão disponíveis na sua instalação de PHP. Você não poderá usar o %s até instalar ao menos uma delas.",
    "sqlite_v" => "Versão SQLite",
    "sqlite_v_error" => "Aparentemente seu banco de dados está numa versão %s de SQLite, mas a sua instalação de PHP não contém as extensões necessárias para lidar com essa versão. Para corrigir esse problema, ou delete o banco de dados ou permita que %s o crie automaticamente, ou recrie-o manualmente como versão %s do SQLite.",
    "report_issue" => "O problema não pode ser diagnosticado apropriadamente. Por favor registre esse problema em ",
    "sqlite_limit" => "Devido às limitações do SQLite, somente o nome do campo e tipo de dados podem ser modificados.",
    "php_v" => "Versão PHP",
    "db_dump" => "despejo (dump) de banco de dados",
    "db_f" => "arquivo de banco de dados",
    "db_ch" => "Mudar banco de Dados",
    "db_event" => "Evento de Banco de Dados",
    "db_name" => "Nome do Banco de Dados",
    "db_rename" => "Renomear Banco de Dados",
    "db_renamed" => "O Banco de Dados '%s' foi renomeado para",
    "db_del" => "Eliminar Banco de Dados",
    "db_path" => "Caminho para banco de dados",
    "db_size" => "Tamanho do banco de dados",
    "db_mod" => "Última modificação do banco de dados",
    "db_create" => "Criar novo Banco de Dados",
    "db_vac" => "O Banco de Dados '%s', foi limpo (VACUUM).",
    "db_not_writeable" => "O Banco de Dados, '%s', não existe e não pode ser criado porque o diretório '%s' não ter permissão de escrita. O aplicativo está inutilizado para uso até que isso seja sanado.",
    "db_setup" => "Houve um problema ao configurar seu banco de dados, o %s. Uma tentativa será feita para encontrar a razão disso e tentar consertá-lo mais facilmente",
    "db_exists" => "Um banco de dados, outro arquivo ou diretório com o nome %s já existe",
    "exported" => "Exportado",
    "struct" => "Estrutura",
    "struct_for" => "estrutura para",
    "on_tbl" => "na tabela",
    "data_dump" => "Despejo de dados para",
    "backup_hint" => "Dica: Para cópia de segurança de seu banco de dados a maneira mais fácil é %s.",
    "backup_hint_linktext" => "baixar o arquivo de banco de dados",
    "total_rows" => "um total de %s linhas",
    "total" => "Total",
    "not_dir" => "O diretório que você especificou para procurar por bancos de dados não existe ou não é um diretório.",
    "bad_php_directive" => "Parece que a diretiva 'register_globals' está ativa. Isso é mau. Você precisa desabilitá-la antes de continuar.",
    "page_gen" => "Página gerada em %s segundos.",
    "powered" => "Produzido com",
    "remember" => "Lembre-se de mim",
    "no_db" => "Bem-vindo(a) ao %s. Parece que você selecionou procurar por bancos de dados em um diretório, para gerenciamento. Acontece que %s não encontrou um banco de dados SQLite válido sequer. Você pode usar o formulário abaixo para criar seu primeiro banco de dados.",
    "no_db2" => "O diretório que você especificou não contém um banco de dados para gerenciar, além do diretório não poder ser gravado. Isso significa que você não pode criar qualquer banco de dados usando %s. Ou faça com que o diretório seja gravável ou envie manualmente os bancos de dados para o diretório.",
    "create" => "Criar",
    "created" => "foi criado(a)",
    "create_tbl" => "Criar nova tabela",
    "create_tbl_db" => "Criar nova tabela no banco de dados",
    "create_trigger" => "Criando novo gatilho (trigger) na tabela",
    "create_index" => "Criando novo índice na tabela",
    "create_index1" => "Criar índice",
    "create_view" => "Criar nova vista (view) no banco de dados",
    "trigger" => "Gatilho (Trigger)",
    "triggers" => "Gatilhos (Triggers)",
    "trigger_name" => "Nome do gatilho",
    "trigger_act" => "Ação do gatilho",
    "trigger_step" => "Passos do gatilho (terminar com ponto-e-vírgula)",
    "when_exp" => "Expressão WHEN (escreva a expressãoo sem 'WHEN')",
    "index" => "Índice",
    "indexes" => "Índices",
    "index_name" => "Nome do índice",
    "name" => "Nome",
    "unique" => "Único",
    "seq_no" => "Seq. Nº.",
    "emptied" => "foi esvaziado(a)",
    "dropped" => "foi eliminado(a)",
    "renamed" => "foi renomeado(a) para",
    "altered" => "foi alterado(a) com sucesso",
    "inserted" => "inserido",
    "deleted" => "apagado",
    "affected" => "afetado",
    "blank_index" => "O nome do índice não pode ficar em branco.",
    "one_index" => "Você deve especificar ao menos uma coluna índice.",
    "docu" => "Documentação",
    "license" => "Licença",
    "proj_site" => "Sítio do Projeto",
    "bug_report" => "Isso pode ser um bug que precisa ser reportado",
    "return" => "Retornar",
    "browse" => "Procurar",
    "fld" => "Campo",
    "fld_num" => "Número de Campos",
    "fields" => "Campos",
    "type" => "Tipo",
    "operator" => "Operador",
    "val" => "Valor",
    "update" => "Utualizar",
    "comments" => "Comentários",
    "specify_fields" => "Você deve especificar o número de campos de tabela.",
    "specify_tbl" => "Você deve especificar um nome para a tabela.",
    "specify_col" => "Você deve especificar uma coluna.",
    "tbl_exists" => "Uma tabela com esse nome já existe.",
    "show" => "Mostrar",
    "show_rows" => "Mostrando %s linha(s). ",
    "showing" => "Mostrando",
    "showing_rows" => "Mostrando linhas",
    "query_time" => "(A pesquisa levou %s segundos)",
    "syntax_err" => "Existe um problema com a sintaxe da sua pesquisa (a Pesquisa não foi efetuada)",
    "run_sql" => "Rode pesquisa(s) SQL no banco de dados '%s'",
    "ques_table_empty" => "Tem certeza de que quer esvaziar a tabela '%s'?",
    "ques_table_drop" => "Tem certeza de que quer eliminar a tabela '%s'?",
    "ques_drop_view" => "Tem certeza de que quer eliminar a vista (View) '%s'?",
    "ques_row_delete" => "Tem certeza de que quer eliminar a(s) linha(s) %s da tabela '%s'?",
    "ques_database_delete" => "Tem certeza de que quer eliminar o banco de dados '%s'?",
    "ques_column_delete" => "Tem certeza de que quer eliminar a(s) coluna(s) %s da tabela '%s'?",
    "ques_index_delete" => "Tem certeza de que quer eliminar o índice '%s'?",
    "ques_trigger_delete" => "Tem certeza de que quer eliminar o gatilho (trigger) '%s'?",
    #todo: translate
    "ques_primarykey_add" => "Are you sure you want to add a primary key for the column(s) %s in table '%s'?",
    "export_struct" => "Exportar com estrutura",
    "export_data" => "Exportar com dados",
    "add_drop" => "Adicionar DROP TABLE",
    "add_transact" => "Adicionar TRANSACTION",
    "fld_terminated" => "Campos terminados em",
    "fld_enclosed" => "Campos englobados por",
    "fld_escaped" => "Campos com escape de",
    "fld_names" => "Nomes de campos na primeira linha",
    "rep_null" => "Substituir NULL por",
    "rem_crlf" => "Remover caracteres CRLF de dentro dos campos",
    "put_fld" => "Colocar nomes dos campos na primeira linha",
    "null_represent" => "NULL representado por",
    "import_suc" => "Importado com sucesso.",
    "import_into" => "Importar em",
    "import_f" => "Arquivo para importar",
    "rename_tbl" => "Renomear tabela '%s' para",
    "rows_records" => "linha(s) começando pelo registro # ",
    "rows_aff" => "linha(s) afetadas. ",
    "as_a" => "como",
    "readonly_tbl" => "'%s' é uma vista (View), o que siginifica que é uma instrução SELECT tratado como tabela somente de leitura. Você não pode editar ou inserir dados.",
    "chk_all" => "Marcar todos",
    "unchk_all" => "Desmarcar todos",
    "with_sel" => "Com o selecionado",
    "no_tbl" => "Sem tabela no banco de dados.",
    "no_chart" => "Se você está lendo isso, significa que o diagrama não pode ser gerado. Os dados que você está tentando ver não são apropriados a um diagrama.",
    "no_rows" => "Não há linhas na tabela para o conjunto que você selecionou.",
    "no_sel" => "Você não selecionou coisa alguma.",
    "chart_type" => "Tipo de diagrama",
    "chart_bar" => "Diagrama em barras",
    "chart_pie" => "Diagrama em pizza",
    "chart_line" => "Diagrama linear",
    "lbl" => "Legendas",
    "empty_tbl" => "Esta tabela está vazia.",
    "click" => "Clique Aqui",
    "insert_rows" => "para inserir linhas.",
    "restart_insert" => "Recomece a inserção aqui",
    "ignore" => "Ignorar",
    "func" => "Função",
    "new_insert" => "Inserir Como Nova Linha",
    "save_ch" => "Salvar Alterações",
    "def_val" => "Valor padrão (default)",
    "prim_key" => "Chave Primária",
    "tbl_end" => "campo(s) no fim da tabela",
    "query_used_table" => "Pesquisa usada para criar esta tabela",
    "query_used_view" => "Pesquisa usada para criar essa vista (View)",
    "create_index2" => "Criar um índice em",
    "create_trigger2" => "Criar um novo gatilho (trigger)",
    "new_fld" => "Adicionando novo(s) campo(s) à tabela '%s'",
    "add_flds" => "Adicionar Campos",
    "edit_col" => "Editando coluna '%s'",
    "vac" => "Vacuum",
    "vac_desc" => "Bancos de dados grandes precisam, de vez em quando, ser limpos (VACUUM) para reduzir os registros de uso (footprint) do servidor. Clique no botão abaixo para 'passar o aspirador' no banco de dados '%s'.",
    "event" => "Evento",
    "each_row" => "Para Cada Linha",
    "define_index" => "Definir propriedades do índice",
    "dup_val" => "Duplicar valores",
    "allow" => "Permitido",
    "not_allow" => "Não Permitido",
    "asc" => "Ascendente",
    "desc" => "Descendente",
    "warn0" => "Você foi avisado.",
    "warn_passwd" => "Você está usando a senha-padrão, o que pode ser perigoso. Você pode mudar isso facilmente no topo de %s.",
    "sel_state" => "Selecionar Comando",
    "delimit" => "Delimitador",
    "back_top" => "Voltar para cima",
    "choose_f" => "Escolher Arquivo",
    "instead" => "Ao invés de",
    "define_in_col" => "Definir colunas-índice(s)",
    "delete_only_managed" => "Você só pode apagar banco de dados gerenciados com essa ferramenta!",
    "rename_only_managed" => "Você só pode renomear bancos de dados gerenciados com essa ferramenta!",
    "db_moved_outside" => "Ou você tentou mover o banco de dados para um diretório que não pode mais ser gerenciado, ou verifique se isso falhou por causa de privilégios perdidos.",
    "extension_not_allowed" => "A extensão que você deu não está na lista de extensões permitidas. Por favor use uma das seguintes extensões",
    "add_allowed_extension" => "Você pode adicionar extensões a essa lista colocando sua extensão em \$allowed_extensions na configuração.",
    "directory_not_writable" => "O banco de dados em si é editável, mas para escrever nele o diretório precisa ser gravável também. Isso acontece porque o SQLite coloca arquivos temporários lá para fechamento.",
    "tbl_inexistent" => "A Tabela %s não existe",
    // errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
    "alter_failed" => "A alteração da tabela %s falhou",
    "alter_tbl_name_not_replacable" => "não pode renomear a tabela com o nome temporário",
    "alter_no_def" => "sem definição do comando ALTER",
    "alter_parse_failed" =>"falhou em ler a definição de ALTER",
    "alter_action_not_recognized" => "a ação ALTER não pode ser reconhecida",
    "alter_no_add_col" => "nenhuma coluna a ser adicionada foi detectada pelo comando ALTER",
    "alter_pattern_mismatch"=>"O padrão não combinou com o seu comando original CREATE TABLE",
    "alter_col_not_recognized" => "não conseguiu reconhecer nome de coluna, novo ou antigo",
    "alter_unknown_operation" => "Operação ALTER desconhecida!",
    /* Help documentation */
    "help_doc" => "Documento de Ajuda",
    "help1" => "Extensões da Biblioteca SQLite",
    "help1_x" => "%s usa extensões da biblioteca PHP que permitem a interação com bancos de dados SQLite. Por enquanto, %s suporta PDO, SQLite3 e SQLiteDatabase. Ambos PDO e SQLite3 lidam com a versão 3 do SQLite, enquanto o SQLiteDatabase lida com a versão 2. Portanto, se a sua instalação de PHP inclui mais do que uma biblioteca de extensão SQLite, o PDO e SQLite3 vão ter a precedência para fazer uso de tecnologi amais moderna. No entanto, se você tem bancos de dados que são de versão 2 do SQLite, o %s vai ser forçado a usar o SQLiteDatabase para esses bancos de dados somente. Nem todos os bancos de dados precisam ser de mesma versão. Durante a criação do banco de dados, entretanto, a extensão mais moderna será usada.",
    "help2" => "Criando Novo Banco de Dados",
    "help2_x" => "Quando você cria um novo banco de dados o nome que você escrever vai ser acrescentado de uma extensão(.db, .db3, .sqlite etc.) se você não a colocar por si mesmo(a).O banco de dados será criado no diretório que você especificou com a variável \$directory.",
    "help3" => "Tabelas vs. Vistas (Views)",
    "help3_x" => "Na página central do banco de dados existe uma lista de tabelas e vistas. Já que as vistas (Views) são somente leitura, certas operações estão desabilitadas. Essas operações desabilitadas se tornarão aparentes pela omissão no local onde deveriam aparecer na linha para vista. Se você quiser mudar esse dado para uma vista, você tem que eliminar essa vista (DROP) e criar uma nova com o comando SELECT apropriado que pesquise outras tabelas. Para mais informações, veja <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
    "help4" => "Escrevendo um Comando SELECT para Nova Vista",
    "help4_x" => "Quando criar uma nova vista você deve escrever um comando SQL SELECT que vai usá-la como seu dado. Uma vista é meramente uma tabela 'read-only' que pode ser acessada e pesquisada como uma tabela comum, exceto que não pdoe ser modificada por inserção, edição de coluna ou de linha. É somente usada para pegar dados de maneira conveniente.",
    "help5" => "Exportar Estrutura Para Arquivo SQL",
    "help5_x" => "Durante o processo de exportação par aum arquivo SQL, você pode escolher incluir as pesquisas que criaram a tabela e colunas.",
    "help6" => "Exportar Dados para arquivo SQL",
    "help6_x" => "Durante o procesos de exportação para um arquivo SQL, você pode optar por incluir as pesquisas (Queries) que preenchem a(s) tabela(s) com os dados atuais da(s) tabela(s)).",
    "help7" => "Adicionar Drop Table a um Arquivo SQL Exportado",
    "help7_x" => "Durante o processo de exportação para um arquivo SQL, você pode optar por incluir as pesquisas (Queries) para eliminar (DROP) as tabelas existentes antes de adicioná-las para que não surjam problemas quando for tentar criar tabelas que já existam.",
    "help8" => "Adicionar a Transação para Arquivo SQL Exportado",
    "help8_x" => "Durante o processo de exportação para um arquivo SQL, você pode optar por envolver as pesquisas (Queries) em uma TRANSACTION fazendo com que, se um erro surgir em qualquer tempo durante a importação usando o arquivo exportado, o banco de dados possa ser revertido para o seu estado original, impedindo parcialmente que a atualização de dados ocorra e preencha o banco de dados.",
    "help9" => "Adicionar comentários para o arquivo SQL exportado",
    "help9_x" => "Durante o processo de exportação para um arquivo SQL você pode optar por incluir comentários que expliquem cada passo do processo, fazendo com que uma pessoa possa entender melhor o que está acontecendo.",
];
