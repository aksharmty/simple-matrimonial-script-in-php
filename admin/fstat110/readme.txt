#####################################################################
#                          Free Statistics                          #
#                           Version 1.1.0                           #
#                       ©2003 Free-Webhosts.com                     #
#####################################################################

#####################################################################
#                                                                   #
#  Author      :  Free-Webhosts.com                                 #
#  Date        :  July 31, 2003                                     #
#  Website     :  http://www.free-webhosts.com/                     #
#  Contact     :  http://www.free-webhosts.com/contact.php          #
#  License     :  FREE (GPL);  See Copyright and Terms below, or    #
#                 http://www.free-webhosts.com/free-statistics.php  #
#                                                                   #
#####################################################################

>> Summary:
  Free PHP script to record and view daily website page views (hits) for statistical tracking.


>> Features:
  Chart of daily page views totals displayed with bar graph, total for last x days, most hits in a day for last x days, average hits per day for last x days, projected hits for today, and more.  Easy to install.


>> Requirements: PHP and MySQL.


>> Files:
bar.gif           Image for stats graphs.
bar2.gif          Image for stats graphs - projected hits extra.
config.php        MySQL connect info, and optional script settings.
fstats.php        Script to execute on each page to record the page views.
fstats-view.php   Script to view the recorded stats and graph.
readme.txt        (This file) Installation, copyright, and other notes.


>> Installation:
  (1) Edit the default values in config.php for MySQL; changing other variables is optional.
      Do not edit other files.
  (2) Copy the files to the same directory on your server.
  (3) Install MySQL table.  Execute the following in PhpMyAdmin or other MySQL interface:

CREATE TABLE stats_day (
   date date DEFAULT '0000-00-00' NOT NULL,
   hits mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (date)
);


>> How to use:

  For php files, you can add this code to each page to record page views to it (be sure to add the path if needed):
  <?php include "fstats.php" ?>

  If the page is in a different folder than the stats script, you can add the path such as:
  <?php include "../stats/fstats.php" ?>

  You can record stats for non-php pages (and php pages also) by adding this code in the body of the html (remember to add the correct path to the script; you can use a full url here; Note, this only records hits for browsers with images-loading enabled):
  <img width=1 height=1 border=0 alt="" src="../stats/fstats.php">


>> Known Bugs:
  Averages including the first day will be more accurate if you install at the beginning of the day (server time), or delete the first day's stats later.
To report other bugs, send message via:
http://www.free-webhosts.com/contact.php

>> Change log

Version 1.1.0  -  July 31, 2003
Added a form to show stats for last x number of days.
Prints stats for the day with least hits.
Prints server time, and length of time that hits have been recorded.
Numbers are formatted with commas.  Many other format changes.
Projected hits extra shown on graph with additional bar image.
Now includes days with 0 hits in stats.
"Average hits per day for last x days" is figured using projected hits for today.

Version 1.0.0  --  June 24, 2003
Initial release.


>> Copyright and Terms:

This software is copyright (C) 2003 Free-Webhosts.com.  It is distributed
under the terms of the GNU General Public License (GPL).  Because it is licensed
free of charge, there is NO WARRANTY, it is provided AS IS.  The author can not
be held liable for any damage that might arise from the use of this software.
Use it at your own risk.

All copyright notices and links to Free-Webhosts.com website MUST remain intact in the scripts and in the HTML for the scripts.

For more license details, see http://www.Free-Webhosts.com/license_gnu_gpl.php (or http://www.gnu.org/).

A link back to Free-Webhosts.com is appreciated, but not required.
For link details and images, see:
http://www.Free-Webhosts.com/link.php

