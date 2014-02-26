<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Soccer</title>
		<link rel=stylesheet type=text/css href=style.css>
	</head>
	<body>
		<div class=banner>
			<h1 align=center>Fitchburg State University</h1>
		</div>
		<div class=menu>
			<ul id=menutext>
			<li>|</li>
			<li><a href=index.php><b>Home</b></a></li>
			<li>|</li>
			<li><a href=roster.php><b>Roster</b></a></li>
			<li>|</li> 
			<li><a href=schedule.php><b>Schedule</b></a></li>
			<li>|</li>
			<li><a href=stats.php><b>Statistics</b></a></li>
			<li>|</li>
			</ul>
		</div>
		<div class=roster>
			<p align=center><b>Fitchburg State Men's Soccer Roster</b></p>
			
			<!--Builds the roster table-->
			<?php
			require_once 'login.php';
			$db_server = mysql_connect($db_hostname, $db_username, $db_password);
			if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
			
			echo "<center><table>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Pos.</th>
					<th>Class</th>
				</tr>";	
			
			while ($row=mysqli_fetch_array($result)) {
				
				//echo "<tr>
				//		<td>" $row['number'] "</td>";
			}
			?>
			<tr>
				<td>1</td>
				<td>Rondinelle DePaula  </td>
				<td>GK</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>6</td>
				<td>Blaine Bolduc       </td>
				<td>D</td>
				<td>So</td>
			</tr>	
			<tr>
				<td>7</td>
				<td>Tom Sorrentino      </td>
				<td>M</td>
				<td>So</td>
			</tr>	
			<tr>
				<td>8</td>
				<td>Emiliano Cespedes   </td>
				<td>M</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>9</td>
				<td>Colin Shea          </td>
				<td>D</td>
				<td>Sr</td>
			</tr>	
			<tr>
				<td>10</td>
				<td>Brett Smith         </td>
				<td>D</td>
				<td>Jr</td>
			</tr>	
			<tr>
				<td>11</td>
				<td>James David         </td>
				<td>M</td>
				<td>Jr</td>
			</tr>	
			<tr>
				<td>12</td>
				<td>Mauro Gimenez       </td>
				<td>F</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>13</td>
				<td>Zachary Tracy       </td>
				<td>D</td>
				<td>So</td>
			</tr>	
			<tr>
				<td>14</td>
				<td>Steven Martinez     </td>
				<td>M</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>15</td>
				<td>Samuel Nickerson    </td>
				<td>D</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>16</td>
				<td>Jared Burns         </td>
				<td>F</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>17</td>
				<td>Ibrahim Kallon      </td>
				<td>M</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>18</td>
				<td>Francisco Lemus</td>
				<td>D</td>
				<td>So</td>
			</tr>	
			<tr>
				<td>19</td>
				<td>Nicholas Masley     </td>
				<td>F</td>
				<td>Fr</td>
			</tr>	
			<tr>
				<td>20</td>
				<td>Connor Kneeland     </td>
				<td>F</td>
				<td>Fr</td>
			</tr>
			<tr>
				<td>21</td>
				<td>Joshua Hofer        </td>
				<td>M</td>
				<td>So</td>
			</tr>
			<tr>
				<td>22</td>
				<td>Calvin La Rose      </td>
				<td>D</td>
				<td>Jr</td>
			</tr>
			<tr>
				<td>23</td>
				<td>Stephen Luna        </td>
				<td>M</td>
				<td>So</td>
			</tr>
			<tr>
				<td>24</td>
				<td>Kenneth Kelly       </td>
				<td>D</td>
				<td>Sr</td>
			</tr>
			<tr>
				<td>25</td>
				<td>Carmen Bordonaro    </td>
				<td>F</td>
				<td>Sr</td>
			</tr>
			<tr>
				<td>26</td>
				<td>Joseph Merchant     </td>
				<td>D</td>
				<td>So</td>
			</tr>
			<tr>
				<td>27</td>
				<td>Dylan Bettencourt   </td>
				<td>M</td>
				<td>Fr</td>
			</tr>
			<tr>
				<td>28</td>
				<td>Aidan Hanratty      </td>
				<td>GK</td>
				<td>Jr</td>
			</tr>
			<tr>
				<td>29</td>
				<td>Colin Jepsen        </td>
				<td>GK</td>
				<td>Fr</td>
			</tr>
			</table></center>	
		</div>
	</body>
</html>
