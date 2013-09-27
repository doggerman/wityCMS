<?php defined('IN_WITY') or die('Access denied'); ?>
<?xml version="1.0" encoding="utf-8" ?>
<app>
	<!-- Application name -->
	<name>Media</name>
	
	<version>0.4</version>
	
	<!-- Last update date -->
	<date>14-09-2013</date>
	
	<!-- Tiny icone to be displayed in the admin board -->
	<icone></icone>
	
	<!-- Permissions -->
	<permission name="manager" />
	
	<!-- Front pages -->
	<action default="default">listing</action>
	<action>upload</action>
	<action>upload_button</action>
	<action>metaedit</action>
	<action>relatives</action>
	<action>link</action>
	<action>get</action>

	<!-- Admin pages -->
	<admin>
		<action desc="files_manager" requires="manager" default="default">manager</action>
		<action desc="files_cleaning" requires="manager">cleaning</action>
	</admin>
</app>