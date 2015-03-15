<?php

 //session_start();
 require_once("includes/global.php");

 /****************************************************************
 *               FILE : 
 * 
 * DESCRIPTION : 
 *                         
 *          INPUTS : 
 *                         
 * DOCUMENTATION: http://us3.php.net/manual/en/function.xslt-process.php
 *                         
 * DATE           MADE BY     CHANGE
 * -------------  -------------  --------------------------------------------------------
 * 00-00-0000  L. FIRST      Description
 ***************************************************************/

$metaTitle = "BNASC";
require("includes/header.php");
?>

<style>
.mainMenu {
  font-size:14px;
}
</style>

<br/>
<br/>

<h1>
  Welcome to
</h1>
<h1>
  BNASC TOURNAMENT REGISTRATION
</h1>
 
<h2>
  Using this application you will be able to:
</h2>

<table>

<tr>
  <td class="mainMenu">
    (1) <a href="team.php?action=a" class="mainMenu">Create a Team</a>
  </td>
</tr>

<tr>
  <td class="mainMenu">
    (2) <a href="teamList.php" class="mainMenu">Add Members to your Team</a>
  </td>
</tr>

<tr>
  <td class="mainMenu">
    (3) <a href="eventList.php" class="mainMenu">Add or Edit an Event</a>
  </td>
</tr>

<tr>
  <td class="mainMenu">
    (4) <a href="eventRegistrationStep1.php" class="mainMenu">Register members of your team for an Event</a>
  </td>
</tr>

</table>

</center>

</body>