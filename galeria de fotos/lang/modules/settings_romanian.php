<?php
// Romanian language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus
// Translated by Ciprian Murariu <ciprianmp[at]yahoo[dot]com>
// 3.0.7 add $w_listenForApache - $w_AddListenPort - $w_deleteListenPort - $w_settings['SupportMariaDB']
// $w_settings['DaredevilOptions']
// $w_Size - $w_EnterSize - $w_Time - $w_EnterTime - $w_Integer - $w_EnterInteger - $w_add_VirtualHost
// 3.0.8 $w_settings['SupportMySQL'] - $w_portUsedMaria - $w_testPortMariaUsed
// 3.0.9 $w_ext_zend
// 3.1.1 $w_defaultDBMS - $w_invertDefault - $w_changeCLI - $w_misc
// $w_settings['ShowphmyadMenu'] - $w_settings['ShowadminerMenu']
// 3.1.2 $w_reinstallServices - $w_settings['mariadbUseConsolePrompt'] - $w_settings['mysqlUseConsolePrompt']
// $w_enterServiceNameAll - $w_settings['NotVerifyPATH'] - $w_MysqlMariaUser
// 3.1.4 $w_settings 'NotVerifyTLD' 'Cleaning' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport

// Projects sub-menu
$w_projectsSubMenu = 'Proiecte personale';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'VirtualHosts';
$w_add_VirtualHost = 'Administrare VirtualHost';
$w_aliasSubMenu = 'Aliasuri';
$w_portUsed = 'Portul curent Apache: ';
$w_portUsedMysql = 'Portul curent MySQL: ';
$w_portUsedMaria = 'Portul curent MariaDB : ';
$w_testPortUsed = 'Testeaz� portul curent: ';
$w_portForApache = 'Portul Apache';
$w_listenForApache = 'Portul de Intrare pentru ad�ugare la Apache';
$w_portForMysql = 'Portul MySQL';
$w_testPortMysql = 'Testeaz� portul 3306';
$w_testPortMysqlUsed = 'Testeaz� portul MySQL: ';
$w_testPortMariaUsed = 'Testeaz� portul MariaDB: ';
$w_enterPort = 'Introdu num�rul noului port';

// Right-click Settings
$w_wampSettings = 'Set�ri Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Adaug� localhost la �nceputul url-ului',
	'VirtualHostSubMenu' => 'Arat� Sub-meniul VirtualHosts',
	'AliasSubmenu' => 'Arat� Sub-meniul Alias',
	'ProjectSubMenu' => 'Arat� Sub-meniul Proiecte personale',
	'HomepageAtStartup' => 'Deschide pagina Index la pornire',
	'MenuItemOnline' => 'Arat� �n Meniu: Online / Offline',
	'ItemServicesNames' => 'Arat� �n Instrumente: Schimb� numele serviciilor',
	'NotCheckVirtualHost' => 'Nu verifica defini�iile VirtualHost',
	'NotCheckDuplicate' => 'Nu verifica dublarea Numelui Serverului',
	'VhostAllLocalIp' => 'Permite utilizarea IP-urilor locale, altele dec�t 127.*',
	'SupportMySQL' => 'Permite utilizarea MySQL',
	'SupportMariaDB' => 'Permite utilizarea MariaDB',
	'DaredevilOptions' => 'Aten�ie: Riscant! Numai pentru exper�i.',
	'ShowphmyadMenu' => 'Arat� phpMyAdmin �n Meniu',
	'ShowadminerMenu' => 'Arat� Adminer �n Meniu',
	'mariadbUseConsolePrompt' => 'Modific� prompterul implicit al consolei MariaDB',
	'mysqlUseConsolePrompt' => 'Modific� prompterul implicit al consolei MySQL',
	'NotVerifyPATH' => 'Nu testa CALEA',
	'NotVerifyTLD' => 'Nu testa TLD',
	'Cleaning' => 'Cur��are Automat�',
	'AutoCleanLogs' => 'Cur��� automat fi�ierele jurnal',
	'AutoCleanLogsMax' => 'Num�r de linii �nainte de cur��are',
	'AutoCleanLogsMin' => 'Num�r de linii dup� de cur��are',
	'AutoCleanTmp' => 'Cur��� automat directorul tmp',
	'AutoCleanTmpMax' => 'Num�r de fi�iere �nainte de cur��are',
	'ForTestOnly' => 'Numai �n scopul test�rii',
	'iniCommented' => 'Directive php.ini comentate (; la �nceputul liniei)',
);

// Right-click Tools
$w_wampTools = 'Instrumente';
$w_restartDNS = 'Reporne�te DNS';
$w_testConf = 'Verific� sintaxa httpd.conf';
$w_testServices = 'Verific� starea serviciilor';
$w_changeServices = 'Schimb� numele serviciilor';
$w_enterServiceNameApache = "Introdu un num�r de ordine pentru serviciul Apache. Acest num�r va fi ad�ugat la sf�r�itul cuv�ntului 'wampapache'";
$w_enterServiceNameMysql = "Introdu un num�r de ordine pentru serviciul Mysql. Acest num�r va fi ad�ugat la sf�r�itul cuv�ntului 'wampmysqld'";
$w_enterServiceNameAll = "Introdu un num�r pentru sufix-ul numelor serviciilor (necompletat pentru serviciile originale)";
$w_compilerVersions = 'Verific� compilatorul VC, compatibilitatea �i fi�ierele ini';
$w_UseAlternatePort = 'Folose�te alt port dec�t %s';
$w_AddListenPort = 'Adaug� un port de Intrare pentru Apache';
$w_vhostConfig = 'Arat� VirtualHost verificat de Apache';
$w_apacheLoadedModules = 'Arat� Modulele �nc�rcate de Apache';
$w_empty = 'Gole�te';
$w_misc = 'Diverse';
$w_emptyAll = 'Gole�te TOATE';
$w_dnsorder = 'Verific� ordinea de c�utare a DNS';
$w_deleteVer = '�terge versiunile neutilizate';
$w_deleteListenPort = '�terge un port de Intrare Apache';
$w_delete = '�terge';
$w_defaultDBMS = 'DBMS implicit:';
$w_invertDefault = 'Inverseaz� DBMS implicit ';
$w_changeCLI = 'Schimb� versiunea PHP CLI';
$w_reinstallServices = 'Reinstaleaz� toate serviciile';
$w_wampReport = 'Raportul de Configurare Wampserver';
$w_dowampReport = 'Genereaz� '.$w_wampReport;

//miscellaneous
$w_ext_spec = 'Extensii speciale';
$w_ext_zend = 'Extensii Zend';
$w_phpparam_info = 'Informa�ii suplimentare';
$w_ext_nodll = 'Fi�ier dll inexistent';
$w_ext_noline = "Nu exist� 'extensie='";
$w_mod_fixed = "Module ireversibile";
$w_no_module = 'Fi�ier modul inexistent';
$w_no_moduleload = "Nu exist� 'LoadModule'";
$w_mysql_none = "niciunul";
$w_mysql_user = "modul utilizator";
$w_mysql_default = "implicit";
$w_Size = "M�rimea";
$w_EnterSize = "Introdu M�rimea: xxxx urmat de M pentru Mega sau G pentru Giga";
$w_Time = "Timul";
$w_EnterTime = "Introdu timpul �n secunde";
$w_Integer = "Num�r �ntreg";
$w_EnterInteger = "Introdu un num�r �ntreg";
$w_MysqlMariaUser = "Introdu un nume de utilizator valabil. Dac� nu-l cuno?ti, p�streaz� 'root' implicit.";

?>