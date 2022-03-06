# Crowd-Sourced Food Bank

Webapp is configured to use HTTPS only, will redirect to HTTPS automatically : https://csfb-app.azurewebsites.net/   
This is to prevent browser warnings and also apparently I am observing improved loading times on HTTPS.

Built using PHP, HTML, CSS & MySQL.
Hosted on Microsoft Azure.

You may use the following credentials to login quickly (you still can create new accounts):  
DONOR A/C-  
Username: test1  
Password: test1  

SEEKER A/C-  
Username: usr1  
Password: usr1

N.B.: Azure Metric Alerts are configured to me alert me via SMS & email whenever HTTP requests >=1 every 1 min window, i.e. I get website visitor alerts everytime someone loads my site. The stateful alerts also get resolved automatically when condition is no longer met.  
These stateful alerts ensure that I can be informed when to revisit my DB to detect malicious activity, for eg. if someone tries any tampering (DDOS or exceeding my storage quota).  
Already, Data Sanitization is performed to prevent SQL Injection Attacks.  
This also helps me guess when evaluators have visited my site, how thoroughly my project was evaluated (no of HTTP requests), and how long till my project gets accepted :)
