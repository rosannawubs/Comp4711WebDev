<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<h1>Steelers Roster</h1>


<div class="btn-group btn-group-justified">
	<a href="/roster/layout/0" class="btn btn-lg btn-warning" role="button">Table Display</a>
	<a href="/roster/layout/1" class="btn btn-lg btn-info">Gallery Display</a>
</div>

<br>
<br>

<div class="btn-group">
	<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		Sort <span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		<li><a href="/roster/orderBy/playerno">Player Number</a></li>
		<li><a href="/roster/orderBy/name">Name</a></li>
		<li><a href="/roster/orderBy/position">Position</a></li>
	</ul>
</div>
{newPlayerButton}

{theview}
{pagination}
